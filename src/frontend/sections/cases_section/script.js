$(document).ready(function () {

    const $projectModal = $('#projectModal');

    const swiperBaseConfigs = {
        slidesPerView: "auto",
        spaceBetween: 10,
        // loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
    };

    var exteriorSwiper
    var interiorSwiper

    var openedProject = null;

    var lightbox

    $('#contactModal').on("hidden.bs.modal", function () {
        if (openedProject !== null) {
            openedProject.click()
            openedProject = null
        }
    });
    
    $(".cases_call_modal_button").click(function() {

        openedProject = $(this)


        const projectId =  $(this).attr('project-id')

        // set content for the modal 
        
        $.ajax({
            type: 'GET',
            url: `/backend/api/get_appart_data.php?id=${projectId}`,
            success: function (response) {                
                
                setModalContent(JSON.parse(response))

                initSwipers()
                
                openModal()
                
            }
        })
        // exteriorSwiper.update()
        // interiorSwiper.update()
    })

    $projectModal.on("hidden.bs.modal", function () {
        clearModalContent()
    });



    function initSwipers() {
        if (exteriorSwiper) exteriorSwiper.destroy(true, true);
        if (interiorSwiper) interiorSwiper.destroy(true, true);
        if (lightbox) lightbox.destroy();

        exteriorSwiper = new Swiper('.project_exterior_swiper', swiperBaseConfigs);
        interiorSwiper = new Swiper('.project_interior_swiper', swiperBaseConfigs);
        lightbox = GLightbox({
            selector: '.glightbox',
            touchNavigation: true,
            loop: true,
        });
    }


    function setModalContent(content) {

        setContent('#projectName', content.title);
        setContent('#projectDescription', content.description);

        multiplyItemsAndFill('#projectDescriptionItem', content.briefs.length, function ($item, index) {
            const $h3 = $item.find('h3')
            const $value = $item.find('p')

            setContent($h3, content.briefs[index].title)
            setContent($value, content.briefs[index].value)
        })

        multiplyItemsAndFill('#projectExteriorItem', content.exterior.length, function ($item, index) {
            const $img = $item.find('img')
            const $a = $item.find('a')

            setHref($a, content.exterior[index].imageLink)
            setImage($img, content.exterior[index].imageLink)
        }, function ($baseElement) {
            $baseElement.find('a').removeClass('glightbox')
        })

        multiplyItemsAndFill('#projectInteriorItem', content.interior.length, function ($item, index) {
            const $img = $item.find('img')
            const $a = $item.find('a')

            setHref($a, content.interior[index].imageLink)
            setImage($img, content.interior[index].imageLink)
        }, function ($baseElement) {
            $baseElement.find('a').removeClass('glightbox')
        })

        multiplyItemsAndFill('#projectPropertyItem', content.properties.length, function ($item, index) {
            const $img = $item.find('.project_modal_property__svg')
            const $title = $item.find('.project_modal_property__title')
            const $value = $item.find('.project_modal_property__value')

            setImage($img, content.properties[index].svgLink, content.properties[index].header)
            setContent($title, content.properties[index].title)
            setContent($value, content.properties[index].value)
        })

        multiplyItemsAndFill('#projectContentItem', content.content.length, function ($item, index) {
            // const underline_kind = (index % 2 === 0) ? '.project_modal_underliner_left' : '.project_modal_underliner_right'

            const $img = $item.find('img')
            const $title = $item.find('.project_modal_content__title')
            const $body = $item.find('.project_modal_content__body__wrapper')
            const $row = $item.find('.row')

            if (index % 2 === 0) {
                $item.addClass('project_modal_underliner_right')
                $row.addClass('flex-row-reverse')
            }
            else {
                $item.addClass('project_modal_underliner_left')
                $row.addClass('text-end')
            }

            // console.log(content.content[index].title)

            setImage($img, content.content[index].imageLink, content.content[index].title)
            setContent($title, content.content[index].title)
            setContent($body, content.content[index].body)
        })

        const maleSrc = "/assets/images/comment_1.webp";
        const femaleSrc = "/assets/images/comment_2.webp";

        setImage(".project_modal_comment_info__wrapper img", content.review.isMale ? maleSrc : femaleSrc, content.review.name)
        setContent(".project_modal_comment_info__wrapper h3", content.review.name)
        setContent(".project_modal_comment_info__wrapper p", `${content.review.age}, ${content.review.placement}`)
        setContent(".project_modal_comment_comment__wrapper p", content.review.feedback)
    }

    function openModal() {
        $projectModal.modal('show')
    }


    function clearModalContent() {
        removeMultiplies('#projectDescriptionItem')
        removeMultiplies('#projectExteriorItem', function ($baseElement) {
            $baseElement.find('a').addClass('glightbox')
        })
        removeMultiplies('#projectInteriorItem', function ($baseElement) {
            $baseElement.find('a').addClass('glightbox')
        })
        removeMultiplies('#projectPropertyItem')
        removeMultiplies('#projectContentItem')
    }


    function setContent(itemName, content) {
        if (!(itemName instanceof String)) {
            itemName = $projectModal.find(itemName)
        }
        itemName.html(content)
    }

    function setImage(itemName, src, alt) {
        if (!(itemName instanceof String)) {
            itemName = $projectModal.find(itemName)
        }
        itemName.attr('src', src).attr('alt', alt)
    }

    function setHref(itemName, href) {
        if (!(itemName instanceof String)) {
            itemName = $projectModal.find(itemName)
        }
        itemName.attr('href', href)
    }

    function multiplyItemsAndFill(itemName, count, lambda, baseElementAffectLambda = null) {
        const $baseElement = $projectModal.find(itemName)
        const $parentElement = $baseElement.parent()

        for (let i = 0; i < count; i++) {
            // copy element
            $currentElement = $baseElement.clone()
            $currentElement.appendTo($parentElement)
            
            lambda($currentElement, i)
        }
        
        $baseElement.addClass('d-none')
        if (baseElementAffectLambda) {
            baseElementAffectLambda($baseElement)
        }
    }

    function removeMultiplies(itemName, baseElementAffectLambda = null) {
        // console.log($projectModal.find(itemName).parent().children().not('.d-none'))


        $projectModal.find(itemName).parent().children().not('.d-none').remove()
        $projectModal.find(itemName).removeClass('d-none')
        if (baseElementAffectLambda) {
            baseElementAffectLambda($projectModal.find(itemName))
        }
    }

})

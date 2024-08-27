
<?php

?>


<div class="modal fade" id="projectModal" tabindex="-1" aria-labelledby="projectModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <!-- <h5 class="modal-title" id="projectModalLabel">Modal title</h5> -->
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="container">

            <div class="project_modal_head__wrapper ps-sm-5 ps-0 text-sm-start text-center mb-5">
                <h2 id="projectName"></h2>

                <p class="gray-text" id="projectDescription"></p>
            </div>
            

            <div class="project_modal_description__wrapper d-flex flex-wrap mb-5 ps-sm-5 ps-0 justify-content-sm-start justify-content-center text-sm-start text-center">
                <div class="project_model_description__item me-sm-5 mx-sm-0 mx-3" id="projectDescriptionItem">
                    <h3></h3>
                    <p class="gray-text modal-text"></p>
                </div>
            </div>


            <div class="project_modal_exterior_swiper__wrapper project_modal_underliner_left">

                <div class="project_exterior_swiper h-100">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div id="projectExteriorItem" class="swiper-slide">
                            <a href="" class="glightbox" data-gallery="gallery1">
                                <img class="h-100" src="" alt="">    
                            </a>
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev d-sm-block d-none"></div>
                    <div class="swiper-button-next d-sm-block d-none"></div>
                </div>

            </div>


            <div class="project_modal_properties__wrapper mb-5">
                <ul class="ps-0 d-flex flex-wrap justify-content-evenly">
                    <li id="projectPropertyItem" class="mx-3 mb-4">
                        <div class="project_modal_property__item d-flex flex-column align-items-center text-center">
                            <img class="project_modal_property__svg">

                            <p class="project_modal_property__title"></p>
                            
                            <p class="project_modal_property__value gray-text modal-text"></p>
                        </div>
                    </li>
                </ul>
            </div>

            
            <div class="project_modal_content__wrapper">
                <div id="projectContentItem" class="project_modal_content__item">
                    
                    <div class="row">
                        <div class="col-lg-5 col-md-10 col-sm-11 col-12">
                            <img class="w-100" src="" alt="">
                        </div>
                    
                        <div class="col-lg-7 col-md-10 col-sm-11 col-12">
                            <div class="project_modal_content_text__wrapper pt-3">
                                <h3 class="project_modal_content__title mb-4"></h3>

                                <div class="project_modal_content__body__wrapper text-footer"></div>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>


            <div class="project_modal_interior_swiper__wrapper project_modal_underliner_left">
                <div class="project_interior_swiper h-100">
                    <div class="swiper-wrapper">
                        <!-- Slides -->
                        <div id="projectInteriorItem" class="swiper-slide">
                            <a href="" class="glightbox" data-gallery="gallery2">
                                <img class="h-100" src="" alt="">    
                            </a>
                            <!-- <img class="h-100" src="" alt=""> -->
                        </div>
                    </div>

                    <!-- If we need navigation buttons -->
                    <div class="swiper-button-prev d-sm-block d-none"></div>
                    <div class="swiper-button-next d-sm-block d-none"></div>
                </div>
            </div>


            <div class="project_modal_contact_us__wrapper d-flex justify-content-md-between align-items-md-start align-items-center flex-md-row flex-column text-md-start text-center mb-5">
                <p><?=$project_modal_contact_us_text?></p>
                
                <button data-bs-toggle="modal" data-bs-target="#contactModal" class="px-5"><?=$project_modal_contact_us_button_text?></button>
            </div>


            <div id="projectComment" class="project_modal_comment__wrapper px-sm-5 px-4 py-4 mb-5">
                <div class="row">
                    <div class="col-md-4">
                        <div class="project_modal_comment_info__wrapper d-flex flex-column">
                            <img src="" alt="">
                            <h3></h3>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="project_modal_comment_comment__wrapper">
                            <p class="pt-4"></p>
                        </div>
                    </div>
                </div>
            </div>


        </div>
      </div>
    </div>
  </div>
</div>



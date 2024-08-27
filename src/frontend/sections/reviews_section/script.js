$(document).ready(function () {
	var swiper = new Swiper('.reviewSwiper', {
		slidesPerView: 1,
		spaceBetween: 10,
		loop: true,
		pagination: {
			el: '.review_swiper__pagination',
		},
		autoplay: {
			delay: 8500,
			disableOnInteraction: false,
		},
		breakpoints: {
			992: {
				slidesPerView: 2,
				spaceBetween: 30,
			},
		},
	})

	$('.review_swiper__slide').hover(function () {
		$(this).addClass('expanded')
		$(this).siblings().removeClass('expanded')
	})

	$('.review_swiper__slide').blur(function () {
		$(this).removeClass('expanded')
	})
})

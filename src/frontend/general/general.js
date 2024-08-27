$(document).ready(function () {
	AOS.init({
		disable: 'mobile',
		once: true,
	})

	AOS.init({
		disable: function () {
			var maxWidth = 768
			return window.innerWidth < maxWidth
		},
	})
})

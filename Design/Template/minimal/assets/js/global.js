/* ----------------------------------------------------------------------------------------
Template: Bodrum - Modular Multi Purpose HTML5 Template
Author: Tempload - support@tempload.com
------------------------------------------------------------------------------------------*/

(function ($) {
	"use strict";


	const version = 'v1.0.8';


	// Window Resize Mobile Menu Fix
	mobileNav();


	// Scroll animation init
	window.sr = new scrollReveal();


	// Parallax init
	if ($('.parallax').length) {
		$('.parallax').parallax({
			zIndex: '1',
			speed: 0.3
		});
	}


	// Progressbar init
	if ($('.progressbar').length) {
		$(".progressbar").each(function (i) {
			$('.progressbar:eq(' + [i] + ') .line').css("width", $('.progressbar:eq(' + [i] + ') .line').data('width') + '%');
		});
	}


	// Menu version number set
	if ($('.version').length) {
		$('.version').html(version);
	}


	// Background image set cover
	if ($('.imgfix').length) {
		$('.imgfix').imgfix();
	}


	// Background hover image set cover
	if ($('.imgfix-animate').length) {
		$('.imgfix-animate').imgfix({
			scale: 1.1
		});
	}


	// Slider init
	if ($('.slider-1-col').length) {
		var testimonialOne = $(".slider-1-col");
		testimonialOne.owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			items: 1
		});
	}


	// Slider init
	if ($('.slider-2-col').length) {
		var testimonialOne = $(".slider-2-col");
		testimonialOne.owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 1
				},
				1000: {
					items: 2
				}
			}
		});
	}


	// Slider init
	if ($('.slider-3-col').length) {
		var testimonialOne = $(".slider-3-col");
		testimonialOne.owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 3
				}
			}
		});
	}


	// Slider init
	if ($('.slider-4-col').length) {
		var testimonialOne = $(".slider-4-col");
		testimonialOne.owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1
				},
				600: {
					items: 2
				},
				1000: {
					items: 4
				}
			}
		});
	}


	// Slider init
	if ($('.slider-5-col').length) {
		var testimonialOne = $(".slider-5-col");
		testimonialOne.owlCarousel({
			loop: true,
			nav: false,
			dots: true,
			margin: 30,
			autoplay: false,
			autoplayTimeout: 4000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 2
				},
				600: {
					items: 3
				},
				1000: {
					items: 5
				}
			}
		});
	}


	// Number counterup
	if ($('.count-item').length) {
		$('.count-item h2').counterUp({
			delay: 10,
			time: 1000
		});
	}


	// Clickable client
	if ($('.client-profile').length) {
		$('.client-profile').on('click', function(){
			var target = $(this).data('target');
			$('.client-profile').removeClass('active');
			$(this).addClass('active');
			$('.client-text').removeClass('active');
			$('*[data-text="' + target + '"]').addClass('active');
		});
	}


	// Particle JS init
	if ($('#particle-buble').length) {
		particlesJS('particle-buble', particleSettings);
	}


	// Menu Dropdown Toggle
	if ($('.menu-trigger').length) {
		$(".menu-trigger").on('click', function () {
			$(this).toggleClass('active');
			$('.menu').slideToggle(200, function(){
				if (!$(this).hasClass('active')) {
					$('.menu-item').removeClass('opened').css('height', '40px');
					$('.sub-menu-item').removeClass('opened').css('height', '40px');
				}
			});
		});
	}


	// Portfolio Category Select
	if ($('.portfolio-link').length) {
		$('.portfolio-link').on('click', function () {
			var target = $(this).data('target');
			$('.portfolio-link').removeClass('active');
			$(this).addClass('active');
			if(target == 'all') {
				$('.portfolio-item').show();
			}else{
				$('.portfolio-item*[data-name!="' + target + '"]').hide();
				$('.portfolio-item*[data-name="' + target + '"]').show();
			}
		});
	}


	// input file set file name
	if ($('#file-input').length) {
		$('#file-input').change(function () {
			var file = $('#file-input')[0].files[0].name;
			$('#file-input').next().html(file);
		});
	}


	// sticky aside init
	if ($('#sidebar').length) {
		$('#sidebar').stickySidebar({
			sidebarTopMargin: 120,
			footerThreshold: 100,
			headerSelector: ''
		});
	}


	// Countdown init
	if ($('.countdown').length) {
		$('.countdown').downCount({
			date: '12/30/2020 12:00:00',
			offset: +10
		});
	}


	// Tooltip init
	if ($('[data-toggle="tooltip"]').length) {
		$('[data-toggle="tooltip"]').tooltip();
	}


	// CHECK-IN & CHECK-OUT datepicker init
	if ($('#datestart').length && $('#dateend').length) {
		$('#datestart').datetimepicker({
			format: 'DD-MM-YYYY'
		});
		$('#dateend').datetimepicker({
			useCurrent: false,
			format: 'DD-MM-YYYY'
		});

		$("#datestart").on("dp.change", function (e) {
			$('#dateend').data("DateTimePicker").minDate(e.date);
		});
		$("#dateend").on("dp.change", function (e) {
			$('#datestart').data("DateTimePicker").maxDate(e.date);
		});
	}


	// Custom selecbox init
	if ($('.selectpicker').length) {
		$('.selectpicker').selectpicker();
	}


	// Menu elevator animation
	$('a[href*=\\#]:not([href=\\#])').on('click', function () {
		if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
			var target = $(this.hash);
			target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
			if (target.length) {
				var width = $(window).width();
				$('html,body').animate({
					scrollTop: (target.offset().top) - 110
				}, 700);
				return false;
			}
		}
	});


	// Documentation mobile menu
	if ($('.doc-menu-button').length && $('.doc-menu').length) {
		$('.doc-menu-button').on('click', function () {
			$('.doc-menu').toggleClass('active');
		});
	}


	// Window Resize Mobile Menu Fix
	$(window).on('resize', function () {
		mobileNav();
	});


	// Page loading animation
	$(window).on('load', function () {
		$("#preloader").animate({
			'opacity': '0'
		}, 600, function () {
			setTimeout(function () {
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});


	// Window Resize Mobile Menu Fix
	function mobileNav() {
		var width = $(window).width();

		if (width < 992) {
			$('.menu-item').on('click', function (e) {
				var el = e.target;
				if ($(el).parents('.sub-menu-item').length || $(el).hasClass('sub-menu-item')) return;

				if ($(this).hasClass('open-mega-menu')) {
					if ($(this).hasClass('opened')) {
						$(this).css('height', '40px');
						$(this).removeClass('opened');
					} else {
						$('.menu-item').removeClass('opened').css('height', '40px');
						var menuHeight = $(this).find('.mega-menu').outerHeight() + 40;
						$(this).css('height', menuHeight + 'px');
						$(this).addClass('opened');
					}
				}

				if ($(this).hasClass('open-sub-menu')) {
					if ($(this).hasClass('opened')) {
						$(this).css('height', '40px');
						$('.sub-menu-item').removeClass('opened').css('height', '40px');
						$(this).removeClass('opened');
					} else {
						$('.menu-item').removeClass('opened').css('height', '40px');
						var menuHeight = $(this).find('.sub-menu').outerHeight() + 40;
						$(this).css('height', menuHeight);
						$(this).addClass('opened');
					}
				}

				if ($(this).hasClass('open-mini-menu')) {
					if ($(this).hasClass('opened')) {
						$(this).css('height', '40px');
						$(this).removeClass('opened');
					} else {
						$('.menu-item').removeClass('opened').css('height', '40px');
						var menuHeight = $(this).find('.mini-menu').outerHeight() + 40;
						$(this).css('height', menuHeight);
						$(this).addClass('opened');
					}
				}
			});

			$('.sub-menu-item').on('click', function (e) {
				if ($(this).hasClass('open-level-menu')) {
					if ($(this).hasClass('opened')) {
						$(this).css('height', '40px');
						$(this).removeClass('opened');
					} else {
						$('.sub-menu-item').removeClass('opened').css('height', '40px');
						var menuHeight = $(this).find('.level-menu').outerHeight() + 40;
						$(this).css('height', menuHeight);
						$(this).parent().parent().css('height', 'auto');
						$(this).addClass('opened');
					}
				}
			});
		}
	}


})(window.jQuery);
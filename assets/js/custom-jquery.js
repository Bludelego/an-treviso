jQuery(document).ready(function ($) {
	// const mainMenu = $('#js-main-menu');
	// let closeMenu = function () {
	// 	$('#js-sandwitch-wrap').on('click', function () {
	// 		if (mainMenu.hasClass('fixed')) {
	// 			mainMenu.removeClass('fixed');
	// 			$('body').css({
	// 				overflow: '',
	// 				paddingRight: 'initial'
	// 			});
	// 		} else {
	// 			$('body').css({
	// 				overflow: 'hidden',
	// 				paddingRight: '12px'
	// 			});
	// 			mainMenu.addClass('fixed');
	// 		}
	// 		$(this).toggleClass('sandwitch--active');
	// 		$(this).closest('.sandwitch-wrapper').toggleClass('sandwitch--active');
	// 	});
	// };
	// closeMenu();
	// let accordion = function () {
	// 	$('.accordion__item').eq(0).find('.accordion__content').slideDown('');
	// 	$('.accordion__header').on('click', function () {
	// 		const parent = $(this).closest('.accordion__item');
	// 		if (parent.hasClass('active')) {
	// 			parent.find('.accordion__content').slideUp();
	// 			parent.removeClass('active');
	// 		} else {
	// 			parent.addClass('active');
	// 			parent.find('.accordion__content').slideDown();
	// 		}
	// 	});
	// };
	// accordion();
	let showMiniCart = function () {
		$('.cart-icon-target').on('click', function (e) {
			e.preventDefault();
			$('.widget_shopping_cart').fadeToggle();
		});
		$(document).keyup(function (e) {
			if (e.key === "Escape") { // escape key maps to keycode `27`
				$('.widget_shopping_cart').fadeOut();
			}
		});
		document.addEventListener('mousedown', function (e) {
			let widgetShoppingCart = document.querySelector('.widget_shopping_cart');
			if (widgetShoppingCart) {
				if (e.target.closest('.cart-icon') === null) {
					$('.widget_shopping_cart').fadeOut();
				}
			}
		});
	};
	showMiniCart();
});

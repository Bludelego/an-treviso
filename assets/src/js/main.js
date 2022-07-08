import streetMap from './modules/footer/map';
import { mainMenu } from './modules/header/mainMenu';
import homeIntroAnimation from './modules/animation/home-intro-animation';
import footerAnimation from './modules/animation/footer-animation';
import fixedHeader from './modules/header/fixedHeader';
import { goDown } from './modules/go-down';
import progettoAnimation from './modules/animation/progetto-animation';
import membergAnimation from './modules/animation/members-animation';
import programmaAnimation from './modules/animation/programma-animation';

document.addEventListener('DOMContentLoaded', function () {
	// streetMap();
	mainMenu();
	fixedHeader();
	if (document.querySelector('#js-down')) {
		goDown();
	}
	if (window.innerWidth > 768) {
		if (document.querySelector('.home-intro')) {
			homeIntroAnimation();
		}
		if (document.querySelector('.progetto')) {
			progettoAnimation();
		}
		if (document.querySelector('.memberg')) {
			membergAnimation();
		}
		if (document.querySelector('.programma__img')) {
			programmaAnimation();
		}
	}
});

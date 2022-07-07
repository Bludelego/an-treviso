import streetMap from './modules/footer/map';
import { mainMenu } from './modules/header/mainMenu';
import homeIntroAnimation from './modules/animation/home-intro-animation';
import footerAnimation from './modules/animation/footer-animation';
import fixedHeader from './modules/header/fixedHeader';
import { goDown } from './modules/go-down';

document.addEventListener('DOMContentLoaded', function () {
	// streetMap();
	mainMenu();
	fixedHeader();
	if (document.querySelector('#js-down')) {
		goDown();
	}
});

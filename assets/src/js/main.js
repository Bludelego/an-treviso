import streetMap from "./modules/footer/map";
import {mainMenu} from "./modules/header/mainMenu";
import homeIntroAnimation from "./modules/animation/home-intro-animation";
import footerAnimation from "./modules/animation/footer-animation";
import fixedHeader from "./modules/header/fixedHeader";

document.addEventListener("DOMContentLoaded", function () {
    // streetMap();
    mainMenu();
    fixedHeader();

    if (document.querySelector('.home-intro') && window.innerWidth > 992) {
        homeIntroAnimation();
    }
    footerAnimation();
});

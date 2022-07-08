import gsap from 'gsap';
import ScrollTrigger from "gsap/ScrollTrigger";

export default function homeIntroAnimation() {
    gsap.registerPlugin(ScrollTrigger);

    function homeIntro() {
        let tl = gsap.timeline();
        tl.fromTo('.home-intro__img', {
            // opacity: 0,
            scale: 1.8,
        }, {
            // opacity: 1,
            scale: 1,
            duration: 40,
            ease: "power4.out"
        });
        tl.fromTo('.home-intro__title', {
            opacity: 0,
            y: 50,
        },{
            opacity: 1,
            y: 0,
            duration: 4,
            ease: "power4.out"
        }, "-=40");
    }

    if (document.body.classList.contains('page-template-front-page')) {
        homeIntro();
    }
}
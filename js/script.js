// Functional navbar
function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
    //document.getElementById("main").style.marginLeft = "250px";
    document.getElementById("menu-open").style.display = "none";
    document.getElementById("menu-close").style.display = "block";
    document.getElementById("menu-list").style.transform = "translate3d(0px, 0px, 0px)";
    document.getElementById("top-menu").style.marginLeft = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "64px";
    //document.getElementById("main").style.marginLeft = "64px";
    document.getElementById("menu-open").style.display = "block";
    document.getElementById("menu-close").style.display = "none";
    document.getElementById("menu-list").style.transform = "translate3d(-300px, 0px, 0px)";
    document.getElementById("top-menu").style.marginLeft = "64px";
}

// Fade animation on scroll
const fadeElements = document.querySelectorAll('.scrollFade');

function scrollFade() {

    fadeElements.forEach(element => {
        const rect = element.getBoundingClientRect();
        const elementFourth = rect.height / 4;
        const fadeInPoint = window.innerHeight - elementFourth;
        const fadeOutPoint = -(rect.height / 2);

        if (rect.top <= fadeInPoint) {
            element.classList.add('scrollFade--visible', 'scrollFade--animate');
            element.classList.remove('scrollFade--hidden');
        } else {
            element.classList.remove('scrollFade--visible');
            element.classList.add('scrollFade--hidden');
        }

        if (rect.top <= fadeOutPoint) {
            element.classList.remove('scrollFade--visible');
            element.classList.add('scrollFade--hidden');
        }
    });
}

document.addEventListener('scroll', scrollFade);
window.addEventListener('resize', scrollFade);
window.addEventListener('DOMContentLoaded', scrollFade);


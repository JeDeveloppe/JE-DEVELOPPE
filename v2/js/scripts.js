/*!
* Start Bootstrap - Resume v7.0.3 (https://startbootstrap.com/theme/resume)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-resume/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Animation JE DEVELOPPE
    const slideInSkills = document.getElementById('slideInSkills');
    const slideInHelpers = document.getElementById('slideInHelpers');
    const typeWritterJs = document.getElementById('programmationWeb');

    new Typewriter(typeWritterJs, {
        loop: true,
        deleteSpeed: 20
    })
    .pauseFor(2400)
    .typeString('...<small>avec</small>: <span class="color-html5">HTML</span> · <span class="color-css3">CSS</span> · <span class="color-php">Php</span> · <span class="text-warning">Javascript </span>')
    .pauseFor(2000)
    .deleteChars(30)
    .typeString('<span class="color-bootstrap">Bootstrap</span> · <span class="color-sql">SQL SERVER</span> · <span class="text-danger">Git</span> · <span class="color-symfony">Symfony</span> · <span class="text-success">VueJs</span>')
    .pauseFor(2000)
    .start()

    // Animation SKILLS
    window.addEventListener('scroll', () =>{
        const {scrollTop,clientHeight} = document.documentElement;

        const HeightBetweenTopAndElementSlideInterets = slideInSkills.getBoundingClientRect().top;
        const HeightBetweenTopAndElementSlidIn = slideInSkills.getBoundingClientRect().top;

        if(scrollTop > (scrollTop + HeightBetweenTopAndElementSlidIn).toFixed() - clientHeight * 0.50){
            slideInSkills.classList.add('active-slide')
        }

    });



    // Activate Bootstrap scrollspy on the main nav element
    const sideNav = document.body.querySelector('#sideNav');
    if (sideNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#sideNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarResponsive .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

}),

function(){"use strict";var e=document.querySelector(".cookiealert"),t=document.querySelector(".acceptcookies");e&&(e.offsetHeight,function(e){for(var t=e+"=",o=decodeURIComponent(document.cookie).split(";"),c=0;c<o.length;c++){for(var n=o[c];" "===n.charAt(0);)n=n.substring(1);if(0===n.indexOf(t))return n.substring(t.length,n.length)}return""}("acceptCookies")||e.classList.add("show"),t.addEventListener("click",function(){!function(e,t,o){var c=new Date;c.setTime(c.getTime()+24*o*60*60*1e3);var n="expires="+c.toUTCString();document.cookie=e+"="+t+";"+n+";path=/;"}("acceptCookies",!0,1),e.classList.remove("show"),window.dispatchEvent(new Event("cookieAlertAccept"))}))}();



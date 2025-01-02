// Sticky Header
document.addEventListener("DOMContentLoaded", function() {
    const header = document.getElementById("masthead");

    if (header) {
        const sticky = header.offsetTop;

        window.onscroll = function () {
            if (window.pageYOffset > sticky) {
                header.classList.add("scrolled");
            } else {
                header.classList.remove("scrolled");
            }
        };
    } else {
        console.warn("Element with ID 'masthead' not found.");
    }
});

// Swiper Initialization
document.addEventListener("DOMContentLoaded", function() {
    const reviewsSlide = new Swiper(".reviewsSlide", {
        slidesPerView: 1,
        loop: true,
        centeredSlides: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
    });
});


document.addEventListener("DOMContentLoaded", function() {
    function setupSmoothScrolling(selector) {
        const links = document.querySelectorAll(selector);
        
        links.forEach(link => {
            link.addEventListener("click", function(event) {
                event.preventDefault();
                const targetId = link.getAttribute("href").substring(1);
                const targetElement = document.getElementById(targetId);

                if (targetElement) {
                    gsap.to(window, {duration: 1, scrollTo: {y: targetElement.offsetTop}});
                }
            });
        });
    }

    // Apply smooth scrolling to primary menu links
    setupSmoothScrolling("#primary-menu a");

    // Apply smooth scrolling to mobile menu links
    setupSmoothScrolling("#mobile-menu a");
    
    // GSAP Animations
    gsap.registerPlugin(ScrollTrigger);

    gsap.utils.toArray("section").forEach(section => {
        gsap.from(section, {
            scrollTrigger: {
                trigger: section,
                start: "top 80%",
                toggleActions: "play none none none"
            },
            opacity: 0,
            y: 50,
            duration: 1
        });
    });
});




// MmenuLight Initialization for Mobile Navigation
document.addEventListener('DOMContentLoaded', function () {
    const menu = new MmenuLight(document.querySelector('#mobile-navigation'), 'all');

    const navigator = menu.navigation({
        // options
    });

    const drawer = menu.offcanvas({
        // options
        position: 'right',
    });

    document.querySelector('a[href="#mobile-navigation"]').addEventListener('click', function(evnt) {
        evnt.preventDefault();
        drawer.open();
    });
});

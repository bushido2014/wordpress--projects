// Navbar scroll effect
const navbar = document.querySelector('.site-header');
const navbarBrand = document.querySelector('.site-header .custom-logo');

window.addEventListener('scroll', () => {
  if (window.scrollY > 50) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});


var swiper = new Swiper(".client-slider", {
  slidesPerView: 3, 
  centeredSlides: false,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    
    1024: {
      slidesPerView: 3, 
    },
    768: {
      slidesPerView: 2, 
    },
    480: {
      slidesPerView: 1, 
    },
  },
});



var swiper = new Swiper(".marketing-slider", {
      spaceBetween: 30,
      centeredSlides: true,
      effect: 'fade',
      speed:1600,
      autoplay: {
        delay: 2500,
        
        disableOnInteraction: false,
      },
});



var swiper = new Swiper(".offices-slider", {
  slidesPerView: 2, 
  centeredSlides: false,
  spaceBetween: 30,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  breakpoints: {
    
    1024: {
      slidesPerView: 2, 
    },
    768: {
      slidesPerView: 1, 
    },
    480: {
      slidesPerView: 1, 
    },
  },
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

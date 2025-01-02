const navBar = document.querySelector('.main-navigation');
const navBtn = document.querySelector('.hamburger');
navBtn.addEventListener('click', function () {
  this.classList.toggle('is-active');
  navBar.classList.toggle('nav--open');
});
	



const swiper1 = new Swiper(".featured-products", {
  // Optional parameters
  loop: true,
  slidesPerView: 1,
  spaceBetween: 20,	
	
  breakpoints: {
    600: {
      slidesPerView: 2,
      spaceBetween: 10
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 20
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30
    }
  },
  //If we need pagination
  pagination: {
    el: ".swiper-pagination",
    clickable: true
  }

});
const userSlide = new Swiper(".userSlide", {
        slidesPerView: 1,
        loop: true,
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
      });


document.addEventListener("DOMContentLoaded", function() {
    function checkScroll() {
        var scrollPosition = window.pageYOffset;
        if (scrollPosition > 200) {
            document.getElementById("scroll-to-top").classList.add("show");
        } else {
            document.getElementById("scroll-to-top").classList.remove("show");
        }
    }

    document.getElementById("scroll-to-top").addEventListener("click", function() {
        window.scrollTo({
            top: 0,
            behavior: "smooth"
        });
    });

    window.addEventListener("scroll", checkScroll);
});



	
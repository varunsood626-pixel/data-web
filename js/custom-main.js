$(document).ready(function() {

  // var lastScrollTop = 0;
  // $(window).scroll(function(event){
  //    var st = $(this).scrollTop();
  //    if (st > lastScrollTop){
  //       $('header').removeClass('fixed');
  //        $('header').addClass('fixed');
  //    } else {
  //       $('header').addClass('fixed');
  //        $('header').removeClass('no-fixed');
  //    }
  //    lastScrollTop = st;
  // });

  $(window).scrollTop(0);
  

  var lastScrollTop = 0;
  $(window).scroll(function (e) {
    var o = $(this).scrollTop();
    0 === o ? $("header").removeClass("fixed no-fixed") : o > lastScrollTop ? ($("header").removeClass("fixed"), $("header").addClass("no-fixed")) : ($("header").addClass("fixed"), $("header").removeClass("no-fixed")), (lastScrollTop = o);
});

  
  $(".burger").click(function () {
    $(".burger").toggleClass("clicked");
  })

  $(document).on("click", function (e) {
    const $navbar = $(".navbar-collapse");
    const $toggler = $(".burger");

    // If menu is open and clicked outside navbar and burger button
    if (
      $navbar.hasClass("show") &&
      !$navbar.is(e.target) &&
      $navbar.has(e.target).length === 0 &&
      !$toggler.is(e.target) &&
      $toggler.has(e.target).length === 0
    ) {
      // Hide Bootstrap menu
      const bsCollapse = bootstrap.Collapse.getInstance($navbar[0]);
      bsCollapse.hide();

      // Remove .clicked class from burger
      $toggler.removeClass("clicked");
    }
  });


  // $(".nav-link").click(function () {
  //   $(".show").toggleClass("show"), $(".burger").removeClass("clicked");
  // })



  // $('.dropdown-menu > li a').click(function () {
  //   let tabUrl = getSecondPart($(this).attr('href'));
  //   $('.nav-link').removeClass('active')
  //   $(`#${tabUrl}-tab`).addClass('active');
  //   $('.tab-pane').removeClass('active show')
  //   $(`#${tabUrl}`).addClass('active show');
  //   $("section .fp-overflow").animate({ scrollTop: 0 }, "slow");

  // });


  // if ($(window).width() > 1024) {
  //   if ($(this).parent('li').hasClass('open')) {
  //     $(this).parent('li').removeClass('open');
  //   } else {
  //     $('.sidebar-menu > ul li').removeClass('open');
  //     $(this).parent('li').addClass('open');
  //   }
  //   $(this).parent('li').siblings('li').find('.dropdown-menu').slideUp();
  //   $(this).next('.dropdown-menu').slideToggle();
  // }

  // else {
  //   if ($(this).parent('li').hasClass('open')) {
  //     $(this).parent('li').removeClass('open');
  //   } else {
  //     $('.sidebar-menu > ul li').removeClass('open');
  //     $(this).parent('li').addClass('open');
  //   }
  //   $(this).parent('li').siblings('li').find('.dropdown-menu').slideUp();
  //   $(this).next('.dropdown-menu').slideToggle();
  // }


  // $('.innerDrop').hover(function () {
  //   $(this).find('.sub-menu').addClass('show')
  // }, function () {
  //   $(this).find('.sub-menu').removeClass('show')
  // });
  


  // document.addEventListener("DOMContentLoaded", function () {
  //   var navLinks = document.querySelectorAll(".close-menu");
  //   var navbarCollapse = document.querySelector(".navbar-collapse");

  //   navLinks.forEach(function (link) {
  //     link.addEventListener("click", function () {
  //       if (window.innerWidth < 992) {
  //         var bsCollapse = new bootstrap.Collapse(navbarCollapse, { toggle: false });
  //         bsCollapse.hide();
  //       }
  //     });
  //   });
  // });



  

var interleaveOffset = 0.5;
var swiperOptions = {
  loop: false,
  speed: 2000,
  grabCursor: false,
  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },
  watchSlidesProgress: true,
  mousewheelControl: true,
  keyboardControl: true,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev"
  },
  
  on: {
    slideChangeTransitionStart: activateAnimations,
    progress: function() {
      var swiper = this;
      for (var i = 0; i < swiper.slides.length; i++) {
        var slideProgress = swiper.slides[i].progress;
        var innerOffset = swiper.width * interleaveOffset;
        var innerTranslate = slideProgress * innerOffset;
        swiper.slides[i].querySelector(".slide-inner").style.transform =
          "translate3d(" + innerTranslate + "px, 0, 0)";
      }      
    },
    touchStart: function() {
      var swiper = this;
      for (var i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = "";
      }
    },
    setTransition: function(speed) {
      var swiper = this;
      for (var i = 0; i < swiper.slides.length; i++) {
        swiper.slides[i].style.transition = speed + "ms";
        swiper.slides[i].querySelector(".slide-inner").style.transition =
          speed + "ms";
      }
    }
  }
};


var swiper = new Swiper(".banner-slider", swiperOptions);


function activateAnimations() {
  const activeSlide = document.querySelector(".swiper-slide-active");

  // Check if activeSlide exists
  if (!activeSlide) {
      console.warn("No active slide found. Skipping animations.");
      return; // Exit the function early
  }

  gsap.killTweensOf(".first-img, .second-img");

  const firstImg = activeSlide.querySelector(".first-img");
  if (firstImg) {
      gsap.fromTo(
          firstImg,
          { y: "-10%", opacity: 0 },
          { y: "0%", opacity: 1, duration: 3, ease: "power1.out" }
      );
  }

  const secondImg = activeSlide.querySelector(".second-img");
  if (secondImg) {
      gsap.fromTo(
          secondImg,
          { y: "10%", opacity: 0 },
          { y: "0%", opacity: 1, duration: 3, ease: "power1.out" }
      );
  }
}



document.addEventListener("DOMContentLoaded", () => {
  activateAnimations();
});

document.querySelectorAll(".listening-img").forEach((e) => {
    gsap.from(e, { y: "-10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
});


$(".box-care").hover( function() { 
  var value=$(this).attr('data-src');
  $(".image-are img").attr("src", value);
});


document.querySelectorAll(".text-animation").forEach((e) => {
  gsap.from(e, { y: "10%", opacity: 0.5, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "top 80%", toggleActions: "play none none reverse" } });
});


document.querySelectorAll(".box-left-animation").forEach((e) => {
  gsap.from(e, { x: "-10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
});
document.querySelectorAll(".box-right-animation").forEach((e) => {
  gsap.from(e, { x: "10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
});
// document.querySelectorAll(".blood-test").forEach((e) => {
//   gsap.from(e, { y: "10%", opacity: 0, duration: 2.5, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
// });

document.querySelectorAll(".blood-animation").forEach((e) => {
  gsap.from(e, { y: "-30%", opacity: 1, duration: 4.5, ease: "power1.out", scrollTrigger: { trigger: e, start: "top 80%", toggleActions: "play none none reverse" } });
});



document.querySelectorAll(".caption-animation").forEach((e) => {
  gsap.from(e, { x: "-20%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
});

document.querySelectorAll(".box-animation").forEach((e) => {
  gsap.from(e, { y: "10%", opacity: 0, duration: 2, ease: "power1.out", scrollTrigger: { trigger: e, start: "left 80%", toggleActions: "play none none reverse" } });
});


  
gsap.registerPlugin(ScrollTrigger);
  
  




  if (document.querySelector('.world-class')) {
    var $svg = $('.world-class svg').drawsvg({
      duration: 6000, 
      reverse: false  
    });
  
    ScrollTrigger.create({
      trigger: '.world-class svg',
      start: 'top 90%',
      onEnter: () => {
        $svg.drawsvg('animate');
      }
    });

    ScrollTrigger.create({
      trigger: '.world-class',
      start: 'top center',
      onEnter: () => {
        const orderedLocations = ['.india', '.germany', '.uk', '.usa'];
        orderedLocations.forEach((selector, index) => {
          if (document.querySelector(selector)) {
            gsap.fromTo(
              selector,
              { opacity: 0, y: 50 },
              { 
                opacity: 1, 
                y: 0, 
                duration: 2, 
                delay: index * 1 
              }
            );
          }
        });
      },
    });
  }

  

  if (document.querySelector('.listening')) {
    const $listening = $('.listening svg').drawsvg({
      duration: 1000, 
      reverse: false  
    });
    
    ScrollTrigger.create({
      trigger: '.listening svg',
      start: 'top 80%',
      onEnter: () => {
        $listening.drawsvg('animate');
      }
    });
  };





  new Swiper('.test-portfolio-slider', {
    loop: false,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 4,
    paginationClickable: true,
    spaceBetween: 20,
    pagination: {
      el: '.slider__pagination',
      clickable: true,
    },
    autoplay: {
        delay: 3000, // 3 seconds delay between slides
        disableOnInteraction: false, // Keep autoplay running even when user interacts
    },
    breakpoints: {
        1920: {
            slidesPerView: 4,
            spaceBetween: 30
        },
        1028: {
            slidesPerView: 3,
            spaceBetween: 30
        },
        991: {
            slidesPerView: 2,
            spaceBetween: 30
        },
        480: {
            slidesPerView: 1,
            spaceBetween: 10
        }
    }
});





  
const itemsHeight = document.querySelector(".right-card").scrollHeight;
const items = gsap.utils.toArray(".solutions-item");

// GSAP for sticky scrolling
gsap.to(".right-card", {
  y: () => -(itemsHeight - document.querySelector(".right-card").clientHeight),
  ease: "none",
  scrollTrigger: {
    trigger: ".solutions-screening",
    start: "top top",
    end: () => `+=${itemsHeight}`,
    scrub: 0,
    pin: ".solutions-screening",
    pinSpacing: true,
  },
});








// GSAP for individual item animations
items.forEach((section) => {
  gsap.from(section, {
    // opacity: 0,
    y: 10,
    scrollTrigger: {
      trigger: section,
      start: "top 5%",
      end: "bottom 5%",
      toggleActions: "play none none reverse",
      // markers: true,
    },
  });
});



gsap.set('.therapy-card', {position: 'absolute'});

gsap.from('.therapy-card', {
  yPercent: 200,
  stagger: 0.5,
  scrollTrigger: {
    trigger: '.therapy-guidance',
    // markers: true,
    start: 'top top',
    end: '2000px',
    scrub: 3,
    pin: true,
  }
})




let scroll_tl = gsap.timeline({
  scrollTrigger: {
    trigger: ".factsContainer",
    start: "top 30%",
    end: "bottom 100%",
    scrub: 2,
    // end: "+=300",
  }
});

let facts = [...document.querySelectorAll('.fact')];

gsap.matchMedia().add("(min-width: 769px)", () => {
  // Mobile settings
  scroll_tl.to(facts, {
    xPercent: -150, // Less movement on small screens
    x: () => facts.scrollWidth * 0.5, // Reduce movement for mobile
    scrollTrigger: {
      trigger: ".factsContainer_sm",
      start: "top 0",
      end: "+=2000", // Shorter distance for mobile
      pin: true,
      invalidateOnRefresh: true,
      markers: false, // Hide markers for production
      scrub: 2, // Slightly smoother scrolling
      duration: 10, // Shorter duration for mobile experience
    }
  });
});



gsap.matchMedia().add("(max-width: 768px)", () => {
  // Remove animation for mobile
  if (scroll_tl) {
    scroll_tl.kill(); // Stops and removes the animation on mobile
  }
});


});


document.addEventListener("DOMContentLoaded", function() {
  if (window.location.hash) {
      let element = document.querySelector(window.location.hash);
      if (element) {
          element.scrollIntoView({ behavior: "smooth" });
      }
  }
});



// document.addEventListener('DOMContentLoaded', () => {
//   const horizontalSection = document.querySelector('.product-horizontal');
//   const productSection = document.querySelector('.product-sec');
//   // Ensure elements exist before applying GSAP animation
//   if (horizontalSection && productSection) {
//     gsap.to('.product-horizontal', {
//       x: () => horizontalSection.scrollWidth * -1,
//       xPercent: 100,
//       scrollTrigger: {
//         trigger: '.product-horizontal',
//         start: 'center center',
//         end: '+=2000px',
//         pin: '.product-sec',
//         scrub: true,
//         scrub: 2,
//         invalidateOnRefresh: true
//       }
//     });
//   } 
// });

  document.addEventListener('DOMContentLoaded', () => {
    const horizontalSection = document.querySelector('.product-horizontal');
    const productSection = document.querySelector('.product-sec');

    if (horizontalSection && productSection) {
      const mm = gsap.matchMedia();

      // Desktop: Horizontal scrolling
      mm.add("(min-width: 768px)", () => {
        return gsap.to('.product-horizontal', {
          x: () => horizontalSection.scrollWidth * -1,
          xPercent: 100,
          scrollTrigger: {
            trigger: '.product-horizontal',
            start: 'center center',
            end: '+=2000px',
            pin: '.product-sec',
            scrub: 2,
            invalidateOnRefresh: true
          }
        });
      });

      // Mobile: Vertical scrolling
      mm.add("(max-width: 767px)", () => {
        const cards = document.querySelectorAll('.card-wrapper'); // Select all cards
        const totalHeight = [...cards].reduce((acc, card) => acc + card.offsetHeight, -600);

        return gsap.to('.product-horizontal', {
          y: -totalHeight, // Move the entire section up
          scrollTrigger: {
            trigger: '.product-horizontal',
            start: 'top top',
            end: `+=${totalHeight}px`,
            pin: '.product-sec',
            scrub: 2,
            invalidateOnRefresh: true
          }
        });
      });
    }
  });





// window.addEventListener("load", () => {
// const boxes = gsap.utils.toArray(".video-container.box");

// let mm = gsap.matchMedia();

// mm.add("(min-width: 769px)", () => {
//   boxes.forEach((box) => {
//     gsap.fromTo(
//       box,
//       { scale: 1, x: -600 },
//       {
//         scale: 1.3,
//         x: 300,
//         scrollTrigger: {
//           trigger: ".who-we",
//           scrub: 3, 
//           start: "top bottom", 
//           end: "bottom top", 
//         },
//       }
//     );
//   });
// });


//   ScrollTrigger.refresh();
// });


window.onload = function () {
  setTimeout(function () {
      let img = document.querySelector(".abc"); // Select the element
      if (img) { // Check if element exists
          img.style.display = "block"; // Show image
      } 
  }, 0); // 0 seconds delay
};









const scroll = () => {
  const contentElements = document.querySelectorAll(".qwqw");
  const totalContentElements = contentElements.length;

  contentElements.forEach((el, position) => {
    const isFirst = position === 0;
    const isLast = position === totalContentElements - 1;

    gsap.timeline({
      scrollTrigger: {
        trigger: el,
        start: 'top top',
        end: '+=100%',
        scrub: true,
        pin: true,
        pinSpacing: false
      }
    })
    .to(el, {
      ease: 'none',
      startAt: { filter: 'brightness(100%)' },
      filter: isLast ? 'none' : 'brightness(50%)',
      scale: isFirst ? 1 : 0.95,
      borderRadius: isFirst ? 0 : 40
    }, 0);
  });
};

document.addEventListener("DOMContentLoaded", scroll);





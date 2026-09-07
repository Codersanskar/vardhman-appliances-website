


gsap.registerPlugin(ScrollTrigger);

// Setup Smooth Scroll
//const scroller = document.querySelector('.smooth-scroll');

//const bodyScrollBar = Scrollbar.init(scroller, { damping: 0.1, delegateTo: document, alwaysShowTracks: true });

// ScrollTrigger.scrollerProxy(".smooth-scroll", {
//   scrollTop(value) {
//     if (arguments.length) {
//       bodyScrollBar.scrollTop = value;
//     }
//     return bodyScrollBar.scrollTop;
//   }
// });

// bodyScrollBar.addListener(ScrollTrigger.update);

// ScrollTrigger.defaults({ scroller: scroller });

// create a timeline with a ScrollTrigger
const textScroll = gsap.timeline({ 
    scrollTrigger: {
        trigger: "#bigTextSection",
        start:"center center",
        end: "+=400 top",
        scrub: 1
        //markers: true
    }
});

textScroll.addLabel("start")
.to("#bigText", { x: -400, ease: "power3.out"})
.addLabel("end");

window.addEventListener('load', function() {
    textScroll.scrollTrigger.refresh();
});


const menu_tl = gsap.timeline();
// gsap.set("#main_menu > li",{opacity: 0});
menu_tl.pause();
menu_tl.to("#menu_overlay", { 
  duration: 0.1,
  opacity:1,
  width: '100%'
})
.to("#slidemenu", { 
  duration: 0.5,
  left: 0,
  ease: "power3.out"
})
.from("#main_menu > li", {
  duration: 0.3,
  x: -30,
  opacity: 0,
  stagger: 0.05,
  ease: "power3.out"
},"<");

const submenu_tl = gsap.timeline();
submenu_tl.to('#submenu', { 
  duration: 0.5,
  left: 0,
  ease: "power3.out"
});
submenu_tl.pause();



$('#hum_menu').click(function(){
  menu_tl.play();
});
$('#menu_close').click(function(){
  submenu_tl.reverse();
  menu_tl.reverse();
});
$('#menu_overlay').click(function(){
  submenu_tl.reverse();
  menu_tl.reverse();
});

$('#submenu_back').click(function(){
  submenu_tl.reverse();
});



$('#main_menu > li > a').click(function(){
  var target = $(this).data("target");
  if(target) {
    $('[data-submenu='+target+']').addClass("show");

    submenu_tl.play();
  
    gsap.to('[data-submenu='+target+']', { 
      duration: 0.5,
      left: 0,
      ease: "power3.out"
    });
  }
  


});


//counter
const items = document.querySelectorAll(".data");

gsap.from(items, {
  textContent: 0,
  duration: 4,
  ease: "power1.in",
  snap: { textContent: 1 },
  stagger: {
    each: 1.0,
    onUpdate: function () {
      this.targets()[0].innerHTML = numberWithCommas(
        Math.ceil(this.targets()[0].textContent)
      );
    }
  }
});

function numberWithCommas(x) {
  return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
}






function countup(el, target) {
  let data = { count: 0 };
  let start = target - 584000; //Starting value
  anime({
    targets: data,
    count: [start, target],
    duration: 400,
    round: 1,
    delay: 200,
    easing: 'easeOutCubic',
    update() {
      el.innerText = data.count.toLocaleString("en-IN");
    } });
}

function makeCountup(el) {
  const text = el.textContent;
  const target = parseInt(text, 10);

  const io = new IntersectionObserver(entries => {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        countup(el, target);
        io.unobserve(entry.target);
      }
    });
  });

  io.observe(el);
}

const els = document.querySelectorAll('.counter1');

els.forEach(makeCountup);

//counterr






AOS.init({
  once: true,
  duration: 1000
 });

// var Scrollbar = window.Scrollbar;
// Scrollbar.init(document.querySelector('#main-container'), {
//   damping: 0.05
// });

// const myScrollbar = Scrollbar.init(document.querySelector('#main-container'));

// [].forEach.call(document.querySelectorAll('[data-aos]'), (el) => {
//   myScrollbar.addListener(() => {
//     if (myScrollbar.isVisible(el)) {
//       el.classList.add('aos-animate');
//     }
//   });
// });



//counter

var swiper = new Swiper(".home-swiper", {
    slidesPerView: 1,
    spaceBetween: 0,
    grabCursor: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".slide-button-next",
      prevEl: ".slide-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    scrollbar: {
      el: ".number-scrollbar",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
      1024: {
        slidesPerView: 1,
        spaceBetween: 0,
      },
    },
  });




var swiper = new Swiper(".industria-swiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".slide-button-next",
      prevEl: ".slide-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    scrollbar: {
      el: ".number-scrollbar",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
});


var swiper = new Swiper(".backward-swiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".slide-button-next",
      prevEl: ".slide-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    scrollbar: {
      el: ".number-scrollbar",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 4,
        spaceBetween: 30,
      },
    },
});

var swiper = new Swiper(".leaders-swiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    grabCursor: true,
    // autoplay: {
    //   delay: 2500,
    //   disableOnInteraction: false,
    // },
    navigation: {
      nextEl: ".slide-button-next",
      prevEl: ".slide-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    scrollbar: {
      el: ".number-scrollbar",
    },
    breakpoints: {
      640: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 3,
        spaceBetween: 30,
      },
    },
  });

  var swiper = new Swiper(".responsibility-swiper", {
    slidesPerView: 4,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    pagination: {
      el: ".swiper-pagination",
    },
    scrollbar: {
      el: ".number-scrollbar",
    },
    breakpoints: {
      640: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
    },
  });




  var swiper = new Swiper(".journey-swiper", {
    slidesPerView: 2,
    spaceBetween: 20,
    grabCursor: true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: ".slide-button-next",
      prevEl: ".slide-button-prev",
    },
    pagination: {
      el: ".swiper-pagination",
    },
    scrollbar: {
      el: ".number-scrollbar",
    },
    breakpoints: {
      640: {
        slidesPerView: 12,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 1,
        spaceBetween: 30,
      },
      1024: {
        slidesPerView: 6,
        spaceBetween: 30,
      },
    },
  });



Splitting();




var swiper = new Swiper(".footer-swiper", {
  slidesPerView: 3,
  spaceBetween: 20,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".slide-button-next",
    prevEl: ".slide-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  scrollbar: {
    el: ".number-scrollbar",
  },
  breakpoints: {
    640: {
      slidesPerView: 2,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 3,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 4,
      spaceBetween: 30,
    },
  },
});




var swiper = new Swiper(".product-swiper", {
  slidesPerView: 1,
  spaceBetween: 20,
  grabCursor: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  navigation: {
    nextEl: ".slide-button-next",
    prevEl: ".slide-button-prev",
  },
  pagination: {
    el: ".swiper-pagination",
  },
  scrollbar: {
    el: ".number-scrollbar",
  },
  breakpoints: {
    640: {
      slidesPerView: 1,
      spaceBetween: 20,
    },
    768: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
    1024: {
      slidesPerView: 1,
      spaceBetween: 30,
    },
  },
});





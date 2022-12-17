// HEADER HOME

let menu = document.querySelector("#menu-bars");
let navbar = document.querySelector(".navbar");

menu.onclick = () => {
  menu.classList.toggle('fa-time');
  navbar.classList.toggle('active');
}

var swiper = new Swiper(".home-slider",{
  spaceBetween:30,
  centeredSlides:true,
  autoplay:{
    delay:7500,
    disableOnInteration:false,
  },
  pagination:{
    el:".swiper-pagination",
    clickable:true,
  },
  loop:true,
});

var swiper = new Swiper(".anime-slider",{
  slidesPerView:4,
  spaceBetween:30,
  centeredSlides:true,
  autoplay:{
    delay:4500,
    disableOnInteration:false,
  },
  pagination:{
    el:".swiper-pagination",
    clickable:true,
  },
  loop:true,
});

var swiper = new Swiper(".action-slider",{
  slidesPerView:4,
  spaceBetween:30,
  centeredSlides:true,
  autoplay:{
    delay:3500,
    disableOnInteration:false,
  },
  pagination:{
    el:".swiper-pagination",
    clickable:true,
  },
  loop:true,
});

var swiper = new Swiper(".child-slider",{
  slidesPerView:4,
  spaceBetween:30,
  centeredSlides:true,
  autoplay:{
    delay:2500,
    disableOnInteration:false,
  },
  pagination:{
    el:".swiper-pagination",
    clickable:true,
  },
  loop:true,
});

var swiper = new Swiper(".family-slider",{
  slidesPerView:4,
  spaceBetween:30,
  centeredSlides:true,
  autoplay:{
    delay:1500,
    disableOnInteration:false,
  },
  pagination:{
    el:".swiper-pagination",
    clickable:true,
  },
  loop:true,
});


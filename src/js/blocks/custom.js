
    // jQuery methods go here...

  $('.xe-tesla-video').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    autoplay: false,
    asNavFor: '.xe-tesla-content',
  });
  $('.xe-tesla-content').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.xe-tesla-video',
    dots: true,
    focusOnSelect: true,
    autoplay: false,
    fade: true,
    arrows:false,
  });

// Solar steps 

$('.models-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.models-nav'
});
$('.models-nav').slick({
    slidesToShow: 3,
    asNavFor: '.models-for',
    focusOnSelect: true,
    infinite: true,
});

// Vehicals page 

$('.model-images').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.models-wrap',
});
$('.models-wrap').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: '.model-images',
  focusOnSelect: true,
  infinite: true,
});

// Theme type

let main_section = document.getElementsByClassName('banner');
let body = document.getElementsByTagName('body')[0];
console.log(main_section, body);
// main_section.forEach(element => {
//    let text = main_section.getAttribute("class");
//    console.log(text);
// });
for (let index = 0; index < main_section.length; index++) {
  main_section[index].addEventListener('mouseover', ()=>{
    const element = main_section[index].getAttribute("data-theme");
    // console.log(element);
    // let aaaa = element.target.getAttribute();
    // console.log(aaaa);
    body.classList.remove("light");
    body.classList.remove("dark");
    body.classList.add(element);
  })
};

// header dark

$(document).ready(function(){
  
  $(window).scroll(function(){
    if ($(this).scrollTop() > 500) {
       $('.primary-header').addClass('newClass');
    } else {
       $('.primary-header').removeClass('newClass');
    }
  }); 

});

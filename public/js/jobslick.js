$(function(){
    $('.job-slick').slick({
        autoplay: true,
        autoplaySpeed:4000,
        speed: 1000,
        slidesToShow: 1,
        dots: true,
        dotsClass: "pics-dots",
        prevArrow: '<img src="./img/slick-arrow_prev.svg" class="pics-arrow pics-prev">',
        nextArrow: '<img src="./img/slick-arrow_next.svg" class="pics-arrow pics-next">',
        responsive: [{
            breakpoint: 600,
              settings: {
                swipe: true,
                swipeToSlide: true,
                arrows: false
            }
          }
        ]
    });
});
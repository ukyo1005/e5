$(function(){

    /*============================
        ヘッダー
    ============================*/
    let target = $("#about").offset().top;
    $(window).on("scroll", function() {
      let currentPos = $(window).scrollTop();
      if(currentPos > target && !$('#sp-menu-page').hasClass('_show')) {
        $("#move-header").fadeIn('slow');
      } else{
        $("#move-header").fadeOut('slow');
      }
    });

    /*============================
        spメニュー
    ============================*/

    let menuPage = $('#sp-menu-page');

    $('#sp-menu-open01,#sp-menu-open02').click(function() {
        if($("#move-header").css('display') != 'none'){
            $("#move-header").fadeOut();
        }
        menuPage.addClass('_show');
    })

    $('#sp-menu-close01,#sp-menu-close02').click(function() {
        menuPage.removeClass('_show');
    })

    /*============================
        アニメーション
    ============================*/

    $('.r-fadeIn').addClass('animated');

    $(window).on('load scroll', function (){

        var box = $('.fadeIn');
        var animated = 'animated';
        var scrollPos = $(window).scrollTop();
        
        box.each(function(){
        
            var boxOffset = $(this).offset().top;
            var wh = $(window).height();
            
            if(scrollPos > boxOffset - wh + 100 ){
                $(this).addClass(animated);
            }
        });
    
        if(scrollPos > 100) {
            $('.s-fadeIn').addClass('animated');
        }

        if(scrollPos > $('.job').offset().top - 200) {
            $('.news-obj').addClass('animated');
        }
      
    });


    
});
(function ($) {
  $(document).ready(function(){

  // $('.views-exposed-form').


    text = $('.links .statistics_counter').text();
    var number = parseInt(text.replace(/[^0-9\.]/g, ''), 10);
    $('#statistics_counter').html(number);

   	// number -= Math.floor(Math.random() * (number - 0));
    number = parseInt($('.rate-number-up-down-rating').text());
    // console.log(number);
    $('.praise_num').html(number);

    if($('.rate-widget .glyphicon-thumbs-up').hasClass('rate-voted')){
      $('#praise i').addClass('praised');
    }

    $('#praise').click(function(){
    	$('.icon_praise_gray').toggleClass('praised');
    	if($('.praised').length){
    		$('.praise_num').html(( parseInt($('.praise_num').html())+1));
        $('.rate-widget .glyphicon-thumbs-up').trigger('click');
    	}else{
    		$('.praise_num').html(( parseInt($('.praise_num').html())-1));
        $('.rate-widget .glyphicon-thumbs-down').trigger('click');
    	}
    });
    $('#praise_down').click(function(){
        $('.rate-widget .glyphicon-thumbs-down').trigger('click');
    });
    $('.content p').each(function(){
    if($(this).next('ul').length){
         $(this).addClass('data-ul');
    }
    });
    $('p').click(function(){
        if($(this).next('ul').length){
          if($(this).next('ul').is(':visible')){
            $(this).next('ul').slideUp();
            $(this).toggleClass('data-ul-open');
          }else{
            $(this).next('ul').slideDown();
            $(this).toggleClass('data-ul-open');
          }
        }
      }
    );


     //go to top
    $("body").append("<a href='#' id='sbq_gototop'></a>");
    $(function() {
      if ($(window).scrollTop() > 100) {
        $("#sbq_gototop").show();
      } else {
        $("#sbq_gototop").hide();
      }
      //scroll show hide
      $(window).scroll(function() {
        if ($(window).scrollTop() > 100) {
          $("#sbq_gototop").fadeIn(100);
        } else {
          $("#sbq_gototop").fadeOut(50);
        }
      });
      //btn
      $("#sbq_gototop").click(function() {
        $('body,html').animate({
          scrollTop : 0
        }, 500);
        return false;
      });
    });





    $('.view-gzh .comment-add a').click(function(e){
      e.preventDefault();
      var dd = $(this).parents('article').find('#comments .comment-form');
      if(!$(this).parents('article').find('#comments:visible').length){
          $(this).parents('article').find('#comments').removeClass('hidden');
          dd.slideDown();
      }else{
          $(this).parents('article').find('#comments').addClass('hidden');
          dd.slideUp();
      }


    });

    $('.view-gzh .node-readmore a').click(function(e){
      e.preventDefault();
      var dd = $(this).parents('article').find('.gzh-comment-block');
      if(!$(this).parents('article').find('.gzh-comment-block:visible').length){
          dd.removeClass('hidden');
          dd.slideDown();
      }else{
        dd.slideUp();
        dd.addClass('hidden');
      }

    });


  });

  Drupal.behaviors.jstheme = {
    attach: function (context, settings) {
      $('#praise').click(function(){
        $('#rate-button-1').trigger('click');
        // $('.rate-widget-1').hide();
      });
      // $('.rate-widget-1').hide();

      if($('.authorinfo').length){
        var lastScrollTop = 0;
        $(window).scroll(function(event){
           var st = $(this).scrollTop();
           if (st > lastScrollTop){
               // downscroll code
               if(st>=49){
                $('#navbar').hide();
                $('.authorinfo .top').css({"top":"0","position": "fixed","background": "#fff","width": "100%","left": "13px","padding": "10px 10% 0 3%"});
               }
           } else {
              // upscroll code
              if(st<30){
                $('#navbar').slideDown(800);
                $('.authorinfo .top').removeAttr('style');
              }
           }
           lastScrollTop = st;
        });
      }



    }
  }


})(jQuery);

$( document ).ready(function() {

    // Asesorias
    
    $('.hover').hover(function(){
        $(this).addClass('flip');
      },function(){
        $(this).removeClass('flip');
      });

      // testimonios
      $(".faces1 img").hover(function(){
        $(this).css("-webkit-transform","scaleX(-1)")
        $(this).css("transform","scaleX(-1)")
      }, function(){
        $(this).css("-webkit-transform","scaleX(1)")
        $(this).css("transform","scaleX(1)")
      })
      $(".puerta-img img").hover(function(){
        $(this).css("-webkit-transform","scaleX(-1)")
        $(this).css("transform","scaleX(-1)")
      }, function(){
        $(this).css("-webkit-transform","scaleX(1)")
        $(this).css("transform","scaleX(1)")
      })
   
   });

   
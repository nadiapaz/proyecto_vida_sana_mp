


  $(function(){
  $(".append") .append("😍");
  $(".prepend") .prepend("😍");
  });

  $(function(){
  	$("img").on("click", function(){
  		$(this).toggleClass("clase")
  	});
  });


$(document).ready(function(){
 
	$('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		}, 300);
	});
 
	$(window).scroll(function(){
		if( $(this).scrollTop() > 0 ){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		}
	});
 
});

//zoom de la imágen//
$(function() {
  $('img').hover(
    function(){
      var $this = $(this);
      $this.stop().animate({
          'opacity':'1.0',
          'height':'200px',
          'top':'0px',
          'left':'0px'
        });
    },
    function(){
      var $this = $(this);
      $this.stop().animate({
        'opacity':'0.5',
        'height':'500px',
        'top':'-66.5px',
        'left':'-150px'
        });
    }
  );
});

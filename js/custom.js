jQuery(function($){
	
	// Script para que cuando haya navegación por medio de id's, no brince hacia la sección si no que tenga animación de scroll
  $('a[href*=#]:not([href=#])').click(function() {
    $('a').removeClass('selected');
    $(this).addClass('selected');
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
          || location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
          scrollTop: target.offset().top
          }, 1000);
          return false;
        }
    }
   });

   // Show / hide menu navigation
   $('#main-nav .menu-toggle, .main-menu .btn-close').click(function(){
      if($('.main-menu').css("margin-left") == "0px"){
         $('.main-menu').animate({"margin-left": '-=300'});
      } else {
         $('.main-menu').animate({"margin-left": '+=300'});
      }
   });


    // Products basic gallery
    $('.gallery p img').wrap('<div></div>');
    $('.gallery p img').click(function(){
      $('.gallery p img').parent().removeClass('active');
      $(this).parent().addClass('active');
      var nuevaImg = $(this).attr('src');
      $('.gallery .main-img img').attr('src', nuevaImg);
    });

    // Display main image in gallery
    var primerImg = $('.gallery p').first().find('img').attr('src');
    $('.main-img img').attr('src', primerImg);

});
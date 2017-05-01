jQuery(function(){
	
	// Script para que cuando haya navegación por medio de id's, no brince hacia la sección si no que tenga animación de scroll
	jQuery('a[href*=#]:not([href=#])').click(function() {
		jQuery('a').removeClass('selected');
		jQuery(this).addClass('selected');
    	if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') 
       		|| location.hostname == this.hostname) {

      	var target = jQuery(this.hash);
      	target = target.length ? target : jQuery('[name=' + this.hash.slice(1) +']');
      	if (target.length) {
       		jQuery('html,body').animate({
       		scrollTop: target.offset().top
       		}, 1000);
       		return false;
    		}
		}
  	});
	
	
	
});
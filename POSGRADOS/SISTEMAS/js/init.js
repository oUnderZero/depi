(function($){
    $(function(){
      $('.parallax').parallax();
        $('.carousel.carousel-slider').carousel({ 
            indicators: true,
            fullWidth: true,
            duration: 500 });
        setInterval(function() {
        $('.carousel.carousel-slider').carousel('next');
        }, 15000);
      $('.sidenav').sidenav();
      $('.collapsible').collapsible();
        $('.dropdown-trigger').dropdown({ hover: false, closeOnClick: false, coverTrigger: false, constrainWidth: false });
      $('.dropdown-trigger2').dropdown({ hover: true, coverTrigger: false, constrainWidth: false });
      $('.materialboxed').materialbox();
      $('.button-collapse').sideNav();
      
    }); // end of document ready
    
    
  })(jQuery); // end of jQuery name space
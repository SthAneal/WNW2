jQuery(function($) {
  $(document).ready(function() {
    $(window).on('scroll', function(){
      if($(window).scrollTop() > 265){
        $('header.main').addClass('fixed');
        // $('header.main .logo > img:last-of-type').fadeOut("slow");
      }else{
        $('header.main').removeClass('fixed');
        // $('header.main nav .logo img:last-of-type').fadeIn("slow");
      }
      
    })
  });
});

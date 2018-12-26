jQuery(document).ready(function($){
// Add your custom jQuery here

  $(document).scroll(function () {
    var $nav = $(".navbar");
    $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
  });


});
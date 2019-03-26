jQuery(document).ready(function( $ ) {
	
    $('a[data-slide="prev"]').click(function() {
        $('#productsCarousel').carousel('prev');
      });
      
      $('a[data-slide="next"]').click(function() {
        $('#productsCarousel').carousel('next');
      });

      var welcomeData = $("#welcome-data");
      var position = welcomeData.position();

      var maps = $("#the-map");

      maps.css({
        "position": "absolute",
        "left": position.x,
        "top": position.y,
        "height": (welcomeData.height()),
        "width": (welcomeData.width() + 30),
        "opacity": "0.3"
      });
});
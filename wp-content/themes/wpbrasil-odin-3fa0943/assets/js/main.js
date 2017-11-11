jQuery(document).ready(function($) {
	/**
	 * Swipper: Main slider 
	 * */
	var slider_header = new Swiper('.slider_header', {
		slidesPerView: 1,
		paginationClickable: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		spaceBetween: 30,
		loop: true
	});

	/**
	 * Swipper: Gallery slider 
	 * */
	var galery_home = new Swiper('._gallery .swiper-container', {
		slidesPerView: 1,
		paginationClickable: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		spaceBetween: 30,
		loop: true
	});

  /**
   * Swipper: Depoimentos slider 
   * */
  var depoimentos = new Swiper('.depoimentos', {
    slidesPerView: 1,
    paginationClickable: true,
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    spaceBetween: 30,
    loop: true
  });

$('a[href*="#"]')
  // Remove links that don't actually link to anything
  .not('[href="#"]')
  .not('[href="#0"]')
  .click(function(event) {
    // On-page links
    if (
      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
      && 
      location.hostname == this.hostname
    ) {
      // Figure out element to scroll to
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      // Does a scroll target exist?
      if (target.length) {
        // Only prevent default if animation is actually gonna happen
        event.preventDefault();
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 1000, function() {
          // Callback after animation
          // Must change focus!
          var $target = $(target);
          $target.focus();
          if ($target.is(":focus")) { // Checking if the target was focused
            return false;
          } else {
            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
            $target.focus(); // Set focus again
          };
        });
      }
    }
  });
});

/**
 * Maps
 * */
function initMap() {
	var myLatLng = {lat: -22.967213, lng: -43.23930};

	var map = new google.maps.Map(document.getElementById('map'), {
		zoom: 16,
		center: myLatLng,
		mapTypeControl: false
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map,
		title: 'Hello World!'
	});
}
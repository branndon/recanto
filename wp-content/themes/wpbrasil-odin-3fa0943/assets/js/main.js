jQuery(document).ready(function($) {
	/**
	 * Swipper: Main slider 
	 * */
	var produtos = new Swiper('.swiper-container', {
		slidesPerView: 1,
		paginationClickable: true,
		nextButton: '.swiper-button-next',
		prevButton: '.swiper-button-prev',
		spaceBetween: 30,
		loop: true
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
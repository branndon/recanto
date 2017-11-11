var url_base = "";

if (location.hostname === "localhost" || location.hostname === "127.0.0.1"){
    url_base = 'http://localhost/recanto/wp-content/themes/wpbrasil-odin-3fa0943';
} else {
    url_base = 'http://recanto4estacoesigarata.com.br/homolog/wp-content/themes/wpbrasil-odin-3fa0943';
}


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

    /**
     * Formulário de contato
     * */
    jQuery('form#contato button').click( function(e){
        e.preventDefault();
        var sucess_count = 0;

        // Campos do formulário e validação
        var nome        = jQuery("#nome")[0].value;
        var email       = jQuery("#email")[0].value;
        var telefone    = jQuery("#telefone")[0].value;
        var mensagem    = jQuery("#mensagem")[0].value;
        var assunto     = jQuery("#assunto")[0].value;

        for (var i = 0; i < jQuery('form#contato .form-control').length; i++) {
            if (jQuery('form#contato .form-control')[i].localName == 'input' || jQuery('form#contato .form-control')[i].localName == 'textarea') {
                if (jQuery('form#contato .form-control')[i].value) {
                    sucess_count++;
                    jQuery('form#contato .form-control')[i].className = "form-control";
                } else {
                    jQuery('form#contato .form-control')[i].className = "form-control error";
                }
            } else {
                if (jQuery('form#contato .form-control')[i].value != "Selecione") {
                    sucess_count++;
                    jQuery('form#contato .form-control')[i].className = "form-control";
                } else {
                    jQuery('form#contato .form-control')[i].className = "form-control error";
                }
            }
        }

        // Envio do formulário
        if (sucess_count >= 5) {
            jQuery.ajax({
                method: "POST",
                contentType: "application/json",
                url: url_base + "/lib/send_email.php",
                data: JSON.stringify({ "nome": nome, "email": email, "telefone": telefone, "mensagem": mensagem, "assunto": assunto }),
                dataType: 'json'
            }).done(function()  {
                // alert("Success.");
            }).fail(function()  {
                for (var i = 0; i < jQuery('.form-control').length; i++) {
                    if (jQuery('.form-control')[i].localName == 'input' || jQuery('.form-control')[i].localName == 'textarea') {
                        jQuery('.form-control')[i].value = " ";
                    } else {
                        jQuery('.form-control')[i].value = "Selecione";
                    }
                }
                jQuery(".sucesso_msg").slideDown("slow");
            }); 
        }
    });

    /**
     * Formulário de newsletter
     * */
    jQuery('form#newsletter button').click( function(e){
        e.preventDefault();
        var sucess_count = 0;

        // Campos do formulário e validação
        var email       = jQuery("#email_reserve")[0].value;

        if (jQuery('form#newsletter .form-control')[0].value) {
            sucess_count++;
            jQuery('form#newsletter .form-control')[0].className = "form-control";
        } else {
            jQuery('form#newsletter .form-control')[0].className = "form-control error";
        }

        // Envio do formulário
        if (sucess_count >= 1) {
            jQuery.ajax({
                method: "POST",
                contentType: "application/json",
                url: url_base + "/lib/send_newsletter.php",
                data: JSON.stringify({ "email": email }),
                dataType: 'json'
            }).done(function()  {
                console.log("#SUCESSO");
            }).fail(function()  {
                console.log("#FAIL");
            }); 
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
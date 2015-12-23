$(window).scroll(function() {

	var altura = $(window).height()

if ($(this).scrollTop() > (altura-110)){  

    $(MenuHeader).addClass("MenuHeaderShow");

  }else{

    $(MenuHeader).removeClass("MenuHeaderShow");
    
  }
});

//Scroll to top

	function scrollTo (Location){

		//alert("Legal!")

		$('html, body').animate({
			scrollTop: $("#" + Location).offset().top
		}, 1500);

	}

	var ativo = false;

	function abreMenu (){

		if(ativo == false){
			$(MenuMobile1).addClass("MenuMobileShow");
			ativo = true;
		}else{
			$(MenuMobile1).removeClass("MenuMobileShow");
			ativo = false;
		}
	}
$( document ).ready(function(){

	Formulario.init();
	
});

$(window).scroll(function() {
if ($(this).scrollTop() > 400){  
	//alert("legal")
    $('header').addClass("show");
  }
  else{
    $('header').removeClass("show");
  }
});

var Formulario = {

	init: function() {

			$("#formulario").validate({
				

				rules: {
					nome: { required: true, minlength: 2 },
					email: { required: true, email: true },
				},
				messages: {
					nome: { required: 'Por favor preencha corretamente o campo nome', minlength: 'No mínimo 2 letras' },
					email: { required: 'Informe o seu email', email: 'Ops! Por favor, informe um email válido' },
				},
				errorPlacement: $.noop,

				submitHandler: function( form ){
					var dados = $( form ).serialize();
	 
					$.ajax({
						type: "POST",
						url: "includes/envia_form.php",
						data: dados,
						success: function( data )
						{
							alert( "Mensagem enviada! Entraremos em contato brevemente com uma resposta para sua solicitação. Obrigado." );
							$( "#formulario" ).trigger("reset");
						}
					});
	 
					return false;
				}
			});

			$( ".SubmitButton" ).click(function(event){
				event.preventDefault();
				$("#formulario").submit();
			})
	},


	checkform: function() {

		var nome = document.forms["formulario"]["nome"].value;
		
	}
};
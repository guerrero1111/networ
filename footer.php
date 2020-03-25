<div class="footer navbar-fixed-bottom" style="">
	<div class="row">
		<div class="container">
			<div class="col-md-12 text-center">
				<p>Crea tú Tarjeta Gratis ahora</p>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();

    $( ".menunavegacion a" ).click(function( event ) {
        event.preventDefault();
        $("html, body").animate({ scrollTop: $($(this).attr("href")).offset().top }, 500);
    });
    $('.slider-for').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  fade: true,
  asNavFor: '.slider-nav'
});
$('.slider-nav').slick({
  slidesToShow: 2,
  slidesToScroll: 1,
  asNavFor: '.slider-for',
  dots: false,
  centerMode: true,
  focusOnSelect: true
});

  $(".contenedorseccion .divisor i").click(function(){
    $(this).parents(".contenedorseccion").find(".ocultar").toggle();
    $(this).toggleClass( "fa-plus-square" );
    $(this).toggleClass( "fa-minus-square" );
  });

  
});
</script>
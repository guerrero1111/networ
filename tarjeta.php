<style>

</style>
<?php
require("header.php");
?>
<div class="container general">
  <!-- <div class="col-md-3 menula">
    <div class="principal">
      <nav class="navbar navbar-default" role="navigation"> -->
  <!-- El logotipo y el icono que despliega el menú se agrupan
       para mostrarlos mejor en los dispositivos móviles -->
  <!-- <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse"
            data-target=".navbar-ex1-collapse">
      <span class="sr-only">Desplegar navegación</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>
    <span class="navbar-brand">Menú</span>
  </div> -->

  <!-- Agrupar los enlaces de navegación, los formularios y cualquier
       otro elemento que se pueda ocultar al minimizar la barra -->
  <!-- <div class="collapse navbar-collapse navbar-ex1-collapse">
    <div class="menunavegacion">
        <a href="#datos">Datos personales</a>
        <a href="#enlaces">Enlaces</a>
        <a href="#informacion">Información general</a>
        <a href="#datose">Datos empresariales</a>
        <a href="#galeria">Galería</a>
        <a href="#ubicacion">Ubicación</a>
        <a href="#contacto">Contacto</a>
      </div>

  </div> -->
<!-- </nav>
      
    </div>
  </div> -->
<div class="col-md-3">
    <div class="principal">
      <div class="">
        
      </div>
    </div>
  </div>


  <div class="col-md-6 principal">
    <div class="col-md-12 contenedorseccion">
      <div class="col-md-12 text-center contenedorsuperior">
         <a data-toggle="modal" href="#compartir">Compartir tarjeta<i class="fab fas fa-envelope"></i>  <i class="fab fa-whatsapp"></i></a>
      </div>
    </div>





            <div class="col-md-5 text-center" id="datos">
              <img src="fotogoogle.png">
              <img src="google.png" class="logoempresa">
            </div>
            <div class="col-md-7 datosgenerales text-center claro">
              <h1>Alex Smith</h1>
              <p class="t1">Director de nuevos negocios</p>
              <p class="t1">Ingeniero</p>
              <p>Google Inc</p>
              <p class="t2">Tel: 23432423423432 / Ext: 204</p>
              <p class="t2">Cel: 23432423423432</p>
              <p class="t3">alex@google.com</p>
              <p class="t4">Enviar Whatsapp</p>
              <p class="t4">Enviar Correo</p>
            </div>

            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>ENLACES<i class="far fa-plus-square pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 redes ocultar" id="enlaces">

                  <a class="descarga" href="#"><i class="fab fa-facebook-f"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-twitter"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-instagram"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-youtube"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-skype"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-whatsapp"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-spotify"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-linkedin"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-github"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-behance"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-amazon"></i></a>
                  <a class="descarga" href="#"><i class="fas fa-store"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-snapchat-square"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-cc-paypal"></i></a>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>INFORMACIÓN GENERAL<i class="far fa-plus-square pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 claro ocultar" id="informacion">
                 
                  <p>Hello! I’m Alex Smith. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ullamcorper sem, at placerat dolor volutpat ac. Duis nulla enim, condimentum nec ultricies.</p>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>DATOS EMPRESARIALES<i class="far fa-plus-square pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 claro ocultar" id="datose">
                  <p>Sitio Web: www.google.com</p>
                  <p><b>Adjuntos adicionales:</b></p>
                  <p><a class="descarga">DESCARGA BROCHURE</a></p>
                  <p><a class="descarga">DESCARGA PRESENTACIÓN DE SERVICIOS</a></p>
                  <p><a class="descarga">DESCARGA CATÁLOGO DE PRODUCTOS</a></p>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>SERVICIOS<i class="far fa-plus-square pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>
                <div class="col-md-12 claro ocultar" id="servicios">
                  <h3>Servicio 1</h3>
                  <p>Hello! I’m Alex Smith. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ullamcorper sem, at placerat dolor volutpat ac. Duis nulla enim, condimentum nec ultricies.</p>
                  <h3>Servicio 2</h3>
                  <p>Hello! I’m Alex Smith. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ullamcorper sem, at placerat dolor volutpat ac. Duis nulla enim, condimentum nec ultricies.</p>
                  <h3>Servicio 3</h3>
                  <p>Hello! I’m Alex Smith. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ullamcorper sem, at placerat dolor volutpat ac. Duis nulla enim, condimentum nec ultricies.</p>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>GALERÍA<i class="far fa-plus-square pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 ocultar" id="galeria">
                  
                  <div class="slider-for">
                    <div><img src="https://dummyimage.com/600x400/ffffff/00000.png"></div>
                    <div><img src="https://dummyimage.com/600x400/ffffff/00000.png"></div>
                    <div><img src="https://dummyimage.com/600x400/ffffff/00000.png"></div>
                  </div>
                  <div class="slider-nav">
                    <div><img src="https://dummyimage.com/600x400/ffffff/00000.png"></div>
                    <div><img src="https://dummyimage.com/600x400/ffffff/00000.png"></div>
                    <div><img src="https://dummyimage.com/600x400/ffffff/00000.png"></div>
                  </div>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>UBICACIÓN<i class="far fa-plus-square pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 ocultar redes text-center" id="ubicacion">
                  <a class="descarga" href="#"><i class="fab fa-uber"></i></a>
                  <a class="descarga" href="#"><i class="fab fa-waze"></i></a>

                  <p>Calle X, Delegación X, Ciudad X, Estado, País</p>
                 
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1881.2587058429926!2d-99.1335830918904!3d19.433246396720953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1577210184409!5m2!1ses-419!2smx" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>CONTACTAME<i class="far fa-plus-square pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 claro ocultar" id="contacto">
                  
                  <form>
                    <input type="text" name="" placeholder="Nombre y Apellido">
                    <input type="text" name="" placeholder="Asunto">
                    <textarea></textarea>
                    <button>Enviar consulta</button>
                  </form>
                </div>
            </div>
    
  </div>
  <div class="col-md-3">
    <div class="principal">
      <div class="">
        
      </div>
    </div>
  </div>
</div>


<!-- MODAL DE COMPARTIR -->
<div class="modal fade" id="compartir" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header text-center">
          <button type="button" class="close" data-dismiss="modal">
            <span aria-hidden="true">&times;</span><span class="sr-only">Cerrar</span>
          </button>
          <h4 class="modal-title" id="myModalLabel">COMPARTIR TARJETA</h4>
        </div>
        <div class="modal-body">
          <div class="row" style="padding:15px">
            <div class="col-md-6">
              <p>ENVIAR POR CORREO</p>
              <input type="text" name="" placeholder="Correo electrónico">
              <button type="button" class="btn btn-default">ENVIAR</button>
            </div>
            <div class="col-md-6">
              <p>ENVIAR POR WHATSAPP</p>
              <input type="text" name="" placeholder="Teléfono">
              <button type="button" class="btn btn-default">ENVIAR</button>
            </div>

            
          </div>


        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

<!-- <a data-toggle="modal" href="#compartir">
<div class="compartirflotante">
  <i class="fab fas fa-envelope"></i>  
  <i class="fab fa-whatsapp"></i>
</div>
</a> -->


<?php
require("footer.php");
?>
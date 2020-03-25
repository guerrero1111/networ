<?php
require("header.php");
?>
<style>
  body{
    background-color: #ffffff !important;
  }
  </style>
<div class="row">
        <div class="col-md-6 text-center">
            ANTES
            <img src="antes.png">
        </div>
        <div class="col-md-6 text-center">
            AHORA
        </div>
    
</div>
<div class="row text-center espacio">
    <h1>¿PARA QUE SIRVE?</h1>
    <p>Solo toma 15 seg. y es gratis</p>
</div>
<div class="row gris espacio">
    <h1>¿COMO FUNCIONA?</h1>
     <ul id="progressbar" class="progressbar">
        <li class="">Registrate</li>
        <li class="">Agrega tu información</li>
        <li class="">Comparte tu tarjeta</li>    
    </ul>
    <div class="col-md-4 text-center">
        <p>Solo toma 15 seg. y es gratis</p>
    </div>
    <div class="col-md-4 text-center">
        <p>Agrega toda tu información</p>
    </div>
    <div class="col-md-4 text-center">
        <p>Por whatsapp, correo o imagen.</p>
    </div>
</div>
<div class="row text-center espacio">
    <h1>PRUEBALAS EN ACCIÓN</h1>
    <p>Fácil y rápido:</p>
    <p>www.x.com/5564234234</p>
    <p>www.x.com/tucorreo</p>
    <p>www.x.com/personalizado</p>
    <p>Descarga una tarjeta digital y comparte</p>
</div>
<div class="row gris espacio">

    <div class="container">
        <h1>¡ES GRATIS, CREA EL TUYO AHORA EN 15 seg.!</h1>
        <div class="col-md-3">
         
        </div>
        <div class="col-md-6 contgeneral registro">
            <h1>Crea tu propio IDCONECT</h1>
            <div class="text-center contregistro ">        
                <div class="col-md-push-1 col-sm-12 col-md-10 text-center">
                    
                    <input type="text" placeholder="Nombres y Apellidos">
                    <input type="text" placeholder="Teléfono celular">
                    <input type="text" placeholder="Correo">
                    <input type="text" placeholder="Elige tu contraseña">
                    <form action="dashboard.php">
                        <input type="submit" class="btnsiguiente" value="COMENZAR AHORA">
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3">
         
        </div>
        <!-- <div class="col-md-1">
        </div>
        <div class="col-md-6 visuali principal registro1">
            <h1>Así se puede ver tu IDCONECT</h1>
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
                   <p>ENLACES<i class="fas fa-sort-up pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
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
                   <p>INFORMACIÓN GENERAL<i class="fas fa-sort-up pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 claro ocultar" id="informacion">
                 
                  <p>Hello! I’m Alex Smith. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean fermentum ullamcorper sem, at placerat dolor volutpat ac. Duis nulla enim, condimentum nec ultricies.</p>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>DATOS EMPRESARIALES<i class="fas fa-sort-up pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
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
                   <p>GALERÍA<i class="fas fa-sort-up pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
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
                   <p>UBICACIÓN<i class="fas fa-sort-up pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
                </div>

                <div class="col-md-12 ocultar" id="ubicacion">
                  
                  <p>Calle X, Delegación X, Ciudad X, Estado, País</p>
                  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d1881.2587058429926!2d-99.1335830918904!3d19.433246396720953!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses-419!2smx!4v1577210184409!5m2!1ses-419!2smx" width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
            <div class="col-md-12 contenedorseccion">
                <div class="col-md-12 divisor">
                   <p>CONTACTAME<i class="fas fa-sort-up pull-right" data-toggle="tooltip" title="Abrir/Cerrar"></i></p>
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
        </div> -->
    </div>    

    </div>
</div>
<?php
require("footer.php");
?>
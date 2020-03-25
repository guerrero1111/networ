<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1" />
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">   
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=PT+Sans+Caption:400,700&display=swap" rel="stylesheet">

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
  <script src="https://kit.fontawesome.com/d718b59fa5.js" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    
<style>
  p,span,a,h1,h2,h3,h4{
    font-family: 'PT Sans Caption', sans-serif;


  }
  .general{
    margin-top: 20px;
  }
  .gris{
    background-color: #ebebeb;
  }
  .espacio{
    padding-top: 50px;
    padding-bottom: 50px;
  }
  h1{

  }
  i{
    cursor: pointer;
  }
   body {
    counter-reset: step;
    margin-top: 0px !important;
    background: #ececec;
    }
    p{
      line-height: 1.8;
    font-size: 15px;
    }
   #progressbar{
        float: left;
    width: 100%;
    padding: 0px;
    padding-top: 35px;
   }
   .t1{

   }
   .t2{
    line-height: 1;
   }
   .t3{
line-height: 1;
   }
   .t4{
line-height: 1;
   }
   i{
    margin-left: 15px;
   }
   .visualizacion{
    background-color: #005cb0;
   }
   .visualizacion p{
        font-size: 13px;
    padding: 0px;
    margin: 0px;
    line-height: 1;
    color: #ffffff;
    font-weight: bold;
   }
#progressbar li {
  list-style-type: none;  
  width: 33.3%;
  float: left;
  position: relative;
  text-align: center;
}
#progressbar li:before {
  content: counter(step);
  counter-increment: step;
  width: 60px;
  height: 60px;
  line-height: 56px;
  display: block;  
  border-radius: 50%;
  margin: 0 auto 10px auto;
  border: 4px solid #ddd;
  text-align: center;
  background-color: white;
  z-index: 99;
  position: relative;
}
/*progressbar connectors*/
#progressbar li:after {
  content: '';
  width: 100%;
  height: 4px;
  background-color: #ddd;
  position: absolute;
  left: -50%;
  top: 30px;
  z-index: 1; /*put it behind the numbers*/
}
#progressbar li:first-child:after {
  /*connector not needed before the first step*/
  content: none; 
}
#progressbar li.active {
  color: green;
}
#progressbar li.danger {
  color: red;
}
#progressbar li.error {
  color: red;
}
/*marking active/completed steps green*/
/*The number of the step and the connector before it = green*/
#progressbar li.active:before{
  border-color: green;
}
#progressbar li.error:before{
  border-color: red;
}
#progressbar li.active + li:after {
  background-color: green;
}
.modal-large{width: 80%}
.callout.boxcount {
    border-color: #0097bc;
    background: #eee;
}
.disbaled-div {
  pointer-events:none;
}
#po_list tooltip:not(:first-child){
    margin-left: -8px !important;
}
#progressbar li.current:before {
  background: rgba(242,246,248,1);
background: -moz-linear-gradient(left, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(224,239,249,1) 100%);
background: -webkit-gradient(left top, right top, color-stop(0%, rgba(242,246,248,1)), color-stop(0%, rgba(216,225,231,1)), color-stop(100%, rgba(224,239,249,1)));
background: -webkit-linear-gradient(left, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(224,239,249,1) 100%);
background: -o-linear-gradient(left, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(224,239,249,1) 100%);
background: -ms-linear-gradient(left, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(224,239,249,1) 100%);
background: linear-gradient(to right, rgba(242,246,248,1) 0%, rgba(216,225,231,1) 0%, rgba(224,239,249,1) 100%);
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f2f6f8', endColorstr='#e0eff9', GradientType=1 );
}
body{
    margin-top: 20px;
    margin-bottom: 50px;
}
.contregistro input{
    width: 100%;
    margin-top: 10px;
    padding: 5px 10px;
    font-weight: bold;
    margin-top: 10px;
    border: 1px solid #d5d2d2;
}
.contregistro textarea{
  width: 100%;
  margin-top: 10px;
  border: 1px solid #d5d2d2;
  padding: 5px 10px;
    font-weight: bold;
}
.contregistro p{
  font-size: 16px;
    text-align: left;
    margin-top: 22px;
    font-weight: bold;
}
.contregistro > div{
    
}
.contgeneral{
    background-color: #ffffff;
    padding-bottom: 40px;
}
.visuali{
    background-color: #e9dada;
    padding-top: 30px;
}
.paddtarjeta{
    margin: 20px;
    background-color: #ffffff;
    text-align: center;
    padding: 10px;
}
h1{
    font-size: 22px;
    font-weight: bold;
    text-align: center;
    color: #838383;
    margin: 0px 0px 15px 0px;
}
.registro{
  padding:0px;
}
.registro > h1{
    background: #515ba1;
    padding: 10px;
    color: #ffffff;
    margin: 0px 0px 30px 0px;
}
.registro1 > h1{
    background: #1f2553;
    padding: 10px;
    color: #ffffff;
    margin: 0px 0px 30px 0px;
}
.contregistro h1{
    color: #d13b3b;
}

.idiomas{
    color: #000000;
    padding: 4px 0px;
}
.logo{
    width: 40px;
    padding: 5px;
}
.head .container{
  padding: 6px 0px;
}
.head{
  background-color: #1e225b;
}
.nombre{
    font-size: 18px;
    font-weight: bold;
}
.btnsiguiente {
   -webkit-appearance: none;
    background-color: #b53131;
    padding: 10px 40px;
    color: #ffffff;
    font-weight: bold;
    font-size: 15px;
    margin-top: 25px !important;
}
@media only screen and (max-width: 680px) {
  .row{
    margin-right: 0px !important;
    margin-left: 0px !important;
  }
  .idiomas{
    padding-right: 15px;
    padding-left: 15px;
  }
  .paddtarjeta{
    margin: 0px;
  }
}












.footer{
      background-color: #005cb0;
  color: white;
}
.footer p{
  font-weight: bold;
  margin-top: 6px;
}


img{
  max-width: 100%;
}
.principal{
  background-color: #ffffff;
}
form input, form textarea{
  width: 100%;
  margin-bottom: 15px;
}
.principal > div > div{
  padding: 10px 25px 10px 25px;
}
.principal > div > .ocultar{
  padding: 25px 25px 25px 25px;
}
.principal{
  padding: 0px !important;
  margin-bottom: 50px;
}
.contenedorseccion{
  padding: 0px;
}
.contenedorsuperior{
  background-color: #4fd95a;
}
.contenedorsuperior a,.contenedorsuperior a:hover,.contenedorsuperior a:active,.contenedorsuperior a:focus,.contenedorsuperior a:visited{
  text-transform: uppercase;
  font-weight: bold;
  color: #ffffff;
  text-decoration: none;
}
.contenedorsuperior i{
  font-size: 20px;
  padding: 0px 0px 0px 22px;
}
.descarga{
  background-color: #3c47a1;
  color: #ffffff;
  font-weight: bold;
  padding: 4px 14px;
  border-radius: 4px;
  cursor: pointer;
}
.descarga:hover{
      background-color: #3256c8;
  text-decoration: none;
  color: #ffffff;

}
#enlaces input{
  width: 70%;
}
.ocultar{
  display: none;
}
.far{
      font-size: 18px;
    padding: 2px 0px 0px 0px;
}
textarea{
  width: 100%;
}
.fa-trash-alt{
  font-size: 13px !important;
}
.redes i{
   font-size: 23px;
    padding: 6px !important;
    margin: 14px;
    width: 41px;
    text-align: center;
    color: #524c4c;
    border: 2px solid;
    border-radius: 37px;
}
.contenedorsuperior i{
   font-size: 23px;
    padding: 6px !important;

    width: 41px;
    text-align: center;

    border: 2px solid;
    border-radius: 37px;
}
.redes .descarga{
    background-color: transparent !important;
    padding: 0px;
}
.menunavegacion{
      padding: 0px !important;
    background-color: #ebebeb;
    display: inline-block;
    width: 100%;
}
.menunavegacion a{
  width: 100%;
  display: block;
  padding: 8px 15px;
  color: #424040 !important;
  font-weight: bold;
  border-bottom: 1px solid #5093c5;
}
.menunavegacion a:hover,.menunavegacion a:active,.menunavegacion a:focus,.menunavegacion a:visited{
  color: #424040 !important;
  font-weight: bold;
}
h3{
      border-bottom: 1px solid #c3c3c3;
}
.slick-slide{
  height: auto !important;
  border: 1px solid #e6e4e4;
}
.head{
  margin-left: 0px !important;
  margin-right: 0px !important;
}
.slick-prev:before, .slick-next:before{
  color: #2d2727 !important;
}
.navbar-collapse{
  padding: 0px !important;
}
.navbar-header{
  width: 100%;
}
.navbar-brand,.navbar-brand:active,.navbar-brand:focus,.navbar-brand:visited{
    width: 100%;
    padding: 8px 15px !important;
    color: #ffffff !important;
    height: auto !important;
    background-color: #005cb0 !important;
}
.idiomas{
      padding: 10px !important;
}
.logoempresa{
  width: 65%;
  padding: 25px 15px 0px 15px;
}
#datos,.datosgenerales{
  padding: 20px;
}
.datosgenerales p{
  margin-bottom: 5px;
}
.compartirflotante{
  position: fixed;
  top: 20%;
  right: 0px;
  background-color: #1bb81b;
  padding: 6px 5px 6px 8px;
  color: #ffffff;
  font-size: 22px;
  border-radius: 6px 0px 0px 6px;
}
.compartirflotante i{
  clear: both;
  float: left;
  padding: 12px 3px;
}
#contacto button{
  width: 100%;
    background-color: #109710;
    color: #ffffff;
    font-weight: bold;
    padding: 8px;
}
@media only screen and (max-width: 480px) {
  .principal {
    padding: 0px !important;
  }
  .principal > div > div{
    padding: 9px !important;
    border-bottom: 1px solid #909090;
  }
  .claro{
    background-color: #e4e4e4;
  }
  .navbar-brand{
    width: auto;
  }
  .navbar-header{
    background-color: #043660 !important;
  }
  .navbar-toggle{
    padding: 4px 5px !important;
  }
  .navbar-default .navbar-toggle .icon-bar{
    background-color: #fff !important;
    height: 1px !important;
  }
  .navbar{
    min-height: auto !important;
  }
  .principal{
    margin-bottom: 10px !important;
  }
  .menula{
    padding: 0px !important;
    margin: 0px !important;
  }
  .head{
    margin-bottom: 17px !important;
  }
  .navbar-default .navbar-toggle:focus, .navbar-default .navbar-toggle:hover{
    background-color: transparent !important;
  }
  .modal input{
    border: 1px solid #f2f2f2;
  }
}




.divisor{
      background-color: #b5b8b5;
  border-bottom: 1px solid #959292;
}
.divisor a,.divisor a:hover,.divisor a:active,.divisor a:visited,.divisor a:focus{
  color: #ffffff;
  font-weight: bold;
  text-decoration: none;
}
.tarjetasdashboard{
  margin-bottom: 40px;
}
.tarjetasdashboard .conte{
  padding: 20px;
}
.tarjetasdashboard .conte > div{
  background-color: transparent !important;
}
.tarjetasdashboard > div > div{
  background-color: #e6e6e6;
}
.tarjetasdashboard > div > div > p:first-child{
  background-color: #005cb0;
  color: #ffffff;
  font-weight: bold;
  margin-bottom: 0px;
}
.tarjetasdashboard > div > div > p{
  font-weight: bold;
}
.conexiones p{
  margin-top: 5px;
  margin-bottom: 10px;
  font-weight: normal !important;
  font-size: 10px;
  line-height: 1.5;
}
.divisor p{
  color: #ffffff;
  font-weight: bold;
  text-decoration: none;
  margin: 0px;
  line-height: 1.5;
}
.tarjeta .divisor{
      margin: 31px 0px;
}

</style>
</head>
<body>
<div class="row head">
  <div class="container">
    <div class="col-md-6 col-sm-6 col-xs-6 text-left">
        <img class="logo" src="logo2.png">
    </div>
    <div class="col-md-6 col-sm-6 col-xs-6 text-right idiomas">
        <b>ES</b> / IN
    </div>
  </div>
</div>

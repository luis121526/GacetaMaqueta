<?php
session_start();
$usuario = $_SESSION['username'];

if(!isset($usuario)){
    header("location: index.php");
}else{
?>

<!DOCTYPE html>
<html lang="ea">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Lorem Ipsum</title>

  <!-- Inicia llamando librerias -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link href = "https://fonts.googleapis.com/css?family= Lato & display = swap" rel = "stylesheet">
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/mainnabvar.css" rel="stylesheet">
  <link href="../css/dropdown.css" rel="stylesheet">
  <link href="../css/sidebar.css" rel="stylesheet">
  <link href="../css/index.css" rel="stylesheet">
  <link href="../css/general.css" rel="stylesheet">
  <script src="../js/slidermenu.js"></script>
  <script src="../js/dropdown.js"></script>
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/clean-blog.min.js"></script>
   <!-- Termina llamando librerias -->
</head>


<!--Inicia Cabecera-->
  <header>
<!--Inicia nabvar-->
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: white" id="mainNav">
<div class="container-fluid">

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

<a class="navbar-brand" href="#">Lorem Ipsum</a>

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#lateral" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Locaciones</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
    <li class="dropdown-item"><a href="Contenidoweb/cancun.php">Cancún/Rivera Maya</a></li>
    <li class="dropdown-item"><a href="cancun.php">Cancún/Rivera Maya</a></li>
        <li class="dropdown-item"><a href="cdmx.php">CDMX</a></li>
        <li class="dropdown-item"><a href="guadalajara.php">Guadalajara</a></li>
        <li class="dropdown-item"><a href="monterrey.php">Monterrey</a></li>
        <li class="dropdown-item"><a href="queretaro.php">Queretaro</a></li>
      </ul>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Eventos</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="#">Alianzas</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Organización</a>
      <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">
        <li class="dropdown-item"><a href="#">Organigrama</a></li>     
        <li class="dropdown-item"><a href="#">Políticas</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Miembros</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
        <li class="dropdown-item"><a href="#">Nuevos Ingresos</a></li>  
        <li class="dropdown-item"><a href="#">Miembros Actuales</a></li>
      </ul>
    </li>
    <li class="nav-item">
    <a class="nav-link" href="buzon.php">Buzón</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="salir.php">Cerrar Sesion</a>
    </li>
    </ul>
  </div>
</div>
</nav>

<!--Termina nabvar-->
  </header>
  <!--Termina Cabecera-->


<!--Inicia Cuerpo de la pagina--->
<body id="fondo">
<!--Inicia Slider-->
<br><br>    
<div id="carousel" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carousel" data-slide-to="0" class="active"></li>
    <li data-target="#carousel" data-slide-to="1"></li>
  </ol>
  <div class="carousel-inner">
      <div class="carousel-item active">
          <img class="d-block w-100" src="../img/1.jpg">
      </div>
      <div class="carousel-item">
          <img class="d-block w-100" src="../img/1.jpg">
      </div>
  </div>
</div>
<!--Termina Slider-->


<!--Inicia Contenido-->
<div id="fondopag" class="container">
    <div class="container">

<!---Divs del contenedor general----->
        <div class="row">

<!---Comienza contenedor---->
            <div class="col">
                <div class="content-section">

<!---Divs del contenedor central----->
<!------------------------------------------------------------------------>
<div class="row">
<div class="col-12">
  <div class="col section-tittle"><h4 class="title">Lorem Ipsum</h4></div>
  <br><br>
</div>
</div>
<div class="row">
<div class="col-12">
        <figure>
            <img alt="picture" src="../img/3.jpg" class="img-fluid" width="350" height="350">
        </figure>
    </div> 
</div>
<div class="col-12" id="fondosecciones"><br>
<div class="row">
  <div class="col section-tittle"><h4 class="title">Lorem Ipsum</h4></div>
</div>

<!------------------------------------------------------------------------>

<section><br>
<div class="row">
<div class="col-md-5 polaroid">
  <a href="cfdi.php"><img alt="picture" src="../img/2.jpg" class="img-fluid"></a>
  <div class="container">
  <p>Lorem Ipsum</p>
</div>
</div>

<div class="col-md-5 polaroid">
  <a href="#"><img alt="picture" src="../img/2.jpg" class="img-fluid"></a>
  <div class="container">
  <p>Lorem Ipsum</p>
</div>
</div>
</div>
</section>
<!------------------------------------------------------------------------>

<section><br>
<div class="row">
<div class="col-md-5 polaroid">
  <a href="#"><img alt="picture" src="../img/2.jpg" class="img-fluid"></a>
  <div class="container">
  <p>Lorem Ipsum</p>
</div>
</div>

<div class="col-md-5 polaroid">
  <a href="#"><img alt="picture" src="../img/2.jpg" class="img-fluid"></a>
  <div class="container">
  <p>Lorem Ipsum</p>
</div>
</div>
</div><br>
</section>
<!------------------------------------------------------------------------>
</div><br><br>


<!---Termina Div del contenedor central----->
</div>  
</div>
<!---Termina contenedor---->


<!---Inicia barra lateral---->  
            <div class="col-4" id="lateral">
              <div class="sidebar-item">
                <div class="make-me-sticky">
<!---Inicia Div del barra lateral----->

<div class="sidebar-box">
  <div class="sidebar section-tittle">
    <h5 id="iniciativa">Lorem Ipsum</h5>
  </div>
</div><hr>




   <div class="text-center">
    <h6>Lorem Ipsum</h6>
  </div>


  <div class="col-12">
  <a href="#modalcorazonbistro" data-toggle="modal" data-target="#modalcorazonbistro">
  <img src="../img/2.jpg" alt="Avatar" class="image">
</a>
 

</div>
<br>






<div class="sidebar-box">
  <div class="sidebar section-tittle">
    <h5 id="iniciativa">Lorem Ipsum</h5>
  </div>
</div><hr>






<div class="text-center">
    <h6>Lorem Ipsum</h6>
  </div>


  <div class="col-12">
  <a href="#modalcovid19" data-toggle="modal" data-target="#modalcovid19">
  <img src="../img/2.jpg" alt="Avatar" class="image">
  </a>
</div>
<br>






<div class="text-center">
    <h6>Lorem Ipsum</h6>
  </div>


  <div class="col-12">
  <a href="#modalselvanatura" data-toggle="modal" data-target="#modalselvanatura">
  <img src="../img/2.jpg" alt="Avatar" class="image">
  </a>
</div>
<br>



</div>   
</div>



<!---Termina Div del barra lateral----->
                </div>
              </div>
            </div>

<!---Termina barra lateral---->   
<!---Termina Div del contenedor general----->
        </div>
<!---Termina contenedor general---->
    </div>
</div>







<!----------------------------------------------------------INICIA MODAL1------------------------------------------------------->
<!--VALOR DEL MES-->

          <div class="modal fade" id="modalvalordelmes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
                <!--Content-->
                <div class="modal-content">
                  <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>

                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                     <div class="embed-responsive embed-responsive-16by9">
                      <video class="video-fluid z-depth-1" controls muted autoplay>
                      <source src="../img/diadelniño.mp4" type="video/mp4">
                      </video>
                    </div>
                  </div> 
              </div>
            </div>

</div>
<!----------------------------------------------------------TERMINA MODAL1------------------------------------------------------->
<!----------------------------------------------------------INICIA MODAL2------------------------------------------------------->
<!--ANUNCIO CORAZON BISTRO-->

<div class="modal fade" id="modalcorazonbistro" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <!--Content-->
                <div class="modal-content">
                  <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                    <div class="col">
              <figure>
                <img alt="picture" src="../img/anuncios/tema1.jpg" class="img-fluid">
              </figure>
            </div>
                  </div>  
              </div>
            </div>

</div>
<!----------------------------------------------------------TERMINA MODAL2------------------------------------------------------->
<!----------------------------------------------------------INICIA MODAL3------------------------------------------------------->
<!--ANUNCIO COVID19-->

<div class="modal fade" id="modalcovid19" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <!--Content-->
                <div class="modal-content">
                  <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                    <div class="col">
              <figure>
                <img alt="picture" src="../img/anuncios/coronavirus.png" class="img-fluid">
              </figure>
            </div>
                  </div>  
              </div>
            </div>

</div>
<!----------------------------------------------------------TERMINA MODAL3------------------------------------------------------->
<!----------------------------------------------------------INICIA MODAL4------------------------------------------------------->
<!--ANUNCIO SELVA NATURA-->

<div class="modal fade" id="modalselvanatura" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <!--Content-->
                <div class="modal-content">
                  <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                    <div class="col">
              <figure>
                <img alt="picture" src="../img/anuncios/selvanatura.png" class="img-fluid">
              </figure>
            </div>
                  </div>  
              </div>
            </div>

</div>
<!----------------------------------------------------------TERMINA MODAL4------------------------------------------------------->

<!----------------------------------------------------------INICIA MODAL5------------------------------------------------------->
<!--CALENDARIO-->

<div class="modal fade" id="modalcalendario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-lg">
                <!--Content-->
                <div class="modal-content">
                  <div class="modal-header">
          <h4 class="modal-title"></h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>


                  <!--Body-->
                  <div class="modal-body mb-0 p-0">
                    <div class="col-12 container-calendario">                  
                    <iframe class="responsive-iframe" src="https://calendar.google.com/calendar/embed?height=600&amp;wkst=1&amp;bgcolor=%234285F4&amp;ctz=America%2FCancun&amp;src=dm5waWJjM2xtZm92bnA3dGVyMHYyaDExZ3JrcmExbGRAaW1wb3J0LmNhbGVuZGFyLmdvb2dsZS5jb20&amp;color=%233F51B5&amp;showTitle=0&amp;showNav=1&amp;showDate=1&amp;showPrint=0&amp;showTabs=1&amp;showCalendars=0&amp;showTz=0"></iframe>
            </div>
                  </div>  
              </div>
            </div>

</div>
<!----------------------------------------------------------TERMINA MODAL5------------------------------------------------------->


<!--------------------------------------------------------- Footer ---------------------------------------------------->
  <footer>
    <hr>
    <div class="container">
      <div class="row">

        <div class="col">
          <ul class="list-inline text-center">
            <li class="list-inline-item">
              <a href="https://www.instagram.com/sicasa_oficial/">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-instagram fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
            <li class="list-inline-item">
            <span id="counter">
            <script src="#"></script>
            </span>
            </li>
            <li class="list-inline-item">
              <a href="https://www.facebook.com/sicasaoficial/">
                <span class="fa-stack fa-lg">
                  <i class="fas fa-circle fa-stack-2x"></i>
                  <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                </span>
              </a>
            </li>
          </ul>
          <br>
          <p class="copyright text-muted">&copy; Lorem Ipsum 2020</p>
        </div>
      </div>
    </div>
  </footer>
<!--------------------------------------------------------- Footer ---------------------------------------------------->



  <script>
$(document).ready(function(){
    $('.carousel').carousel({
      interval: 10000
    });
  });
  </script>
 <script>
   $('body').on('hidden.bs.modal', '.modal', function () {
$('video').trigger('pause');
});
 </script>
<!--bloquear click derecho-->
 <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>
<script>
$(function(){
		$("#myModal").modal();
	});
</script>

</body>
</html>


<?php
}
?>
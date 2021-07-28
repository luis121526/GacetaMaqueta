<?php session_start();

//include 'conexion.php';

$usuario=$_SESSION['username'];
if(!isset($usuario)){
        header("location: index.php");
    }else{
        /*

$r=mysqli_query($conexion,"SELECT usuario,nombre,apellido,cod_vend,img_perf FROM usuarios WHERE usuario ='$usuario'");

while($s=$r->fetch_assoc()){
  $name=$s['usuario'];
  $nombre=$s['nombre'];
  $apellido=$s['apellido'];
  $cod=$s['cod_vend'];
  $img=$s['img_perf'];
}
          $sql="SELECT *FROM usuarios WHERE usuario='$usuario'";
          $stm=$conexion->query($sql);
          while ($datos=$stm->fetch_object()) {
            $imagen = base64_encode($datos->img_perf);
    
      }*/
    ?>

<!DOCTYPE html>
<html lang="ea">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">



  <title>Miembros Actuales</title>

    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="gallery-grid.css">

<!-- Inicia llamando librerias -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
  <link href = "https://fonts.googleapis.com/css?family= Lato & display = swap" rel = "stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
  <link rel="stylesheet" href="gallery-grid.css">
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/mainnabvar.css" rel="stylesheet">
  <link href="../css/dropdown.css" rel="stylesheet">
  <link href="../css/sidebar.css" rel="stylesheet">
  <link href="../css/general.css" rel="stylesheet">
  <link href="../css/estilobuzon.css" rel="stylesheet">
  <link rel="stylesheet" href="../css/galeria.css">
  <script src="../js/slidermenu.js"></script>
  <script src="../js/dropdown.js"></script>
  <script src="../js/jquery/jquery.min.js"></script>
  <script src="../js/bootstrap.bundle.min.js"></script>
  <script src="../js/clean-blog.min.js"></script>
  <!--<link rel="stylesheet" type="text/css" href="../css/miestilo.css">-->
   <!-- Termina llamando librerias -->
  



  




  
</head>











<!--Inicia Cabecera-->
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
        <li class="dropdown-item"><a href="cancun.php">Cancún/Rivera Maya</a></li>
        <li class="dropdown-item"><a href="cdmx.php">CDMX</a></li>
        <li class="dropdown-item"><a href="guadalajara.php">Guadalajara</a></li>
        <li class="dropdown-item"><a href="monterrey.php">Monterrey</a></li>
        <li class="dropdown-item"><a href="queretaro.php">Queretaro</a></li>
      </ul>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="../Contenidoweb/eventos.php">Eventos</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="../Contenidoweb/alianzas.php">Alianzas</a>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Organización</a>
      <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">
        <li class="dropdown-item"><a href="../Contenidoweb/organigrama.php">Organigrama</a></li>     
        <li class="dropdown-item"><a href="../Contenidoweb/politicas.php">Políticas</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Miembros</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
        <li class="dropdown-item"><a href="../Contenidoweb/nuevoingreso.php">Nuevos Ingresos</a></li>  
        <li class="dropdown-item"><a href="../Contenidoweb/actuales.php">Miembros Actuales</a></li>
      </ul>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="buzon.php">Buzón</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="../salir.php">Cerrar Sesion</a>
    </li>
    </ul>
  </div>
</div>
</nav>
 
  <!--Termina nabvar-->
  <!--Termina Cabecera-->

  <body class="menu">
  <!-- Main Content -->
  
  <div class="container" id="fondopag">
<br><br>
  


  




</div>
<br>

  <!------------------------------------------------------------------------------------------------------>


  <!-- Footer -->

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
            <script src="visitas.php"></script>
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
          <p class="copyright text-muted">&copy; Sicasa Cancun 2020</p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/clean-blog.min.js"></script>



  <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
  <script>
$(document).ready(function(){
    $('.carousel').carousel({
      interval: 10000
    });
  });
  </script>

 <script type='text/javascript'>
  document.oncontextmenu = function(){return false}
</script>


</body>

</html>
<?php
}
?>


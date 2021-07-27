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



  <title>TemasInteres</title>

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
<header>
<nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #EBF9F8" id="mainNav">
<div class="container-fluid">
<a class="navbar-brand" href="http://gaceta.sicasa.com.mx/"><img alt="picture" src="img/logos/logoSicasa.png" width="50" class="img-fluid"></a>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Gaceta</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
        <li class="dropdown-item"><a href="efemerides.php">Efemérides</a></li>
        <li class="dropdown-item"><a href="cumplemes.php">Cumpleañeros</a></li>
        <li class="dropdown-item"><a href="nuevoingreso.php">Nuevo Ingreso</a></li>
        <li class="dropdown-item"><a href="proveedormes.php">Proveedor del mes</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Informacion General</a>
      <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">
        <li class="dropdown-item"><a href="directorio.php">Directorio</a></li>
        <li class="dropdown-submenu">
      <a class="dropdown-item" tabindex="-1" href="#">Convenios</a>
      <ul class="dropdown-menu" style="background-color: #EBF9F8">
          <li class="dropdown-item"><a href="opticavision.php">Optica Vision Look</a></li>
      </ul>
        </li>
         <li class="dropdown-submenu">
      <a class="dropdown-item" tabindex="-1" href="#">Temas de Interés</a>
      <ul class="dropdown-menu" style="background-color: #EBF9F8">
          <li class="dropdown-item"><a href="construccion.php">Localidad</a><a id="asterisco">*</a></li>
          <li class="dropdown-item"><a href="construccion.php">Eventos</a><a id="asterisco">*</a></li>
<li class="dropdown-item"><a href="menu_platicas.php">Pláticas</a></li>      <li class="dropdown-item"><a href="izamal.php">Conoce tu País</a></li>
      <li class="dropdown-item"><a href="construccion.php">Tendencias</a><a id="asterisco">*</a></li>
      <li class="dropdown-item"><a href="construccion.php">Otros</a><a id="asterisco">*</a></li>
      </ul>
      
        </li>       
          
          <li class="dropdown-item"><a href="materialreferencia.php">Material de Referencia</a></li>
      </ul>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false">Empresa</a>
    <ul class="dropdown-menu multi-level" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
    <li class="dropdown-submenu"><a  class="dropdown-item" tabindex="-1" href="#">Cultura</a>
      <ul class="dropdown-menu" style="background-color: #EBF9F8">
        <li class="dropdown-item"><a tabindex="-1" href="eventos.php">Eventos</a></li>
        <li class="dropdown-item"><a href="integracion.php">Integración</a></li>
        <li class="dropdown-item"><a href="capacitacion.php">Capacitación</a></li>
        <li class="dropdown-item"><a href="construccion.php">Convocatorias<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.php">Iniciativas<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.php">Clubes<a id="asterisco">*</a></a></li>
      </ul>
    </li>
        <li class="dropdown-item"><a href="politica.php">Políticas</a></li>  
        <li class="dropdown-item"><a href="construccion.php">Vacantes<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.php">Perfil de Puesto<a id="asterisco">*</a></a></li>
        <li class="dropdown-item"><a href="construccion.php">Historia<a id="asterisco">*</a></a></li>
        
        <li class="dropdown-submenu">
      <a class="dropdown-item" tabindex="-1" href="#">Organizacion</a>
      <ul class="dropdown-menu" style="background-color: #EBF9F8">
          <li class="dropdown-item"><a href="construccion.php">Localidad<a id="asterisco">*</a></a></li>
          <li class="dropdown-item"><a href="construccion.php">Eventos<a id="asterisco">*</a></a></li>
      </ul>
        </li>       
        <li class="dropdown-item"><a href="construccion.php">Certificaciones<a id="asterisco">*</a></a></li>
      </ul>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="ventas.php">Ventas</a>
    </li>
    <li class="nav-item">
          <a class="nav-link" href="Buzon2.php">Buzon de la confianza</a>
    </li>
    <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" id="dropdown1" data-toggle="dropdown" href="#" aria-haspopup="true" aria-expanded="false"><?php echo $usuario ?>
  </a>
    
    <ul class="dropdown-menu dropdown-menu-right" role="menu" aria-labelledby="dropdownMenu" style="background-color: #EBF9F8">     
        <li class="dropdown-item"><?//php echo $nombre." ".$apellido?></li>
        <li class="dropdown-item">C.R. <?php //echo " ".$cod ?></li>
        <li class="dropdown-item"><a href="salir.php">Cerrar Sesion</a></li>
      </ul>
    </li>
    <li class="nav-item">
    <!--<img src="data:image/jpeg; base64 ,<?php //echo $imagen ?> " width="32" height="27" class="img-fluid">-->
    </li>
    </ul>
  </div>
</div>
</nav>
  </header>  
  <!--Termina nabvar-->
  <!--Termina Cabecera-->

  <body  id="fondo">
  <!-- Main Content -->
  
  <div class="container" id="fondopag">
<br><br>
  


  	<form method="POST" action="procesar2.php">

    <div class="row">
  <div class="col">
      <br>
      <span>
      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-mailbox" width="52" height="52" viewBox="0 0 24 24" stroke-width="1.5" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
        <path d="M10 21v-6.5a3.5 3.5 0 0 0 -7 0v6.5h18v-6a4 4 0 0 0 -4 -4h-10.5" />
        <path d="M12 11v-8h4l2 2l-2 2h-4" />
        <path d="M6 15h1" />
        </svg>
      </span>

  </div>
</div><br>

  <div class="mb-3">
    <input type="text" class="form-control" name="asunto" placeholder="Asunto De Mensaje">
    
  </div>

  <div class="form-floating">
  <textarea class="form-control" placeholder="Escribe tus comentarios" name="coments" style="height: 100px"></textarea>
</div>
<br>
  <div class="privacidad">
    <div class="form-check">
    <input type="checkbox" class="form-check-input"  name="acepto" value=1>
    <label class="form-check-label" for="exampleCheck1">Deseo que mi mensaje sea anónimo</label>
  </div>
  </div>
<br>
  <button type="submit" class="btn btn-info btn-sm">Enviar</button>
</form>




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


<?php
session_start();

if(isset($_SESSION['username'])){
  header("location: inicio.php");
}
else{
  ?>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="index.css" type="text/css">

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
<br>
    <!-- Icon -->
    <div class="fadeIn first">
      <!--dejé comentado la imagen de sicasa debido a que no se refleja en la pagina-->

      <!--<a href="https://www.sicasa.com.mx"><img src="logo 2.jpg" id="icon" alt="User Icon"/></a>-->
      
      <!--dejé comentado la imagen de sicasa debido a que no se refleja en la pagina-->

      <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-users" width="84" height="84" viewBox="0 0 24 24" stroke-width="2" stroke="#000000" fill="none" stroke-linecap="round" stroke-linejoin="round">
      <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
      <circle cx="9" cy="7" r="4" />
      <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
      <path d="M16 3.13a4 4 0 0 1 0 7.75" />
      <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
    </svg>
    
    </div>

    <!-- Login Form -->
    <form action="loguear.php" method="POST">
      <input type="text" id="login" class="fadeIn second" name="usuario" placeholder="Ingrese su Usuario">
      <input type="password" id="password" class="fadeIn third" name="contraseña" placeholder="Ingrese su Password">
      <input type="submit" class="fadeIn fourth" value="Ingresar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      Si olvidaste tu password, favor de contactar al departamento de TI
    </div>

  </div>
</div>


<?php
}
?>



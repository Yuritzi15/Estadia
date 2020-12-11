<!DOCTYPE html>
<?php session_start()  ?>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Inicio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="vistas/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="vistas/dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <!--SweetAlert 2-->
  <script src="vistas/plugins/sweetalert2/sweetalert2.all.js"></script>
  <link rel="stylesheet" href="vistas/plugins/sweetalert2/sweetalert2.min.css">

</head>
<body class="hold-transition sidebar-mini sidebar-collapse login-page">

<?php
if (isset($_SESSION['login']) && $_SESSION['login'] == 'activa'){
 echo '<div class="wrapper">';

  //Paginas
  if(isset($_GET["enlace"])){
    if($_GET["enlace"] == "inventario" || $_GET["enlace"] == "cerrar" || $_GET["enlace"] == "agregar" || $_GET["enlace"] == "eliminar" || $_GET["enlace"] == "editar" || $_GET["enlace"] == "VerPersonal" || $_GET["enlace"] == "GuardarPersonal" || $_GET["enlace"] == "EliminarPersonal" || $_GET["enlace"] == "EditarPersonal"){
      include "modulos/".$_GET["enlace"].".php";
    }
  else{
    include "modulos/404.php";
    }
  }
  else{
      //Barra
  include 'modulos/contenido.php';
  //Pie
  }
  //Paginas

  //Barra
  include 'modulos/sidebar.php'; 

  include 'modulos/pie.php';
  //Pie

  echo '</div>';}

  else{
    include 'vistas/modulos/login.php';
  }
?>
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->



<!-- jQuery -->
<script src="vistas/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="vistas/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="vistas/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="vistas/dist/js/demo.js"></script>
</body>
</html>

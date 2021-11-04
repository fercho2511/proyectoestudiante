
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!--esta es una primero linea de seguridad -->


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INFOES</title>
  
 <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/fontawesome/css/all.css">
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">


  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/fontawesome-free/css/all.min.css">
  
  <!-- DataTables -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/dist/css/adminlte.min.css">




  <!-- Font Awesome -->
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/summernote/summernote-bs4.min.css">
  

  <!-- para comunicados en vista profe --> 
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/bootstrap-colorpicker/css/bootstrap-colorpicker.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- Select2 -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
  <!-- Bootstrap4 Duallistbox -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">
  <!-- BS Stepper -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/bs-stepper/css/bs-stepper.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/plugins/dropzone/min/dropzone.min.css">
  <!-- Theme style -->



    <!-- Google Font: Source Sans Pro -->
  <!-- Font Awesome -->
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/dist/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->


 <!--===============================================================================================-->
 <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/css/util.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/css/main.css">

    <!-- validaciones con java nuevo metodo -->
   <link rel="stylesheet" href="https://necolas.github.io/normalize.css/8.0.1/normalize.css">
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet"> 
   <link rel="stylesheet" href="<?php echo base_url(); ?>adminLTE/dist/validar/css/estilos.css"> 

    <!-- asta aca se ara las validaciones  -->
    

  
<style>
  [class*="sidebar-dark-"] {
    background-color: #2A0944;
    
}

</style>
<style>
body {
    margin: 0;
    font-family: "Source Sans Pro",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol";
    font-size: 15px;
    font-weight: 50;
    line-height: 1.5;
    color: #26778d;
    text-align: left;
    background-color: #2A0944;
}
</style>
<style>
  .main-footer {
    background-color: #2A0944;
    border-top: 1px solid #dee2e6;
    color: #f0f0f0;
    padding: 1rem;
    text-align: center;


}
</style>
<style>
  .navbar-white {
    background-color: #3B185F;
    color: #121441;
}
</style>
<style>
 
</style>
<style>
footer {
    position: fixed;
    height: 38px;
    bottom: 0;
    width: 100%;
}
</style>
<style>
  .sidebar {
    
    position: fixed;
    margin-top: 50px;
    margin-bottom: 100px;
}
</style>
<style>

.navbar {
    left: 0;
    position: fixed;
    right: 0;
    top: 0;
    z-index: 1037;
}
</style>
<style>
  .layout-navbar-fixed .wrapper .brand-link {
    overflow: hidden;
    position: fixed;
    top: 0;
    transition: width .3s ease-in-out;
    width: 250px;
    z-index: 1035;
}
</style>¨
<style>
  .layout-navbar-fixed .wrapper .content-wrapper {
    margin-top: 20px;
    margin-bottom: 100px;
}
</style>
<style>
.brand-link{    
    position: fixed;
   
}
</style>

<style>
.content-header {

    padding: 50px ;
    margin-bottom: 0px;

}
</style>



</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__wobble" src="<?php echo base_url(); ?>adminLTE/dist/img/logo_loguin.png" alt="INFOES" height="80" width="80">
  </div>
  






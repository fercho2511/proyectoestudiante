



<footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 1.0
    </div>
    <strong>Desarrolado por Fernando Silva Leyton &copy; 2021-2025 </strong> Derechos Reservados.
  </footer>

 
<!-- jQuery -->
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<!-- AdminLTE for demo purposes -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- para la validacion en js -->
<script src="<?php echo base_url(); ?>adminLTE/dist/js/validacion.js"></script>


<!-- jQuery -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->

<script src="<?php echo base_url(); ?>adminLTE/plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/dist/js/adminlte.min.js"></script>
     <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/bootstrap/js/popper.js"></script>
    <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/daterangepicker/moment.min.js"></script>
    <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>adminLTE/dist/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="<?php echo base_url(); ?>adminLTE/dist/js/main.js"></script>


<!-- para la impresion -->
<!-- jQuery -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- DataTables  & Plugins -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/jszip/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>



<!-- para la validacion de la tablaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->

<!-- jQuery -->
<!-- Bootstrap 4 -->
<!-- jquery-validation -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<!-- <script src="<?php echo base_url(); ?>adminLTE/dist/js/adminlte.min.js"></script> -->
<!-- AdminLTE for demo purposes -->
<!-- <script src="<?php echo base_url(); ?>adminLTE/dist/js/demo.js"></script> -->
<!-- Page specific script -->
<!-- <script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Registro Exitoso!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      email: {
        required: true,
        email: true,
      },
      password: {
        required: true,
        minlength: 5,
      },
     
      nombres: {
        required: true,
        minlength:3,
        maxlength:30,        
        pattern:'[A-Za-z]{3,25}',
        
      },
      apellidoPaterno: {
        required: true,
        minlength:3,
        maxlength:20,        
        pattern:'[A-Za-z]{3,25}',
        
      },
      apellidoMaterno: {
        required: false,
        minlength:3,
        maxlength:20,        
        pattern:'[A-Za-z]{3,25}',
        
      },
      fechaNacimiento:{
        required: true,
      },
      ci:{
        required: true,
        minlength:4,
        maxlength:12
        // unique:true,
      },
      telefono:{
        required: false,
        minlength: 7,
        maxlength:8,    
        // pattern='^[0-9]+',  
       
      },
      terms: {
        required: true,
      },
      
      
    },
    messages: {
      email: {
        required: "porfavor ingrese su correo",
        email: "ingrese correo valido"
      },
      password: {
        required: "porfsvor ingrese su pasword",
        minlength: "su paswor necesita almenso 5 caracteres"
      },
      nombres: {
        required: "porfavor ingrese palabra valida",
        minlength: "minimo de 3 letras",
        maxlength:"maximo de 30 letras",
        pattern:"INGRESE FORMATO CORRECTO"
      },
      apellidoPaterno: {
        required: "porfavor ingrese palabra valida",
        minlength: "minimo de 3 letras",
        maxlength:"maximo de 20 letras",
        pattern:"INGRESE FORMATO CORRECTO"
      },
      apellidoMaterno: {
        required: "porfavor ingrese palabra valida",
        minlength: "minimo de 3 letras",
        maxlength:"maximo de 20 letras",
        pattern:"INGRESE FORMATO CORRECTO"
      },
      fechaNacimiento: {
        required: "porfavor ingrese fecha valida"      
      },
      ci:{
        required:"porfavor ingrese C.I. valido",
        minlength:"minimo 4 digitos",
        maxlength:"maximo 12 digitos",
        // unique:"EL C.I. ingresaro ya esta registrado"
      },
      telefono:{
        minlength: "minimo de 7 digitos",
        maxlength:"maximo de 8 digitos",
        number:"INGRESE FORMATO CORRECTO",
        pattern:"INGRESE SOLO NUMEROS ENTEROS"
       
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script> -->
<!-- asta aca es la validacon  -->









<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>adminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>







</body>

</html>


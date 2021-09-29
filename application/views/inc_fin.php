



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
<script src="<?php echo base_url(); ?>adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>adminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
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
</script>
<!-- asta aca es la validacon  -->


<!-- otra validacion para-->
<script src="<?php echo base_url(); ?>adminLTE/dist/validar/js/formulario.js"></script>
<script src="https://kit.fontawesome.com/2c36e9b7b1.js" crossorigin="anonymous"></script>









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


<!-- para comunicados en vista de rpofe -->
  <!-- PARA LOS SCRIP -->
  <script src="<?php echo base_url(); ?>adminLTE/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url(); ?>adminLTE/plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="<?php echo base_url(); ?>adminLTE/plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url(); ?>adminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url(); ?>adminLTE/dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>







</body>

</html>


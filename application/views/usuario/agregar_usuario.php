<!-- <link type="text/css" href="<?php echo base_url(); ?>/bootstrap/css/ui-darkness/jquery-ui-1.8.23.custom.css" rel="Stylesheet" />
	<script type="text/javascript" src="<?php echo base_url(); ?>/bootstrap/js/jquery-1.8.0.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>/bootstrap/js/jquery-ui-1.8.23.custom.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>/bootstrap/js/jquery.ui.datepicker-es.js"></script>
	<script type="text/javascript">
	$(function() {
		$("#datepicker").datepicker();
		$("#format").change(function() { $('#datepicker').datepicker('option', {dateFormat: $(this).val()}); });
	});
	</script> -->






  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORMULARIO </h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Registrar Usuario</h3>
              </div>
             
              <!-- <form enctype="multipart/form-data" action="usuario_per/agregarUsu" id="quickForm"> -->
<?php echo validation_errors(); ?>
                                    <div class="card-body"  >
                                    <!-- <form id="quickForm" >  -->
                                    

                                      <?php
                                          echo form_open_multipart ('usuario_per/agregarUsu')
                                         ?>
                                         
                                            <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                            <div class="form-group">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name='nombres'  placeholder="Ingrese Nombre" 
                                                                                    title="" required minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}' >
                                            </div>
                                            <div class="form-group"  >
                                                <label class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" name='apellidoPaterno'  placeholder="Ingrese Apellido Paterno"
                                                required minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}' >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" name='apellidoMaterno'  placeholder="Ingrese Apellido Materno" minlength="3"  maxlength="30"    pattern='[A-Za-z]{3,25}'  >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Fecha Nacimiento</label>
                                                <input type="date" class="form-control" name='fechaNacimiento'  placeholder="Ingrese Fecha Nacimiento" required >
                                            </div>
                                            <div class="form-group" >
                                              <label for="">sexo:</label>
                                              <select class="form-control" name="sexo" required>
                                                <option>M</option>
                                                <option>F</option>                                               
                                              </select>
                                            </div>

                                            <!-- para el mensaje de alerta -->
                                            <!-- <div type="hidden" class="alert alert-danger" id="msg-error" >
                                                <div class="list-errors" > 
                                                </div>
                                            </div> -->
                                            <!-- asta aca el mensaje -->

                                            <div class="form-group">
                                                <label class="form-label">C.I.</label>
                                                <input type="text" class="form-control" name='ci'  placeholder="Ingrese C.I." required   minlength="4"  maxlength="12" >
                                                <!-- required onblur="compruebaValidoEntero()" -->
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telefono</label>
                                                <input type="number" class="form-control" name='telefono'  placeholder="Ingrese telefono"  min="1"  pattern='^[0-9]+'   minlength="7"  maxlength="8"  >
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="form-label">Correo</label>
                                                <input type="text" class="form-control" name='correo'  placeholder="Ingrese Correo Electronico" >
                                            </div> -->
                                            <div class="form-group">
                                                <label class="form-label">Direccion</label>
                                                <input type="text" class="form-control" name='direccion'  placeholder="Ingrese Direccion" >
                                            </div>
                                            
                                            

                                            <div class="form-group">
                                              <label for="">Rol:</label>
                                              <select class="form-control" name="rol" >
                                                <option>Profesor</option>
                                                <option>Estudiante</option>
                                                <option>Administrador</option>
                                               
                                              </select>
                                            </div>
                                            



                                            


                                            <div class="card-footer">
                                                <button class="btn btn-primary" type="submit" title="Registrar" value="upload" >
                                                <span class="fas fa-clipboard-check"> REGISTRAR</span>
                                                </button>
                                                <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" title="Cancelar" >
                                                <span class="far fa-window-close"> CANCELAR</span>
                                              </button>

                                             </div>
                                          
                                                <?php
                                                echo form_close();
                                                ?>
                                              <!-- </form>     -->
                                    
                                    </div>
                                    <!-- /.card-body -->
                     <!-- </form>     -->

                               
        
            </div>
           
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  



</form>
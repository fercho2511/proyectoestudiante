





  <!-- Content Wrapper. Contains page content -->
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
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Registrar Profesor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
     
                                    <div class="card-body">
                                        <?php
                                             //invocaremos a [profesor] q pusimos en el array asociativo $data de eprofesor.php
                                            echo form_open_multipart('usuario_per/agregarUsu')
                                         ?>
                                             <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                            <div class="form-group">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name='nombres'  placeholder="Ingrese Nombre" required >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" name='apellidoPaterno'  placeholder="Ingrese Apellido Paterno" required >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" name='apellidoMaterno'  placeholder="Ingrese Apellido Materno" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Fecha Nacimiento</label>
                                                <input type="date" class="form-control" name='fechaNacimiento'  placeholder="Ingrese Fecha Nacimiento" required>
                                            </div>
                                            <div class="form-group">
                                              <label for="">sexo:</label>
                                              <select class="form-control" name="sexo" >
                                                <option>M</option>
                                                <option>F</option>                                               
                                              </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">C.I.</label>
                                                <input type="text" class="form-control" name='ci'  placeholder="Ingrese C.I." required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telefono</label>
                                                <input type="text" class="form-control" name='telefono'  placeholder="Ingrese telefono" >
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
                                               
                                              </select>
                                            </div>
                                          
                                            <div class="card-footer">
                                                <button class="btn btn-outline-info" type="submit" title="Registrar" >
                                                <span class="fas fa-clipboard-check"> REGISTRAR</span>

                                                </button>
                                                <button class="btn btn-outline-info" type="button" onclick="history.back()" name="volver atr??s" title="Cancelar" >
                                                <span class="far fa-window-close"> CANCELAR</span>
                                                </button>

                                             </div>
                                                <?php
                                                echo form_close();
                                                ?>
                                    
                                    </div>
                                    <!-- /.card-body -->
              
           
        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <br><br>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
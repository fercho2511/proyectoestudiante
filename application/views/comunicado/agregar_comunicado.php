

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
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
                <h3 class="card-title">Crear Comunicado</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                            

                                    <div class="card-body">
                                        <?php
                                             //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                            echo form_open_multipart('comunicado/agregarCom')
                                         ?>
                                          <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                          <div class="form-group">
                                              <label for="">Tipo:</label>
                                              <select class="form-control" name="tipo" >
                                                <option>Actividades Curriculares</option>
                                                <option>Reuniones</option>
                                                <option>Notificaciones</option>
                                                <option>Fechas de Examen</option>
                                                <option>Otros</option>
                                               
                                              </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Descripcion</label>
                                                <input type="text" class="form-control" name='descripcion' height="50">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Fecha</label>
                                                <input type="date" class="form-control" name='fechaComunicado' height="50">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Hora</label>
                                                <input type="time" class="form-control" name='hora' height="50">
                                            </div>
                                            
                                         

            


                                              

                                            <div class="card-footer">
                                                <button class="btn btn-primary" type="submit" title="Registrar" >
                                                <span class="fas fa-clipboard-check"> REGISTRAR</span>
                                                </button>
                                                <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" title="Cancelar">
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
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
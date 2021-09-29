<br>
<br>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Comunicado</h1>
          </div>
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Advanced Form</li>
            </ol>
          </div> -->
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
      
        <div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Estudiantes</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
              </button>
              <button type="button" class="btn btn-tool" data-card-widget="remove">
                <i class="fas fa-times"></i>
              </button>
            </div>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label>Multiple</label>
                  <select class="duallistbox" multiple="multiple">
                    <option selected>Alabama</option>
                    <option>Felipe</option>
                    <option>ximena</option>
                    <option>andrea</option>
                    <option>esmeralda</option>
                    <option>pedro</option>
                    <option>ana</option>
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
          <!-- /.card-body -->
          
        </div>
       
      </div>
    </section>

    <!-- aca implementado otasr cosas -->
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
                                            <!-- <div class="form-group">
                                                <label class="form-label">Descripcion</label>
                                                <input type="text" class="form-control" rows="10" cols="40" name='descripcion'   required>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="form-label">Descripcion</label>
                                                <textarea name="descripcion" rows="10" cols="40" required></textarea>
                                            </div>
                                            

                                            <div class="form-group">
                                                <label class="form-label">Fecha</label>
                                                <input type="date" class="form-control" name='fechaComunicado' height="50" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Hora</label>
                                                <input type="time" class="form-control" name='hora' height="50" required>
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



  </div>
  <br>
  <br>
  <br>
  <br>  



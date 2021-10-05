


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
          <div class="col-md-12">
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

                                          <div class="form-group col-md-4" >
                                              <label for="">Tipo:</label>
                                              <select class="form-control" id="actividad2" name="tipo" required  >
                                                 <option  value ="0" selected>Elija una Opcion</option>
                                                <option value="1">Actividades Curriculares</option>
                                                <option value="2">Reuniones</option>
                                                <option value="3">Notificaciones</option>
                                                <option value="4">Fechas de Examen</option>
                                                <option value="5">Otros</option>
                                               
                                              </select>
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="form-label">Descripcion</label>
                                                <input type="text" class="form-control" rows="10" cols="40" name='descripcion'   required>
                                            </div> -->
                                            <div class="form-group">
                                                <label class="form-label">Descripcion</label>
                                                <textarea name="descripcion" id="descripcion2" rows="10" cols="120" required class="form-control"  ></textarea>
                                            </div>

                                            <div class="form-group col-md-3" >
                                                <label class="form-label">Fecha</label>
                                                <input type="date" class="form-control" name='fechaComunicado' height="50" required id="fecha2" >
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label class="form-label">Hora</label>
                                                <input type="time" class="form-control" name='hora' height="50" required id="hora2" >
                                            </div>
                                        </div>
                                    <!-- /.card-body -->
              
           
        
         
          <!-- /.card-header -->
          <!-- <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label>Estudiantes</label>
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
                 /.form-group -->
           


          <!-- DESDE ACA LA LSITA DE ESTUDIANTES -->
          <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre Completo</th>                                            
                                                <th>Seleccionar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                                    $indice=1;
                                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                    foreach ($estudiante-> result() as $row) {
                                        ?>
                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->nombres;?>
                                                        <?php echo $row->apellidoPaterno;?>
                                                        <?php echo $row->apellidoMaterno;?>
                                                </td>
                                                

                                                
                                                <td>
                                                <div class="btn-group btn-group-justified" >
                                                 <input type="checkbox" name="envio" id="envio">


                                                </div>
                                                </td>
                                                          </tr>
                                      <?php
                                      $indice++;
                                  }
                                  ?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                            <th>N°</th>
                                                <th>Nombre Completo</th>                                            
                                                <th>Seleccionar</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
          <!-- ASTA ACA LA LISTA DE ESTUDIANRTES -->
          
                                              <div class="card-footer">
                                                <button class="btn btn-primary" type="submit" title="Registrar" id="boton2" >
                                                <span class="fas fa-clipboard-check"> REGISTRAR</span>
                                                </button>
                                                <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" title="Cancelar">
                                                <span class="far fa-window-close"> CANCELAR</span>
                                                </button>

                                             </div>
                                                <?php
                                                echo form_close();
                                                ?>
          <!-- /.card-body -->
          
        </div>
        </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div>
       
      </div>
      
    </section>

    <!-- aca implementado otasr cosas -->
    
  
  <br>
  <br>  






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
              
                             <?php
                               //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                             echo form_open_multipart('profesor/enviarCom2')
                             ?>
                             <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">


                                    <div class="card-body">
                                        
                                          <div class="form-group col-md-4" >
                                              <label for="">Tipo:</label>
                                              <select class="form-control" id="actividad1" name="tipo" required  >
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
                                                <label class="form-label">Descripcion: </label>
                                                <textarea name="descripcion" id="descripcion1" rows="10" cols="120" required class="form-control" disabled ></textarea>
                                            </div>

                                            <div class="form-group col-md-3" >
                                                <label class="form-label">Fecha: </label>
                                                <input type="date" class="form-control" name='fecha' height="50"  id="fecha1" >
                                            </div>

                                            <div class="form-group col-md-2">
                                                <label class="form-label">Hora: </label>
                                                <input type="time" class="form-control" name='hora' height="50" id="hora1" >
                                            </div>
                                            <!-- <div class="form-group col-md-4"> -->
                                            <!-- <label class="form-label">Enviar a:</label> -->
                                              <!-- <select name="general" id="general1" class="form-control" required>
                                              <option value="0" selected>Elija una opcion</option>
                                              <option value="1">TODOS</option>
                                              <option value="2">ESTUDIANTE</option>
                                              </select> -->
                                            <!-- </div> -->
                                  </div>
                        


                                      <!-- DESDE ACA LA LSITA DE ESTUDIANTES -->
                                      <section class="content">
                                            <div class="container-fluid">
                                                <!-- <div class="row" id="estudiante1"> -->
                                                <div class="form-group col-md-4">
                                                <label class="form-label">Enviar a:</label>
                                                
                                                </div>
                                                <div class="row" id="estudiante1">

                                                    <div class="col-12">
                                                        <div class="card">
                                                            <!-- /.card-header -->
                                                            <div class="card-body">
                                                                
                                                              <table id="example1" class="table table-bordered table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <!-- <th>N°</th> -->
                                                                            <th>Nombre Completo del Estudiante</th>                                            
                                                                            <!-- <th>Seleccionar</th> -->

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <label><input type="checkbox" name="selectall" id="selectall"> SELECCIONAR TODO</label>

                                                                        <?php
                                                                        $indice=1;
                                                                        //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                                                        foreach ($estudiante-> result() as $row) {
                                                                            ?>
                                                                            <tr>
                                                                                <!-- <td><?php echo $indice;?></td> -->
                                                                                <td>
                                                                                <div class="btn-group btn-group-justified" >
                                                                                <label><input type="checkbox" class="case" name="estudiante[]" value="<?php echo $row->idUsuario ;?>"> <?php echo $row->nombres;?> </label>

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
                                                                                <!-- <th>N°</th> -->
                                                                                    <th>Nombre Completo del Estudiante</th>                                            
                                                                                    <!-- <th>Seleccionar</th> -->
                                                                                </tr>
                                                                            </tfoot>
                                                                </table>
                                                                
                                                                  <div >Ids seleccionados en matriz <span id="arr"></span></div>
                                                                  <div >Ids seleccionados <span id="str"></span></div>
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
                                                <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">
                                                <input type="hidden" name="idGestion" value="6">
                                                <input type="hidden" name="idCurso" value="1">



                                                <button class="btn btn-primary" type="submit" title="Registrar" id="boton1" >                                                  
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


        <!-- aver desde aca provaremos -->




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



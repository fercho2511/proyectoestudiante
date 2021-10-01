

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


                                          <!-- aca vendria el select -->
                                          
    <!-- provando el selector -->
                                              <div class="form-group col-md-4">
                                              <select name="general" id="general" class="form-control">
                                              <option value="0" selected>Elija una opcion</option>
                                              <option value="1">TODOS</option>
                                              <option value="2">CURSOS</option>
                                              <option value="3">ESTUDIANTE</option>

                                              </select>
                                          </div>

                                          <div class="form-group col-md-4">
                                              <select name="diagnostico1" id="diagnostico1" class="form-control" disabled>
                                              <option value ="0" selected>Elija una Opcion</option>
                                              <option value="1">Tumoral</option>
                                              <option value="2">Enfermedad Infecciosa</option>
                                              <option value="3">tiroides</option>
                                              <option value="4">bronquitis</option>
                                              <option value="5">diabetes</option>
                                              </select>

                                              <select name="diagnostico2" id="diagnostico2" class="form-control" disabled>
                                              <option  value ="0" selected>Elija una Opcion</option>
                                              <option value="1">Tumoral</option>
                                              <option value="2">Enfermedad Infecciosa</option>
                                              <option value="3">tiroides</option>
                                              <option value="4">bronquitis</option>
                                              <option value="5">diabetes</option> 
                                              </select>





                                              <!-- /.content -->
                                            </div>


                                            <!-- listado de cursos -->
                                            <section class="content"  >
                                                          <div class="row" id="cursos" >
                                                              <div class="col-12">
                                                                  <div class="card">
                                                                      
                                                                        
                                                                      <!-- /.card-header -->
                                                                      <div class="card-body">
                                                                          
                                                                          <table id="example1" class="table table-bordered table-striped">
                                                                              <thead>
                                                                                  <tr>
                                                                                      <th>N°</th>
                                                                                      <th>Curso</th>                                               
                                                                                      <th>Paralelo</th>
                                                                                      <!-- <th>Tutor</th>   -->
                                                                                      <!-- <th>Acceso</th> -->
                                                                                      <th>Acciones</th>

                                                                                  </tr>
                                                                              </thead>
                                                                              <tbody disabled>
                                                          <?php
                                                              $indice=1;
                                                              //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                                              foreach ($curso-> result() as $row) {
                                                                  ?>
                                                                                      <tr>
                                                                                      <td><?php echo $indice;?></td>
                                                                                      <td><?php echo $row->curso;?></td>  
                                                                                      <td>
                                                                                          <?php
                                                                                          if ($row->idParalelo==1){
                                                                                              echo 'A';
                                                                                          }
                                                                                          else{
                                                                                              if ($row->idParalelo==2) {
                                                                                                  echo 'B';
                                                                                              }
                                                                                              else{
                                                                                                  if ($row->idParalelo==3) {
                                                                                                      echo 'C';
                                                                                                  }
                                                                                                  else{
                                                                                                      if ($row->idParalelo==4) {
                                                                                                          echo 'D';
                                                                                                      }
                                                                                                      else{
                                                                                                          echo 'E';
                                                                                                      }
                                                                                                      
                                                                                                  }

                                                                                              }
                                                                                              
                                                                                          }
                                                                                          ?>
                                                                                      </td>
                                                                                      <!-- <td><?php echo $row->tutor;?></td>                                                -->
                                                                                      <!-- <td>
                                                                                      <?php
                                                                                          if ($row->estado==0){
                                                                                              echo 'Desabilitado';
                                                                                          }
                                                                                          else{
                                                                                              echo 'Habilitado';
                                                                                          }
                                                                                          ?>
                                                                                      </td> -->
                                                                                      <!-- <td>
                                                                                          <div>
                                                                                          <?php
                                                                                                  echo form_open_multipart('curso/cursoCreado')
                                                                                              ?>
                                                                                              <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
                                                                                              <button type="submit" class="btn btn-outline-dark" title="Acceder al Curso">
                                                                                              <span class="far fa-arrow-alt-circle-right"></span>

                                                                                              </button>
                                                                                              <?php
                                                                                                  echo form_close();
                                                                                              ?>
                                                                                          </div>
                                                                                      </td> -->
                                                                                    

                                                                                      
                                                                                      <td>
                                                                                          <div class="btn-group btn-group-justified" >
                                                                                          <!--  -->
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
                                                                                      <th>Curso</th>                                               
                                                                                      <th>Paralelo</th>
                                                                                      <!-- <th>Tutor</th>   -->
                                                                                      <!-- <th>Acceso</th> -->
                                                                                      <th>Acciones</th>
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
                                                      
                                                      <!-- /.container-fluid -->
                                                  </section>


                                            <!-- asta aca lso cursos -->


                                          <div class="form-group" >
                                              <label for="">Tipo:</label>
                                              <select class="form-control" id="actividad" name="tipo"  >
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
                                                <textarea name="descripcion" id="descripcion" rows="10" cols="120" required class="form-control" disabled ></textarea>
                                            </div>
                                            

                                            <!-- <div class="form-group">
                                                <label class="form-label">Fecha</label>
                                                <input type="date" class="form-control" name='fechaComunicado' height="50" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Hora</label>
                                                <input type="time" class="form-control" name='hora' height="50" required>
                                            </div> -->
                                            
                                         

            


                                              

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

  <!-- /.content-wrapper -->
  <br><br>
  <br>

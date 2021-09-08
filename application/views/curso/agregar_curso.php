
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
                <h3 class="card-title">Registrar Curso</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                            

                                    <div class="card-body">
                                        <?php
                                             //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                            echo form_open_multipart('curso/agregarCurso')
                                         ?>
                                          <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                           <!-- <div class="form-group">
                                                <label class="form-label">curso</label>
                                                <input type="text" class="form-control" name='curso'  placeholder="curso" >
                                            </div> -->
                                            <div class="form-group">
                                              <label for="">Curso:</label>
                                              <div class="col-sm-2" >
                                              <select class="form-control" name="curso" >
                                                <option>1º</option>
                                                <option>2º</option>
                                                <option>3º</option>
                                                <option>4º</option>
                                                <option>5º</option>
                                                <option>6º</option>
                                                <option>7º</option>                                               
                                              </select>

                                              </div>
                                             
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="form-label">seccion</label>
                                                <input type="date" class="form-control" name='fechaInicioGestion'>
                                            </div> -->
                                            <div class="form-group" weight="5px">
                                              <label for="">Sección:</label>
                                              <div class="col-sm-2">
                                              <select class="form-control" name="seccion" >
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                                <option>F</option>
                                                <option>G</option>                                               
                                              </select>
                                              </div>
                                             
                                            </div> 

                                            <!--  desde aca agarramos todos lso profes ingresados-->
                                            <!-- <div class="form-group">
                                              <label for="">tutor:</label>  
                                              <select name="tutor">
                                                  <?php
                                                  // foreach ($arrProfesores as $i => $profesion)
                                                    // echo '<option values="',$i,'">',$profesion,'</option>';
                                                  ?>
                                                  </select>
                                            </div> -->


                                            <!-- para la gestion -->
                                            <!-- <div class="form-group">
                                              <label for="">Gestion:</label>  
                                              <select name="gestion">
                                                  <?php
                                                  foreach ($arrGestion as $i => $gestion)
                                                    echo '<option values="',$i,'">',$gestion,'</option>';
                                                  ?>
                                                  </select>
                                            </div> -->
                                              
                                            <!-- asta aca -->
                                            
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
  





  <!-- Content Wrapper. Contains page content -->
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
                <h3 class="card-title">Modificar curso</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

                    <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infocurso-> result() as $row) 
                    {
                        echo form_open_multipart('curso/modificarCurso')
                        ?>
                        <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
                        <!-- <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>"> -->


                                    <div class="card-body">
                                    
                                    <div class="form-group">
                                              <label for="">Curso:</label>
                                              <select class="form-control" name="curso" value="<?php echo $row->curso;?>" >
                                                <option>1º</option>
                                                <option>2º</option>
                                                <option>3º</option>
                                                <option>4º</option>
                                                <option>5º</option>
                                                <option>6º</option>
                                                <option>7º</option>                                               
                                              </select>
                                    </div>
                                   
                                    <div class="form-group">
                                              <label for="">Sección:</label>
                                              <select class="form-control" name="seccion" value="<?php echo $row->seccion;?>" >
                                                <option>A</option>
                                                <option>B</option>
                                                <option>C</option>
                                                <option>D</option>
                                                <option>E</option>
                                                <option>F</option>
                                                <option>G</option>                                               
                                              </select>
                                            </div>
                                    <div class="form-group">
                                                <label class="form-label">Tutor</label>
                                                <input type="text" class="form-control" name='tutor' value="<?php echo $row->tutor;?>">
                                    </div> 
                                    


                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit" title="Guardar Cambios" >
                                        <span class="far fa-save"> GUARDAR</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" title="Cancelar" >
                                        <span class="far fa-window-close"> CANCELAR</span>
                                      </button>

                                    </div>
                        <?php
                        echo form_close();
                        }

                    ?>
              
            </div>

            








        
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
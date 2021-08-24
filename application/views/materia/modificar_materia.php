




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
                <h3 class="card-title">Modificar Materia</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

                    <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infomateria-> result() as $row) 
                    {
                        echo form_open_multipart('materia/modificarMateria')
                        ?>
                        <input type="hidden" name="idMateria" value="<?php echo $row->idMateria;?>">
                         <!-- <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>"> -->
                         <?php echo $this->session->userdata('idusuario');?>


                                    <div class="card-body">
                                    <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                    <div class="form-group">
                                        <label class="form-label">Materia</label>
                                        <input type="text" class="form-control" name='materia'  value="<?php echo $row->materia;?>" >
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
  
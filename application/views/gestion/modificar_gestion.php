




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
                <h3 class="card-title">Modificar Gestion</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

                    <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infogestion-> result() as $row) 
                    {
                        echo form_open_multipart('gestion/modificarGestion')
                        ?>
                        <input type="hidden" name="idGestion" value="<?php echo $row->idGestion;?>">
                        <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">


                                    <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Gestion</label>
                                        <input type="text" class="form-control" name='gestion'  value="<?php echo $row->gestion;?>" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Fecha Inicio de Gestion</label>
                                        <input type="DATE" class="form-control" name='fechaInicioGestion'  value="<?php echo date('Y-m-d', strtotime($row->fechaInicioGestion))?>" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Fecha Fin de Gestion</label>
                                        <input type="date" class="form-control" name='fechaFinGestion'  value="<?php echo date('Y-m-d', strtotime($row->fechaFinGestion))?>" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Fecha Inicio de Receso</label>
                                        <input type="date" class="form-control" name='fechaInicioReceso'  value="<?php echo date('Y-m-d', strtotime($row->fechaInicioReceso))?>" >
                                        
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Fecha Fin de Receso</label>
                                        <input type="date" class="form-control" name='fechaFinReceso'  value="<?php echo date('Y-m-d', strtotime($row->fechaFinReceso))?>" >
                                    </div>


                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button class="btn btn-outline-info" type="submit" title="Guardar Cambios" >
                                        <span class="far fa-save"> GUARDAR</span>
                                        </button>
                                        <button class="btn btn-outline-info" type="button" onclick="history.back()" name="volver atrás" title="Cancelar" >
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
    <br><br>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
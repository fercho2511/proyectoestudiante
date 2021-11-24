

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>COMUNICADOS </h1>

            <!-- con esta linea se puede obtener un dato enviado por el controlador -->
            <!-- <h1><?php echo $reunion;?></h1> -->
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info card-outline">
              
              
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
    
        <div class="row">
          <div class="col-md-4" >
          
            <div class="card" style="text-align: center">
              <!-- <div class="card-header">
                <h3 class="card-title">Comunicados</h3>
              </div> -->
              <div class="card-body">

                            <?php
                            echo form_open_multipart('estudiante/actividades')                            
                              ?>
                               <!-- <input type="hidden" name="tipo" value="Actividades Curriculares"> -->


                                <button class="btn btn-app bg-secondary" style='width:100px; height:80px'>
                                  <span class="badge bg-success"><?php echo $actividad;?> </span>
                                  <i class="fas fa-school"></i> Actividades Curriculares
                              </button>
                              

                            <?php
                            echo form_close();
                            ?>


                          <?php
                            echo form_open_multipart('estudiante/reuniones')
                          ?>    
                              <button class="btn btn-app bg-success" style='width:100px; height:80px'>
                                <span class="badge bg-purple"><?php echo $reunion;?> </span>
                                <i class="fas fa-handshake"></i> Reuniones
                              </button>

                            <?php
                            echo form_close();
                            ?>


                    <?php
                      echo form_open_multipart('estudiante/notificaciones')
                    ?>    
                      <button class="btn btn-app bg-danger" style='width:100px; height:80px'>
                  <span class="badge bg-teal"><?php echo $notificacion;?> </span>
                  <i class="fas fa-bell"></i> Notificaciones
                  <!-- <i class="far fa-bell"></i> -->
                  </button>
                      <?php
                      echo form_close();
                      ?>


                    <?php
                      echo form_open_multipart('estudiante/examen')
                    ?>    
                      <button class="btn btn-app bg-warning" style='width:100px; height:80px'>
                  <span class="badge bg-info"><?php echo $examen;?> </span>
                  <i class="fas fa-calendar"></i> Fechas de examen
                  </button>
                      <?php
                      echo form_close();
                      ?>



                    <?php
                          echo form_open_multipart('estudiante/otros')
                        ?>    
                          <button class="btn btn-app bg-info" style='width:100px; height:80px'>
                      <span class="badge bg-danger"><?php echo $otro;?> </span>
                      <i class="fas fa-grin"></i> Otros
                    </button>
                          <?php
                          echo form_close();
                          ?>
                 </div>

              </div>
            </div>
            
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /. row -->
      </div><!-- /.container-fluid -->
    </section>
    <br>
  <br>
    <!-- /.content -->
  </div>
  
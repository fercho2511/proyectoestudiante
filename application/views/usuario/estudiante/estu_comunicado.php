<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>COMUNICADOS</h1>
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              
              
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
    
        <div class="row">
          <div class="col-md-8">
          
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Comunicados</h3>
              </div>
              <div class="card-body">
                <div class="btn-group-vertical" >

                            <?php
                            echo form_open_multipart('estudiante/actividades')                            
                              ?>
                               <!-- <input type="hidden" name="tipo" value="Actividades Curriculares"> -->

                              <div class="col-sm-10" >

                                <button class="btn btn-app bg-secondary">
                                  <span class="badge bg-success">0</span>
                                  <i class="fas fa-school"></i> Actividades Curriculares
                              </button>
                              </div>

                            <?php
                            echo form_close();
                            ?>


                          <?php
                            echo form_open_multipart('estudiante/reuniones')
                          ?>    
                            <div class="col-sm-11" >
                              <button class="btn btn-app bg-success">
                                <span class="badge bg-purple">5</span>
                                <i class="fas fa-handshake"></i> Reuniones
                              </button>
                            </div>

                            <?php
                            echo form_close();
                            ?>


                    <?php
                      echo form_open_multipart('estudiante/notificaciones')
                    ?>    
                      <button class="btn btn-app bg-danger">
                  <span class="badge bg-teal">0</span>
                  <i class="fas fa-bell"></i> Notificaciones
                  <!-- <i class="far fa-bell"></i> -->
                  </button>
                      <?php
                      echo form_close();
                      ?>


                    <?php
                      echo form_open_multipart('estudiante/examen')
                    ?>    
                      <button class="btn btn-app bg-warning">
                  <span class="badge bg-info">1</span>
                  <i class="fas fa-calendar"></i> Fechas de examen
                  </button>
                      <?php
                      echo form_close();
                      ?>



                    <?php
                          echo form_open_multipart('estudiante/otros')
                        ?>    
                          <button class="btn btn-app bg-info">
                      <span class="badge bg-danger">6</span>
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
    <!-- /.content -->
  </div>
  <br>
  <br>
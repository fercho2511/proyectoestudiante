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
                      <?php
                      echo form_open_multipart('estudiante/actividades')
                        ?>
                        <button class="btn btn-app bg-secondary">
                          <span class="badge bg-success">0</span>
                          <i class="fas fa-barcode"></i> Actividades Curriculares
                        </button>
                      <?php
                      echo form_close();
                      ?>


                    <?php
                      echo form_open_multipart('estudiante/reuniones')
                    ?>    
                      <button class="btn btn-app bg-success">
                        <span class="badge bg-purple">5</span>
                        <i class="fas fa-users"></i> Reuniones
                      </button>
                      <?php
                      echo form_close();
                      ?>


                    <?php
                      echo form_open_multipart('estudiante/notificaciones')
                    ?>    
                      <button class="btn btn-app bg-danger">
                  <span class="badge bg-teal">0</span>
                  <i class="fas fa-inbox"></i> Notificaciones
                  </button>
                      <?php
                      echo form_close();
                      ?>


                    <?php
                      echo form_open_multipart('estudiante/examen')
                    ?>    
                      <button class="btn btn-app bg-warning">
                  <span class="badge bg-info">1</span>
                  <i class="fas fa-envelope"></i> Fechas de examen
                  </button>
                      <?php
                      echo form_close();
                      ?>



                    <?php
                          echo form_open_multipart('estudiante/otros')
                        ?>    
                          <button class="btn btn-app bg-info">
                      <span class="badge bg-danger">6</span>
                      <i class="fas fa-heart"></i> Otros
                    </button>
                          <?php
                          echo form_close();
                          ?>
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
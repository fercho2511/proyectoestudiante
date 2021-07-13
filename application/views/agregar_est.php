

  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORMULARIO </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
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
                <h3 class="card-title">Registrar Estudiante</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                            

                                    <div class="card-body">
                                        <?php
                                             //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                            echo form_open_multipart('estudiante/agregarEst')
                                         ?>
                                            <div class="form-group">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name='nombre'  placeholder="Ingrese Nombre" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" name='apPaterno'  placeholder="Ingrese Apellido Paterno" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" name='apMaterno'  placeholder="Ingrese Apellido Materno" >
                                            <div class="form-group">
                                                <label class="form-label">C.I.</label>
                                                <input type="text" class="form-control" name='ci'  placeholder="Ingrese C.I." >
                                            </div>
                                            <div class="form-group">
                                                <<label class="form-label">Telefono</>
                                                <input type="text" class="form-control" name='telefono'  placeholder="Ingrese Telefono" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nombre del Padre</label>
                                                <input type="text" class="form-control" name='nomPadre'  placeholder="Ingrese Nombre de Padre">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Nombre del Tutor</label>
                                                <input type="text" class="form-control" name='nomTutor'  placeholder="Ingrese Nombre del Tutor">
                                            </div>
                                            <div class="card-footer">
                                                <button class="btn btn-primary" type="submit">REGISTRAR</button>
                                                <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" >CANCELAR</button>

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
  
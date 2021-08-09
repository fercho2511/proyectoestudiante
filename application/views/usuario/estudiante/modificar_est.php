






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
                <h3 class="card-title">Modificar Estudiante</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

                    <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infoestudiante-> result() as $row) 
                    {
                        echo form_open_multipart('estudiante/modificarEst')
                        ?>
                        <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante;?>">

                                    <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name='nombre'  value="<?php echo $row->nombre;?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Apellido Paterno</label>
                                        <input type="text" class="form-control" name='apPaterno'  value="<?php echo $row->primerApellido;?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Apellido Materno</label>
                                        <input type="text" class="form-control" name='apMaterno'  value="<?php echo $row->segundoApellido;?>" >
                                    <div class="form-group">
                                        <label class="form-label">C.I.</label>
                                        <input type="text" class="form-control" name='ci'  value="<?php echo $row->ci;?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Telefono</label>
                                        <input type="text" class="form-control" name='telefono'  value="<?php echo $row->telefono;?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nombre del Padre</label>
                                        <input type="text" class="form-control" name='nomPadre'  value="<?php echo $row->nombrePadre;?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Nombre del Tutor</label>
                                        <input type="text" class="form-control" name='nomTutor'  value="<?php echo $row->nombreTutor;?>" >
                                    </div>
                                    
                                    
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit">MODIFICAR</button>
                                        <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" >CANCELAR</button>

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
  
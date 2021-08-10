





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
                <h3 class="card-title">Registrar Profesor</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
     
                                    <div class="card-body">
                                        <?php
                                             //invocaremos a [profesor] q pusimos en el array asociativo $data de eprofesor.php
                                            echo form_open_multipart('usuario_per/agregarUsu')
                                         ?>
                                            <div class="form-group">
                                                <label class="form-label">Nombre</label>
                                                <input type="text" class="form-control" name='nombres'  placeholder="Ingrese Nombre" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Apellido Paterno</label>
                                                <input type="text" class="form-control" name='apellidoPaterno'  placeholder="Ingrese Apellido Paterno" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Apellido Materno</label>
                                                <input type="text" class="form-control" name='apellidoMaterno'  placeholder="Ingrese Apellido Materno" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Fecha Nacimiento</label>
                                                <input type="date" class="form-control" name='fechaNacimiento'  placeholder="Ingrese Fecha Nacimiento" >
                                            </div>
                                            <div class="form-group">
                                              <label for="">sexo:</label>
                                              <select class="form-control" name="sexo" >
                                                <option>M</option>
                                                <option>F</option>                                               
                                              </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">C.I.</label>
                                                <input type="text" class="form-control" name='ci'  placeholder="Ingrese C.I." >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telefono</label>
                                                <input type="text" class="form-control" name='telefono'  placeholder="Ingrese telefono" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Correo</label>
                                                <input type="text" class="form-control" name='correo'  placeholder="Ingrese Correo Electronico" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Direccion</label>
                                                <input type="text" class="form-control" name='direccion'  placeholder="Ingrese Direccion" >
                                            </div>

            
                                            <div class="form-group">
                                              <label for="">Rol:</label>
                                              <select class="form-control" name="rol" >
                                                <option>Profesor</option>
                                               
                                              </select>
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
  
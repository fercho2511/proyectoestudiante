

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
                <h3 class="card-title">Registrar Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                            

                                    <div class="card-body">
                                        <?php
                                             //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
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
                                            <div class="form-group">
                                                <label class="form-label">Fecha Nacimiento</label>
                                                <input type="text" class="form-control" name='fechaNacimiento'  placeholder="ingrese Fecha Nacimiento" >
                                            </div>
                                            <!-- <div class="form-group">
                                                <<label class="form-label">Login</>
                                                <input type="text" class="form-control" name='login'  placeholder="Ingrese login" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Password</label>
                                                <input type="text" class="form-control" name='password'  placeholder="Ingrese password">
                                            </div> -->
                                            <!-- <div class="form-group">
                                                <label class="form-label">Tipo</label>
                                                <input type="text" class="form-control" name='tipo'  placeholder="Ingrese tipo">
                                            </div> -->
                                            <div class="form-group">
                                              <label for="">Tipo:</label>
                                              <select class="form-control" name="tipo" >
                                                <option>Invitado</option>
                                                <option>Administrador</option>
                                               
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
  
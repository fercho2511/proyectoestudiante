

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
      </div>
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
                <h3 class="card-title">Modifique sus datos <?php echo $this->session->userdata('login')?></h3>
              </div>
              holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
              

              
                          

                    <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infousuario-> result() as $row) 
                    //foreach ($idUsuario-> result() as $row) 
                    {
                        echo form_open_multipart('usuario_per/modificarUsu2')
                        ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">

                                    <div class="card-body">
                                    <div class="form-group">
                                        <label class="form-label">Nombre</label>
                                        <input type="text" class="form-control" name='nombres'  value="<?php echo $row->nombres;?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Apellido Paterno</label>
                                        <input type="text" class="form-control" name='apellidoPaterno'  value="<?php echo $row->apellidoPaterno;?>" >
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">Apellido Materno</label>
                                        <input type="text" class="form-control" name='apellidoMaterno'  value="<?php echo $row->apellidoMaterno;?>" >
                                    <div class="form-group">
                                        <label class="form-label">Fecha Nacimiento</label>
                                        <input type="text" class="form-control" name='fechaNacimiento'  value="<?php echo $row->fechaNacimiento;?>" >
                                    </div>
                                    <div class="form-group">
                                              <label for="">Tipo:</label>
                                              <select class="form-control" name="tipo" >
                                                <option>Invitado</option>                                               
                                              </select>
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

            <!-- formulario para cuenta  -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">CAMBIE USUARO Y CONTRASEÑA</h3>
              </div>                             

              <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infousuario-> result() as $row) 
                    {
                        echo form_open_multipart('usuario_per/modificarLoguin')
                        ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                <div class="card-body">
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Usuario:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name="login"  placeholder="Nuevo Usuario">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Password:</label>
                    <div class="col-sm-4">
                      <input type="text" class="form-control" name='password' placeholder="Nueva Contraseña">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-info">GUARDAR CAMBIOS</button>
                  <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" >CANCELAR</button>
                </div>
                <?php
                        echo form_close();
                        }

                    ?> 
                <!-- /.card-footer -->
              
            </div>   

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>   
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





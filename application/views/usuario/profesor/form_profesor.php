

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <!-- <div class="col-sm-6">
            <h1>FORMULARIO </h1>
          </div> -->
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
                <h3 class="card-title">Modifica tus datos  <?php echo $this->session->userdata('nombres')?></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

                    <?php
                    //invocaremos a [profesor] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($profesor-> result() as $row) 
                    {
                      if ($row->idUsuario== $this->session->userdata('idusuario')) {
                        echo form_open_multipart('profesor/modificarProf2')
                        ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                        <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                       

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
                                        <input type="date" class="form-control" name='fechaNacimiento'  value="<?php echo date('Y-m-d', strtotime($row->fechaNacimiento))?>" >

                                    </div>


                                    <div class="form-group">
                                              <label for="">sexo:</label>
                                              <select class="form-control" name="sexo" value="<?php echo $row->sexo;?>">
                                                <option>M</option>
                                                <option>F</option>                                               
                                              </select>
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">C.I.</label>
                                                <input type="text" class="form-control" name='ci'  value="<?php echo $row->ci;?>" >
                                            </div>
                                            <div class="form-group">
                                                <label class="form-label">Telefono</label>
                                                <input type="text" class="form-control" name='telefono'  value="<?php echo $row->telefono;?>" >
                                            </div>
                                            <!-- <div class="form-group">
                                                <label class="form-label">Correo</label>
                                                <input type="text" class="form-control" name='correo'  value="<?php echo $row->correo;?>" >
                                            </div> -->
                                            <div class="form-group">
                                                <label class="form-label">Direccion</label>
                                                <input type="text" class="form-control" name='direccion'  value="<?php echo $row->direccion;?>" >
                                            </div>
                                  
                                    <div class="form-group">
                                              <label for="">Rol:</label>
                                              <select class="form-control" name="rol" select="<?php echo $row->rol;?>">
                                                <option>Profesor</option>
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
                      }

                    ?>              
            </div> 

            <!-- formulario para cuenta  -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">CAMBIE USUARO Y CONTRASEÑA <?php echo $this->session->userdata('loguin')?></h3>
              </div>
                     

              <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php

                    foreach ($profesor-> result() as $row) 
                    {
                      if ($row->idUsuario == $this->session->userdata('idusuario')) {
                            # code...
                          
                                      echo form_open_multipart('profesor/modificarLoguin1')
                                      ?>
                                      
                                      <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                              <div class="card-body">

                                <div class="form-group row">
                                <label for="inputPassword3" class="col-sm-6 col-form-label">Usuario:  <?php echo $this->session->userdata('login')?></label>
                                
                                </div> 

                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-4 col-form-label">Password Antiguo:</label>
                                  <div class="col-sm-5">
                                    <input type="text" class="form-control" name='passwordAnt' placeholder="Password Antiguo" required>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-4 col-form-label">Password Nuevo:</label>
                                  <div class="col-sm-5">
                                    <input type="text" class="form-control" name='password1' placeholder="Nueva Contraseña" required>
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-4 col-form-label">Vuelva a ingresar Password Nuevo:</label>
                                  <div class="col-sm-5">
                                    <input type="text" class="form-control" name='password' placeholder="Nueva Contraseña" required>
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
                        }
                        
                      ?> 
                  
                <!-- /.card-footer -->
              
            </div>  
            
            <!-- aca pondremos otro para poder validar las opciones del profesor  -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">CAMBIE CONTRASEÑA</h3>
              </div>
            
              <main>

                <form method="post"  action="<?php echo base_url(); ?>index.php/usuario_per/modificarLoguinAdmin" class="formulario" id="formulario" >
                <!-- action="<?= site_url('usuario_per/modificarLoguinAdmin') ?>" -->
                  <!-- Grupo: Contraseña -->
                  <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                   <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                   

                  <div class="formulario__grupo" id="grupo__password">
                    <label for="password" class="formulario__label">Contraseña</label>
                    <div class="card card-info-input">
                      <input type="password" class="formulario__input" name="password" id="password">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">La contraseña tiene que ser de 4 a 12 dígitos.</p>
                  </div>

                  <!-- Grupo: Contraseña 2 -->
                  <div class="form-group row" id="grupo__password2">
                    <label for="password2" class="formulario__label">Repetir Contraseña</label>
                    <div class="card card-info-input">
                      <input type="password" class="formulario__input " name="password2" id="password2">
                      <i class="formulario__validacion-estado fas fa-times-circle"></i>
                    </div>
                    <p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
                  </div>

                  <div class="formulario__mensaje" id="formulario__mensaje">
                    <p><i class="fas fa-exclamation-triangle"></i> <b>Error:</b> Por favor rellena el formulario correctamente. </p>
                  </div>

                  <!-- <div class="formulario__grupo formulario__grupo-btn-enviar">
                    <button type="submit" class="formulario__btn">Enviar</button>
                    <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                  </div> -->

                  <div class="card-footer">
                              <button type="submit" class="btn btn-info" title="Guardar Cambios" >
                              <span class="far fa-save"> GUARDAR CAMBIOS</span>
                              <p class="formulario__mensaje-exito" id="formulario__mensaje-exito">Formulario enviado exitosamente!</p>
                              </button>

                            

                  </div>
                </form>
                </main>
                <button class="btn btn-info " type="button" onclick="history.back()" name="volver atrás" title="Cancelar">
                              <span class="far fa-window-close"> CANCELAR</span>
                              </button>
            </div>
            <!-- asta aca seria las validaciones integrandio js para el profesor  -->

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>   
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <!-- <div class="row mb-2">
          <div class="col-sm-6">
            <h1>FORMULARIO </h1>
          </div>
          <div class="col-sm-6">
            
          </div>
        </div> -->
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
                <h3 class="card-title">Modificar Usuario</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              

                    <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                  
                    foreach ($infousuario-> result() as $row) 
                    {
                      $var= $row->login;
                        echo form_open_multipart('usuario_per/modificarUsu')
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
                                                 <option><?php echo $row->sexo;?></option>
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
                                            <!-- select="<?php echo $row->rol;?> -->
                                    <div class="form-group">
                                              <label for="">Rol:</label>
                                              <select class="form-control" name="rol" >
                                                <option>Profesor</option>
                                                <option>Estudiante</option>
                                                <option>Administrador</option>
                                                <!-- <option>superAdministrador</option> -->

                                               
                                              </select>
                                      </div>
                                    
                                    
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button class="btn btn-primary" type="submit" title="Guardar Cambios" >
                                        <span class="far fa-save"> GUARDAR</span>
                                        </button>
                                        <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" title="Cancelar" >
                                        <span class="far fa-window-close"> CANCELAR</span>
                                      </button>

                                    </div>
                        <?php
                        echo form_close();
                        }

                    ?>
              
            </div>

        
        </div>

       
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">CAMBIE USUARO Y CONTRASEÑA</h3>
              </div>
             

                                   

              <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infousuario-> result() as $row) 
                    {
                        echo form_open_multipart('usuario_per/modificarLoguinAdmin')
                        ?>
                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                        <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                  <div class="card-body" id="passs">
                  <div class="form-group row">
                    <label>Loguin: <?php echo $var;?> </label>
                  </div>

                  <!-- mensaje de verificacion -->
                  <!-- <div id="msg"></div>
                    
                     Mensajes de Verificación
                    <div id="error" class="alert alert-danger ocultar" role="alert">
                        Las Contraseñas no coinciden, vuelve a intentar !
                    </div>
                    <div id="ok" class="alert alert-success ocultar" role="alert">
                        Las Contraseñas coinciden ! (Procesando formulario ... )
                    </div>-->

                    <label id="poo"></label><br> 
                    
                  
                  <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-5 col-form-label">Password nuevo:</label>
                    <div class="col-sm-5">
                      <input type="password" class="form-control" name="password" id="password1"  placeholder="Password nuevo" required minlength="8"  maxlength="20" is_unique:[usuario.password]>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-5 col-form-label">Confirmar Password Nuevo:</label>
                    <div class="col-sm-5">
                      <input type="password" id="password2"  class="form-control" name='password2' placeholder="Confirmar Password nuevo" required minlength="8"  maxlength="20">
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                      
                  <button type="submit" class="btn btn-outline-info" title="Guardar Cambios" id="boton3"  >
                  <span class="far fa-save"> GUARDAR CAMBIOS</span>

                  </button>
                  <button class="btn btn-info" type="button" onclick="history.back()" name="volver atrás" title="Cancelar">
                  <span class="far fa-window-close"> CANCELAR</span>
                  </button>
                </div>
                <?php
                        echo form_close();
                        }

                    ?> 
                <!-- /.card-footer -->
              
            </div> 

           
        <!-- /.row -->
      </div><!-- /.container-fluid -->
      
    </section>
    <br>
            <br>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  


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
            <div class="card card-info">
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
                                        <button class="btn btn-outline-info" type="submit">MODIFICAR</button>
                                        <button class="btn btn-outline-info" type="button" onclick="history.back()" name="volver atr??s" >CANCELAR</button>
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
                <h3 class="card-title">CAMBIE USUARO Y CONTRASE??A <?php echo $this->session->userdata('loguin')?></h3>
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

                                <!-- <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-4 col-form-label">Password Antiguo:</label>
                                  <div class="col-sm-5">
                                    <input type="text" class="form-control" name='passwordAnt' placeholder="Password Antiguo" required>
                                  </div>
                                </div> -->
                                <label id="poo2"></label><br> 

                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-4 col-form-label">Password Nuevo:</label>
                                  <div class="col-sm-5">
                                    <input type="password" class="form-control" name='password' id='password1_1' placeholder="Nueva Contrase??a" required minlength="8"  maxlength="20">
                                  </div>
                                </div>
                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-4 col-form-label">Confirmar Password Nuevo:</label>
                                  <div class="col-sm-5">
                                    <input type="password" class="form-control" name='password2' id="password2_2" placeholder="Nueva Contrase??a" required minlength="8"  maxlength="20">
                                  </div>
                                </div>
                                
                              </div>
                              <!-- /.card-body -->
                              <div class="card-footer">
                                <button type="submit" class="btn btn-outline-info" id="botonn">GUARDAR CAMBIOS</button>
                                <button class="btn btn-outline-info" type="button" onclick="history.back()" name="volver atr??s" >CANCELAR</button>
                              </div>
                              <?php
                                      echo form_close();
                            
                                    }
                        }
                        
                      ?> 
                  
                <!-- /.card-footer -->
              
            </div>  
            
          

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>   
    <br><br>
        <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

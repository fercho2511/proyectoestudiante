<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>USUARIOS REGISTRADOS</h1>
                           
                        </div>


                        <div class="col-sm-3">
                        
                                    <?php
                                            echo form_open_multipart('usuario_per/agregar')//llegaremos asta estudiante.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" >Agregar Usuario</button>
                                        <?php
                                            echo form_close();
                                    ?>                                     
                                    
                        </div>

                        
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                  <br>
                                  <?php
                                ?>
                                </div>
                                    
                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre Completo</th>
                                              
                                                <th>Fecha Nacimiento</th>
                                                <th>Login</th>
                                                <th>Password</th>
                                                <th>rol</th>                                                
                                                <th>Acciones</th>
                                                <th>Estado</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($usuario-> result() as $row) {
                        ?>
                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->nombres;?>
                                                    <?php echo $row->apellidoPaterno;?>
                                                    <?php echo $row->apellidoMaterno;?>
                                                </td>
                                                <td><?php echo $row->fechaNacimiento;?></td>
                                                <td><?php echo $row->login;?></td>
                                                <td><?php echo $row->password;?></td>
                                                <td><?php echo $row->rol;?></td>

                                                <td>
                                                    <?php
                                                        echo form_open_multipart('usuario_per/modificar')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <button type="submit" class="btn btn-primary btn-xs"  >Modificar</button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                    <?php
                                                        echo form_open_multipart('usuario_per/habillitarUsu')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <button type="submit" class="btn btn-primary btn-xs"  >Habilitar</button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                    <?php
                                                        echo form_open_multipart('usuario_per/desabilitarUsu')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <button type="submit" class="btn btn-primary btn-xs"  >Desabilitar</button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                     <?php
                                                        echo form_open_multipart('usuario_per/eliminarUsu')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <button type="submit" class="btn btn-danger btn-xs" >Eliminar++</button>
                                                    <?php
                                                        echo form_close();
                                                    ?>
                                                </td>

                                                <td><?php echo $row->estado;?></td>


                                            </tr>
                        <?php
                        $indice++;
                    }
                    ?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre Completo</th>
                                                
                                                <th>Fecha Nacimiento</th>
                                                <th>Login</th>
                                                <th>Password</th>
                                                <th>rol</th>                                                
                                                <th>Acciones</th>
                                                <th>Estado</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
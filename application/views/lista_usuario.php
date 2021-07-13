<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>USUARIOS REGISTRADOS</h1>
                           
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">DataTables</li>
                            </ol>
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
                                    <div>
                                    <?php
                                            echo form_open_multipart('usuario_per/agregar')//llegaremos asta estudiante.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" >Agregar usuario</button>
                                        <?php
                                            echo form_close();
                                    ?>                                     
                                    </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Matrno</th>
                                                <th>Fecha Nacimiento</th>
                                                <th>Login</th>
                                                <th>Password</th>
                                                <th>Tipo</th>                                                
                                                <th>Edicion</th>
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
                                                <td><?php echo $row->nombres;?></td>
                                                <td><?php echo $row->apellidoPaterno;?></td>
                                                <td><?php echo $row->apellidoMaterno;?></td>
                                                <td><?php echo $row->fechaNacimiento;?></td>
                                                <td><?php echo $row->login;?></td>
                                                <td><?php echo $row->password;?></td>
                                                <td><?php echo $row->tipo;?></td>

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
                                                <th>Nombre</th>
                                                <th>Apellido Paterno</th>
                                                <th>Apellido Matrno</th>
                                                <th>Fecha Nacimiento</th>
                                                <th>Login</th>
                                                <th>Password</th>
                                                <th>Tipo</th>                                                
                                                <th>Edicion</th>
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
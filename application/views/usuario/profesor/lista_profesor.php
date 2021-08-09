<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Profesores Registrados</h1>
                           
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

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                         
                            <!-- /.card -->

                            <div class="card">
                                <div class="card-header">
                                    <!-- <h3 class="card-title">DataTable with default features</h3> -->
                                  <br>
                                  <?php
                                ?>
                                </div>
                                    <div>
                                    <?php
                                            echo form_open_multipart('profesor/agregar')//llegaremos asta estudiante.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" >Agregar Profesor</button>
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
                                                <th>Apellido Materno</th>
                                                <th>C.I.</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Foto</th>
                                                <th>Modificar</th>
                                                <th>Eliminar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    $indice=1;
                    //invocaremos a [profesor] q pusimos en el array asociativo $data de profesor.php
                    foreach ($profesor-> result() as $row) {
                        ?>
                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->nombre;?></td>
                                                <td><?php echo $row->primerApellido;?></td>
                                                <td><?php echo $row->segundoApellido;?></td>
                                                <td><?php echo $row->ci;?></td>
                                                <td><?php echo $row->telefono;?></td>
                                                <td><?php echo $row->correo;?></td>
                                                <td>
                                                        <?php
                                                        $foto=$row->foto;
                                                        if ($foto=="") {
                                                            //mostrar una imagen por defecto
                                                            ?>
                                                            <img width="100" src="<?php echo base_url(); ?>/cargas/profesor/perfil.jpg">
                                                            <?php
                                                        }
                                                        else {
                                                            //mostrar foto del usuario
                                                            ?>
                                                            <img width="100" src="<?php echo base_url(); ?>/cargas/profesor/<?php echo $foto; ?>">
                                                            
                                                            <?php
                                                        }

                                                        ?>
                                                        <?php
                                                                echo form_open_multipart('profesor/subirFoto')
                                                            ?>
                                                            <input type="hidden" name="idProfesor" value="<?php echo $row->IdProfesor;?>">
                                                            <button type="submit" class="btn btn-primary btn-xs" >subir</button>
                                                            <?php
                                                                echo form_close();
                                                        ?>
                                                </td>

                                                <td>
                                                    <?php
                                                        echo form_open_multipart('profesor/modificar')
                                                    ?>
                                                    <input type="hidden" name="idProfesor" value="<?php echo $row->IdProfesor;?>">
                                                    <button type="submit" class="btn btn-primary btn-xs" >Modificar</button>
                                                    <?php
                                                        echo form_close();
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        echo form_open_multipart('profesor/eliminarProf')
                                                    ?>
                                                    <input type="hidden" name="idProfesor" value="<?php echo $row->IdProfesor;?>">
                                                    <button type="submit" class="btn btn-danger btn-xs" >Eliminar</button>
                                                    <?php
                                                        echo form_close();
                                                    ?>
                                                </td>

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
                                                <th>C.I.</th>
                                                <th>Telefono</th>
                                                <th>Correo</th>
                                                <th>Foto</th>
                                                <th>Modificar</th>
                                                <th>Eliminar</th>
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
 <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Estudiantes Registrados</h1>
                           
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
                                            echo form_open_multipart('estudiante/agregar')//llegaremos asta estudiante.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" >Agregar Estudiante</button>
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
                                                <th>C.I.</th>
                                                <th>Telefono</th>
                                                <th>Padre</th>
                                                <th>Tutor</th>
                                                <th>Fecha</th>
                                                <th>Modificar</th>
                                                <th>Eliminar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($estudiante-> result() as $row) {
                        ?>
                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->nombre;?></td>
                                                <td><?php echo $row->primerApellido;?></td>
                                                <td><?php echo $row->segundoApellido;?></td>
                                                <td><?php echo $row->ci;?></td>
                                                <td><?php echo $row->telefono;?></td>
                                                <td><?php echo $row->nombrePadre;?></td>
                                                <td><?php echo $row->nombreTutor;?></td>
                                                <td><?php echo formatearfecha($row->fechaRegistro)?></td>
                                                <td>
                                                    <?php
                                                        echo form_open_multipart('estudiante/modificar')
                                                    ?>
                                                    <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante;?>">
                                                    <button type="submit" class="btn btn-primary btn-xs" >Modificar</button>
                                                    <?php
                                                        echo form_close();
                                                    ?>
                                                </td>
                                                <td>
                                                    <?php
                                                        echo form_open_multipart('estudiante/eliminarEst')
                                                    ?>
                                                    <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante;?>">
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
                                                <th>Padre</th>
                                                <th>Tutor</th>
                                                <th>Fecha</th>
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
<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gestion Escolar</h1>
                           
                        </div>
                        <div class="col-sm-3">
                        <?php
                                            echo form_open_multipart('gestion/agregar')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Agregar" >
                                            <span class="fas fa-user-plus"> Agregar Gestion</span>

                                            </button>
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
                                                <th>Gestion</th>                                               
                                                <th>Fecha Inicio de Gestion</th>
                                                <th>Fecha Fin de Gestion</th>                                                
                                                <th>Fecha Inicio de Receso Escolar</th>
                                                <th>Fecha Fin de Receso Escolar</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($gestion-> result() as $row) {
                        ?>
                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->gestion;?></td>  
                                                <td><?php echo $row->fechaInicioGestion;?></td>
                                                <td><?php echo $row->fechaFinGestion;?></td>
                                                <td><?php echo $row->fechaInicioReceso;?></td>
                                                <td><?php echo $row->fechaInicioReceso;?></td>
                                                <td>
                                                <?php
                                                    if ($row->estado==0){
                                                        echo 'Desabilitado';
                                                    }
                                                    else{
                                                        echo 'Habilitado';
                                                    }
                                                    ?>
                                                </td>
                                               

                                                
                                                <td>
                                                <div class="btn-group btn-group-justified" >
                                                <?php
                                                        echo form_open_multipart('gestion/modificar')
                                                    ?>
                                                    <input type="hidden" name="idGestion" value="<?php echo $row->idGestion;?>">
                                                    <button type="submit" class="btn btn-primary btn-xs" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                <?php
                                                        echo form_open_multipart('gestion/eliminarGest')
                                                    ?>
                                                    <input type="hidden" name="idGestion" value="<?php echo $row->idGestion;?>">
                                                    <button type="submit" class="btn btn-danger btn-xs" title="Eliminar" >
                                                    <span class="fas fa-trash-alt"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                </div>




                                            </tr>
                        <?php
                        $indice++;
                    }
                    ?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>N°</th>
                                                <th>Gestion</th>                                               
                                                <th>Fecha Inicio de Gestion</th>
                                                <th>Fecha Fin de Gestion</th>                                                
                                                <th>Fecha Inicio de Receso Escolar</th>
                                                <th>Fecha Fin de Receso Escolar</th>
                                                <th>Estado</th>
                                                <th>Acciones</th>
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
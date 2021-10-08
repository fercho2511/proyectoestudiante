<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Gestión Escolar</h1>
                           
                        </div>
                        <div class="col-sm-3">
                        <?php
                                            echo form_open_multipart('gestion/agregar')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-outline-info" title="Agregar" >
                                            <span class="fas fa-user-plus"> Agregar Gestión</span>

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
                                                <th>Fecha Inicio de Gestión</th>
                                                <th>Fecha Fin de Gestión</th>                                                
                                                <th>Fecha Inicio de Receso Escolar</th>
                                                <th>Fecha Fin de Receso Escolar</th>
                                                <th>Estado</th>
                                                <th>Acceso</th>
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
                                                <td><?php echo formatearfecha($row->fechaInicioGestion);?></td> 
                                                <td><?php echo formatearfecha($row->fechaFinGestion);?></td> 
                                                <td><?php echo formatearfecha($row->fechaInicioReceso);?></td> 
                                                <td><?php echo formatearfecha($row->fechaInicioReceso);?></td> 

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
                                                    <div>
                                                    <?php
                                                            echo form_open_multipart('gestion/listaCursos')
                                                            ?>
                                                    <input type="hidden" name="idGestion" value="<?php echo $row->idGestion;?>">
                                                    <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">
                                                        <button type="submit" class="btn btn-outline-dark" title="Acceder">
                                                        <span class="far fa-arrow-alt-circle-right"></span>

                                                        </button>
                                                        <?php
                                                            echo form_close();
                                                        ?>
                                                    </div>
                                                </td>
                                               
                                               

                                                
                                                <td>
                                                <div class="btn-group btn-group-justified" >
                                                <?php
                                                        echo form_open_multipart('gestion/modificar')
                                                    ?>
                                                    <input type="hidden" name="idGestion" value="<?php echo $row->idGestion;?>">
                                                    <button type="submit" class="btn btn-outline-dark" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                    <!-- <?php
                                                            echo form_open_multipart('gestion/listaCursos')
                                                        ?>
                                                        <input type="hidden" name="idGestion" value="<?php echo $row->idGestion;?>">
                                                        <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                                        <button type="submit" class="btn btn-outline-dark" title="Agregar Estudiantes" >
                                                        <span class="far fa-arrow-alt-circle-right"></span>

                                                        </button>
                                                        <?php
                                                            echo form_close();
                                                        ?> -->





                                                <?php
                                                        echo form_open_multipart('gestion/eliminarGest')
                                                    ?>
                                                    <input type="hidden" name="idGestion" value="<?php echo $row->idGestion;?>">
                                                    <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                                    <button type="submit" class="btn btn-outline-danger" title="Eliminar" >
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
                                                <th>Fecha Inicio de Gestión</th>
                                                <th>Fecha Fin de Gestión</th>                                                
                                                <th>Fecha Inicio de Receso Escolar</th>
                                                <th>Fecha Fin de Receso Escolar</th>
                                                <th>Estado</th>
                                                <th>Acceso</th>

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
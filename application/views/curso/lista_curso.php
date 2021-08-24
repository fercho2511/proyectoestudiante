<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Curso</h1>
                           
                        </div>
                        <div class="col-sm-3">
                        <?php
                                            echo form_open_multipart('curso/agregar')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Agregar" >
                                            <span class="fas fa-user-plus"> Agregar Curso</span>

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
                                                <th>Curso</th>                                               
                                                <th>Sección</th>
                                                <th>Tutor</th>  
                                                <th>Estado</th>
                                                <th>Acceso</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                    <?php
                        $indice=1;
                        //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                        foreach ($curso-> result() as $row) {
                            ?>
                                                <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->curso;?></td>  
                                                <td><?php echo $row->seccion;?></td>
                                                <td><?php echo $row->tutor;?></td>                                               
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
                                                            echo form_open_multipart('curso/cursoCreado')
                                                        ?>
                                                        <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
                                                        <button type="submit" class="btn btn-outline-dark" title="Acceder al Curso">
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
                                                            echo form_open_multipart('curso/modificar')
                                                        ?>
                                                        <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">

                                                        <button type="submit" class="btn btn-outline-dark" title="Modificar">
                                                        <span class="fas fa-user-edit"></span>

                                                        </button>
                                                        <?php
                                                            echo form_close();
                                                        ?>

                                                        
                                                        <!-- <?php
                                                            echo form_open_multipart('curso/listarEstudiante')
                                                        ?>
                                                        <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
                                                        <button type="submit" class="btn btn-outline-dark" title="Lista Estudiantes" >
                                                        <span class="fas fa-clipboard-list"></span>
                                                        

                                                        </button>
                                                        <?php
                                                            echo form_close();
                                                        ?> -->


                                                         <?php
                                                            echo form_open_multipart('curso/inscribirEstudiante')
                                                        ?>
                                                        <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
                                                        <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                                        <button type="submit" class="btn btn-outline-dark" title="Agregar Estudiantes" >
                                                        <span class="fas fa-user-plus"></span>

                                                        </button>
                                                        <?php
                                                            echo form_close();
                                                        ?>


                                                        <?php
                                                            echo form_open_multipart('curso/eliminarCurso')
                                                        ?>
                                                        <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
                                                        <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                                        <button type="submit" class="btn btn-outline-danger" title="Eliminar" >
                                                        <span class="fas fa-trash-alt"></span>

                                                        </button>
                                                        <?php
                                                            echo form_close();
                                                        ?>


                                                    </div>
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
                                                <th>Curso</th>                                               
                                                <th>Sección</th>
                                                <th>Tutor</th>  
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
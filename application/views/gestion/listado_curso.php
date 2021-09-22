<?php
                    foreach ($gestionn-> result() as $row) {
                        $idGestion =  $row->idGestion;
                        $gestion =  $row->gestion;
                        // $tutor =  $row->tutor;                        
                    }
                    ?>


 <?php 

$idGes =$idGestion;
$gest=$gestion
?> 

<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>GESTION  <?php echo $gest?></h1>
                           
                        </div>
                        <!-- <div class="col-sm-2">
                        <?php
                                            echo form_open_multipart('gestion/ingresarCurso')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Agregar" >
                                            <span class="fas fa-user-plus"> Inscribir Estudiante</span>

                                            </button>
                                        <?php
                                            echo form_close();
                                    ?>
                        </div> -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-8">
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
                                                <th>Paralelo</th>
                                                <!-- <th>Profesor</th>   -->
                                                <th>Estado</th>
                                                <th>Acceso</th>
                                                <!-- <th>Asignar Profesor</th> -->

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
                                                <td>
                                                <?php
                                                    if ($row->idParalelo==1){
                                                        echo 'A';
                                                    }
                                                    else{
                                                        if ($row->idParalelo==2) {
                                                            echo 'B';
                                                        }
                                                        else{
                                                            if ($row->idParalelo==3) {
                                                                echo 'C';
                                                            }
                                                            else{
                                                                if ($row->idParalelo==4) {
                                                                    echo 'D';
                                                                }
                                                                else{
                                                                    echo 'E';
                                                                }
                                                                
                                                            }

                                                        }
                                                        
                                                    }
                                                    ?>
                                                </td>
                                                <!-- <td>
                                                    <?php echo $row->profesor;?>
                                                    
                                                </td>                                                -->
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
                                                            echo form_open_multipart('gestion/cursoCreado')
                                                        ?>
                                                        <input type="hidden" name="idCurso" value="<?php echo $row->idCurso;?>">
                                                       
                                                        <input type="hidden" name="idGestion" value="<?php echo $idGes?>">
                                                        <!-- <?php echo $row->gestion;?> -->

                                                        <button type="submit" class="btn btn-outline-dark" title="Acceder al Curso">
                                                        <span class="far fa-arrow-alt-circle-right"></span>

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
                                                <th>Paralelo</th>
                                                <!-- <th>profesor</th>   -->
                                                <th>Estado</th>
                                                <th>Acceso</th>
                                                <!-- <th>Asignar Profesor</th> -->
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
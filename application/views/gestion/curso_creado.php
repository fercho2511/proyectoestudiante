
 <?php
                    foreach ($infocurso-> result() as $row) {
                        $idCurso =  $row->idCurso;
                        $curso =  $row->curso; 
                        $idParalelo= $row->idParalelo;                 
                         if ($row->idParalelo==1){
                            $seccion = 'A';
                          }
                           else{
                              if ($row->idParalelo==2) {
                                $seccion = 'B';
                                 }
                                 else{
                                    if ($row->idParalelo==3) {
                                        $seccion = 'C';
                                     }
                                       else{
                                         if ($row->idParalelo==4) {
                                            $seccion = 'D';
                                           }
                                             else{
                                                $seccion = 'E';
                                              }
                                                                
                                        }

                                   }
                                                        
                           }
                                                    
                        $tutor =  $row->profesor;                        
                    }
                    ?>

<?php 

$idCur =$idCurso;
$cur=$curso;
$idPar=$idParalelo;
$secc=$seccion;
$tut=$tutor;

?> 
    <?php
            foreach ($gestionn-> result() as $row) {
            $idGestion =  $row->idGestion;
            $gestion =  $row->gestion;
            // $tutor =  $row->tutor;                        
            }
            ?>

<?php 

$idGes=$idGestion;
$gest= $gestion;


?> 

<!-- desde aca la tabal para profesores -->


<div class="content-wrapper">
        <section class="content-header">
            <div class="container-fluid">
                    <div class="row mb-2">
                   

                        <div class="col-sm-8">
                            <!-- <h1> Gestion: <?php echo $gest;?></h1> -->

                            <h1><a href="<?php echo base_url(); ?>index.php/gestion/listaCursos2?idGestion=<?php echo $idGes ?>" style="font-size:25px" title="Regresar a la gestion">Gestion: <?php echo $gest;?></a></h1>
                            <!-- <h1><a href="<?php echo base_url(); ?>index.php/gestion/cursoCreado">Curso <?php echo $cur;?><?php echo $secc;?></a></h1> -->
                            <h1> Curso: <?php echo $cur;?><?php echo $secc;?></h1>

                            <!-- <h1>Prof. de Aula: <?php echo $tut;?></h1> -->
                           
                           
                        </div>
                        <br>
                        <br><br>
                        
                       
                       
                    </div>
                    
                                        <div class="row">
                                    <div class="col-12">
                                        <div class="card">
                                        <div class="card-header">
                                            <h3 class="card-title">Asignar profesor </h3>
                                            <br>  
                                            <div class="col-sm-5">
                                                    <?php
                                                                        echo form_open_multipart('gestion/asignarProfe')//llegaremos asta gestion.php y e metodo agregar
                                                      ?>
                                                                <div class="form-group">
                                                                <div class="col-sm-8" >
                                                                <select class="form-control" name="profesor" >
                                                                <?php
                                                                    foreach ($arrProfesores as $i => $profe)
                                                                        echo '<option values="',$i,'">',$profe,'</option>';
                                                                    ?>
                                                                </select>
                                                                </div>   
                                                                                                        
                                                                
                                                                <div class="col-sm-6">
                                                                        <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">
                                                                        <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">
                                                                        <input type="hidden" name="idParalelo" value="<?php echo $idPar;?>">
                                                                        <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">


                                                                            <button type="submit" class="btn btn-outline-dark" title="Asignar Profesor" >
                                                                            <span class="fas fa-user-plus"> Asignar Profesor</span>

                                                                       

                                                                            </button>
                                                                        <?php
                                                                            echo form_close();
                                                                    ?>
                                                                </div>
                                                                </div>
                                                </div>

                                            
                                        </div>
                                        <!-- /.card-header -->
                                        <div class="card-body table-responsive p-0">
                                            <table  class="table table-hover text-nowrap">
                                                 <thead>
                                                                        <tr>
                                                                            <th>N°</th>
                                                                            <th>Nombre Completo del Profesor</th>                                               
                                                                            <th>C.I.</th>
                                                                            <th>Telefono</th>                                              
                                                                            <th>Acciones</th> 

                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                    <?php
                                                                    $indice=1;
                                                                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                                                    foreach ($profe_aula-> result() as $row) {
                                                                        ?>
                                                                                            <tr>
                                                                            <td><?php echo $indice;?></td>
                                                                            <td><?php echo $row->nombres;?>
                                                                                    <?php echo $row->apellidoPaterno;?>
                                                                                    <?php echo $row->apellidoMaterno;?>
                                                                            </td>
                                                                            <td><?php echo $row->ci;?></td>
                                                                            <td><?php echo $row->telefono;?></td>
                                                                            <td>
                                                                            <div class="btn-group btn-group-justified" >
                                                                            <!-- <?php
                                                                                    echo form_open_multipart('estudiante/modificar')
                                                                                ?>
                                                                                <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                                                <button type="submit" class="btn btn-primary btn-xs" title="Modificar">
                                                                                <span class="fas fa-user-edit"></span>

                                                                                </button>
                                                                                <?php
                                                                                    echo form_close();
                                                                                ?> -->

                                                                            <?php
                                                                                    echo form_open_multipart('gestion/eliminarProfeAula')
                                                                                ?>
                                                                                <input type="hidden" name="idProfesor_aula" value="<?php echo $row->idProfesor_aula;?>">
                                                                                <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">
                                                                                 <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">
                                                                                <button type="submit" class="btn btn-outline-danger " title="Eliminar Profesor" >
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
                                                                    <!-- <tfoot>
                                                                        <tr>
                                                                        <th>N°</th>
                                                                            <th>Nombre Completo del Profesor</th>                                               
                                                                            <th>C.I.</th>
                                                                            <th>Telefono</th>                                              
                                                                            <th>Acciones</th>
                                                                        </tr>
                                                                    </tfoot> -->
                                            </table>
                    </div>
                    <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                </div>



                <!-- /.container-fluid -->

                <!-- desde aca lso estudiantes -->
                <section class="content-header">
                <div class="container-fluid">
                   
                    
                </div>
                <!-- /.container-fluid -->
                </section>
                <section class="content">
                    <div class="container-fluid">
             
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <div>
                                    <h3>LISTA DE ESTUDIANTES</H3>

                                    </div>
                                  <br>
                                  <?php
                                ?>
                                 <div class="col-sm-3">
                        <?php
                                            echo form_open_multipart('gestion/listaEstudiante2')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">
                                            <input type="hidden" name="idParalelo" value="<?php echo $idPar;?>">                                               
                                            <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">
                                            <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">
                                            <button type="submit" class="btn btn-outline-dark" title="Agregar" >
                                            <span class="fas fa-user-plus"> Inscribir Estudiante</span>

                                            </button>
                                        <?php
                                            echo form_close();
                                    ?>
                        </div>
                                </div>
                                   
                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre Completo del Estudiante</th>                                               
                                                <th>C.I.</th>
                                                <th>Telefono</th>
                                                <!-- <th>Padre</th>
                                                <th>Tutor</th> -->
                                                <!-- <th>Foto</th> -->
                                                 <th>Acciones</th> 

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
                                                <td><?php echo $row->nombres;?>
                                                        <?php echo $row->apellidoPaterno;?>
                                                        <?php echo $row->apellidoMaterno;?>
                                                </td>
                                                <td><?php echo $row->ci;?></td>
                                                <td><?php echo $row->telefono;?></td>
                                                 
                                                 <td>
                                                <div class="btn-group btn-group-justified" >
                                                

                                                <?php
                                                        echo form_open_multipart('gestion/eliminarEst')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">
                                                    <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">
                                                    <button type="submit" class="btn btn-outline-danger " title="Eliminar inscripcion" >
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
                                                <th>Nombre Completo del Estudiante</th>                                               
                                                <th>C.I.</th>
                                                <th>Telefono</th>
                                                <!-- <th>Padre</th>
                                                <th>Tutor</th> -->
                                                <!-- <th>Foto</th> -->
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






        </section>            
            <!-- /.content -->
        </div>
<!-- asta aca  -->


            



            
         





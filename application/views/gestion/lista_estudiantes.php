 <?php
            foreach ($infocurso-> result() as $row) {
            $idCurso =  $row->idCurso;
            $curso =  $row->curso;

                $idParalelo= $row->idParalelo;                 
                            if ($row->idParalelo==1){
                                $secc = 'A';
                            }
                            else{
                                if ($row->idParalelo==2) {
                                    $secc = 'B';
                                    }
                                    else{
                                        if ($row->idParalelo==3) {
                                            $secc = 'C';
                                        }
                                        else{
                                            if ($row->idParalelo==4) {
                                                $secc = 'D';
                                            }
                                                else{
                                                    $secc = 'E';
                                                }
                                                                    
                                            }

                                    }
                                                            
                            }
            $seccion =  $row->idParalelo;
            $tutor =  $row->profesor;                        
            }
?>

<?php
$cur=$curso;
$secci=$secc;
$para=$seccion;
$idCur= $idCurso;
?>

 <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">

<?php
        foreach ($gestionn-> result() as $row) {
        $idGestion =  $row->idGestion;
        $gestion =  $row->gestion;
        // $tutor =  $row->tutor;                        
        }
?>

<?php
$idGest =  $idGestion;
$gest=$gestion;
?>


  



<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                        <h1  ><a href="<?php echo base_url(); ?>index.php/gestion/cursoCreado4?idGestion=<?php echo $idGest ?>&idCurso=<?php echo $idCur ?>" title="Regresar al curso" style="font-size:25px" >Curso <?php echo $cur; ?><?php echo $secci;?></a></h1>

                            <h1>Asignar estudiantes al Curso</h1>
                           
                        </div>
                        <!-- <div class="col-sm-3">
                            
                        <?php
                                            echo form_open_multipart('estudiante/agregar')//llegaremos asta estudiante.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Agregar" >
                                            <span class="fas fa-user-plus"> Agregar Usuario</span>

                                            </button>
                                        <?php
                                            echo form_close();
                                    ?>
                        </div> -->
                    </div>
                                 <!-- <div>
                                     <?php
                                            echo form_open_multipart('gestion/asignarProfe')//llegaremos asta estudiante.php y e metodo agregar
                                        ?>
                                        
                                            <div class="form-group">
                                              <label for="">Asignar profesor :</label>
                                              <div class="col-sm-4" >
                                              <select class="form-control" name="profesor" >
                                              <?php
                                                  foreach ($arrProfesores as $i => $profe)
                                                    echo '<option values="',$i,'">',$profe,'</option>';
                                                  ?>
                                              </select>
                                              </div>                                             
                                            </div>
                                            <div>
                                            <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">
                                            <input type="hidden" name="idGestion" value="<?php echo $idGest;?>">
                                            <input type="hidden" name="idParalelo" value="<?php echo $para;?>">
                                            <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">

                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Asignar" >
                                            <span class="fas fa-user-plus"> Asignar Profesor</span>
                                            </div>
                                            <?php
                                            echo form_close();
                                    ?>
                                 </div> -->
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
                                                <th>C.I.</th>
                                                <!-- <th>Telefono</th> -->
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
                                                
                                                
                                                <td>
                                                    


                                                    <?php
                                                        echo form_open_multipart('gestion/inscribirEstudiante')
                                                    ?>
                                                    <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">   
                                                    <input type="hidden" name="idParalelo" value="<?php echo $para;?>">                                                             
                                                    <input type="hidden" name="idGestion" value="<?php echo $idGest;?>">

                                                    <button type="submit" class="btn btn-outline-dark" title="Inscribir Estudiante" >
                                                    <span class="fas fa-user-edit"></span>

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
                                                <th>Nombre Completo</th>                                              
                                                <th>C.I.</th>
                                                <!-- <th>Telefono</th> -->
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
            <br><br>
            <!-- /.content -->
        </div>
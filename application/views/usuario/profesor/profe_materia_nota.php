
 <?php
                    foreach ($cursoProfe-> result() as $row) {
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



<br><br>

<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Materias</h1>
                           
                        </div>
                        <!-- <div class="col-sm-3">
                        <?php
                                            echo form_open_multipart('materia/agregar')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Agregar" >
                                            <span class="fas fa-user-plus"> Agregar Materia</span>

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
                        <div class="col-12">
                            <div class="card">
                            <div class="card-header">
                                  <br>
                                 <H2>Curso: <?php echo $cur?> '<?php echo $secc ?>'</p></H2>
                                </div>
                                   
                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Materia</th>                                               
                                                <!-- <th>Tutor</th>                                               -->
                                                <th>Estado</th>
                                                <th>Nota</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($materia-> result() as $row) {
                        ?>
                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->materia;?></td>  
                                                <!-- <td><?php echo $row->tutor;?></td>                                             -->
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
                                                        echo form_open_multipart('profesor/notas')
                                                    ?>
                                                    <input type="hidden" name="idMateria" value="<?php echo $row->idMateria;?>">
                                                    <button type="submit" class="btn btn-outline-dark" title="Notas">
                                                    <span class="fas fa-address-book"></span>

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
                                                <th>Materia</th>                                               
                                                <!-- <th>Tutor</th>                                               -->
                                                <th>Estado</th>
                                                <th>Nota</th>
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

            <!-- desde aca provando lso botones -->
            
            <!-- /.content -->
        </div>
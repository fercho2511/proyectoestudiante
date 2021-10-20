

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
<br>
<br>

<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Lista de estudiantes que se emitio el comunicado</h1>
                           
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
                                 <H2>Curso: <?php echo $cur?> '<?php echo $secc ?>'</p></H2>
                                </div>
                                   
                                <!-- /.card-header -->
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre Completo</th>                                               
                                                <th>Estado</th>
                                               

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
                                                   
                                                </td>
                                                <td>
                                                <?php
                                                    if ($row->estado_vista_comunicado==0){
                                                        echo 'No Visto';
                                                    }
                                                    else{
                                                        echo 'Visto';
                                                    }
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
                                                <th>Nombre Completo</th>                                               
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
                    <br><br>
                </div>
                <!-- /.container-fluid -->
                
            </section>
            
            <!-- /.content -->
        </div>
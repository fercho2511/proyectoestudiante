
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
                            <h1>Lista de estudiantes</h1>
                           
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
                                                <th>N??</th>
                                                <th>Nombre Completo</th>                                               
                                                <th>C.I.</th>
                                                <th>Telefono</th>
                                                <!-- <th>Padre</th>
                                                <th>Tutor</th> -->
                                                <th>Foto</th>
                                                <!-- <th>Acciones</th> -->

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
                                                <td><?php echo $row->ci;?></td>
                                                <td><?php echo $row->telefono;?></td>
                                              
                                                <td>
                                                        <?php
                                                        $foto=$row->foto;
                                                        if ($foto=="") {
                                                            //mostrar una imagen por defecto
                                                            ?>
                                                            <img width="100" src="<?php echo base_url(); ?>/cargas/estudiante/perfil.jpg">
                                                            <?php
                                                        }
                                                        else {
                                                            //mostrar foto del usuario
                                                            ?>
                                                            <img width="100" src="<?php echo base_url(); ?>/cargas/estudiante/<?php echo $foto; ?>">
                                                            
                                                            <?php
                                                        }

                                                        ?>
                                                        <?php
                                                                echo form_open_multipart('profesor/subirFoto2')
                                                            ?>
                                                            <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                            <button type="submit" class="btn btn-outline-info btn-xs" title="Subir" >
                                                            <span class="fas fa-file-upload"></span>
                                                            </button>
                                                            <?php
                                                                echo form_close();
                                                        ?>

                                                </td>

                                                
                                                <!-- <td> -->
                                                <!-- <div class="btn-group btn-group-justified" > -->
                                                <!-- <?php
                                                        echo form_open_multipart('profesor/modificarEst')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <button type="submit" class="btn btn-primary btn-xs" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?> -->

                                                <!-- <?php
                                                        echo form_open_multipart('estudiante/eliminarEst')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <button type="submit" class="btn btn-danger btn-xs" title="Eliminar" >
                                                    <span class="fas fa-trash-alt"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?> -->

                                                <!-- </div>




                                            </tr> -->
                        <?php
                        $indice++;
                    }
                    ?>                                            
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>N??</th>
                                                <th>Nombre Completo</th>                                              
                                                <th>C.I.</th>
                                                <th>Telefono</th>
                                                <!-- <th>Padre</th>
                                                <th>Tutor</th> -->
                                                <th>Foto</th>
                                                <!-- <th>Acciones</th> -->
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
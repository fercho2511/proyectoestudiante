
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
                            <h1>Comunicados</h1>
                           
                        </div>
                        <div class="col-sm-3">
                        <?php
                                            echo form_open_multipart('profesor/profeComunicado')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <button type="submit" class="btn b btn-outline-info " title="Agregar" >
                                            <span class="fas fa-user-plus"> Crear Comunicado</span>

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
                                 <H2>Curso: <?php echo $cur?> '<?php echo $secc ?>'</p></H2>
                                </div>
                                   
                               
                                <div class="card-body">
                                        <a target="_blank" href="<?php echo base_url(); ?>index.php/profesor/reporteGeneral">
                                           
                                            <button type="submit" class="btn b btn-outline-secondary " title="Agregar" >
                                            <span class="fas fa-file-pdf"> Reporte General</span>

                                            </button>
                                        </a>                                                                                
                                    <br>
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N??</th>
                                                <th>Tipo</th>                                               
                                                <th>Descripcion</th>   
                                                <th>Fecha</th>  
                                                <th>Hora</th>                                           
                                                <th>Destinatario</th>
                                                <th>Acciones</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                         <?php
                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($comunicado-> result() as $row) {
                        ?>
                                            <tr>
                                                <td><?php echo $indice;?></td>
                                                <td><?php echo $row->tipo;?></td>  
                                                <td><?php echo $row->descripcion;?></td>   
                                                <td><?php echo formatearfecha($row->fechaComunicado);?></td> 
                                                <td><?php echo formatearhora($row->hora);?></td>                                                
                                              
                                             
                                                <td>
                                                <!-- <?php
                                                    if ($row->estado==0){
                                                        echo 'Desabilitado';
                                                    }
                                                    else{
                                                        echo 'Habilitado';
                                                    }
                                                    ?> -->
                                                     <?php
                                                        echo form_open_multipart('profesor/comunicadoEstudiante')
                                                    ?>
                                                    <input type="hidden" name="idComunicado" value="<?php echo $row->idComunicado;?>">
                                                    <button type="submit" class="btn btn-outline-dark" title="Enviados a:">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                </td>
                                               

                                                
                                                <td>
                                                <div class="btn-group btn-group-justified" >

                                               



                                                <?php
                                                        echo form_open_multipart('profesor/modificarComunicado')
                                                    ?>
                                                    <input type="hidden" name="idComunicado" value="<?php echo $row->idComunicado;?>">
                                                    <button type="submit" class="btn btn-outline-dark" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                <?php
                                                        echo form_open_multipart('profesor/eliminarCom')
                                                    ?>
                                                    <input type="hidden" name="idComunicado" value="<?php echo $row->idComunicado;?>">
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
                                                <th>N??</th>
                                                <th>Tipo</th>                                               
                                                <th>Descripcion</th>  
                                                <th>Fecha</th>  
                                                <th>Hora</th>
                                                <th>Destinatario</th>
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
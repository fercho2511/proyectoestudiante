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
                                  <?php
                                ?>
                                </div>
                                   
                               
                                <div class="card-body">
                                    
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>N°</th>
                                                <th>Tipo</th>                                               
                                                <th>Descripcion</th>   
                                                <th>Fecha</th>  
                                                <th>Hora</th>                                           
                                                <th>Estado</th>
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
                                                <td><?php echo $row->hora;?></td>                                                
                                              
                                             
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
                                                        echo form_open_multipart('comunicado/modificar')
                                                    ?>
                                                    <input type="hidden" name="idComunicado" value="<?php echo $row->idComunicado;?>">
                                                    <button type="submit" class="btn btn-outline-dark" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                <?php
                                                        echo form_open_multipart('comunicado/eliminarCom')
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
                                                <th>N°</th>
                                                <th>Tipo</th>                                               
                                                <th>Descripcion</th>  
                                                <th>Fecha</th>  
                                                <th>Hora</th>
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
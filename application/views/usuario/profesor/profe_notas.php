

<br>
<br>

<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Registro de Notas </h1>
                           
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
                                  
                                 <h1>Materia: <?php echo $mate;?></h1>
                                </div>
                                   
                                <!-- /.card-header -->
                                <?php
                                             //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                            echo form_open_multipart('profesor/registrarNotas')
                                         ?>
                                               <input type="hidden" name="idUsuario_Acciones" value="<?php echo $this->session->userdata('idusuario');?>">
                                                <input type="hidden" name="idMateria" value="<?php echo $idMateria;?>">


                                                <div class="card-body">
                                                    
                                                    <table id="example1" class="table table-bordered table-striped">
                                                        <thead>
                                                            <tr>
                                                                <th>N°</th>
                                                                <th>Nombre Completo</th>                                               
                                                                <th>Nota 1 Trim.</th>
                                                                <th>Nota 2 Trim.</th>
                                                                <th>Nota 3 Trim.</th>
                                                                <!-- <th>Nota 4 Bim.</th> -->
                                                                <!-- <th>Foto</th>--> 
                                                                <!-- <th>Acciones</th>  -->

                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                        <?php
                                                    $indice=1;
                                                    $i=0;
                                                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                                                    foreach ($estudiante-> result() as $row) {
                                                        ?>

<?php
                                                             if ($row->nota1 >= 1){
                                                             $nota1=  $row->nota1;
                                                             }
                                                            else{
                                                                 $nota1= null;                                                                                               
                                                              }
                                                              if ($row->nota2 >= 1){
                                                                $nota2=  $row->nota2;
                                                                }
                                                               else{
                                                                    $nota2=null;                                                                                               
                                                                 }
                                                                 if ($row->nota3 >= 1){
                                                                    $nota3=  $row->nota3;
                                                                    }
                                                                   else{
                                                                        $nota3=null;                                                                                               
                                                                     }
                                                             ?>
                                                            <tr>
                                                                <td><?php echo $indice;?></td>
                                                                <td>

                                                                <label><input type="hidden" class="case" name="estudiante[]" value="<?php echo $row->idUsuario ;?>"> <?php echo $row->nombres;?> </label>

                                                                    <!-- <?php echo $row->nombres;?> -->
                                                                
                                                                </td>

                                                                <td>
                                                                    <div class="input-group mb-1" >
                                                                            
                                                                                        <input type="number" size="2" class="form-control" name='nota1[]' id='nota1[]'  placeholder="nota"  min="1" max="100" pattern='^[0-9]+'   minlength="1"  maxlength="3" value="<?php echo $nota1 ?>"  >
                                                                                        
                                                                                        <!-- <div class="input-group-append">
                                                                                            <?php
                                                                                                echo form_open_multipart('profesor/modificarNota')
                                                                                            ?>  
                                                                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                                                                    <input type="hidden" name='nota1.1[]' id='nota1.1[]' >
                                                                                                    <input type="hidden" name="idMateria" value="<?php echo $idMateria;?>">
                                                                                                    <input type="hidden" name='pos' id='pos' value="<?php echo $i;?>" >


                                                                                                    <button type="submit" class="btn btn-outline-info " title="Modificar" name="bt1[]" >
                                                                                                    <span class="fas fa-user-edit"></span>
                                                                                                    </button>
                                                                                            <?php
                                                                                            echo form_close();
                                                                                            ?> 
                                                                                        </div> -->
                                                                                                                                                   
                                                                    </div>                                                                   
                                                                </td>

                                                                <td>
                                                                <div class="input-group mb-1" >
                                                                             
                                                                                        <input type="number" size="2" class="form-control" name='nota2[]' id='nota2[]'  placeholder="nota"  min="1" max="100" pattern='^[0-9]+'   minlength="1"  maxlength="3" value="<?php echo $nota2 ?>"  onkeyup="PasarValor();"  >
                                                                                        <!-- value="<?php echo $row->nota_2_bimestre ?>" -->
                                                                                        
                                                                                        <!-- <div class="input-group-append">
                                                                                        <?php
                                                                                echo form_open_multipart('profesor/modificarNota')
                                                                                ?> 
                                                                                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                                                        <input type="hidden" name='nota2.1[]' id='nota2.1[]' >
                                                                                        <input type="hidden" name='pos' id='pos' value="<?php echo $i;?>" >

                                                                                        <input type="hidden" name="idMateria" value="<?php echo $idMateria;?>">
                                                                                        <button type="submit" class="btn btn-outline-info " title="Modificar" name="bt2[]" >
                                                                                        <span class="fas fa-user-edit"></span>
                                                                                        </button>
                                                                                        <?php
                                                                                    echo form_close();
                                                                                ?>
                                                                                        </div> -->
                                                                                                                                           
                                                                    </div> 

                                                                </td>

                                                                <td>
                                                                <div class="input-group mb-1">
                                                                              
                                                                                        <input type="number" size="2" class="form-control" name='nota3[]' id='nota3[]'  placeholder="nota"  min="1" max="100"  pattern='^[0-9]+'   minlength="1"  maxlength="3" value="<?php echo $nota3 ?>" onkeyup="PasarValor();"  >
                                                                                        <!-- value="<?php echo $row->nota_3_bimestre ?>" -->
                                                                                        
                                                                                        <!-- <div class="input-group-append">
                                                                                        <?php
                                                                                    echo form_open_multipart('profesor/modificarNota')
                                                                                    ?>
                                                                                        <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                                                        <input type="hidden" name='nota3.1[]' id='nota3.1[]' >
                                                                                        <input type="hidden" name='pos' id='pos' value="<?php echo $i;?>" >

                                                                                        <input type="hidden" name="idMateria" value="<?php echo $idMateria;?>">
                                                                                        
                                                                                        <button type="submit" class="btn btn-outline-info " title="Modificar" name="bt3[]" >
                                                                                        <span class="fas fa-user-edit"></span>
                                                                                        </button>
                                                                                        <?php
                                                                                        echo form_close();
                                                                                    ?>  
                                                                                        </div> -->
                                                                                                                                          
                                                                    </div> 

                                                                </td>

                                                                <!-- <td> 
                                                                    <div class="form-group">
                                                                    <?php
                                                                        // echo form_open_multipart('profesor/modificarNota')
                                                                    ?>
                                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                                    <button type="submit" class="btn btn-outline-info" title="Modificar" >
                                                                    <span class="fas fa-user-edit"></span>
                                                                    </button>
                                                                    <?php
                                                                        echo form_close();
                                                                    ?>
                                                                    </div>

                                                                </td>    -->
                                                            </tr>
                                                    <?php
                                                    $indice++;
                                                    $i++;

                                                        }
                                                        ?>                                            
                                                        </tbody>
                                                        <tfoot>
                                                           
                                                            <tr>
                                                                <th>N°</th>
                                                                <th>Nombre Completo</th>                                              
                                                                <th>Nota 1 Bim.</th>
                                                                <th>Nota 2 Bim.</th>
                                                                <th>Nota 3 Bim.</th>
                                                                <!-- <th>Acciones</th> -->
                                                            </tr>
                                                            <!-- <tr>
                                                                <th> </th>
                                                                <th> </th>
                                                                <th> 
                                                                    <button class="btn btn-primary" type="submit" title="Registrar"  >
                                                                    <span class="fas fa-clipboard-check"> REGISTRAR NOTAS 1 Bi.</span>
                                                                    </button>

                                                                </th>
                                                                <th>
                                                                <button class="btn btn-primary" type="submit" title="Registrar"  >
                                                                    <span class="fas fa-clipboard-check"> REGISTRAR NOTAS 2 Bi.</span>
                                                                    </button>
                                                                </th>
                                                                <th>
                                                                <button class="btn btn-primary" type="submit" title="Registrar"  >
                                                                    <span class="fas fa-clipboard-check"> REGISTRAR NOTAS 3 Bi.</span>
                                                                    </button>
                                                                </th>
                                                                <th> </th>


                                                            </tr> -->
                                                            
                                                        </tfoot>
                                                    </table>
                                                    
                                                    
                                                </div>
                                                 <div class="card-footer">
                                                         <!-- <input type="hidden" name="idEstudiante" value="<?php echo $row->idUsuario;?>"> -->

                                                        <button class="btn btn-outline-info" type="submit" title="Registrar" id="regNotas"  >
                                                        <span class="fas fa-clipboard-check"> REGISTRAR NOTAS</span>
                                                        </button>
                                                        <button class="btn btn-outline-info"  type="button" onclick="history.back()" name="volver atrás" title="Cancelar" >
                                                        <span class="far fa-window-close"> CANCELAR</span>
                                                    </button>

                                                </div>
                                <?php
                                  echo form_close();
                                 ?>
                                
                                <!-- /.card-body -->
                            </div>
                            <br><br>
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
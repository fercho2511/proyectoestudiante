
 <?php
                    foreach ($infocurso-> result() as $row) {
                        $idCurso =  $row->idCurso;
                        $curso =  $row->curso;
                        $seccion =  $row->seccion;
                        $tutor =  $row->tutor;                        
                    }
                    ?>

<?php 

$idCur =$idCurso;
$cur=$curso;
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

<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                   

                        <div class="col-sm-6">
                            <h1>Curso <?php echo $cur;?><?php echo $secc;?></h1>
                            <h1>Tutor Prof.: <?php echo $tut;?></h1>

                           
                           
                        </div>
                       
                       
                    </div>
                    <div class="col-sm-3">
                        <?php
                                            echo form_open_multipart('gestion/listaEstudiante2')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">

                                               
                                            <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">

                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Agregar" >
                                            <span class="fas fa-user-plus"> Inscribir Estudiante</span>

                                            </button>
                                        <?php
                                            echo form_close();
                                    ?>
                        </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <section class="content">
                <div class="container-fluid">
             
                    <div class="row">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-header">
                                <div>
                                    <h3>LISTA DE ESTUDIANTES</H3>

                                    </div>
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
                                                <!-- <td><?php echo $row->nombrePadre;?></td> -->
                                                <!-- <td><?php echo $row->nombreTutor;?></td> -->
                                                <!-- <td>
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
                                                                echo form_open_multipart('estudiante/subirFoto')
                                                            ?>
                                                            <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                            <button type="submit" class="btn btn-primary btn-xs" title="Subir" >
                                                            <span class="fas fa-file-upload"></span>
                                                            </button>
                                                            <?php
                                                                echo form_close();
                                                        ?>

                                                </td> -->

                                                 
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
                                                        echo form_open_multipart('gestion/eliminarEst')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">

                                                    <button type="submit" class="btn btn-danger btn-xs" title="Eliminar" >
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




            
            <!-- /.content -->
        </div>






       <!-- otro array -->
       <div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                   

                        <!-- <div class="col-sm-6">
                            <h1>Curso <?php echo $cur;?><?php echo $secc;?></h1>
                            <h1>Tutor Prof.: <?php echo $tut;?></h1>

                           
                           
                        </div> -->
                        <!-- <div class="col-sm-2">
                        <?php
                                            echo form_open_multipart('gestion/listaEstudiante2')//llegaremos asta gestion.php y e metodo agregar
                                        ?>
                                            <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">

                                               
                                            <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">

                                            <button type="submit" class="btn btn-block btn-info btn-lg" title="Agregar" >
                                            <span class="fas fa-user-plus"> Asignar Profesores</span>

                                            </button>
                                        <?php
                                            echo form_close();
                                    ?>
                        </div> -->
                       
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- <section class="content">
                <div class="container-fluid">
             
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                <div>
                                    <h3>LISTA DE MATERIAS</H3>

                                    </div>
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
                                                <th>Materia</th>   
                            
                                                <!-- <th>Tutor</th>                                               -->
                                                <th>Estado</th>
                                                <th>Acciones</th>

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
                                                <!-- <?php
                                                        echo form_open_multipart('materia/modificar')
                                                    ?>
                                                    <input type="hidden" name="idMateria" value="<?php echo $row->idMateria;?>">
                                                    <button type="submit" class="btn btn-outline-dark" title="Modificar">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?> -->

                                                <?php
                                                        echo form_open_multipart('materia/eliminarMat')
                                                    ?>
                                                    <input type="hidden" name="idMateria" value="<?php echo $row->idMateria;?>">
                                                    <input type="hidden" name="idCurso" value="<?php echo $idCur;?>">

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
                                                <th>Materia</th>   
                            
                                                <!-- <th>Tutor</th>                                               -->
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
            </section> -->

        </div>
           <!-- desde aca viene lo implementado -->
             
                    <div class="row">
                        <div class="col-10">
                            <div class="card">
                                <div class="card-header">
                                <div>
                                    <h3>LISTA DE ESTUDIANTES</H3>

                                    </div>
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
                                                <th>Nombre Completo del Estudiante</th>                                               
                                                <th>C.I.</th>
                                                <th>Telefono</th>                                               
                                                 <th>Acciones</th>
                                            </tr>
                                        </thead>
                                        <tbody>                        
                                            <tr>
                                                <td><?php echo 'hola'?></td>
                                                <td><?php echo 'hola'?></td>
                                                <td><?php echo 'hola'?></td>
                                                <td><?php echo 'hola'?></td>
                                                <td><?php echo 'hola'?></td>

                                                
                                                
                                                 <!-- <td>                                               

                                                <?php
                                                        echo form_open_multipart('gestion/eliminarEst')
                                                    ?>
                                                    <input type="hidden" name="idUsuario" value="<?php echo $row->idUsuario;?>">
                                                    <input type="hidden" name="idGestion" value="<?php echo $idGes;?>">

                                                    <button type="submit" class="btn btn-danger btn-xs" title="Eliminar" >
                                                    <span class="fas fa-trash-alt"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?> -->

                                                




                                            </tr> 
                     
                    
                                                           
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>N°</th>
                                                <th>Nombre Completo del Estudiante</th>                                               
                                                <th>C.I.</th>
                                                <th>Telefono</th>
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
        






       
<div class="container">
    <div class="row">
        <div class="=col-md-12"> 

        <?php
            echo form_open_multipart('estudiante/agregar')//llegaremos asta estudiante.php y e metodo agregar
        ?>
             <button type="submit" class="btn btn-success btn-xs" >Agregar Estudiante</button>
        <?php
            echo form_close();
        ?>
    
               

            <table class="table table-dark">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">CI</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Padre</th>
                    <th scope="col">Tutor</th>
                    <th scope="col">fecha</th>
                    <th scope="col">Modificar</th>
                    <th scope="col">Eliminar</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    $indice=1;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($estudiante-> result() as $row) {
                        ?>
                            <tr>
                                <th scope="row"><?php echo $indice;?></th>
                                <td><?php echo $row->nombre;?></td>
                                <td><?php echo $row->primerApellido;?></td>
                                <td><?php echo $row->segundoApellido;?></td>
                                <td><?php echo $row->ci;?></td>
                                <td><?php echo $row->telefono;?></td>
                                <td><?php echo $row->nombrePadre;?></td>
                                <td><?php echo $row->nombreTutor;?></td>
                                <td><?php echo formatearfecha($row->fechaRegistro);?></td>


                                
                                <td>
                                    <?php
                                        echo form_open_multipart('estudiante/modificar')
                                    ?>
                                    <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante;?>">
                                    <button type="submit" class="btn btn-primary btn-xs" >Modificar</button>
                                    <?php
                                        echo form_close();
                                    ?>
                                </td>
                                <td>
                                    <?php
                                        echo form_open_multipart('estudiante/eliminarEst')
                                    ?>
                                    <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante;?>">
                                    <button type="submit" class="btn btn-danger btn-xs" >Eliminar</button>
                                    <?php
                                        echo form_close();
                                    ?>
                                </td>
                               
                            </tr>
                        <?php
                        $indice++;
                    }

                    ?>

                    
                </tbody>
        </table>


        </div>
    </div>
</div>
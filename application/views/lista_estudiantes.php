<div class="container">
    <div class="row">
        <div class="=col-md-12">   

            <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido Paterno</th>
                    <th scope="col">Apellido Materno</th>
                    <th scope="col">CI</th>
                    <th scope="col">Telefono</th>
                    <th scope="col">Nombre Padre</th>
                    <th scope="col">Nombre Tutor</th>


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
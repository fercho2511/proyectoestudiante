<div class="container">
    <div class="row">
        <div class="=col-md-12"> 


        <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($infoestudiante-> result() as $row) 
                    {
                        
                                    
                                        echo form_open_multipart('estudiante/modificarEst')
                                    ?>
                                   
                                    <input type="hidden" name="idEstudiante" value="<?php echo $row->IdEstudiante;?>">

                                    <div class="col-md-4">
                                            <label class="form-label">Nombre</label>
                                            <input type="text" class="form-control" name='nombre'  value="<?php echo $row->nombre;?>" >
                                           
                                    </div>
                                    <div class="col-md-4">
                                            <label class="form-label">Apellido Paterno</label>
                                            <input type="text" class="form-control" name='apPaterno'  value="<?php echo $row->primerApellido;?>" >
                                           
                                    </div>
                                    <div class="col-md-4">
                                            <label class="form-label">Apellido Materno</label>
                                            <input type="text" class="form-control" name='apMaterno'  value="<?php echo $row->segundoApellido;?>" >
                                           
                                    </div>
                                    <div class="col-md-3">
                                            <label class="form-label">C.I.</label>
                                            <input type="text" class="form-control" name='ci'  value="<?php echo $row->ci;?>" >
                                           
                                    </div>
                                       
                                    <div class="col-md-3">
                                            <label class="form-label">Telefono</label>
                                            <input type="text" class="form-control" name='telefono'  value="<?php echo $row->telefono;?>" >
                                           
                                    </div>
                                    <div class="col-md-4">
                                            <label class="form-label">Nombre del Padre</label>
                                            <input type="text" class="form-control" name='nomPadre'  value="<?php echo $row->nombrePadre;?>" >
                                           
                                    </div>
                                    <div class="col-md-4">
                                            <label class="form-label">Nombre del Tutor</label>
                                            <input type="text" class="form-control" name='nomTutor'  value="<?php echo $row->nombreTutor;?>" >
                                           
                                    </div>
                                     
                                   <br>
                                      
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit">MODIFICAR</button>
                                        </div>                  
                        <?php
                       echo form_close();
                    }

        ?>
        </div>
    </div>
</div>
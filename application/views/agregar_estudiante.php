<div class="container">
    <div class="row">
        <div class="=col-md-12"> 


        <?php
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                   
                        
                                    
        echo form_open_multipart('estudiante/agregarEst')
        ?>

        <div class="col-md-4">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control" name='nombre'  placeholder="Ingrese Nombre" >
                                                
        </div>
        <div class="col-md-4">
        <label class="form-label">Apellido Paterno</label>
        <input type="text" class="form-control" name='apPaterno'  placeholder="Ingrese Apellido Paterno" >
                                                
        </div>
        <div class="col-md-4">
        <label class="form-label">Apellido Materno</label>
        <input type="text" class="form-control" name='apMaterno'  placeholder="Ingrese Apellido Materno" >
                                                
        </div>
        <div class="col-md-3">
        <label class="form-label">C.I.</label>
        <input type="text" class="form-control" name='ci'  placeholder="Ingrese C.I." >
                                                
        </div>

        <div class="col-md-3">
        <label class="form-label">Telefono</label>
        <input type="text" class="form-control" name='telefono'  placeholder="Ingrese Telefono" >
                                                
        </div>
        <div class="col-md-4">
        <label class="form-label">Nombre del Padre</label>
        <input type="text" class="form-control" name='nomPadre'  placeholder="Ingrese Nombre de Padre">
                                                
        </div>
        <div class="col-md-4">
        <label class="form-label">Nombre del Tutor</label>
        <input type="text" class="form-control" name='nomTutor'  placeholder="Ingrese Nombre del Tutor">
                                                
        </div>
                                            
        <br>
                                            
        <div class="col-12">
        <button class="btn btn-primary" type="submit">REGISTRAR</button>
        </div>                  
        <?php
        echo form_close();
                            

        ?>
        </div>
    </div>
</div>
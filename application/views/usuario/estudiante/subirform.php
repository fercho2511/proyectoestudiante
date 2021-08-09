<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>Subir fotografia del estudiante</h1> 
                            
                            <?php
                            echo form_open_multipart('estudiante/subir')
                                ?>
                            <input type="hidden" name="idEstudiante" value="<?php echo $idEstudiante;?>">
                            <input type="file" name="userfile">    
                            <button type="submit" class="btn btn-primary btn-xs"  >Subir</button>
                            <?php
                            echo form_close();
                            ?>


                        </div>
                     
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>Subir fotografia del Profesor</h1> 
                            
                            <?php
                            echo form_open_multipart('profesor/subir')
                                ?>
                            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>">
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
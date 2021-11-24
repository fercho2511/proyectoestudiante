<br>
<br>
<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-12">
                            <h1>Subir fotografia del estudiante</h1> 
                            
                            <?php
                            echo form_open_multipart('profesor/subir2')
                                ?>
                            <input type="hidden" name="idUsuario" value="<?php echo $idUsuario;?>">
                            <input type="file" name="userfile">    
                            <button type="submit" class="btn btn-outline-info    btn-xs"  >Subir</button>
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
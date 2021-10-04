

<br>
<br>

<div class="content-wrapper">
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Lista de estudiantes <?php echo $mate; ?> </h1>
                           
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
                                                <th>Nombre Completo</th>                                               
                                                <th>Nota 1 Bim.</th>
                                                <th>Nota 2 Bim.</th>
                                                <th>Nota 3 Bim.</th>
                                                <th>Nota 4 Bim.</th>
                                                <!-- <th>Foto</th>
                                                <th>Acciones</th> -->

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

                                                <td>
                                                
                                                    <div class="form-group">
                                                    <div class="col-sm-5">
                                                    <input type="number" class="form-control" name='nota1' id='nota1'  placeholder="nota"  min="1"  pattern='^[0-9]+'   minlength="2"  maxlength="2"  >
                                                    </div>
                                                    </div>
                                                </td>

                                                <td>
                                                <div class="form-group">
                                                    <div class="col-sm-5">
                                                    <input type="number" class="form-control" name='nota2' id='nota2'  placeholder="nota"  min="1"  pattern='^[0-9]+'   minlength="2"  maxlength="2"  >
                                                    </div>
                                                    </div>

                                                </td>

                                                <td>
                                                <div class="form-group">
                                                    <div class="col-sm-5">
                                                    <input type="number" class="form-control" name='nota3' id='nota3'  placeholder="nota"  min="1"  pattern='^[0-9]+'   minlength="2"  maxlength="2"  >
                                                    </div>
                                                    </div>

                                                </td>

                                                <td>
                                                <div class="form-group">
                                                    <div class="col-sm-5">
                                                    <input type="number" class="form-control" name='nota4' id='nota4'  placeholder="nota"  min="1"  pattern='^[0-9]+'   minlength="2"  maxlength="2"  >
                                                    </div>
                                                    </div>

                                                </td>
                                                

                                                
                                                
                                            




                                            </tr>
                                    <?php
                                    $indice++;
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
                                                <th>Nota 4 Bim.</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                    <div class="card-footer">
                                                <button class="btn btn-primary" type="submit" title="Registrar"  >
                                                <span class="fas fa-clipboard-check"> REGISTRAR</span>
                                                </button>
                                                <button class="btn btn-primary" type="button" onclick="history.back()" name="volver atrás" title="Cancelar" >
                                                <span class="far fa-window-close"> CANCELAR</span>
                                              </button>

                                             </div>
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
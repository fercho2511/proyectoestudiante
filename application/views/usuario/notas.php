<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
          
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <div class="card-header">
                <h3 >Habilitar/Desabilitar Notas</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                <thead>
                                            <tr>
                                                <!-- <th>N°</th> -->
                                                <th>Bimestre</th>                                               
                                                <!-- <th>Tutor</th>                                               -->
                                                <th>Estado</th>
                                                <th>Habilitar/Desabilitar</th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    $bim=1;
                    $est=5;
                    //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($habilitado-> result() as $row) {
                        ?>
                                            <tr>
                                               <!-- td><?php echo $indice;?></td> -->
                                                <td>
                                                <input type="hidden" class="form-control" id="<?php echo $row->bimestre ?>" name='<?php echo $row->bimestre ?>'  value="<?php echo $row->estado ?>">

                                                    <?php echo $row->bimestre;?>
                                                </td>  
                                                <td>
                                                <input type="hidden" class="form-control" id="<?php echo $est;?>" name='<?php echo $est;?>' value="<?php echo $row->estado ?>">

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
                                                <?php
                                                        echo form_open_multipart('usuario_per/Habilitar')
                                                    ?>
                                                    <input type="hidden" name="bimestre" value="<?php echo $row->bimestre;?>">
                                                    <button type="submit" class="btn btn-outline-dark" title="Habilitar" id="habil" name="habil">
                                                    <span class="fas fa-user-edit"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                 <?php
                                                        echo form_open_multipart('usuario_per/Desabilitar')
                                                    ?>
                                                    <input type="hidden" name="bimestre" value="<?php echo $row->bimestre;?>">

                                                    <button type="submit" class="btn btn-outline-danger" title="desabilitar" id="desabil" name="desabil" >
                                                    <span class="fas fa-trash-alt"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?> 

                                                </div>




                                            </tr>
                                    <?php
                                    $bim++;
                                    $est++;


                                }
                                ?>    

                                       
                </table>
              </div>
              <!-- /.card-body -->
              
            </div>
            <!-- /.card -->

          
            <!-- /.card -->
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /.row -->
       
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
        
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
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
                                                <!-- <th>Bimestre</th>                                                -->
                                                <!-- <th>Tutor</th>                                               -->
                                                <th>Habilitar/Desabilitar</th>
                                                <th>Estado</th>


                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
                    $bim=1;
                    $est=5;
                    //invocaremos a [notas habilitadas ] q pusimos en el array asociativo $data de estudiante.php
                    foreach ($habilitado-> result() as $row) {
                        ?>

                      <?php
                        $estado=  $row->estado_nota_1_bimestre;
                       $bim++;
                      $est++;
                      }
                      ?>   
                                            <tr>
                   
                                                <td>
                                                <div class="btn-group btn-group-justified" >
                                                <?php
                                                        echo form_open_multipart('usuario_per/Habilitar')
                                                    ?>
                                                    <button type="submit" class="btn btn-outline-dark" title="Habilitar" id="habil" name="habil">
                                                    <span class="fas fa-check-circle"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?>

                                                 <?php
                                                        echo form_open_multipart('usuario_per/Desabilitar')
                                                    ?>

                                                    <button type="submit" class="btn btn-outline-danger" title="desabilitar" id="desabil" name="desabil" >
                                                    <span class="fas fa-times-circle"></span>

                                                    </button>
                                                    <?php
                                                        echo form_close();
                                                    ?> 

                                                </div>
                                                </td>
                                                <td>
                                                <input type="hidden" class="form-control" name="desabilitado" id="desabilitado"   value="<?php echo $estado ?>">

                                                <?php
                                                    if ($estado==0){
                                                        echo 'Desabilitado';
                                                    }
                                                    else{
                                                        echo 'Habilitado';
                                                    }
                                                    ?>
                                                    
                                                </td>
                                               

                                                
                                                




                                            </tr>
                                   

                                       
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
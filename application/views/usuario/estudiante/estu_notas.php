  

<?php
            foreach ($habilitado-> result() as $row) {
              $estado=  $row->estado_nota_1_bimestre;
            }
            ?>

<?php 

$est=$estado;


?> 


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>BOLETIN DE CALIDFICACIONES</h1>

            <!-- con esta linea se puede obtener un dato enviado por el controlador -->
            <!-- <h1><?php echo $reunion;?></h1> -->
          </div>
         
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-info card-outline">
              
              
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>
    
        <div class="row">
          <div class="col-md-4" >
          
            <div class="card" style="text-align: center">
              <!-- <div class="card-header">
                <h3 class="card-title">Comunicados</h3>
              </div> -->
              <div class="card-body">
                    <?php
                       if ($est==0){
                         ?>
                        <a target="_blank" href="<?php echo base_url(); ?>index.php/estudiante/nota_pdf">
                        <button class="btn btn-outline-info" style='width:100px; height:80px' name="boletin" id="boletin" disabled>
                              <span class="badge bg-success"></span>
                              <i class="fas fa-print"></i> IMPRIMIR
                          </button>
                        </a>
                        <?php

                       }else{
                         ?>
                        <a target="_blank" href="<?php echo base_url(); ?>index.php/estudiante/nota_pdf">
                        <button class="btn btn-outline-info" style='width:100px; height:80px' name="boletin" id="boletin" >
                              <span class="badge bg-success"></span>
                              <i class="fas fa-print"></i> IMPRIMIR
                          </button>
                        </a>
                        <?php

                       }
                       

                       ?>;
                            

                              

                            
                    

                 </div>

              </div>
            </div>
            
          </div>
          <!-- /.col -->
          
          <!-- /.col -->
        </div>
        <!-- /. row -->
      </div><!-- /.container-fluid -->
  
    </section>
   
    <!-- /.content -->
  </div>
  
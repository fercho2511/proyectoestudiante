

  <div class="content-wrapper">
   
   </section>


   <section class="content">
       <br><br>
     <div class="container-fluid h-70">

     <div class="card card-row card-info">
       
         <div class="card-header">
           <h3 class="card-title">
           Actividades Curriculares
           </h3>
         </div>
         <div class="card-body">

         <!-- desde aca seria con el ciclo -->
               <?php
                   $indice=1;
                           //invocaremos a [estudiante] q pusimos en el array asociativo $data de estudiante.php
                   foreach ($actividades-> result() as $row) {
                       ?>
                       <!-- <?php echo $tipo;?>  -->
                               <div class="card card-info card-outline">
                               <div class="card-header">
                                   <h5 class="card-title">Descripcion:</h5>
                                   
                                   <div class="card-tools">
                                   <a href="#" class="btn btn-tool btn-link">#<?php echo $indice;?></a>
                                   <a href="#" class="btn btn-tool">
                                       <i class="fas fa-pen"><?php echo $row->fechaRegistro;?></i>
                                   </a>
                                   </div>
                                   <br>
                               
                                   <p><?php echo $row->descripcion;?></p>
                                   <h6 class="card-title">Fecha: <?php echo formatearfecha($row->fechaRegistro);?></h6>
                                    <br>
                                    <h6 class="card-title">Hora: <?php echo formatearhora($row->hora);?></h6>

                               </div>
                               </div>
                       <?php
                       $indice++;
                    }
                        ?>                                            
                   
           <!-- asta aca -->
         </div>
       </div>
   
   </section>
   <br><br>
 </div>
 
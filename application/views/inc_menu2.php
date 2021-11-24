<style>
      .sidebar-dark-blue{
        background: #455279 !important;
      }
        </style>
 
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">
 <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

   <!-- DESDE ACA PROVAREMOS PARA Q SEA RESPONSIVO -->
   <ul class="navbar-nav">
      
        <!-- ESTA LINEA ES LA Q DETERMINA PODER DESPLAZAR -->
        
        <!-- ASTA ACA -->
      
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="index3.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>
   <!-- ASTA ACA -->




            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?php echo base_url(); ?>adminLTE/dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?php echo base_url(); ?>adminLTE/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            </div>
                        </a>
                    </div>
                    <div>
                    <?php
                                        echo form_open_multipart('usuario/logout');
                                        ?>
                                        <button type="submit" class="btn btn-outline-info" >SALIR/<?php echo $this->session->userdata('nombres')?> </button>
                                        <?php
                                            echo form_close();
                                         ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.navbar -->

        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="../../index3.html" class="brand-link">
                <img src="<?php echo base_url(); ?>adminLTE/dist/img/2.png" alt="AdminLTE Logo"  class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Administrador </span>

            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                      <!-- aca biene la imagen de usuario -->
                      
                        <!-- <img src="<?php echo base_url(); ?>adminLTE/dist/img/usuarioAdmin.jpg" class="img-circle elevation-2" alt="User Image"> -->
                        <img src="<?php echo base_url(); ?>adminLTE/dist/img/userlogo.png" class="img-circle elevation-2" alt="User Image">

                      </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $this->session->userdata('nombres')?> </a>
                    </div>
                </div>

             <!-- `   <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
                        </div>
                    </div>
                </div>` -->




                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                
                        
                        
                      <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/usuario_per/test" class="nav-link">
                                        <i class="nav-icon fas fa-users"></i>
                                        <p>Administrador</p>
                                      </a>
                      </li>
                      <!-- <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/administrador/test" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Administrador</p>
                                      </a>
                      </li> -->
                      <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/profesor/test" class="nav-link">
                                        <i class="nav-icon fas fa-user-tie"></i>
                                        <p>Profesor</p>
                                      </a>
                      </li>
                      <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/estudiante/test" class="nav-link">
                                        <i class="nav-icon fas fa-user-graduate"></i>
                                        <p>Estudiante</p>
                                      </a>
                      </li>
                      <li class="nav-item">
                                
                                <li class="nav-item">
                                  <a href="#" class="nav-link">
                                    <p>
                                      ---------------------------
                                    </p>
                                  </a>
                                </li>
                                <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/gestion/test" class="nav-link">
                                      <i class="nav-icon fas fa-calendar-alt"></i>

                                        <p>Gestion</p>
                                      </a>
                                    </li>
                                    <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/materia/test" class="nav-link">
                                      <i class="nav-icon fas fa-book"></i>
                                        <p>Materia</p>
                                      </a>
                                    </li>

                                    <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/curso/test" class="nav-link">
                                      <i class="nav-icon fas fa-chalkboard-teacher"></i>

                                        <p>Curso</p>
                                      </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/comunicado/test" class="nav-link">
                                      <i class="nav-icon far fa-clipboard"></i>

                                        <p>Comunicado</p>
                                      </a>
                                    </li> -->
                                    <li class="nav-item">
                                      <a href="<?php echo base_url(); ?>index.php/usuario_per/notas" class="nav-link">
                                      <i class="nav-icon far fa-clipboard"></i>

                                        <p>Notas</p>
                                      </a>
                                    </li>
                                   
                                    
                                  </ul>
                                </li>
                    </ul>
                </nav>
            </div>
        </aside>

        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>

            <ul class="navbar-nav ml-auto">
                
                <!-- ESTA LINEA ES LA Q DETERMINA PODER DESPLAZAR -->
                
                <!-- ASTA ACA -->
            
                
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
                                <img src="<?php echo base_url(); ?>adminLTE/dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            </div>
                        </a>
                        <div class="dropdown-divider"></div>
                        <a href="#" class="dropdown-item">
                            <div class="media">
                                <img src="<?php echo base_url(); ?>adminLTE/dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
                            </div>
                        </a>
                    </div>
                </li>
                <div>
                    <?php
                         echo form_open_multipart('usuario/logout');
                         ?>
                          <button type="submit" class="btn btn-outline-info" >Cerrar Sesion/<?php echo $this->session->userdata('nombres')?></button>
                          <?php
                              echo form_close();
                          ?>
                 
                </div>
               
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
                        <i class="fas fa-th-large"></i>
                    </a>
                </li> -->
            </ul>
        </nav>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <a href="../../index3.html" class="brand-link">
                <img src="<?php echo base_url(); ?>adminLTE/dist/img/2.png" alt="AdminLTE Logo"  class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">Estudiante</span>
            </a>

            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <!-- <img src="<?php echo base_url(); ?>adminLTE/dist/img/userlogo.png" class="img-circle elevation-2" alt="User Image"> -->
                        <img src="<?php echo base_url(); ?>cargas/estudiante/<?php echo $this->session->userdata('foto')?>" class="img-circle elevation-2" alt="User Image">

                    </div>
                    <div class="info">
                        <a href="#" class="d-block"><?php echo $this->session->userdata('nombres')?> </a>
                    </div>
                </div>

                <!-- <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
                        </div>
                    </div>
                </div> -->

                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
             
                        <li class="nav-item menu-open">
                            
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/estudiante/estuComunicado" class="nav-link">
                                    <i class="nav-icon far fa-clipboard"></i>
                                        <p>Comunicado</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/estudiante/estuNota" class="nav-link">
                                    <i class="nav-icon fas fa-tasks"></i>
                                        <p>Notas</p>
                                    </a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/profesor/profeComunicado"  class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Actividades Curriculares</p>
                                    </a>
                                </li> -->
                                
                                <!-- <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/profesor/profeComunicado" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Reuniones</p>
                                    </a>
                                </li> -->
                                <!-- <li class="nav-item">
                                    <a href="<?php echo base_url(); ?>index.php/profesor/profeComunicado" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Licencia</p>
                                    </a>
                                </li> -->
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>

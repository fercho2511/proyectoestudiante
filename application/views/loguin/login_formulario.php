
<div class="limiter">
    <?php
    switch ($msg) {
    case '1':
        $mensaje= "CUENTA O USUARIO NO VALIDO";
        break;
        case '2':
        $mensaje= "ACCESO NO VALIDO";
        break;
        case '3':
            $mensaje= "GRACIAS POR USAR EL SISTEMA";
            break;
    default:
        $mensaje ="INGRESE SUS DATOS";
        break;
    }
    ?>   
    
</div> 
        <div class="container-login100" style="color: #26778d;" >
            <div class="wrap-login100">
                <div class="login100-form-title" style="background-image: url(<?php echo base_url(); ?>adminLTE/dist/img/loguin2.png);">
                    <span class="login100-form-title-1" >
                        LOGUIN
                      </span>
                     
                </div>
                <div backgrouncolor="blue" >
                    <?php
                                echo $mensaje;
                                ?>
                    </div>

                <div class="login100-form validate-form">
                      
                <?php
                echo form_open_multipart('usuario/validarUsuario');
                ?>
                    <div class="wrap-input100 validate-input m-b-26" data-validate="Ingrese cuenta de usuario" >
                        <span class="label-input100" style="color:26778d ;" >USUARIO</span>
                        <input class="input100" type="text" name="login" placeholder="Ingrese Cuenta">
                        <span class="glyphicon glyphicon-align-left"></span>
                    </div>
                  

                    <div class="wrap-input100 validate-input m-b-18" data-validate="ingrese contraseña">
                        <span class="label-input100">PASSWORD</span>
                        <input class="input100" type="password" name="password" placeholder="Ingrese Contraseña">
                        <span class="focus-input100"></span>
                    </div>

                    <div class="flex-sb-m w-full p-b-30">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            
                        </div>

                        <div>
                            <a href="#" class="txt1">
								olvidaste tu contraseña?
							</a>
                        </div>
                    </div>

                    <div class="container-login100-form-btn">
                        <button type="submit" class="btn btn-outline-secondary">
							INGRESAR
						</button>
                    </div>
            <?php
            echo form_close();
            ?>
                </d>
            </div>
        </div>                                                            
    </div>
    
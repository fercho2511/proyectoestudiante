<!DOCTYPE html>
<html lang="en">
<head>
	<title>GESET</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>adminLTE/dist/loguin/images/icons/favicon.ico"/>
	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>adminLTE/dist/loguin/css/main.css">
<!--===============================================================================================-->
</head>
<body>
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
<div backgrouncolor="blue" >
                    <?php
                                echo $mensaje;
                                ?>
                    </div>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?php echo base_url(); ?>adminLTE/dist/img/logologuin.png" alt="IMG">
				</div>
                <?php
                    echo form_open_multipart('usuario/validarUsuario');
                    ?>
				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Inicio de Sesión
					</span>
                    
					<div class="wrap-input100 validate-input" >
						<input class="input100" type="text" name="login" placeholder="Cuenta">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" >
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
							Acceder
						</button>
					</div>
					
                    <!-- <div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div> -->

					

					
				</form>
                <?php
                    echo form_close();
                    ?>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>adminLTE/dist/loguin/vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="<?php echo base_url(); ?>adminLTE/dist/js/main.js"></script>

</body>
</html>
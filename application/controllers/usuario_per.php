<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario_per extends CI_Controller {


	public function index()
	{
        $lista=$this->usuarioper_model->lista();
        $data['usuario']=$lista; 

		$this->load->view('inc_inicio.php');
		$this->load->view('usuario/lista_usuario',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
     
        $lista=$this->usuarioper_model->lista();
        $data['usuario']=$lista; 
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/lista_usuario',$data);
		$this->load->view('inc_fin.php');

	}

 


       public function modificar()
    {
        $idUsuario=$_POST['idUsuario'];
        $data['infousuario']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/modificar_usuario',$data);
		$this->load->view('inc_fin.php');
    }


    public function modificarUsu()
    {
       

        $idUsuario=$_POST['idUsuario'];
        $data['nombres']=$_POST['nombres'];
        $data['apellidoPaterno']=$_POST['apellidoPaterno'];
        $data['apellidoMaterno']=$_POST['apellidoMaterno'];
        $data['fechaNacimiento']=$_POST['fechaNacimiento'];
        $data['sexo']=$_POST['sexo'];
        $data['ci']=$_POST['ci'];
        $data['telefono']=$_POST['telefono'];
        $data['direccion']=$_POST['direccion'];
        // $data['correo']=$_POST['correo'];
        $rol=$_POST['rol'];
       
                switch ($rol) {
                   case 'Administrador':
                       $data['idRol']='2';
                       break;
                   case 'Profesor':
                       $data['idRol']='3';    
                       break;
                    case 'Estudiante':
                       $data['idRol']='4';        
                        break; 
               }
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];      

       // $data['fechaModificacion']=$_POST['CURRENT_TIMESTAMP'];
       // $data['estado']=$_POST['estado'];

        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('usuario_per/test','refresh');
    }

    public function modificarUsu2()
    {
       

        $idUsuario=$_POST['idUsuario'];
        $data['profesor']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/form_profesor',$data);
		$this->load->view('inc_fin.php');

       
    }
    public function modificarLoguin()
    {
       
        $idUsuario=$_POST['idUsuario'];
        $data['login']=$_POST['login'];
        $data['password']=md5($_POST['password']);
      

        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('estudiante/estudiante/test','refresh');
    }
    public function modificarLoguinAdmin()
    {
       
        $idUsuario=$_POST['idUsuario'];
        $data['login']=$_POST['login'];
        $data['password']=md5($_POST['password']);
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];      

        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('usuario_per/test','refresh');
    }
    

    
      public function agregar()
    {
        $this->load->library(array('form_validation'));
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/agregar_usuario'); 
		$this->load->view('inc_fin.php');

    }

 

    //agregar el usuario desde admin 
     public function agregarUsu()
     {       
          $this->load->library(array('form_validation'));

        $this->load->helper('form');
        $data['nombres']=$_POST['nombres'];
                $data['apellidoPaterno']=$_POST['apellidoPaterno'];
                $data['apellidoMaterno']=$_POST['apellidoMaterno'];
                $data['sexo']=$_POST['sexo'];
                $data['telefono']=$_POST['telefono'];
                $data['ci']=$_POST['ci'];
                $data['direccion']=$_POST['direccion'];
                $data['fechaNacimiento']=$_POST['fechaNacimiento'];
                //provando loguin
                $nom=$_POST['nombres'];
                $ap=$_POST['apellidoPaterno'];
                $am=$_POST['apellidoMaterno'];
                $ci=$_POST['ci'];
                
                $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];  
                $rol=$_POST['rol'];
       
                switch ($rol) {
                   case 'Administrador':
                       $data['idRol']='2';
                       break;
                   case 'Profesor':
                       $data['idRol']='3';    
                       break;
                    case 'Estudiante':
                       $data['idRol']='4';        
                        break; 
               }
        

        // aver aca haciendo pruebas de validation de

            $config=array(
                array(
                    'field'=>'ci',
                    'label' =>'carnet',
                    'rules' =>'is_unique[usuario.ci]',
                    'errors'=> array(
                            'is_unique' =>'El %s. ya se encuentra registrado',
                    ),

                ),
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run()==FALSE) {
                # code...
                $data=$config;
                echo '<script>
                alert("CI YA REGISTRADO");
                </script>'; 
                  redirect('usuario_per/agregar', 'refresh');

                // $data=$config;
                // redirect('usuario_per/agregar',$data);
            }
            else {
                // $this->load->view('formsuccess');
                $data['login']=$this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci); 
                $data['password']=md5($this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci)); 
                $this->usuarioper_model->agregarUsuario($data); 
                redirect('usuario_per/test','refresh');
       
            }





        // asta aca
         
         
         

    //      //para validar el carnet
         
    //    $val=$this->usuarioper_model->validarCarnet($ci);  
       
    //             switch ($val) {
    //                 case '1':
    //                     $error_message = "El usuario ya existe.";
    //                     echo $error_message;
    //                      redirect('usuario_per/agregar');
    //                     break;
    //                 case '0':
    //                     $this->usuarioper_model->agregarUsuario($data);
    //                     redirect('usuario_per/test','refresh');
    //                     // redirect('profesor/test1','refresh');
    //                     break;
                                    
                
    //             //si hay entonces redireccionar                
    //             //PARA LOS ROLES            

             
    //          }




     }
    
     public function ValidarCI(){

        $data['ci']=$_POST['ci'];
        $ci=$_POST['ci'];
        $val=$this->usuarioper_model->validarCarnet($ci); 
        $data='1';
        $data2='2'; 

         if ($val == 'null') {
            return $data;
         }
         else {
             return $data2;


         }
/*

         $valor = $this->input->post('ci');
         $resultado = $this->usuarioper_model->validarCarnet($valor);
         if($resultado) {
            echo 1;
         } else { 
            echo 0;
         }*/
     }



    
     public function  eliminarUsu()
     {
        $idUsuario=$_POST['idUsuario'];  
        $this->usuarioper_model->eliminarUsuario($idUsuario); 

        redirect('usuario_per/test','refresh');

     }

     public function habillitarUsu(){
        $idUsuario=$_POST['idUsuario']; 
         $idUsuario_Acciones=$_POST['idUsuario_Acciones'];
        $this->usuarioper_model->HabilUsuario($idUsuario,$idUsuario_Acciones);
       // $this->usuarioper_model->HabilUsuario($idUsuario);

        redirect('usuario_per/test','refresh');
     }

    public function desabilitarUsu(){
        $idUsuario=$_POST['idUsuario']; 
        // $idUsuario_Acciones=$_POST['idUsuario_Acciones'];
       // $this->usuarioper_model->bajaUsuario($idUsuario,$idUsuario_Acciones);
        $this->usuarioper_model->bajaUsuario($idUsuario);

        redirect('usuario_per/test','refresh');
    }


    public function gestionar(){

        $idUsuario=$_POST['idUsuario'];
        $data['infousuario']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
        $this->load->view('usuario/form_usuario',$data);
        $this->load->view('inc_fin.php');



    }

    public function gestionar_usu2(){

        $idUsuario=$_POST['idUsuario'];
        $data['infousuario']=$this->usuarioper_model->obtenerUsuario($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
        $this->load->view('usuario/form_usuario',$data);
        $this->load->view('inc_fin.php');


    }



}

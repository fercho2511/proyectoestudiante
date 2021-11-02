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

    public function modificar2()
    {
        $idUsuario = $this->session->flashdata('idUsuario');

        // $idUsuario=$_POST['idUsuario'];
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
        $idUsuario=$this->session->flashdata('idUsuario');


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
    // public function modificarLoguinAdmin()
    // {
    //     try {            //code...
        
       
    //         $this->load->library(array('form_validation'));
    //         $this->load->helper('form');

    //         $data['password']=md5($_POST['password']);
    //         $idUsuario=$_POST['idUsuario'];        
    //         $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

            

    //         $config=array(
    //             array(
    //                 'field'=>'password',
    //                 'label' =>'password',
    //                 'rules' =>'is_unique[usuario.password]',                    
    //                 'errors'=> array(
    //                         'is_unique' =>'La %s. ya fue registrado',
    //                 ),

    //             ),
    //         );
    //         $this->form_validation->set_rules($config);

    //         if ($this->form_validation->run()==FALSE) {
    //             echo '<script>
    //             alert("Password ya Registrado");
    //             </script>'; 
    //             redirect($_SERVER['HTTP_REFERER']);
        
    //         }
    //         else {
    //             $this->usuarioper_model->modificarUsuario($idUsuario,$data);
    //             echo '<script>
    //             alert("Modificacion Satisfactoria");
    //             </script>';

    //             redirect('usuario_per/test','refresh');
    
    //         }
    //     } catch (\Throwable $th) {
    //         echo '<script>
    //             alert("Password ya Registrado");
    //             </script>'; 
    //                 redirect('gestion/cursoCreado', 'refresh');
    //     }      

       
       

    // }
    public function modificarLoguinAdmin()
    {
        try {           
        
       
            $data['password']=md5($_POST['password']);
            $idUsuario=$_POST['idUsuario'];        
            $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
            $cod=md5($_POST['password']);
            if ($this->usuarioper_model->existencia($cod)) {

                echo '<script>
                alert("Password ya Registrado");
                </script>'; 
                $this->session->set_flashdata('idUsuario', $idUsuario);
                redirect('usuario_per/modificar2','refresh');
            }
            else{
                
                $this->usuarioper_model->modificarUsuario($idUsuario,$data);
                echo '<script>
                alert("Modificacion Satisfactoria");
                </script>';

                redirect('usuario_per/test','refresh');
            }

            
        } catch (\Throwable $th) {
            echo '<script>
                alert("Password ya Registrado");
                </script>'; 
                    redirect('usuario_per/test', 'refresh');
        }      

       
       

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
                redirect($_SERVER['HTTP_REFERER']);

                //   redirect('usuario_per/agregar', 'refresh');

                // $data=$config;
                // redirect('usuario_per/agregar',$data);
            }
            else {
                // $this->load->view('formsuccess');
                $data['login']=$this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci); 
                $data['password']=md5($this->usuarioper_model->crearLoguin($nom,$ap,$am,$ci)); 
                $this->usuarioper_model->agregarUsuario($data); 
                echo '<script>
                alert("Registro Satisfactorio");
                </script>';
                redirect('usuario_per/test','refresh');
       
            }





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


    public function notas(){
        // $idUsuario=$_POST['idUsuario'];
         $data['habilitado']=$this->usuarioper_model->habilitado();
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
        $this->load->view('usuario/notas',$data);
        $this->load->view('inc_fin.php');

    }

    public function Habilitar(){
        
        $data=$_POST['bimestre'];
        $this->usuarioper_model->habilitarBim($data);
        redirect('usuario_per/notas','refresh');

    }

    public function Desabilitar(){
        $data=$_POST['bimestre'];
        $this->usuarioper_model->desabilitarBim($data);
        redirect('usuario_per/notas','refresh');


    }



}

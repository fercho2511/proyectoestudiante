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
        $data['correo']=$_POST['correo'];
        $data['rol']=$_POST['rol'];
       // $data['fechaRegistro']=$_POST['fechaRegistro'];
       // $data['estado']=$_POST['estado'];

        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('usuario_per/test','refresh');
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
      

        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('usuario_per/test','refresh');
    }
    public function modificarUsu2()
    {
       

        $idUsuario=$_POST['idUsuario'];
        $data['nombres']=$_POST['nombres'];
        $data['apellidoPaterno']=$_POST['apellidoPaterno'];
        $data['apellidoMaterno']=$_POST['apellidoMaterno'];
        $data['fechaNacimiento']=$_POST['fechaNacimiento'];      
        $data['tipo']=$_POST['tipo'];
        $this->usuarioper_model->modificarUsuario($idUsuario,$data);

        redirect('estudiante/estudiante/test','refresh');
    }

    
      public function agregar()
    {
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/agregar_usuario'); 
		$this->load->view('inc_fin.php');

    }

 
     public function agregarUsu()
     {
         $data['nombres']=$_POST['nombres'];
         $data['apellidoPaterno']=$_POST['apellidoPaterno'];
         $data['apellidoMaterno']=$_POST['apellidoMaterno'];
         $data['sexo']=$_POST['sexo'];
         $data['telefono']=$_POST['telefono'];
         $data['ci']=$_POST['ci'];
         $data['direccion']=$_POST['direccion'];
         $data['fechaNacimiento']=$_POST['fechaNacimiento'];
         $data['correo']=$_POST['correo'];
         $data['login']=$_POST['nombres'];
         $data['password']=md5($_POST['nombres']);
         $data['rol']=$_POST['rol'];


         $this->usuarioper_model->agregarUsuario($data); 

             redirect('usuario_per/test','refresh');

     }



    
     public function  eliminarUsu()
     {
        $idUsuario=$_POST['idUsuario'];  
        $this->usuarioper_model->eliminarUsuario($idUsuario); 

        redirect('usuario_per/test','refresh');

     }

     public function habillitarUsu(){
        $idUsuario=$_POST['idUsuario']; 
        $this->usuarioper_model->HabilUsuario($idUsuario);
        redirect('usuario_per/test','refresh');
     }

    public function desabilitarUsu(){
        $idUsuario=$_POST['idUsuario']; 
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

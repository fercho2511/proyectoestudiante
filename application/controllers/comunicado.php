<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Comunicado extends CI_Controller {


	public function index()
	{
        //cargara la list de estudiantes
        $lista=$this->comunicado_model->lista();
        $data['comunicado']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
		$this->load->view('usuario/estudiante/lista_estudiantes',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
        //cargara la list de estudiantes
        $lista=$this->comunicado_model->lista();
        $data['comunicado']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('comunicado/lista_comunicado',$data);
		$this->load->view('inc_fin.php');

	}
    public function test1()
	{
        //cargara la list de estudiantes
        $lista=$this->comunicado_model->lista();
        $data['comunicado']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
		$this->load->view('usuario/estudiante/estudiante_vista',$data);
		$this->load->view('inc_fin.php');

	}

    //haciendo click en modificar nos estar traendo asta este metodo 
    //para realizar las siguientes acciones
    //1 tiene q recuperar los datos del estudiantes con su id
    //luego enviar a un formulario editable


       public function modificar()
    {
        $idComunicado=$_POST['idComunicado'];
        $data['infocomunicado']=$this->comunicado_model->obtenerComunicado($idComunicado);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('comunicado/modificar_comunicado',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarComunicado()
    {
        //aca se resepcionara las variables q estan llegando desde form
        //realizar la consulta para update
        //cargar la lista actualizada

        $idComunicado=$_POST['idComunicado'];
        $data['tipo']=$_POST['tipo'];
        $data['descripcion']=$_POST['descripcion'];
        $data['fechaComunicado']=$_POST['fechaComunicado'];
        $data['hora']=$_POST['hora']; 
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

      
        //ahora la consula
        $this->comunicado_model->modificarComunicado($idComunicado,$data);
        //esta linea ya realiza la actualizacion

        redirect('comunicado/test','refresh');
    }

    // ahora es para crear estudiante
    //del boton q se realizo en la vista llegara a este metodo
      public function agregar()
    {
        $lista=$this->curso_model->lista();
        $data['curso']=$lista;
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('comunicado/agregar_comunicado',$data); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

    }

    //ahora desde el formulario se agregar se viene a este metodo
    //ahora el metodo para agregar a la base de datos 
     public function agregarCom()
     {
        

         $data['tipo']=$_POST['tipo'];
         $data['d
         escripcion']=$_POST['descripcion'];
         $data['fechaComunicado']=$_POST['fechaComunicado'];
         $data['hora']=$_POST['hora'];      
         
         $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

         //dicho todo esto se ara la consulta a base de datos
         $this->comunicado_model->agregarComunicado($data); // aca se envia el metodo del modelo 

         	//despues iremso a la lista redireccionando o dandole un refresh
             redirect('comunicado/test','refresh');

     }



     /*ahora desde la vista lista_estudiantes, dandole click al boton eliminar direccionara a este metodo
     no es necesario formulario por q no tengo formulario de intermedio, vistas de intermedio 
     como en los demas como esta:
       $this->load->view('inc_inicio.php');
		$this->load->view('agregar_estudiante'); 
		$this->load->view('inc_fin.php'); 
     ya q solo lo eliminara*/
     public function  eliminarCom()
     {
        $idComunicado=$_POST['idComunicado'];  // llega el id desde el campo hiden del formulario
        $data1 =$_POST['idUsuario_Acciones'];

        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->comunicado_model->eliminarComunicado($idComunicado,$data1); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('comunicado/test','refresh');

     }


    //  pqra la foto
    


     

     
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Gestion extends CI_Controller {


	public function index()
	{
        //cargara la list de estudiantes
        $lista=$this->gestion_model->lista();
        $data['gestion']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
		$this->load->view('usuario/estudiante/lista_estudiantes',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
        //cargara la list de estudiantes
        $lista=$this->gestion_model->lista();
        $data['gestion']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/lista_gestion',$data);
		$this->load->view('inc_fin.php');

	}
    public function test1()
	{
        //cargara la list de estudiantes
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo
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
        $idGestion=$_POST['idGestion'];
        $data['infogestion']=$this->gestion_model->obtenerGestion($idGestion);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/modificar_gestion',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarGestion()
    {
        //aca se resepcionara las variables q estan llegando desde form
        //realizar la consulta para update
        //cargar la lista actualizada

        $idGestion=$_POST['idGestion'];
        $data['gestion']=$_POST['gestion'];
        $data['fechaInicioGestion']=$_POST['fechaInicioGestion'];
        $data['fechaFinGestion']=$_POST['fechaFinGestion'];
        $data['fechaInicioReceso']=$_POST['fechaInicioReceso'];
        $data['fechaFinReceso']=$_POST['fechaFinReceso'];
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

        //ahora la consula
        $this->gestion_model->modificarGestion($idGestion,$data);
        //esta linea ya realiza la actualizacion

        redirect('gestion/test','refresh');
    }

    // ahora es para crear estudiante
    //del boton q se realizo en la vista llegara a este metodo
      public function agregar()
    {
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/agregar_gestion'); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

    }

    //ahora desde el formulario se agregar se viene a este metodo
    //ahora el metodo para agregar a la base de datos 
     public function agregarGest()
     {
         //recibireos los datos del estudiante
         /*$data['nombre']=$_POST['nombre'];
         $data['primerApellido']=$_POST['apPaterno'];
         $data['segundoApellido']=$_POST['apMaterno'];
         $data['ci']=$_POST['ci'];
         $data['telefono']=$_POST['telefono'];
         $data['nombrePadre']=$_POST['nomPadre'];
         $data['nombreTutor']=$_POST['nomTutor'];*/

         $data['gestion']=$_POST['gestion'];
         $data['fechaInicioGestion']=$_POST['fechaInicioGestion'];
         $data['fechaFinGestion']=$_POST['fechaFinGestion'];
         //$data['periodoReceso']=$_POST['periodoReceso'];
         //$data['telefono']=$_POST['telefono'];
         
         $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

         //dicho todo esto se ara la consulta a base de datos
         $this->gestion_model->agregarGestion($data); // aca se envia el metodo del modelo 

         	//despues iremso a la lista redireccionando o dandole un refresh
             redirect('gestion/test','refresh');

     }



     /*ahora desde la vista lista_estudiantes, dandole click al boton eliminar direccionara a este metodo
     no es necesario formulario por q no tengo formulario de intermedio, vistas de intermedio 
     como en los demas como esta:
       $this->load->view('inc_inicio.php');
		$this->load->view('agregar_estudiante'); 
		$this->load->view('inc_fin.php'); 
     ya q solo lo eliminara*/
     public function  eliminarGest()
     {
        $idGestion=$_POST['idGestion'];  // llega el id desde el campo hiden del formulario
        $data1 =$_POST['idUsuario_Acciones'];

        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->gestion_model->eliminarGestion($idGestion,$data1); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('gestion/test','refresh');

     }

     public function listaCursos (){

        // $lista=$this->gestion_model->listaCuso($idGestion);
        // $data['curso']=$lista; //otro array asociativo

        $idGestion=$_POST['idGestion'];
        $data['curso']=$this->gestion_model->listaCuso($idGestion);

        
        $idGestion=$_POST['idGestion'];
        $data['gestionn']=$this->gestion_model->obtenerGestion($idGestion);


  

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/listado_curso',$data);
		$this->load->view('inc_fin.php');


     }


     

     
}

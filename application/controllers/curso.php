<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Curso extends CI_Controller {


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
        $lista=$this->curso_model->lista();
        $data['curso']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('curso/lista_curso',$data);
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
        $idCurso=$_POST['idCurso'];
        $data['infocurso']=$this->curso_model->obtenerCurso($idCurso);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('curso/modificar_curso',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarCurso()
    {
        //aca se resepcionara las variables q estan llegando desde form
        //realizar la consulta para update
        //cargar la lista actualizada

        $idCurso=$_POST['idCurso'];
        $data['curso']=$_POST['curso'];
        $data['seccion']=$_POST['seccion'];
        $data['tutor']=$_POST['tutor'];
      
        //ahora la consula
        $this->curso_model->modificarCurso($idCurso,$data);
        //esta linea ya realiza la actualizacion

        redirect('curso/test','refresh');
    }

    // ahora es para crear estudiante
    //del boton q se realizo en la vista llegara a este metodo
      public function agregar()
    {
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('curso/agregar_curso'); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

    }

    //ahora desde el formulario se agregar se viene a este metodo
    //ahora el metodo para agregar a la base de datos 
     public function agregarCurso()
     {
         //recibireos los datos del estudiante
         /*$data['nombre']=$_POST['nombre'];
         $data['primerApellido']=$_POST['apPaterno'];
         $data['segundoApellido']=$_POST['apMaterno'];
         $data['ci']=$_POST['ci'];
         $data['telefono']=$_POST['telefono'];
         $data['nombrePadre']=$_POST['nomPadre'];
         $data['nombreTutor']=$_POST['nomTutor'];*/
         $data['curso']=$_POST['curso'];
         $data['seccion']=$_POST['seccion'];
         $data['tutor']=$_POST['tutor'];

       
         //$data['periodoReceso']=$_POST['periodoReceso'];
         //$data['telefono']=$_POST['telefono'];
         
         //$data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

         //dicho todo esto se ara la consulta a base de datos
         $this->curso_model->agregarCurso($data); // aca se envia el metodo del modelo 

         	//despues iremso a la lista redireccionando o dandole un refresh
             redirect('curso/test','refresh');

     }



     /*ahora desde la vista lista_estudiantes, dandole click al boton eliminar direccionara a este metodo
     no es necesario formulario por q no tengo formulario de intermedio, vistas de intermedio 
     como en los demas como esta:
       $this->load->view('inc_inicio.php');
		$this->load->view('agregar_estudiante'); 
		$this->load->view('inc_fin.php'); 
     ya q solo lo eliminara*/
     public function  eliminarCurso()
     {
        $idCurso=$_POST['idCurso'];  // llega el id desde el campo hiden del formulario
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->curso_model->eliminarCurso($idCurso); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('curso/test','refresh');

     }


     

     
}

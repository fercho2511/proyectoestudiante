<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {


	public function index()
	{
        //cargara la list de estudiantes
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
		$this->load->view('lista_estudiantes',$data);
		$this->load->view('inc_fin.php');

	}

    //haciendo click en modificar nos estar traendo asta este metodo 
    //para realizar las siguientes acciones
    //1 tiene q recuperar los datos del estudiantes con su id
    //luego enviar a un formulario editable
    public function modificar()
    {
        $idEstudiante=$_POST['idEstudiante'];
        $data['infoestudiante']=$this->estudiante_model->obtenerEstudiante($idEstudiante);
        $this->load->view('inc_inicio.php');
		$this->load->view('modificar_estudiante',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarEst()
    {
        //aca se resepcionara las variables q estan llegando desde form
        //realizar la consulta para update
        //cargar la lista actualizada

        $idEstudiante=$_POST['idEstudiante'];
        $data['nombre']=$_POST['nombre'];
        $data['primerApellido']=$_POST['apPaterno'];
        $data['segundoApellido']=$_POST['apMaterno'];
        $data['ci']=$_POST['ci'];
        $data['telefono']=$_POST['telefono'];
        $data['nombrePadre']=$_POST['nomPadre'];
        $data['nombreTutor']=$_POST['nomTutor'];

        //ahora la consula
        $this->estudiante_model->modificarEstudiante($idEstudiante,$data);
        //esta linea ya realiza la actualizacion

        redirect('estudiante/index','refresh');
    }

    // ahora es para crear estudiante
    //del boton q se realizo en la vista llegara a este metodo
    public function agregar()
    {
        $this->load->view('inc_inicio.php');
		$this->load->view('agregar_estudiante'); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

    }

    //ahora desde el formulario se agregar se viene a este metodo
    //ahora el metodo para agregar a la base de datos 
     public function agregarEst()
     {
         //recibireos los datos del estudiante
         $data['nombre']=$_POST['nombre'];
         $data['primerApellido']=$_POST['apPaterno'];
         $data['segundoApellido']=$_POST['apMaterno'];
         $data['ci']=$_POST['ci'];
         $data['telefono']=$_POST['telefono'];
         $data['nombrePadre']=$_POST['nomPadre'];
         $data['nombreTutor']=$_POST['nomTutor'];

         //dicho todo esto se ara la consulta a base de datos
         $this->estudiante_model->agregarEstudiante($data); // aca se envia el metodo del modelo 

         	//despues iremso a la lista redireccionando o dandole un refresh
             redirect('estudiante/index','refresh');


     }



     /*ahora desde la vista lista_estudiantes, dandole click al boton eliminar direccionara a este metodo
     no es necesario formulario por q no tengo formulario de intermedio, vistas de intermedio 
     como en los demas como esta:
       $this->load->view('inc_inicio.php');
		$this->load->view('agregar_estudiante'); 
		$this->load->view('inc_fin.php'); 
     ya q solo lo eliminara*/
     public function  eliminarEst()
     {
        $idEstudiante=$_POST['idEstudiante'];  // llega el id desde el campo hiden del formulario
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->estudiante_model->eliminarEstudiante($idEstudiante); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('estudiante/index','refresh');

     }
}

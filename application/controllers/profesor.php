<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor extends CI_Controller {


	public function index()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
		$this->load->view('lista_profesor',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('lista_profesor',$data);
		$this->load->view('inc_fin.php');

	} 


    public function modificar()
    {
        $idProfesor=$_POST['idProfesor'];
        $data['infoprofesor']=$this->profesor_model->obtenerProfesor($idProfesor);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('modificar_profesor',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarProf()
    {
      
        $idProfesor=$_POST['idProfesor'];
        $data['nombre']=$_POST['nombre'];
        $data['primerApellido']=$_POST['apPaterno'];
        $data['segundoApellido']=$_POST['apMaterno'];
        $data['ci']=$_POST['ci'];
        $data['telefono']=$_POST['telefono'];
        $data['correo']=$_POST['correo'];        
        $this->profesor_model->modificarProfesor($idProfesor,$data); //ahora la consula
        redirect('profesor/test','refresh'); //esta linea ya realiza la actualizacion
    }

  
    public function agregar()
    {
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('agregar_profesor'); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

    }

    //ahora desde el formulario se agregar se viene a este metodo
    //ahora el metodo para agregar a la base de datos 
     public function agregarProf()
     {
         //recibireos los datos del profesor
         $data['nombre']=$_POST['nombre'];
         $data['primerApellido']=$_POST['apPaterno'];
         $data['segundoApellido']=$_POST['apMaterno'];
         $data['ci']=$_POST['ci'];
         $data['telefono']=$_POST['telefono'];
         $data['correo']=$_POST['correo'];

         //dicho todo esto se ara la consulta a base de datos
         $this->profesor_model->agregarProfesor($data); // aca se envia el metodo del modelo 

         	//despues iremso a la lista redireccionando o dandole un refresh
             redirect('profesor/test','refresh');


     }



     /*ahora desde la vista lista_estudiantes, dandole click al boton eliminar direccionara a este metodo
     no es necesario formulario por q no tengo formulario de intermedio, vistas de intermedio 
     como en los demas como esta:
       $this->load->view('inc_inicio.php');
		$this->load->view('agregar_estudiante'); 
		$this->load->view('inc_fin.php'); 
     ya q solo lo eliminara*/
     public function  eliminarProf()
     {
        $idProfesor=$_POST['idProfesor'];  // llega el id desde el campo hiden del formulario
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->profesor_model->eliminarProfesor($idProfesor); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('profesor/test','refresh');

     }
}

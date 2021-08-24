<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materia extends CI_Controller {


	public function index()
	{
        //cargara la list de estudiantes
        $lista=$this->gestion_model->lista();
        $data['materia']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
		$this->load->view('usuario/estudiante/lista_estudiantes',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
        //cargara la list de estudiantes
        $lista=$this->materia_model->lista();
        $data['materia']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('materia/lista_materia',$data);
		$this->load->view('inc_fin.php');

	}
    public function test1()
	{
        //cargara la list de estudiantes
        $lista=$this->materia_model->lista();
        $data['materia']=$lista; //otro array asociativo
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
        $idMateria=$_POST['idMateria'];
        $data['infomateria']=$this->materia_model->obtenerMateria($idMateria);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('materia/modificar_materia',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarMateria()
    {
        //aca se resepcionara las variables q estan llegando desde form
        //realizar la consulta para update
        //cargar la lista actualizada

        $idMateria=$_POST['idMateria'];
        $data['materia']=$_POST['materia'];
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

     
        //ahora la consula
        $this->materia_model->modificarMateria($idMateria,$data);
        //esta linea ya realiza la actualizacion

        redirect('materia/test','refresh');
    }

    // ahora es para crear estudiante
    //del boton q se realizo en la vista llegara a este metodo
      public function agregar()
    {
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('materia/agregar_materia'); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

    }

    //ahora desde el formulario se agregar se viene a este metodo
    //ahora el metodo para agregar a la base de datos 
     public function agregarMat()
     {
         //recibireos los datos del estudiante
         /*$data['nombre']=$_POST['nombre'];
         $data['primerApellido']=$_POST['apPaterno'];
         $data['segundoApellido']=$_POST['apMaterno'];
         $data['ci']=$_POST['ci'];
         $data['telefono']=$_POST['telefono'];
         $data['nombrePadre']=$_POST['nomPadre'];
         $data['nombreTutor']=$_POST['nomTutor'];*/

         $data['materia']=$_POST['materia'];
        // $data['profesor']=$_POST['profesor'];
         //$data['fechaFinGestion']=$_POST['fechaFinGestion'];
         //$data['periodoReceso']=$_POST['periodoReceso'];
         //$data['telefono']=$_POST['telefono'];
         
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

         //dicho todo esto se ara la consulta a base de datos
         $this->materia_model->agregarMateria($data); // aca se envia el metodo del modelo 

         	//despues iremso a la lista redireccionando o dandole un refresh
             redirect('materia/test','refresh');

     }



     /*ahora desde la vista lista_estudiantes, dandole click al boton eliminar direccionara a este metodo
     no es necesario formulario por q no tengo formulario de intermedio, vistas de intermedio 
     como en los demas como esta:
       $this->load->view('inc_inicio.php');
		$this->load->view('agregar_estudiante'); 
		$this->load->view('inc_fin.php'); 
     ya q solo lo eliminara*/
     public function  eliminarMat()
     {
        $idMateria=$_POST['idMateria'];  // llega el id desde el campo hiden del formulario
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
         $data1 =$_POST['idUsuario_Acciones'];

        $this->materia_model->eliminarMateria($idMateria,$data1); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('materia/test','refresh');

     }


     

     
}

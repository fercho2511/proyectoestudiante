<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante extends CI_Controller {


	public function index()
	{
        //cargara la list de estudiantes
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
		$this->load->view('usuario/estudiante/lista_estudiantes',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
        //cargara la list de estudiantes
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/estudiante/list_estudiantes',$data);
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

    public function estuNota()
	{
        //cargara la list de estudiantes
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
		$this->load->view('usuario/estudiante/estu_notas',$data);
		$this->load->view('inc_fin.php');

	}
    public function estuComunicado()
	{
        //cargara la list de estudiantes
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
		$this->load->view('usuario/estudiante/estu_comunicado',$data);
		$this->load->view('inc_fin.php');


	}

    public function actividades(){
          //cargara la list de estudiantes
          $estu=$this->session->userdata('idusuario');
          $tipo='Actividades Curriculares';
          $this->estudiante_model->vistaso($estu,$tipo);
          $lista=$this->estudiante_model->actividades($estu);
          $data['actividades']=$lista; //otro array asociativo
          $this->load->view('inc_inicio.php');
          $this->load->view('inc_menu1.php');
          $this->load->view('usuario/estudiante/estu_actividades',$data);
        // $this->load->view('usuario/estudiante/prueva',$data);

          $this->load->view('inc_fin.php');

    }
    public function reuniones(){
        //cargara la list de estudiantes
        $estu=$this->session->userdata('idusuario');
        $tipo='Reuniones';
        $this->estudiante_model->vistaso($estu,$tipo);
        $lista=$this->estudiante_model->reuniones($estu);
        $data['reuniones']=$lista; //otro array asociativo
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
        $this->load->view('usuario/estudiante/estu_reuniones',$data);
        $this->load->view('inc_fin.php');

     }
     public function notificaciones(){
         
        $estu=$this->session->userdata('idusuario');
        $tipo='Notificaciones';
        $this->estudiante_model->vistaso($estu,$tipo);
        $lista=$this->estudiante_model->notificaciones($estu);
        $data['notificaciones']=$lista; //otro array asociativo
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
        $this->load->view('usuario/estudiante/estu_notificaciones',$data);
        $this->load->view('inc_fin.php');

     }
     public function examen(){
        $estu=$this->session->userdata('idusuario');
        $tipo='Fechas de Examen';
        $this->estudiante_model->vistaso($estu,$tipo);
        $lista=$this->estudiante_model->fechasDeExamen($estu);
        $data['examen']=$lista; //otro array asociativo
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
        $this->load->view('usuario/estudiante/estu_examen',$data);
        $this->load->view('inc_fin.php');

     }
     
     public function otros(){
        $estu=$this->session->userdata('idusuario');
        $tipo='Otros';
        $this->estudiante_model->vistaso($estu,$tipo);
        $lista=$this->estudiante_model->otros($estu);
        $data['otros']=$lista; //otro array asociativo
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
        $this->load->view('usuario/estudiante/estu_otros',$data);
        $this->load->view('inc_fin.php');

     }



    //haciendo click en modificar nos estar traendo asta este metodo 
    //para realizar las siguientes acciones
    //1 tiene q recuperar los datos del estudiantes con su id
    //luego enviar a un formulario editable
       public function modificar()
    {
        $idUsuario=$_POST['idUsuario'];
        $data['infoestudiante']=$this->estudiante_model->obtenerEstudiante($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/estudiante/modificar_est',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarEst()
    {
        //aca se resepcionara las variables q estan llegando desde form
        //realizar la consulta para update
        //cargar la lista actualizada

        $idUsuario=$_POST['idUsuario'];
        $data['nombres']=$_POST['nombres'];
        $data['apellidoPaterno']=$_POST['apellidoPaterno'];
        $data['apellidoMaterno']=$_POST['apellidoMaterno'];
        $data['sexo']=$_POST['sexo'];
        $data['telefono']=$_POST['telefono'];
        $data['ci']=$_POST['ci'];
        $data['direccion']=$_POST['direccion'];
        $data['fechaNacimiento']=$_POST['fechaNacimiento'];
        // $data['correo']=$_POST['correo'];  
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];


        //ahora la consula
        $this->estudiante_model->modificarEstudiante($idUsuario,$data);
        //esta linea ya realiza la actualizacion

        redirect('estudiante/test','refresh');
    }

    // ahora es para crear estudiante
    //del boton q se realizo en la vista llegara a este metodo
      public function agregar()
    {
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/estudiante/agregar_est'); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

    }

    //ahora desde el formulario se agregar se viene a este metodo
    //ahora el metodo para agregar a la base de datos 
     public function agregarEst()
     {
         //recibireos los datos del estudiante
         /*$data['nombre']=$_POST['nombre'];
         $data['primerApellido']=$_POST['apPaterno'];
         $data['segundoApellido']=$_POST['apMaterno'];
         $data['ci']=$_POST['ci'];
         $data['telefono']=$_POST['telefono'];
         $data['nombrePadre']=$_POST['nomPadre'];
         $data['nombreTutor']=$_POST['nomTutor'];*/

         $data['nombres']=$_POST['nombres'];
         $data['apellidoPaterno']=$_POST['apellidoPaterno'];
         $data['apellidoMaterno']=$_POST['apellidoMaterno'];
         $data['sexo']=$_POST['sexo'];
         $data['telefono']=$_POST['telefono'];
         $data['ci']=$_POST['ci'];
         $data['direccion']=$_POST['direccion'];
         $data['fechaNacimiento']=$_POST['fechaNacimiento'];
        //  $data['correo']=$_POST['correo'];
         $data['login']=$_POST['nombres'];
         $data['password']=md5($_POST['nombres']);
         $data['idRol']='4';
         $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

         //dicho todo esto se ara la consulta a base de datos
         $this->estudiante_model->agregarEstudiante($data); // aca se envia el metodo del modelo 

         	//despues iremso a la lista redireccionando o dandole un refresh
             redirect('estudiante/test','refresh');

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
        $idUsuario=$_POST['idUsuario'];  // llega el id desde el campo hiden del formulario
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        $this->estudiante_model->eliminarEstudiante($idUsuario); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('estudiante/test','refresh');

     }


     public function subirFoto(){
        $data['idUsuario']=$_POST['idUsuario'];

        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/estudiante/subirform',$data); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');
     }

     public function subir(){

        $idUsuario=$_POST['idUsuario'];  //estamso resepcionando el id
        $nombrearchivo=$idUsuario.".jpg";  //generamos un string

       // 2 metadatos
       //ruta dodne se guardan lso ficheros
       $config['upload_path']='./cargas/estudiante/';
       //configuro el nomrbe dle archivo
       $config['file_name']=$nombrearchivo;

       //reemplazar lso archivos
       //primero eliminar el anterior archivo y luego subir el nuevo



       $direccion="./cargas/estudiante/".$nombrearchivo;
       unlink($direccion);
       // estos dos archivos potencian el subir


       //tipos de archivos permitidos
       $config['allowed_types']='jpg';   //'gif','jpg','png'
       $this->load->library('upload',$config);


       //vamos al procedimiento de subir
       if (!$this->upload->do_upload()) {
          //si hay algun error pasremos a la vista a traves de un data
          $data['error']=$this->upload->display_errors();
       }
       else{
           $data['foto']=$nombrearchivo;
           $this->estudiante_model->modificarEstudiante($idUsuario,$data);
            //con estas dos primeras lineas actualizamos en base de datos

           $this->upload->data();     
        
       }

        redirect('estudiante/test','refresh');



      
     }
}

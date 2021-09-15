<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profesor extends CI_Controller {


	public function index()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
        
		$this->load->view('usuario/profesor/lista_profesor',$data);
		$this->load->view('inc_fin.php');

	}
    public function test()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/profesor/lista_profesor',$data);
		$this->load->view('inc_fin.php');

	}
     public function test1()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_vista',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');

	} 


    public function modificar()
    {
        $idUsuario=$_POST['idUsuario'];
        $data['idUsuario']=$this->profesor_model->obtenerProfesor($idUsuario);
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/profesor/modificar_profesor',$data);
		$this->load->view('inc_fin.php');
    }


    // public function modificar2()
	// {
    //     //cargara la list de profesores
    //     $idUsuario=$_POST['idUsuario'];
    //     $data['idUsuario']=$this->profesor_model->obtenerProfesor($idUsuario);

	// 	$this->load->view('inc_inicio.php');
    //     $this->load->view('inc_menu.php');
	// 	$this->load->view('usuario/profesor/form_profesor',$data);
	// 	$this->load->view('inc_fin.php');

	// }
    public function modificar2()
    {
        $idUsuario=$_POST['idUsuario'];
        $data['profesor']=$this->profesor_model->obtenerProfesor($idUsuario);
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; 
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/form_profesor',$data);
		$this->load->view('inc_fin.php');
    }


    //aca llegara toda la informacion de la vista modificar
    public function modificarProf()
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
        //  $data['idRol']=$_POST['idRol'];    
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
    
        $this->profesor_model->modificarProfesor($idUsuario,$data); //ahora la consula
        redirect('profesor/test','refresh'); //esta linea ya realiza la actualizacion
    }
    public function modificarProf2()
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
        // $data['rol']=$_POST['rol'];    
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
    
        $this->profesor_model->modificarProfesor($idUsuario,$data); //ahora la consula
        redirect('profesor/test1','refresh'); //esta linea ya realiza la actualizacion
    }

  
    public function agregar()
    {
        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/profesor/agregar_profesor'); // llegaremos asta esta vista
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
        $idUsuario=$_POST['idUsuario'];  // llega el id desde el campo hiden del formulario
        /*guardamos en una variable y lo mandamos al modelo para su posterior eliminacion
         invocamos directo al metodo del modelo*/
        //  $idUsuario_Acciones=$_POST['idUsuario_Acciones'];

        $this->profesor_model->eliminarProfesor($idUsuario); // aca se envia el metodo del modelo 

        //despues iremso a la lista redireccionando o dandole un refresh
        redirect('profesor/test','refresh');

     }


     
     public function subirFoto(){
        $data['idUsuario']=$_POST['idUsuario'];

        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('usuario/profesor/subirform_maestro',$data); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');
     }

     public function subir(){

        $idUsuario=$_POST['idUsuario'];  //estamso resepcionando el id
        $nombrearchivo=$idUsuario.".jpg";  //generamos un string

       // 2 metadatos
       //ruta dodne se guardan lso ficheros
       $config['upload_path']='./cargas/profesor/';
       //configuro el nomrbe dle archivo
       $config['file_name']=$nombrearchivo;

       //reemplazar lso archivos
       //primero eliminar el anterior archivo y luego subir el nuevo



       $direccion="./cargas/profesor/".$nombrearchivo;
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
           $this->profesor_model->modificarProfesor($idUsuario,$data);
            //con estas dos primeras lineas actualizamos en base de datos

           $this->upload->data();     
        
       }

        redirect('profesor/test','refresh');



      
     }


     public function modificarLoguin1()
     {
        
         $idUsuario=$_POST['idUsuario'];
         //$data['login']=$_POST['login'];
         $data['passwordAnt']=md5($_POST['passwordAnt']);
         $data['password1']=md5($_POST['password1']);
         $data['password']=md5($_POST['password']);
       
 
         $this->usuarioper_model->modificarUsuario($idUsuario,$data);
 
         redirect('usuario/profesor/test','refresh');
     }
}

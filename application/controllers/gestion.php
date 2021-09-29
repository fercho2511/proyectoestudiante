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
        
        $data['gestion']=$_POST['gestion'];
        // $ges=$_POST['gestion'];
         $data['fechaInicioGestion']=$_POST['fechaInicioGestion'];
         $data['fechaFinGestion']=$_POST['fechaFinGestion'];
         //$data['periodoReceso']=$_POST['periodoReceso'];
         //$data['telefono']=$_POST['telefono'];
         
         $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];

         //dicho todo esto se ara la consulta a base de datos

         	//despues iremso a la lista redireccionando o dandole un refresh



             $config=array(
                array(
                    'field'=>'gestion',
                    'label' =>'gestion',
                    'rules' =>'is_unique[gestion.gestion]',
                    'errors'=> array(
                            'is_unique' =>'La %s. ya se encuentra registrado',
                    ),

                ),
            );
            $this->form_validation->set_rules($config);

            if ($this->form_validation->run()==FALSE) {
                echo '<script>
                   alert("GESTION YA REGISTRADO");
                   </script>'; 
                     redirect('gestion/agregar', 'refresh');
                // $data=$config;
                // redirect('gestion/agregar',$data);
            }
            else {
                // $this->load->view('formsuccess');
                $this->gestion_model->agregarGestion($data); // aca se envia el metodo del modelo 
                redirect('gestion/test','refresh');
       
            }




            // $consulta= $this->curso_model->verificarCurso($curso,$seccion); // aca se envia el metodo del modelo 
            // if ($consulta>0) 
            //     { 
            //        echo '<script>
            //        alert("CURSO YA REGISTRADO");
            //        </script>'; 
            //          redirect('curso/agregar', 'refresh');
            //        // echo "<script>alert('Estás suscrito, ¡Gracias!.');</script>";
   
            //        // redirect('PaquetesController', 'refresh');
    
            //     }else{
            //        $this->curso_model->agregarCurso($data); // aca se envia el metodo del modelo 
            //        redirect('curso/test','refresh');
            //     }
         
             
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
        // $data['curso']=$this->gestion_model->listaCuso($idGestion);
        $data['arrProfesores'] = $this->gestion_model->listaProfes($idGestion);
        $lista=$this->gestion_model->listaCurso();
        $data['curso']=$lista;
        
        $idGestion=$_POST['idGestion'];
        $data['gestionn']=$this->gestion_model->obtenerGestion($idGestion);
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/listado_curso',$data);
		$this->load->view('inc_fin.php');


     }

     public function ingresarCurso() {
        $lista=$this->gestion_model->listaCurso();
        $data['curso']=$lista; //otro array asociativo

        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/agregar_curso',$data); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');

     }
     public function cursoCreado(){
      //  $valor-recuperado = $this->session->flashdata('tu-variable'); 
    //   $this->session->set_userdata('referred_from', current_url());


        $idGestion=$this->session->flashdata('idGestion');
        $idCurso=$this->session->flashdata('idCurso');

        $idGestion=$_POST['idGestion'];
        $idCurso=$_POST['idCurso'];
       
        $data['arrProfesores'] = $this->gestion_model->listaProfes($idGestion);

        $lista=$this->gestion_model->listaEstudiantes($idGestion,$idCurso); //
        $data['estudiante']=$lista; //otro array asociativo

        $data['gestionn']=$this->gestion_model->obtenerGestion($idGestion);
        $data['profesor']=$this->gestion_model->listaProfe($idGestion);
        $data['materia']=$this->gestion_model->listaMateria($idGestion);
        $data['materia']=$this->gestion_model->listaMateria($idGestion);

        

        // $idCurso=$_POST['idCurso'];
        $data['infocurso']=$this->curso_model->obtenerCurso($idCurso);
        $data['profe_aula']=$this->gestion_model->obtenerProfesorAula($idCurso,$idGestion);

        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
        $this->load->view('gestion/curso_creado',$data);
        $this->load->view('inc_fin.php');

    }
    public function cursoCreado2(){
        //  $valor-recuperado = $this->session->flashdata('tu-variable'); 
      //   $this->session->set_userdata('referred_from', current_url());
  
  
          $idGestion=$this->session->flashdata('idGestion');
          $idCurso=$this->session->flashdata('idCurso');
  
        
         
          $data['arrProfesores'] = $this->gestion_model->listaProfes($idGestion);
  
          $lista=$this->gestion_model->listaEstudiantes($idGestion,$idCurso); //
          $data['estudiante']=$lista; //otro array asociativo
  
          $data['gestionn']=$this->gestion_model->obtenerGestion($idGestion);
          $data['profesor']=$this->gestion_model->listaProfe($idGestion);
          $data['materia']=$this->gestion_model->listaMateria($idGestion);
          $data['materia']=$this->gestion_model->listaMateria($idGestion);
  
          
  
          // $idCurso=$_POST['idCurso'];
          $data['infocurso']=$this->curso_model->obtenerCurso($idCurso);
          $data['profe_aula']=$this->gestion_model->obtenerProfesorAula($idCurso,$idGestion);
  
          $this->load->view('inc_inicio.php');
          $this->load->view('inc_menu2.php');
          $this->load->view('gestion/curso_creado',$data);
          $this->load->view('inc_fin.php');
  
      }

    public function listaEstudiante2(){
        $idGestion=$_POST['idGestion'];
        $idCurso=$_POST['idCurso'];
      

        // $data['profe']=$this->gestion_model->listaProfes();
        // $data['profe']=$lista2;

        //  $this->load->gestion_model->listaProfes();
    //  }obtenemos el array de profesiones y lo preparamos para enviar
        // $data['arrProfesores'] = $this->gestion_model->listaProfes();


        $data['gestionn']=$this->gestion_model->obtenerGestion($idGestion);

        $lista=$this->gestion_model->listaDeEstudiantes($idGestion); //
        $data['estudiante']=$lista; //otro array asociativo

        // $idCurso=$_POST['idCurso'];
        $data['infocurso']=$this->curso_model->obtenerCurso($idCurso);

        // $lista=$this->gestion_model->listaDeEstudiantes();
        // $data['estudiante']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/lista_estudiantes',$data);
		$this->load->view('inc_fin.php');




    }

    public function inscribirEstudiante(){
        $data['idEstudiante']=$_POST['idUsuario'];
        $data['idCurso']=$_POST['idCurso'];
        $data['idGestion']=$_POST['idGestion'];
        $data['idParalelo']=$_POST['idParalelo'];
        $data['idUsuario_Acciones']=$_POST['idUsuario_Acciones'];

        $idGestion=$_POST['idGestion'];
        $idCurso=$_POST['idCurso'];
        // $idEstudiante=$_POST['idEstudiante'];

        $this->gestion_model->inscribirEstu($data);
        $this->session->set_flashdata('idGestion', $idGestion);
        $this->session->set_flashdata('idCurso', $idCurso);
        // $this->session->set_flashdata('idEstudiante', $idEstudiante);

        redirect('gestion/listaEstudiante3','refresh');

        




    }
    public function listaEstudiante3(){
        $idGestion = $this->session->flashdata('idGestion');
        $idCurso = $this->session->flashdata('idCurso');
        // $idEstudiante = $this->session->flashdata('idEstudiante');

        $data['gestionn']=$this->gestion_model->obtenerGestion($idGestion);

        $lista=$this->gestion_model->listaDeEstudiantes($idGestion); //
        $data['estudiante']=$lista; //otro array asociativo

        // $idCurso=$_POST['idCurso'];
        $data['infocurso']=$this->curso_model->obtenerCurso($idCurso);

        // $idCurso=$_POST['idCurso'];

        // $lista=$this->gestion_model->listaDeEstudiantes();
        // $data['estudiante']=$lista; //otro array asociativo

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu2.php');
		$this->load->view('gestion/lista_estudiantes',$data);
		$this->load->view('inc_fin.php');




    }

    public function eliminarEst(){
        $idUsuario=$_POST['idUsuario']; 
        $idGestion=$_POST['idGestion']; 
        $idCurso=$_POST['idCurso'];
       //$this->session->set_flashdata('tu-variable', 'valor de tu-variable');

         $this->gestion_model->eliminarInscripcion($idUsuario,$idGestion);
         $this->session->set_flashdata('idGestion', $idGestion);
         $this->session->set_flashdata('idCurso', $idCurso);
        redirect('gestion/cursoCreado2','refresh');



    }

    public function asignarProfe(){
        $profe=$_POST['profesor'];
        $idGestion=$_POST['idGestion'];
        $idCurso=$_POST['idCurso'];
        $data['idProfesor']=$this->gestion_model->get_idProfe($profe);
        $data['idCurso']=$_POST['idCurso'];
        $data['idGestion']=$_POST['idGestion'];
        $data['idParalelo']=$_POST['idParalelo'];        
        $data['idUsuario_Acciones']=$_POST['idUsuario_Acciones'];

        $consulta = $this->gestion_model->consultaProfeAsignado($idCurso,$idGestion);
        if ($consulta > 0){
            echo '<script>
            alert("Curso ya tiene profesor asignado");
            </script>'; 
            $this->session->set_flashdata('idGestion', $idGestion);
            $this->session->set_flashdata('idCurso', $idCurso);
              redirect('gestion/cursoCreado2', 'refresh');

        }
        else{
            $this->gestion_model->asignarProfesor($data); 
            $this->session->set_flashdata('idGestion', $idGestion);
            $this->session->set_flashdata('idCurso', $idCurso);
            echo '<script>
            alert("Profesor asignado con exito");
            </script>';
             redirect('gestion/cursoCreado2','refresh');

        }
     
     


        // $config=array(
        //     array(
        //         'field'=>'idCurso',
        //         'label' =>'idCurso',
        //         'rules' =>'is_unique[profesor_aula.idCurso]',
        //         'errors'=> array(
        //                 'is_unique' =>'La %s. ya tiene profesor asignado',
        //         ),

        //     ),
        // );
        // $this->form_validation->set_rules($config);

        // if ($this->form_validation->run()==FALSE) {
        //     echo '<script>
        //        alert("Curso ya tiene profesor asignado");
        //        </script>'; 
        //          redirect('gestion/cursoCreado', 'refresh');
       
        // }
        // else {          
         
        //     $this->gestion_model->asignarProfesor($data); 
        //     $this->session->set_flashdata('idGestion', $idGestion);
        //     $this->session->set_flashdata('idCurso', $idCurso);
        //     // echo '<script>
        //     // alert("Profesor asignado con exito");
        //     // </script>';
        //      redirect('gestion/cursoCreado2','refresh');

   
        // }


    }

    public function eliminarProfeAula(){

        $idGestion=$_POST['idGestion'];
        $idCurso=$_POST['idCurso'];
        $idProfesor_aula=$_POST['idProfesor_aula'];
        $this->gestion_model->eliminarProfesorAula($idProfesor_aula); // aca se envia el metodo del modelo 
        $this->session->set_flashdata('idGestion', $idGestion);
        $this->session->set_flashdata('idCurso', $idCurso);
        redirect('gestion/cursoCreado2','refresh');




    }


     

     
}

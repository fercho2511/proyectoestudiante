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
    public function profeCurso()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo

        

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_curso',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');

	} 
    public function profeEstudiante()
     
	{
        //cargara la list de profesores
        $profe=$this->session->userdata('idusuario');
        $lista=$this->profesor_model->listaEstudiantePorProfesor($profe);
        $data['estudiante']=$lista; //otro array asociativo        

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_estudiantes',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');

	} 
    public function profeMateria()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo
        $lista=$this->materia_model->lista();
        $data['materia']=$lista;
        

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_materia_nota',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');

	}
    public function profeListaComunicado()
	{
        //cargara la list de profesores
        // $lista=$this->profesor_model->lista();
        // $data['profesor']=$lista; //otro array asociativo
        
        // $profe=$this->session->userdata('idusuario');
        // $lista=$this->profesor_model->listaEstudiantePorProfesor($profe);
        // $data['estudiante']=$lista;

        $lista=$this->comunicado_model->lista();
        $data['comunicado']=$lista;

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_listaComunicado',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');

	}
    public function profeComunicado()
	{
        //cargara la list de profesores
        $lista=$this->profesor_model->lista();
        $data['profesor']=$lista; //otro array asociativo
        
        $profe=$this->session->userdata('idusuario');
        $lista=$this->profesor_model->listaEstudiantePorProfesor($profe);
        $data['estudiante']=$lista;

        

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_comunicado',$data);
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
        echo '<script>
        alert("Registro Modificado");
        </script>';
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
        echo '<script>
        alert("Registro Modificado");
        </script>';
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


     public function subirFoto2(){
        $data['idUsuario']=$_POST['idUsuario'];

        $this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_subirform',$data); // llegaremos asta esta vista
		$this->load->view('inc_fin.php');
     }

     public function subir2(){

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

        redirect('profesor/profeEstudiante','refresh');



      
     }


     public function modificarEstudiante()
     {
         $idUsuario=$_POST['idUsuario'];
         $data['infoestudiante']=$this->estudiante_model->obtenerEstudiante($idUsuario);
         $this->load->view('inc_inicio.php');
         $this->load->view('inc_menu.php');
         $this->load->view('usuario/profesor/modificar_est',$data);
         $this->load->view('inc_fin.php');
     }


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
 
         redirect('profesor/profeEstudiante','refresh');
     }



    //  para las Notas
    public function notas(){
      


        //cargara la list de profesores
        $materia=$_POST['idMateria'];
        $data['mate']=$this->profesor_model->getMateria($materia);
        $profe=$this->session->userdata('idusuario');
        $lista=$this->profesor_model->listaEstudiantePorProfesor($profe);
        $data['estudiante']=$lista; //otro array asociativo        

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_notas',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');

    }

    public function registrarNotas(){


        // aca vendran as acciones apra registrar las notas
        redirect('profesor/profeEstudiante','refresh');


    }



    public function enviarCom(){

        $tipo=$_POST['tipo'];
        $data['tipo']=$tipo;
        $data['descripcion']=$_POST['descripcion'];
        // $idUsuario=$_POST['idUsuario'];
        $data['idCurso']=$_POST['idCurso'];
        $data['idGestion']=$_POST['idGestion'];
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
        // $lista=count['estudiante'];
        $cantidad =count( $_POST['estudiante']);
        $estu=$_POST['estudiante'];

        if ($cantidad==0) {
            echo '<script>
            alert("Seleccione estudiantes para envio del comunicado");
            </script>';
            redirect('profesor/profeComunicado','refresh'); //esta linea ya realiza la actualizacion
        }
        else{

        
                for ($i=0; $i <$cantidad ; $i++) { 
                    # code...
                    $data=$estu[$i];
                    print $data;
                    print ' ';
                    if ($tipo=='Actividades Curriculares') {
                                $data['hora']=$_POST['hora'];
                                $data['fecha']=$_POST['fecha'];
                                $this->profesor_model->enviarComunicado($data);
                
                            }else{
                                if ($tipo=='Reuniones') {
                                    $data['hora']=$_POST['hora'];
                                    $data['fecha']=$_POST['fecha'];
                                    $this->profesor_model->enviarComunicado($data);
                
                                }else{
                                    if ($tipo=='Notificaciones') {
                                        # code...
                                        $this->profesor_model->enviarComunicado($data);
                        
                                    }else{
                                        if ($tipo=='Fechas de Examen') {
                                            # code...
                                            $this->profesor_model->enviarComunicado($data);
                            
                                        }else{
                                        
                                        # code...
                                        $this->profesor_model->enviarComunicado($data);
                        
                                
                                        }
                                    }
                                }              
                            }       

                }
                echo '<script>
                alert("Comunicado creado y enviado con exito");
                </script>';
                redirect('profesor/profeComunicado','refresh');

        }
    }





    // otra manera de hacer 
    public function enviarCom2(){

        $tipo=$_POST['tipo'];
        $data['tipo']=$tipo;
        $data['descripcion']=$_POST['descripcion'];
        $data['hora']=$_POST['hora'];
        $data['fechaComunicado']=$_POST['fecha'];
        $data['idUsuario'] =$_POST['idUsuario_Acciones'];

        // $idUsuario=$_POST['idUsuario'];
        $data1['idCurso']=$_POST['idCurso'];
        $data1['idGestion']=$_POST['idGestion'];
        $data1['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
        $data1['idParalelo'] =2;


        // $lista=count['estudiante'];
        $cantidad =count( $_POST['estudiante']);
        $estu=$_POST['estudiante'];

        if ($cantidad == 0) {
            echo '<script>
            alert("Seleccione estudiantes para envio del comunicado");
            </script>';
            redirect('profesor/profeComunicado','refresh'); //esta linea ya realiza la actualizacion
        }
        else{


                // controlando con el try catch
                try {

                    $this->db->trans_begin();  //iniciamso la transaccion
                    $this->profesor_model->enviarComunicado($data);
                    $data1['idComunicado']= $this->db->insert_id();
                    // $data1['idComunicado']=1;
                    
                    for ($i=0; $i <$cantidad ; $i++) { 

                        # code...
                        $data1['idEstudiante']=$estu[$i];
                        $this->profesor_model->comunicadoEstudiante($data1);

                    }
                    echo '<script>
                    alert("Comunicado creado y enviado con exito");
                    </script>';
                    redirect('profesor/profeComunicado','refresh');
                    $this->db->trans_commit();

                    
                } catch (Exception $ex) {

                    $this->db->trans_rollback();
                    echo '<script>
                    alert("Se detecto una falla en el proceso, vuelva a intentarlo profavor");
                    </script>';
                    redirect('profesor/profeComunicado','refresh');
                }
        }





    }
}

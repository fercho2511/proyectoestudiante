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
        // cargar la info del curso que asignado el profe
        $profe=$this->session->userdata('idusuario');
        $lista2=$this->profesor_model->getCusoProfesor($profe);
        $data['cursoProfe']=$lista2;

        // $profe=$this->session->userdata('idusuario');
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

        $profe=$this->session->userdata('idusuario');
        $lista2=$this->profesor_model->getCusoProfesor($profe);
        $data['cursoProfe']=$lista2;

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
        // $data['idUsuario']= $this->session->userdata('idusuario');;
        // $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
        $profe=$this->session->userdata('idusuario');
        $lista2=$this->profesor_model->getCusoProfesor($profe);
        $data['cursoProfe']=$lista2;


        $lista=$this->profesor_model->listaComunicado($this->session->userdata('idusuario'));
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
    public function modificar3()
    {
        $idUsuario = $this->session->flashdata('idUsuario');

        // $idUsuario=$_POST['idUsuario'];
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
         try {           
        
       
            $data['password']=md5($_POST['password']);
            $idUsuario=$_POST['idUsuario'];        
            $data['idUsuario_Acciones'] =$this->session->userdata('idusuario');
            $cod=md5($_POST['password']);
            if ($this->usuarioper_model->existencia($cod)) {

                echo '<script>
                alert("Password ya Registrado");
                </script>'; 
                $this->session->set_flashdata('idUsuario', $idUsuario);
                redirect('profesor/modificar3','refresh');
            }
            else{
                
                $this->usuarioper_model->modificarUsuario($idUsuario,$data);
                echo '<script>
                alert("Modificacion Satisfactoria");
                </script>';
                redirect('profesor/profeEstudiante','refresh');
            }

            
        } catch (\Throwable $th) {
            echo '<script>
                alert("Vuelva a intentarlo");
                </script>'; 
                redirect('profesor/modificar3','refresh');
        }      

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
        $data['idMateria']=$_POST['idMateria'];
        $data['mate']=$this->profesor_model->getMateria2($materia);
        $profe=$this->session->userdata('idusuario');
        $lista=$this->profesor_model->listaEstudiantePorProfesor2($profe,$materia);
        $data['estudiante']=$lista; //otro array asociativo        

		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_notas',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');

    }
   


    
    public function registrarNotas(){
        // aca vendran as acciones apra registrar las notas
        // $estu=$_POST['idEstudiante'];
        // $inscrito=$this->profesor_model->obtenerIdInscrito($id);

        // $data['idInscrito']=$inscrito;
        // $data['idMateria']=$_POST['idMateria'];
        // $data['nota_1_bimestre']=$_POST['nota1'];
        // $data['nota_2_bimestre']=$_POST['nota2'];
        // $data['nota_3_bimestre']=$_POST['nota3'];

        


        // desde aca provando las notas de la
        $mat=$_POST['idMateria']; 

        $cantidad =count( $_POST['estudiante']);
        $estu=$_POST['estudiante'];
        $nota1=$_POST['nota1'];
        $nota2=$_POST['nota2'];
        $nota3=$_POST['nota3'];
        try {
            //code...
       
/////////////////////////////////////////////////////////desde aca
        if ($this->profesor_model->verificarNota1($estu[0],$mat)) {

            for ($i=0; $i <$cantidad ; $i++) { 
                // $data1['idCurso']=$_POST['idCurso'];
                // $data1['idGestion']=$_POST['idGestion'];
            //   $estu=$estu[$i];
                $data1['idInscrito']=$this->profesor_model->obtenerIdInscrito($estu[$i]);
                $data1['idUsuario_Acciones'] =$this->session->userdata('idusuario');
                $data1['idMateria']=$_POST['idMateria']; 
                $data1['nota_1_bimestre']=$nota1[$i];
                $data1['nota_2_bimestre']=$nota2[$i];
                $data1['nota_3_bimestre']=$nota3[$i];              
                $this->profesor_model->registrarNotas($data1);

            }
           
         
        }
        else{
            for ($i=0; $i <$cantidad ; $i++) { 
                // $data1['idCurso']=$_POST['idCurso'];
                // $data1['idGestion']=$_POST['idGestion'];
            //   $estu=$estu[$i];
            
                    $ins=$this->profesor_model->obtenerIdInscrito($estu[$i]);
                    $data1['idUsuario_Acciones'] =$this->session->userdata('idusuario');
                    // $data1['idMateria']=$_POST['idMateria']; 
                    $materia=$_POST['idMateria'];
                    $nota1=$_POST['nota1'];
                    $nota2=$_POST['nota2'];
                    $nota3=$_POST['nota3'];

                    $data1['nota_1_bimestre']=$nota1[$i];
                    $data1['nota_2_bimestre']=$nota2[$i];
                    $data1['nota_3_bimestre']=$nota3[$i];

                    $this->profesor_model->registrarNotas2($data1,$ins,$materia);
               
        }
        // if ($this->profesor_model->verificarNota2($estu[0],$mat)) {

        //     for ($i=0; $i <$cantidad ; $i++) { 
                
        //         $ins=$this->profesor_model->obtenerIdInscrito($estu[$i]);
        //         $data1['idUsuario_Acciones'] =$this->session->userdata('idusuario');
        //         $materia=$_POST['idMateria'];
        //         $data1['nota_2_bimestre']=$nota2[$i];
        //         $this->profesor_model->registrarNotas2($data1,$ins,$materia);

        //     }
         
        // }
        // else{
        //     for ($i=0; $i <$cantidad ; $i++) { 
              
        //         $ins=$this->profesor_model->obtenerIdInscrito($estu[$i]);
        //         $data1['idUsuario_Acciones'] =$this->session->userdata('idusuario');
        //         $materia=$_POST['idMateria'];
        //         $data1['nota_2_bimestre']=$nota2[$i];
        //         $this->profesor_model->registrarNotas2($data1,$ins,$materia);

        //     }
            
        //     }  
        // if ($this->profesor_model->verificarNota3($estu[0],$mat)) {
        //     for ($i=0; $i <$cantidad ; $i++) { 
                        
        //                     $ins=$this->profesor_model->obtenerIdInscrito($estu[$i]);
        //                     $data1['idUsuario_Acciones'] =$this->session->userdata('idusuario');
        //                     $materia=$_POST['idMateria'];                                    
        //                     $data1['nota_3_bimestre']=$nota3[$i];
        //                     $this->profesor_model->registrarNotas2($data1,$ins,$materia);
            
        //     }
                    
        // }
        //     else{
        //         for ($i=0; $i <$cantidad ; $i++) { 
                    
        //             $ins=$this->profesor_model->obtenerIdInscrito($estu[$i]);                
        //             $data1['idUsuario_Acciones'] =$this->session->userdata('idusuario');
        //             $materia=$_POST['idMateria'];                            
        //             $data1['nota_3_bimestre']=$nota3[$i];
        //             $this->profesor_model->registrarNotas2($data1,$ins,$materia);
    
        //         }

        //     }
        //     // echo '<script>
        //     // alert("Notas registradas");
        //     // </script>';
        // redirect('profesor/profeEstudiante','refresh');
        // if ($this->profesor_model->verificarNota1($estu[0],$mat)== false) {
        //     for ($i=0; $i <$cantidad ; $i++) { 
        //         // $data1['idCurso']=$_POST['idCurso'];
        //         // $data1['idGestion']=$_POST['idGestion'];
        //     //   $estu=$estu[$i];
            
        //             $ins=$this->profesor_model->obtenerIdInscrito($estu[$i]);
        //             $data1['idUsuario_Acciones'] =$this->session->userdata('idusuario');
        //             // $data1['idMateria']=$_POST['idMateria']; 
        //             $materia=$_POST['idMateria'];
        //             $nota1=$_POST['nota1'];
        //             $nota2=$_POST['nota2'];
        //             $nota3=$_POST['nota3'];

        //             $data1['nota_1_bimestre']=$nota1[$i];
        //             $data1['nota_2_bimestre']=$nota2[$i];
        //             $data1['nota_3_bimestre']=$nota3[$i];

        //             $this->profesor_model->registrarNotas2($data1,$ins,$materia);

        //     }
            

        }
        echo '<script>
            alert("Notas modificadas");
            </script>';
            redirect('profesor/profeEstudiante','refresh');

        } catch (\Throwable $th) {
            echo '<script>
                alert("Ubo un error, vuelav a intentar");
                </script>'; 
            redirect('profesor/profeEstudiante','refresh');

        }


                    
                   
                   

        

    }

    public function modificarNota(){

        $mat=$_POST['idMateria'];
        $estu=$_POST['idUsuario'];
        $p=$_POST['pos'];
        // $nota1=$_POST['nota1.1'];
        $cantidad =count( $_POST['estudiante']);

        $nota1=$_POST['nota1.1'];
        $data1['nota_1_bimestre']=$nota1[$p];
        // $nota3=$_POST['nota3'];
        for ($i=0; $i <$cantidad ; $i++) { 
            if ($i== $p) {

                $inscrito=$this->profesor_model->obtenerIdInscrito($estu);
                $this->profesor_model->modificarNota($inscrito,$mat,$data1);
            }


        }
      ;



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
       
        switch ($tipo) {
            case '1':
                $data['tipo']='Actividades Curriculares';
                break;
            case '2':
                $data['tipo']='Reuniones';

                break;
            case '3':
                $data['tipo']='Notificaciones';

                 break;
            case '4':
                $data['tipo']='Fechas de Examen';

                break;
            case '5':
                $data['tipo']='Otros';
                break;
        }
        $data['descripcion']=$_POST['descripcion'];
        $data['hora']=$_POST['hora'];
        $data['fechaComunicado']=$_POST['fecha'];
        $data['idUsuario'] =$_POST['idUsuario_Acciones'];
        $data['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];


        // $idUsuario=$_POST['idUsuario'];
        


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
                    $id= $this->db->insert_id();
                    
                    for ($i=0; $i <$cantidad ; $i++) { 
                        // $data1['idCurso']=$_POST['idCurso'];
                        // $data1['idGestion']=$_POST['idGestion'];
                        // $estu=$estu[$i];
                        $data1['idInscrito']=$this->profesor_model->obtenerIdInscrito($estu[$i]);
                        $data1['idUsuario_Acciones'] =$_POST['idUsuario_Acciones'];
                        $data1['idComunicado']=$id;
                        $this->profesor_model->comunicadoEstudiante($data1);

                    }
                    $this->db->trans_commit();
                    echo '<script>
                    alert("Comunicado creado y enviado con exito");
                    </script>';
                    redirect('profesor/profeListaComunicado','refresh');
                   

                    
                } catch (Exception $ex) {

                    $this->db->trans_rollback();
                    echo '<script>
                    alert("Se detecto una falla en el proceso, vuelva a intentarlo profavor");
                    </script>';
                    redirect('profesor/profeComunicado','refresh');
                }
        }

    }

    public function eliminarCom(){

        $data=$_POST['idComunicado'];
        $this->profesor_model->eliminarComunicado($data);

        redirect('profesor/profeListaComunicado','refresh');




    }

    public function modificarComunicado(){



        $com=$_POST['idComunicado'];
        $lista=$this->profesor_model->obtenerComunicado($com);
        $data['infocomunicado']=$lista; //otro array asociativo
       
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_modificadoComunicado',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');
    }

    public function modifCom(){

        $com=$_POST['idComunicado'];

        $data['descripcion'] =$_POST['descripcion'];
        $data['fechaComunicado']=$_POST['fecha'];
        $data['hora']=$_POST['hora'];

        $this->profesor_model->modificarComunicado($com,$data);
        echo '<script>
        alert("Comunicado modificado con exito");
        </script>';
        redirect('profesor/profeListaComunicado','refresh');



    }


    public function comunicadoEstudiante(){

        $profe=$this->session->userdata('idusuario');
        $lista2=$this->profesor_model->getCusoProfesor($profe);
        $data['cursoProfe']=$lista2;

        $com=$_POST['idComunicado'];
        $lista=$this->profesor_model->obtenerComunicadoEstudiante($com);
        $data['estudiante']=$lista; //otro array asociativo
       
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu.php');
		$this->load->view('usuario/profesor/profe_comunicadoEstudiante',$data);
        //$this->load->view('usuario/profesor/profe_vista');
		$this->load->view('inc_fin.php');
    }


}

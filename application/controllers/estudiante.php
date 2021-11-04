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

    public function nota_pdf()
	{
         //cargara la list de notas por estudiante
        
         $estu=$this->session->userdata('idusuario');
        $name=$this->estudiante_model->nombreEstudiante($estu);
         
        $cur=$this->estudiante_model->cursoEstudiante($estu);
        $lista=$this->estudiante_model->estudianteNotas($estu);
        $lista=$lista->result();

        $this->pdf=new FPDF();
        $this->pdf->AddPage();
        $this->pdf->AliasNbPages();
        $this->pdf->setTitle("Boletin Estudiantil");
        $this->pdf->SetLeftMargin(15);
        $this->pdf->SetRightMargin(15);
        $this->pdf->SetFillColor(210,218,210);
        $this->pdf->SetFont('Arial','B',11);
        // $this->pdf->Cell(30);
        $this->pdf->Cell(0, 10, "UNIDAD EDUCATIVA MARIANO RICARDO TERRAZAS", 0, true, 'C');
        // $this->pdf->Cell(0,10,'UNIDAD EDUCATIVA MARIANO ','C',1);
        $this->pdf->Ln(5);
        $this->pdf->Cell(200,0,'Gestion 2021','R',1);    
        $this->pdf->Ln(5);
        $this->pdf->Cell(170,0,'Cochabamba - Bolivia','C',1);     
        $this->pdf->Ln(10);
        $this->pdf->Cell(180,10,'Boletin de Calificaciones',0,0,'C',1   );
        $this->pdf->Ln(15);
        $this->pdf->Cell(15,0,'Nombre: '.$name,'C',1);
        // $this->pdf->Cell(200,0,'gestion:','C',1);

        $this->pdf->Ln(5);
        $this->pdf->Cell(15,0,'Curso: '.$cur,'C',1);
        $this->pdf->Ln(10);
        ob_end_clean();

     

        // $this->pdf->Ln(3);

        $this->pdf->SetFont('Arial','B',12);
        $this->pdf->Cell(60,7,'Materia','TBLR',0,'C',1);
        $this->pdf->Cell(30,7,'1er. trim.','TBLR',0,'C',1);
        $this->pdf->Cell(30,7,'2do. trim.','TBLR',0,'C',1);
        $this->pdf->Cell(30,7,'3er. trim.','TBLR',0,'C',1);
        $this->pdf->Cell(30,7,'Prom. Amual','TBLR',0,'C',1);
        $this->pdf->Ln(7);

        $this->pdf->SetFont('Arial','',11);

        $num=1;
        foreach($lista as $row) {
            $materia=$row->materia;
            if ($row->bimestre1==0) {
                $nota_1_bimestre= '';
            }
            else {
                $nota_1_bimestre= $row->bimestre1;
            }
            if ($row->bimestre2==0) {
                $nota_2_bimestre= '';
            }
            else {
                $nota_2_bimestre= $row->bimestre2;
            }
            if ($row->bimestre3==0) {
                $nota_3_bimestre= '';
            }
            else {
                $nota_3_bimestre= $row->bimestre3;
            }
            
            $Prom_Anual=$row->Prom_Anual;
            // $this->pdf->Cell(10,5,$num,'TBLR',0,'L',0);
            $this->pdf->Cell(60,5,$materia,'TBLR',0,'L',0);
            $this->pdf->Cell(30,5,$nota_1_bimestre,'TBLR',0,'C',0);
            $this->pdf->Cell(30,5,$nota_2_bimestre,'TBLR',0,'C',0);
            $this->pdf->Cell(30,5,$nota_3_bimestre,'TBLR',0,'C',0);
            $this->pdf->Cell(30,5,$Prom_Anual,'TBLR',0,'C',0);


            $this->pdf->Ln(5);
            $num++;
            
        }

        $this->pdf->Cell(0,8,'Direccion:','TBLR',0,'L',0);
        $this->pdf->Ln(0);

        $this->pdf->Cell(0,30,' ','TBLR',0,'C',0);  
        $this->pdf->Ln(30);
        $this->pdf->SetFont('Arial','B',8);
        $this->pdf->Cell(0,8,'DOCUMENTO NO VALIDO PARA TRAMITES OFICIALES SIN LAS FIRMAS O CELLOS CORRESPONDIENTES','TBLR',0,'C',1);

        







        $this->pdf->Output("boletinEstudiantil.pdf",'I');       

	}
    public function estuComunicado()
	{
        $estu=$this->session->userdata('idusuario');
        $tipo1='Actividades Curriculares';
        $tipo2='Notificaciones';
        $tipo3='Reuniones';
        $tipo4='Fechas de Examen';
        $tipo5='Otros';

        if ($this->estudiante_model->vistasComunicado($estu,$tipo1)) {
            $ac = 'nuevo';
        }
        else{
            $ac = ' ';
        }
        if ($this->estudiante_model->vistasComunicado($estu,$tipo2)) {
            $not = 'nuevo';
        }
        else{
            $not = ' ';
        }
        if ($this->estudiante_model->vistasComunicado($estu,$tipo3)) {
            $reu = 'nuevo';
        }
        else{
            $reu = ' ';
        }
        if ($this->estudiante_model->vistasComunicado($estu,$tipo4)) {
            $exa = 'nuevo';
        }
        else{
            $exa = ' ';
        }
        if ($this->estudiante_model->vistasComunicado($estu,$tipo5)) {
            $otro = 'nuevo';
        }
        else{
            $otro = ' ';
        }
        $data['actividad']= $ac;
        $data['notificacion']= $not;
        $data['reunion']= $reu;
        $data['examen']= $exa;
        $data['otro']= $otro;
        //cargara la list de estudiantes
        $lista=$this->estudiante_model->lista();
        $data['estudiante']=$lista; //otro array asociativo
		$this->load->view('inc_inicio.php');
        $this->load->view('inc_menu1.php');
		$this->load->view('usuario/estudiante/estu_comunicado',$data);
		$this->load->view('inc_fin.php');


	}

    public function provando(){
        $estu=$this->session->userdata('idusuario');
        if ($this->estudiante_model->vistasComunicado($estu)) {
            return 'nuevo';
        }
        else{
            return '0';
        }
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

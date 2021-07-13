
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usuario extends CI_Controller {


        public function index()
        {
        
            
            //index.php/controlador/metodo/
            $data['msg']=$this->uri->segment(3);

            //carga del panel de control
            if ($this->session->userdata('login')) //consultara si hay una variable de secion
            {
                //si hay entonces redireccionar
                redirect('usuario/panel','refresh'); //panel es un metodo de este controlador
            
            }
            else {
                //cargar un login form
                $this->load->view('inc_inicio.php');
                $this->load->view('login_formulario',$data);
                $this->load->view('inc_fin.php');
            }
        
        }

    public function validarUsuario()
    {
        $estado='1';
        //va a lelgar datos desde un formulario
        $login=$_POST['login'];
        $password=md5($_POST['password']); //lo encriptamso directamente

        $consulta=$this->usuario_model->validar($login,$password,$estado);

        //ENTONCES CONSULTA VA A TENER UN RESULTADO
        if ($consulta->num_rows()>0) //si fuera true entonces tenemso un usuario bien valuidados
         {
             
            foreach ($consulta->result() as $row)
            {
                //accedemso a las variables de base de datos
                //creamos las variables de sesion

                $this->session->set_userdata('idusuario',$row->idUsuario);
                $this->session->set_userdata('login',$row->login);
                $this->session->set_userdata('tipo',$row->tipo);

                redirect('usuario/panel','refresh');

            }
        }
        else //si no existe ni una direccion redireccionada
        {
            //sino redireccionamos a index 1 en el urisegment
            redirect('usuario/index/1','refresh');

        }


    }
    
        public function panel()
        {
            if ($this->session->userdata('login') ) //consultara si hay una variable de secion
            {
                //si hay entonces redireccionar
                


                //PARA LOS ROLES
                
                if ($this->session->userdata('tipo')=='administrador')
                {
                    //entra al menu admin
                    //panel admin
                    redirect('usuario_per/test','refresh');

                    
                }
                else
                {
                        redirect('estudiante/test','refresh');
                    
                    //menu inv
                    //panel inv
                    
                }

                //si son mas roles se puede usar un swich par amas faciliad
                
            
            }
            else {
                //sino redireccionamos a index 2 en el urisegment
                redirect('usuario/index/2','refresh');
            }
        }
 
 //para cerrar sesion
        public function logout()
        {
            $this->session->sess_destroy();   //aca eliminamos las variables de sesion
            redirect('usuario/index/3','refresh');
        }

       

    
    
}
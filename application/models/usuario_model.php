<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Usuario_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
	public function validar($login,$password,$estado)
	{

        //consulta para validar
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('login',$login);
                //este doble where es como un and
                //logica de actuiverecord
                $this->db->where('password',$password);
                $this->db->where('estado',$estado);


                return $this->db->get();

                //consulta en mysql completa
               /*  $query="SELECT * FROM usuario WHERE login='".$login."' AND password='".$password."'";
                //  return $this->db->query($query);*/
    }

}
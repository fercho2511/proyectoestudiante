<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Usuarioper_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('usuario');
                return $this->db->get();
	}

        //consulta para obtener la lista de estudiantes
        public function obtenerUsuario($idUsuario)
	{
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('IdUsuario',$idUsuario);
                return $this->db->get();
	}


        //consulta para el modificado de datos de lso esudiantes o actualizacion de datos
        public function modificarUsuario($idUsuario,$data)
	{
                $this->db->where('IdUsuario',$idUsuario);
                $this->db->update('usuario',$data);
        // return $this->db->get();
	}

        //consulta para ingresar datos del estudiante a la base de datos
        //lo importante es lo q contenga data
        public function agregarUsuario($data)
	{
                $this->db->insert('usuario',$data); // aca la clave ses construir bien data, q va a contener
        // return $this->db->get();
	}


        //metodo q ara la consulta para eliminar estudiante

        public function eliminarUsuario($idUsuario)
        {
                $this->db->where('IdUsuario',$idUsuario);
                $this->db->delete('usuario'); //con esto se elimina el registro de mi tabla
        }


        public function HabilUsuario($idUsuario){
            $datos = ['estado' => '1',];
            $this-> db-> where ('IdUsuario', $idUsuario);
            $this-> db-> update ('usuario', $datos); 
        }

        public function bajaUsuario($idUsuario){
            $datos = ['estado' => '0',];
            $this-> db-> where ('IdUsuario', $idUsuario);
            $this-> db-> update ('usuario', $datos); 
        }



	
}

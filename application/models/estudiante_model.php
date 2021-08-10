<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Estudiante_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('rol','estudiante');
                $this->db->where('estado','1');

                return $this->db->get();
	}

        //consulta para obtener la lista de estudiantes
        public function obtenerEstudiante($idUsuario)
	{
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('idUsuario',$idUsuario);
                return $this->db->get();
	}


        //consulta para el modificado de datos de lso esudiantes o actualizacion de datos
        public function modificarEstudiante($idUsuario,$data)
	{
                $this->db->where('idUsuario',$idUsuario);
                $this->db->update('usuario',$data);
        // return $this->db->get();
	}

        //consulta para ingresar datos del estudiante a la base de datos
        //lo importante es lo q contenga data
        public function agregarEstudiante($data)
	{
                $this->db->insert('usuario',$data); // aca la clave ses construir bien data, q va a contener
        // return $this->db->get();
	}


        //metodo q ara la consulta para eliminar estudiante

        public function eliminarEstudiante($idUsuario)
        {
                $datos = ['estado' => '0',];
                $this-> db-> where ('idUsuario', $idUsuario);
                $this-> db-> update ('usuario', $datos);

                //$this->db->where('idUsuario',$idUsuario);
               // $this->db->delete('usuario'); //con esto se elimina el registro de mi tabla
        }



	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Estudiante_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('Estudiante');
                return $this->db->get();
	}

        //consulta para obtener la lista de estudiantes
        public function obtenerEstudiante($idEstudiante)
	{
                $this->db->select('*');
                $this->db->from('Estudiante');
                $this->db->where('IdEstudiante',$idEstudiante);
                return $this->db->get();
	}


        //consulta para el modificado de datos de lso esudiantes o actualizacion de datos
        public function modificarEstudiante($idEstudiante,$data)
	{
                $this->db->where('IdEstudiante',$idEstudiante);
                $this->db->update('Estudiante',$data);
        // return $this->db->get();
	}

        //consulta para ingresar datos del estudiante a la base de datos
        //lo importante es lo q contenga data
        public function agregarEstudiante($data)
	{
                $this->db->insert('Estudiante',$data); // aca la clave ses construir bien data, q va a contener
        // return $this->db->get();
	}


        //metodo q ara la consulta para eliminar estudiante

        public function eliminarEstudiante($idEstudiante)
        {
                $this->db->where('IdEstudiante',$idEstudiante);
                $this->db->delete('Estudiante'); //con esto se elimina el registro de mi tabla
        }



	
}

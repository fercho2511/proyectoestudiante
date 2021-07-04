<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Profesor_model extends CI_Model {

        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('Profesor');
                return $this->db->get();
	}

        //consulta para obtener la lista de profesores
        public function obtenerProfesor($idProfesor)
	{
                $this->db->select('*');
                $this->db->from('Profesor');
                $this->db->where('IdProfesor',$idProfesor);
                return $this->db->get();
	}


        //consulta para el modificado de datos de los profesores o actualizacion de datos
        public function modificarProfesor($idProfesor,$data)
	{
                $this->db->where('IdProfesor',$idProfesor);
                $this->db->update('Profesor',$data);
	}

        public function agregarProfesor($data)
	{
                $this->db->insert('Profesor',$data); // aca la clave ses construir bien data, q va a contener
	}


        //metodo q ara la consulta para eliminar profesor
        public function eliminarProfesor($idProfesor)
        {
                $this->db->where('IdProfesor',$idProfesor);
                $this->db->delete('Profesor'); //con esto se elimina el registro de mi tabla
        }



	
}

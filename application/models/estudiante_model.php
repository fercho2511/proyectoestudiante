<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Estudiante_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
	public function lista()
	{
        $this->db->select('*');
        $this->db->from('Estudiante');
        return $this->db->get();
	}
    public function obtenerEstudiante($idEstudiante)
	{
        $this->db->select('*');
        $this->db->from('Estudiante');
        $this->db->where('IdEstudiante',$idEstudiante);
        return $this->db->get();
	}

    public function modificarEstudiante($idEstudiante,$data)
	{
        //consulta para actualizar

        $this->db->where('IdEstudiante',$idEstudiante);
        $this->db->update('Estudiante',$data);
       // return $this->db->get();
	}

	
}

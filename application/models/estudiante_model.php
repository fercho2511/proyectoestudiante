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

	
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Profesor_model extends CI_Model {

        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('rol','profesor');
                $this->db->where('estado','1');

                return $this->db->get();
	}
        public function lista2($idUsuario)
	{
                $this->db->select('*');
                $this->db->from('usuario');
               // $this->db->where('rol','profesor');
                $this->db->where('idUsuario',$idUsuario);

                return $this->db->get();
	}

        //consulta para obtener la lista de profesores
        public function obtenerProfesor($idUsuario)
	{
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('idUsuario',$idUsuario);
                return $this->db->get();
	}


        //consulta para el modificado de datos de los profesores o actualizacion de datos
        public function modificarProfesor($idUsuario,$data)
	{
                $this->db->where('idUsuario',$idUsuario);
                $this->db->update('usuario',$data);
	}

        public function agregarProfesor($data)
	{
                $this->db->insert('usuario',$data); // aca la clave ses construir bien data, q va a contener
	}


        //metodo q ara la consulta para eliminar profesor
        public function eliminarProfesor($idUsuario)
        {
                $datos = ['estado' => '0'];
                // $datos = ['idUsuario_Acciones' => $idUsuario_Acciones];
                $this-> db-> where ('idUsuario', $idUsuario);
                $this-> db-> update ('usuario', $datos);

               // $this->db->where('idUsuario',$idUsuario);
                //$this->db->delete('Profesor'); //con esto se elimina el registro de mi tabla
        }



	
}

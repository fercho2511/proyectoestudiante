<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Gestion_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('gestion');
              //  $this->db->where('rol','estudiante');
                $this->db->where('estado','1');

                return $this->db->get();
	}

        //consulta para obtener la lista de estudiantes
        public function obtenerGestion($idGestion)
	{
                $this->db->select('*');
                $this->db->from('gestion');
                $this->db->where('idGestion',$idGestion);
                return $this->db->get();
	}


        //consulta para el modificado de datos de lso esudiantes o actualizacion de datos
        public function modificarGestion($idGestion,$data)
	{
                $this->db->where('idGestion',$idGestion);
                $this->db->update('gestion',$data);
        // return $this->db->get();
	}

        //consulta para ingresar datos del estudiante a la base de datos
        //lo importante es lo q contenga data
        public function agregarGestion($data)
	{
                $this->db->insert('gestion',$data); // aca la clave ses construir bien data, q va a contener
        // return $this->db->get();
	}


        //metodo q ara la consulta para eliminar estudiante

        public function eliminarGestion($idGestion,$data1)
        {
                $datos = ['estado' => '0','idUsuario_Acciones'=>$data1,];
                $this-> db-> where ('idGestion', $idGestion);
                $this-> db-> update ('gestion', $datos);

                //$this->db->where('idUsuario',$idUsuario);
               // $this->db->delete('usuario'); //con esto se elimina el registro de mi tabla
        }


        public function listaCuso($idGestion){


                // select C.* 
                // from curso C
                // inner join inscrito I on I.idCurso = C.idCurso
                // inner join gestion G on G.idGestion = I.idGestion
                // where G.idGestion = 2

                $this->db->select('*');
                $this->db->from('curso');
                $this->db->join('inscrito', 'inscrito.idCurso = curso.idCurso');
                $this->db->join('gestion', 'gestion.idGestion = inscrito.idGestion');
                $this->db->where('gestion.idGestion', $idGestion);
                return $this->db->get();




        }



	
}

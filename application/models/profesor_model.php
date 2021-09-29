<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Profesor_model extends CI_Model {

        //consulta para leer la lista 
	public function lista()
	{
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('idRol','3');
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

        public function listaEstudiante(){
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('idRol','4');
                $this->db->where('estado','1');

                return $this->db->get();
        }


        public function listaEstudiantePorProfesor($profe){
                //ETSA ES LA CONSULTA EN MYSQL
                // select U.*
                // from usuario U
                // inner join rol R on R.idRol = U.idRol
                // inner join inscrito I on I.idEstudiante = U.idUsuario
                // inner join gestion G on G.idGestion = I.idGestion
                // where R.rol ='Estudiante' and YEAR(G.gestion) = YEAR(CURDATE()) and I.idCurso = (

                // SELECT PA.idCurso
                // FROM usuario U
                // inner join profesor_aula PA on PA.idProfesor = U.idUsuario
                // inner join gestion G on G.idGestion = PA.idGestion
                // where YEAR(G.gestion) = YEAR(CURDATE()) and idProfesor = 23)


                $query="SELECT usuario.* FROM usuario
                inner join rol on rol.idRol = usuario.idRol
                inner join inscrito on inscrito.idEstudiante = usuario.idUsuario
                inner join gestion on gestion.idGestion = inscrito.idGestion
                where rol.rol = 'Estudiante' and  YEAR(gestion.gestion) = YEAR(CURDATE()) and inscrito.idCurso=(

                SELECT profesor_aula.idCurso
                FROM usuario
                inner join profesor_aula on profesor_aula.idProfesor = usuario.idUsuario
                inner join gestion on gestion.idGestion = profesor_aula.idGestion
                where YEAR(gestion.gestion) = YEAR(CURDATE()) and profesor_aula.idProfesor=$profe
                )";
               $resultados = $this->db->query($query);
               return $resultados;





        }



	
}

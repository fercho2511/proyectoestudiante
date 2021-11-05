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

        //aca obtendremos todo el comunicado para mostrar en al vista profesor
        public function listaComunicado($data)
	{
                $this->db->select('*');
                $this->db->from('comunicado');
              //  $this->db->where('rol','estudiante');
                $this->db->where('estado','1');
                $this->db->where('idUsuario',$data);


                return $this->db->get();
	}


        public function obtenerComunicado($data)
	{
                $this->db->select('*');
                $this->db->from('comunicado');
              //  $this->db->where('rol','estudiante');
                $this->db->where('estado','1');
                $this->db->where('idComunicado',$data);


                return $this->db->get();
	}

        //eliminar comunicado
        public function eliminarComunicado($idComunicado)
        {
                $datos = ['estado' => '0'];
                $this-> db-> where ('idComunicado', $idComunicado);
                $this-> db-> update ('comunicado', $datos);

                $this-> db-> where ('idComunicado', $idComunicado);
                $this-> db-> update ('comunicado_inscrito', $datos);

                //$this->db->where('idUsuario',$idUsuario);
               // $this->db->delete('usuario'); //con esto se elimina el registro de mi tabla
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

                        // esta consulta es a primera q se iso dond eno ser ordena por apellido
        //         $query="SELECT usuario.* FROM usuario
        //         inner join rol on rol.idRol = usuario.idRol
        //         inner join inscrito on inscrito.idEstudiante = usuario.idUsuario
        //         inner join gestion on gestion.idGestion = inscrito.idGestion
        //         where rol.rol = 'Estudiante' and  YEAR(gestion.gestion) = YEAR(CURDATE()) and inscrito.idCurso=(

        //         SELECT profesor_aula.idCurso
        //         FROM usuario
        //         inner join profesor_aula on profesor_aula.idProfesor = usuario.idUsuario
        //         inner join gestion on gestion.idGestion = profesor_aula.idGestion
        //         where YEAR(gestion.gestion) = YEAR(CURDATE()) and profesor_aula.idProfesor=$profe
        //         )";
        //        $resultados = $this->db->query($query);
        //        return $resultados;


                $query= " SELECT concat(usuario.apellidoPaterno,' ', ifnull(usuario.apellidoMaterno, ' '),' ', usuario.nombres) as nombres,
                        usuario.idUsuario, usuario.ci, usuario.telefono,usuario.foto
                        FROM usuario
                        inner join rol on rol.idRol = usuario.idRol
                        inner join inscrito on inscrito.idEstudiante = usuario.idUsuario
                        inner join gestion on gestion.idGestion = inscrito.idGestion
                        where rol.rol = 'Estudiante' and  YEAR(gestion.gestion) = YEAR(CURDATE()) and inscrito.idCurso=(

                        SELECT profesor_aula.idCurso
                        FROM usuario
                        inner join profesor_aula on profesor_aula.idProfesor = usuario.idUsuario
                        inner join gestion on gestion.idGestion = profesor_aula.idGestion
                        where YEAR(gestion.gestion) = YEAR(CURDATE()) and profesor_aula.idProfesor=$profe
                        ) order by nombres";
                $resultados = $this->db->query($query);
                      return $resultados;





        }

        public function listaEstudiantePorProfesor2($profe,$materia){
            
                $query= "  SELECT P.nombres, P.idUsuario , L.nota1,L.nota2,L.nota3,L.idMateria
                FROM (
                SELECT concat(usuario.apellidoPaterno,' ', ifnull(usuario.apellidoMaterno, ' '),' ', usuario.nombres) as nombres, usuario.idUsuario as idUsuario
                FROM usuario
               inner join rol on rol.idRol = usuario.idRol
               inner join inscrito on inscrito.idEstudiante = usuario.idUsuario
               inner join gestion on gestion.idGestion = inscrito.idGestion
               where rol.rol = 'Estudiante' and   YEAR(gestion.gestion) = YEAR(CURDATE()) and inscrito.idCurso=(
               SELECT profesor_aula.idCurso
               FROM usuario
               inner join profesor_aula on profesor_aula.idProfesor = usuario.idUsuario
               inner join gestion on gestion.idGestion = profesor_aula.idGestion
               where YEAR(gestion.gestion) = YEAR(CURDATE()) and profesor_aula.idProfesor=$profe
               ) group by nombres order by nombres ) as P
               left join  
               
                (SELECT concat(usuario.apellidoPaterno,' ', ifnull(usuario.apellidoMaterno, ' '),' ', usuario.nombres) as nombres, usuario.idUsuario  as idUsuario,
               calificaciones.nota_1_bimestre as nota1 ,calificaciones.nota_2_bimestre as nota2,calificaciones.nota_3_bimestre as nota3 , calificaciones.idMateria
                FROM usuario
               inner join rol on rol.idRol = usuario.idRol
               inner join inscrito on inscrito.idEstudiante = usuario.idUsuario
               inner join calificaciones on calificaciones.idInscrito = inscrito.idInscrito
               inner join gestion on gestion.idGestion = inscrito.idGestion
               where rol.rol = 'Estudiante' and calificaciones.idMateria='$materia' and    YEAR(gestion.gestion) = YEAR(CURDATE()) and inscrito.idCurso=(
               SELECT profesor_aula.idCurso
               FROM usuario
               inner join profesor_aula on profesor_aula.idProfesor = usuario.idUsuario
               inner join gestion on gestion.idGestion = profesor_aula.idGestion
               where YEAR(gestion.gestion) = YEAR(CURDATE()) and profesor_aula.idProfesor='$profe'
               ) group by nombres order by nombres
               ) as  L on L.idUsuario = P.idUsuario";
                $resultados = $this->db->query($query);
                      return $resultados;





        }

        public function getMateria($materia){

                $this->db->select('materia');
                $this->db->from('materia');
                $this->db->where('idMateria',$materia);
                $this->db->where('estado','1');

                $resultado= $this->db->get();
                return $resultado->result_array();

               


        }

        public function getMateria2($materia){

                $this->db->select('materia');
                $this->db->from('materia');
                $this->db->where('idMateria',$materia);
                $this->db->where('estado','1');


                $query = $this->db->get();
                if ($query->num_rows() > 0) {
                        return $query->row()->materia;
                }
                return false;


        }
        
        public function enviarComunicado($data){

                        // $this->db->trans_begin();
                        // //aca poner la consulta
                        // if ($this->db->trans_status() === FALSE)
                        // {
                        //         $this->db->trans_rollback();
                        // }
                        // else
                        // {
                        //         $this->db->trans_commit();
                        // }



                        $this->db->insert('comunicado',$data);

        }

        public function comunicadoEstudiante($data1){

                $this->db->insert('comunicado_inscrito',$data1);

        }



        publiC function obtenerIdInscrito($data){

               
                // $this->db->select('idInscrito');
                // $this->db->from('inscrito');
                // $this->db->join('gestion', 'gestion.idGestion = inscrito.idGestion');
                // $this->db->where('idEstudiante',$data);
                // $this->db->where('YEAR(gestion.gestion)',YEAR(CURDATE()));


                $result= " SELECT inscrito.idInscrito
                                FROM inscrito 
                                INNER JOIN  gestion  ON gestion.idGestion = inscrito.idGestion
                                where inscrito.idEstudiante=$data and YEAR(gestion.gestion) = YEAR(CURDATE())";


                $query = $this->db->query($result);
                        if ($query->num_rows() > 0) {
                                return $query->row()->idInscrito;
                        }
                        return false;    
                                  

        }


        public function modificarComunicado($idComunicado,$data)
	{
                $this->db->where('idComunicado',$idComunicado);
                $this->db->update('comunicado',$data);
        // return $this->db->get();
	}

        public function obtenerComunicadoEstudiante($idComunicado){


                $query= "SELECT concat(usuario.apellidoPaterno,' ',ifnull(usuario.apellidoMaterno,' '),' ',usuario.nombres) AS nombres, comunicado_inscrito.*
                        FROM usuario 
                        INNER JOIN inscrito  ON inscrito.idEstudiante = usuario.idUsuario
                        INNER JOIN comunicado_inscrito ON comunicado_inscrito.idInscrito = inscrito.idInscrito
                        where  comunicado_inscrito.idComunicado = $idComunicado";
                 $resultados = $this->db->query($query);
                 return $resultados;

                // $this->db->select('*');
                // $this->db->from('comunicado_inscrito');
                // $this->db->where('idComunicado',$idComunicado);
                // return $this->db->get();

        }

        public function getCusoProfesor($profe){

                $query=" SELECT curso.* 
                FROM curso 
                INNER JOIN profesor_aula  ON profesor_aula.idCurso = curso.idCurso
                INNER JOIN gestion  ON gestion.idGestion = profesor_aula.idGestion
                WHERE profesor_aula.idProfesor = '$profe' and YEAR(gestion.gestion) = YEAR(CURDATE())";
                   $resultados = $this->db->query($query);
                   return $resultados;

                
        }

        public function registrarNotas($data){

                $this->db->insert('calificaciones',$data); // aca la clave ses construir bien data, q va a contener

                
        }

        public function registrarNotas2($data,$ins,$materia){

                // $this->db->insert('calificaciones',$data); // aca la clave ses construir bien data, q va a contener

                $this-> db-> where ('idInscrito', $ins);
                $this-> db-> where ('idMateria', $materia);
                $this-> db-> update ('calificaciones', $data);

                
        }


        public function verificarNota1($estu, $materia){

                $result= " SELECT CA.* 
                                FROM calificaciones CA
                                INNER JOIN inscrito I ON I.idInscrito = CA.idInscrito
                                WHERE I.IdEstudiante = '$estu' AND CA.idMateria= '$materia' AND  nota_1_bimestre BETWEEN 1 AND 100 ";

                $query = $this->db->query($result);
                if ($query->num_rows() > 0) {
                        return false;
                }else {
                        return true; 
                }

        }

        public function verificarNota2($estu, $materia){

                $result= " SELECT CA.* 
                FROM calificaciones CA
                INNER JOIN inscrito I ON I.idInscrito = CA.idInscrito
                WHERE I.IdEstudiante = '$estu' AND CA.idMateria= '$materia' AND  nota_2_bimestre BETWEEN 1 AND 100 ";
                
                $query = $this->db->query($result);
                if ($query->num_rows() > 0) {
                        return false;
                }else {
                        return true; 
                }


        }

        public function verificarNota3($estu, $materia){

                $result= " SELECT CA.* 
                FROM calificaciones CA
                INNER JOIN inscrito I ON I.idInscrito = CA.idInscrito
                WHERE I.IdEstudiante = '$estu' AND CA.idMateria= '$materia' AND  nota_3_bimestre BETWEEN 1 AND 100 ";
                
                $query = $this->db->query($result);
                if ($query->num_rows() > 0) {
                        return false;
                }else {
                        return true; 
                }


        }


        public function modificarNota($ins,$materia,$data){

                $this-> db-> where ('idInscrito', $ins);
                $this-> db-> where ('idMateria', $materia);
                $this-> db-> update ('calificaciones', $data);

        }


        public function nombreProfe($profe){

                $result="SELECT concat(apellidoPaterno,' ',ifnull(apellidoMaterno,' '),' ',nombres) as nombres
                                FROM usuario
                                WHERE idUsuario = '$profe'";

                $query = $this->db->query($result);
                if ($query->num_rows() > 0) {
                        return $query->row()->nombres;
                }
                return false; 


        }


        public function comunicadosDelEstudiante($data){

                $query=" SELECT C.descripcion, C.Tipo,U.idUsuario,concat(U.apellidoPaterno,' ',IFNULL
                (U.apellidoMaterno,' '),nombres) as nombres, IF(CI.estado_vista_comunicado=1,'VISTO','NO VISTO') AS ESTADO, C.fechaRegistro
                FROM comunicado C
                INNER JOIN comunicado_inscrito CI ON  CI.idComunicado = C.idComunicado
                INNER JOIN inscrito I ON I.idInscrito = CI.idInscrito
                LEFT JOIN usuario U ON U.idUsuario = I.idEstudiante
                WHERE I.idEstudiante = '$data'";
                 $resultados = $this->db->query($query);
                 return $resultados;

        }


        



	
}





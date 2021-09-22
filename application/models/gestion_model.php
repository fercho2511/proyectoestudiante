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



        public function verificarGerstion($gestion){

                // $this->db->where('idCurso',$this->);$this->db->select('*');
                 $this->db->select('*');
                 $this->db->from('gestion');
                 $this->db->where('gestion',$gestion);
 
                 $query=$this->db->get();
                 $numero_filas=$query->num_rows();
                 return $numero_filas;
 
 
                 // $consulta= $this->db->get();
                 // if($consulta){
                 //         return true;
                 // }else{
                 //         return false;
                 // }
 
 
 
 
 
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
        public function listaCurso()
	{
        //         $this->db->select('*');
        //         $this->db->from('curso');
        //       //  $this->db->where('rol','estudiante');
        //         $this->db->where('estado','1');
        //         return $this->db->get();
                $this->db->select('*');
                $this->db->from('curso');
                $this->db->where('estado','1');
                $this->db->order_by('curso,idParalelo');
                return $this->db->get();
                
	}

        public function listaEstudiantes($idGestion,$idCurso)
	{
                // $this->db->select('*');
                // $this->db->from('usuario');
                // $this->db->where('idRol','4');
                // $this->db->where('estado','1');

                // return $this->db->get();

                


                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->join('rol', 'rol.idRol = usuario.idRol');
                $this->db->join('inscrito', 'inscrito.idEstudiante = usuario.idUsuario');
                $this->db->where('rol.rol', 'Estudiante');
                $this->db->where('inscrito.idGestion', $idGestion);
                $this->db->where('inscrito.idCurso', $idCurso);

                return $this->db->get();

        //         select U.*
        //         from usuario U
        //         inner join rol R on R.idRol =  U.idRol
        //         inner join inscrito I on I.idEstudiante = U.idUsuario
        //         where R.rol = 'rol' and I.idCurso = '2' and I.idGestion = '1'
	 }


         public function listaDeEstudiantes($idGestion){
 /*
                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->join('rol', 'rol.idRol = usuario.idRol');
                // $this->db->join('inscrito', 'inscrito.idEstudiante = usuario.idUsuario');
                $this->db->where('rol.rol', 'Estudiante');
                // $this->db->where('inscrito.idGestion', $idGestion);
                // $this->db->where('inscrito.idCurso', $idCurso);

                return $this->db->get();
               
                

                                        select *
                        from usuario
                        where idRol='4' and idUsuario not in 
                        (
                        select U.idUsuario
                        from usuario U
                        inner join rol R on R.idRol =  U.idRol
                        inner join inscrito I on I.idEstudiante = U.idUsuario
                        where R.rol = 'Estudiante'  and I.idGestion = '5'
                        ) 

*/
                // $this->db->select('id_cer'); $this->db->from('revokace');
                //  $where_clause = $this->db->get_compiled_select(); 
                //  #Create main query
                //   $this->db->select('*'); 
                //   $this->db->from('certs');
                //   $this->db->where("`id` NOT IN ($where_clause)", NULL, FALSE);

                //   $this->db->select('id_cer'); $this->db->from('revokace');
                //  $where_clause = $this->db->get_compiled_select(); 
                //  #Create main query
                //   $this->db->select('*'); 
                //   $this->db->from('certs');
                //   $this->db->where("`id` NOT IN ($where_clause)", NULL, FALSE);




                 $query="SELECT * FROM usuario WHERE usuario.idRol ='4' and estado = '1' and usuario.idUsuario not in(
                        SELECT usuario.idUsuario FROM usuario inner join rol on rol.idRol=usuario.idRol
                        inner join inscrito on inscrito.idEstudiante = usuario.idUsuario
                        where rol.rol ='Estudiante' and  inscrito.idGestion=$idGestion)";
                        $resultados = $this->db->query($query);
                        return $resultados;







         }


         public function inscribirEstu($data){

                $this->db->insert('inscrito',$data);


         }


         public function listaProfe(){

                $this->db->select('*');
                $this->db->from('usuario');
                $this->db->where('idRol',3);
                $this->db->where('estado',1);
                return $this->db->get();

         }
         public function listaMateria(){

                $this->db->select('*');
                $this->db->from('materia');
                $this->db->where('estado',1);
                return $this->db->get();

         }


         public function eliminarInscripcion($idUsuario,$idGestion){

                $this->db->where('idEstudiante',$idUsuario);
                $this->db->where('idGestion',$idGestion);
                $this->db->delete('inscrito');
                


         }
         public function listaProfes($gestion)
         {
 
                  // armamos la consulta
                  $query = $this->db-> query("SELECT idUsuario,Profe FROM vwNombreCompleto where estado = 1 AND idUsuario not in
                  ( SELECT idProfesor FROM profesor_aula where idGestion = $gestion) ORDER BY PROFE" );
            
                  // si hay resultados
                  if ($query->num_rows() > 0) {
                      // almacenamos en una matriz bidimensional
                      foreach($query->result() as $row)
                         $arrDatos[htmlspecialchars($row->idUsuario, ENT_QUOTES)] = 
                                   htmlspecialchars($row->Profe, ENT_QUOTES);
              
                      $query->free_result();
                      return $arrDatos;
                   }
         }


         public function get_idProfe($profe){

                        
                        $this->db->select('idUsuario');
                        $this->db->from('vwnombrecompleto');
                        $this->db->where('profe',$profe);
                        $query = $this->db->get();
                        if ($query->num_rows() > 0) {
                                return $query->row()->idUsuario;
                        }
                        return false;
                      


         }

         public function asignarProfesor($data){

                $this->db->insert('profesor_aula',$data);


         }
         public function obtenerProfesorAula($curso,$gestion){
               

                $query="SELECT usuario.*,profesor_aula.idProfesor_aula FROM usuario
                         inner join profesor_aula on profesor_aula.idProfesor = usuario.idUsuario
                        where profesor_aula.idCurso =$curso and profesor_aula.idGestion = $gestion ";
                        $resultados = $this->db->query($query);
                        return $resultados;



         }

         public function eliminarProfesorAula($idProfesor_aula){
                $this->db->where('idProfesor_aula',$idProfesor_aula);
                $this->db->delete('profesor_aula');

         }



	
}

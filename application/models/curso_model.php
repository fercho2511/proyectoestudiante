<?php
defined('BASEPATH') OR exit('No direct script access allowed');


/// aca entratan todas las consultas q se realizran para la base de datos
class Curso_model extends CI_Model {

	//este metdo devolvera la lista de estudiantes de la db
        //consulta para leer la lista 
	public function lista()
	{
              
                $this->db->select('*');
                $this->db->from('curso');
                $this->db->where('estado','1');
                $this->db->order_by('curso,idParalelo');
                return $this->db->get();
	}
        public function listaProfes()
	{

              
    
                    /*   
                    $result = mysql_query("SELECT Profe FROM vwNombreCompleto where estado = '1'");
                    
                    while($row = mysql_fetch_array($result)) {
                        echo "<option>$row[album]</option>";
                    }
               */
            


              //  select Profe FROM vwNombreCompleto WHERE estado = 1
                $this->db->select('Profe');
                $this->db->from('vwNombreCompleto');
               // $this->db->where('rol','profesor');
                $this->db->where('estado','1');              

                return $this->db->get();
	}


        function get_profesores(){

                // armamos la consulta
                $query = $this->db-> query('SELECT idUsuario,Profe FROM vwNombreCompleto where estado = 1');
            
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
        
        function get_gestion(){

                // armamos la consulta
                $query = $this->db-> query('SELECT idGestion,gestion FROM gestion where estado = 1');
            
                // si hay resultados
                if ($query->num_rows() > 0) {
                    // almacenamos en una matriz bidimensional
                    foreach($query->result() as $row)
                       $arrDatos[htmlspecialchars($row->idGestion, ENT_QUOTES)] = 
                                 htmlspecialchars($row->gestion, ENT_QUOTES);
            
                    $query->free_result();
                    return $arrDatos;
                 }
        }
        public function obtenerIdGestion($data3){

                $this->db->select('idGestion');
                $this->db->from('gestion');
                $this->db->where('gestion',$data3);
                //return $this->db->get();
                $query = $this->db->get();
                return $query;

                
        
        }

        //consulta para obtener la lista de estudiantes
        public function obtenerCurso($idCurso)
	{
                $this->db->select('*');
                $this->db->from('curso');
                $this->db->where('idCurso',$idCurso);
                return $this->db->get();
                      
	}


        //consulta para el modificado de datos de lso esudiantes o actualizacion de datos
        public function modificarCurso($idCurso,$data)
	{
                $this->db->where('idCurso',$idCurso);
                $this->db->update('curso',$data);
        // return $this->db->get();
	}

        // aca consultaresmo si hay ya el curso creado
        public function verificarCurso($curso,$seccion){

               // $this->db->where('idCurso',$this->);$this->db->select('*');
                $this->db->select('*');
                $this->db->from('curso');
                $this->db->where('curso',$curso);
                $this->db->where('idParalelo',$seccion);

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
        public function agregarCurso($data)
	{
                $this->db->insert('curso',$data); // aca la clave ses construir bien data, q va a contener
        // return $this->db->get();
	}


        //metodo q ara la consulta para eliminar estudiante

        public function eliminarCurso($idCurso,$data1)
        {
                $datos = ['estado' => '0','idUsuario_Acciones'=>$data1];
                $this-> db-> where ('idCurso', $idCurso);
                $this-> db-> update ('curso', $datos);

                //$this->db->where('idUsuario',$idUsuario);
               // $this->db->delete('usuario'); //con esto se elimina el registro de mi tabla
        }
        public function inscribirEstudianteCurso($data){
                $this->db->insert('inscrito',$data);


        }



	
}

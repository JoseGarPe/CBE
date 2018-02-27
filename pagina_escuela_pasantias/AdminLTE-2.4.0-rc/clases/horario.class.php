<?php
session_start();
require_once "../conexion/conexion.php";
/**
* 
*/
class mihorario extends Conexion
{
	private $id;
	private $ini;
	private $fin;
	
	function __construct()
	{
		parent::__construct();
		$this->id="";
		$this->ini="";
		$this->fin="";
	}


	function  cargarhorario(){

		$sql = $this->db->query("SELECT * FROM horario"); 
        $profe= $sql->fetch_all(MYSQLI_ASSOC); 
        return $profe;  
	}// fin consultar profesores

	function  cargarphorario(){

		$sql = $this->db->query("

				SELECT 
					asm.id_asignacion_materia as id,
				    CONCAT(m.nombre,' (',p.nombre,') ') as profesor
				FROM asignacion_materia asm
				INNER JOIN profesores p ON p.id_profesor=asm.id_profesor
				INNER JOIN materia m ON m.id_materia=asm.id_materia

			"); 

        $profe= $sql->fetch_all(MYSQLI_ASSOC); 
        return $profe;  
	}// fin consultar profesores

		function  cargarphorario2(){

		$a = $_SESSION['id_detalle_horario'];

		$sql = $this->db->query("

				SELECT
					dh.id_detalle_horario as idh,
				    am.id_asignacion_materia as idm,
				    CONCAT(m.nombre,' (',p.nombre,') ') as profesor
				FROM detalle_materia dm
				INNER JOIN detalle_horario dh ON dm.id_detalle_horario = dh.id_detalle_horario
				INNER JOIN asignacion_materia am ON dh.id_asignacion_materia = am.id_asignacion_materia
				INNER JOIN profesores p ON p.id_profesor = am.id_profesor
				INNER JOIN materia m ON m.id_materia = am.id_materia
				WHERE dm.id_detalle_grado='$a'

			"); 

        $profe= $sql->fetch_all(MYSQLI_ASSOC); 
        return $profe;  
	}// fin consultar profesores

	function hora(){
		require_once "..\listas\horario_profesor.php";
	}

	function agregarHorario($codigo,$dia,$mat,$grado,$gradoc){

			$sql = $this->db->query("INSERT INTO detalle_horario (id_horario,id_asignacion_materia,dia) VALUES ('$codigo','$mat','$dia')"); 
      		
      		$sql2 = $this->db->query("SELECT id_detalle_horario FROM detalle_horario ORDER BY id_detalle_horario DESC LIMIT 1"); 

      		$profe= $sql2->fetch_all(MYSQLI_ASSOC);

      		$_SESSION['id_detalle_grado'] = $grado;

      		foreach ($profe as $raw) { 
      		
      		$a = $raw['id_detalle_horario'];
      		
      		$sql3 = $this->db->query("INSERT INTO detalle_materia (id_detalle_grado,id_detalle_horario,id_area) VALUES ('$grado','$a','$gradoc')"); 
      			
      		}
      		
      		if($sql3 == true ){

        	return true;

        	}else{

        	return false;

        }

	}

}	

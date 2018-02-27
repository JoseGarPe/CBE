<?php 

require_once "../conexion/conexion.php";

class notas extends Conexion{

	private $id;
	private $actividad;
	private $nota;
	private $alumno;
	private $materia;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->actividad = "";
		$this->nota = "";
		$this->alumno = "";
		$this->materia = "";

	} //Fin del constructor



function cargarNotasAlumno($codigo,$materia,$alumno){


		$sql = $this->db->query('
			SELECT act.nombre as actividad, dact.ponderacion as ponderacion, nt.nota as nota 
			FROM notas nt 
			INNER JOIN detalle_actividad dact ON nt.id_detalle_actividad = dact.id_detalle_actividad 
			INNER JOIN actividad act ON dact.id_actividad=act.id_actividad 
			INNER JOIN asignacion_materia ama ON ama.id_asignacion_materia=nt.id_asignacion_materia 
			INNER JOIN materia ma ON ma.id_materia=ama.id_materia 
			INNER JOIN profesores prf ON prf.id_profesor=ama.id_profesor
			WHERE nt.id_alumno = "'.$alumno.'" AND dact.id_periodo = "'.$codigo.'" AND ma.nombre = "'.$materia.'" ORDER BY act.id_actividad'); 
        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  
 
	} //Fin

function cargarMateriasAlumno($codigo,$alumno){


		$sql = $this->db->query('SELECT DISTINCT m.nombre as materia, pr.nombre as profesor FROM notas nt INNER JOIN detalle_actividad da ON nt.id_detalle_actividad=da.id_detalle_actividad INNER JOIN asignacion_materia am ON nt.id_asignacion_materia=am.id_asignacion_materia INNER JOIN profesores pr ON am.id_profesor=pr.id_profesor INNER JOIN materia m ON am.id_materia=m.id_materia WHERE nt.id_alumno = "'.$alumno.'"  AND da.id_periodo = "'.$codigo.'" ORDER BY m.nombre'); 
        $repor = $sql->fetch_all(MYSQLI_ASSOC); 
        return $repor;  
 
	} //Fin


}

 ?>

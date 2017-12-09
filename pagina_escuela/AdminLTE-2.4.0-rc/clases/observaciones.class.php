<?php 



require_once "../conexion/conexion.php";

class observaciones extends Conexion{

	private $id;
	private $fecha;
	private $alumno;
	private $estado;
	private $materia;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->fecha = "";
		$this->alumno = "";
		$this->estado = "";
		$this->materia = "";

	} //Fin del constructor



function cargarObservacionesAlumno($alumno){


		$sql = $this->db->query('SELECT obs.fecha as fecha, obs.descripcion as descripcion, prf.nombre as profesor, mat.nombre as materia FROM observaciones obs INNER JOIN detalle_materia dtm ON obs.id_detalle_materia=dtm.id_detalle_materia INNER JOIN detalle_horario dth ON dtm.id_detalle_horario=dth.id_detalle_horario INNER JOIN asignacion_materia asm ON dth.id_asignacion_materia=asm.id_asignacion_materia INNER JOIN profesores prf ON asm.id_profesor=prf.id_profesor INNER JOIN materia mat ON asm.id_materia=mat.id_materia WHERE obs.id_alumno="'.$alumno.'"'); 
        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	} //Fin


}

 ?>
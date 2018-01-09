<?php 

require_once "../conexion/conexion.php";

class grado extends Conexion{

	private $id;
	private $nombre;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";

	} //Fin del constructor


function cargarGrados($profesor){

		$sql = $this->db->query('SELECT grd.nombre as nombre,grd.id_grado as id FROM detalle_materia dtm INNER JOIN detalle_horario dth ON dtm.id_detalle_horario=dth.id_detalle_horario INNER JOIN asignacion_materia asm ON dth.id_asignacion_materia=asm.id_asignacion_materia INNER JOIN profesores prf ON prf.id_profesor=asm.id_profesor INNER JOIN detalle_grado dtg ON dtm.id_detalle_grado=dtg.id_detalle_grado INNER JOIN grado grd ON dtg.id_grado=grd.id_grado WHERE prf.id_profesor = "'.$profesor.'" GROUP BY grd.id_grado '); 
        $grado = $sql->fetch_all(MYSQLI_ASSOC); 
        return $grado;  
 
	} //Fin


}

 ?>

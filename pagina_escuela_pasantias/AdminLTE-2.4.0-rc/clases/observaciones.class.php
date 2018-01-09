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


		$sql = $this->db->query('SELECT obs.fecha as fecha, cod.nombre as cod, tcod.nombre as tcod, obs.descripcion as descripcion, prf.nombre as profesor FROM observaciones obs INNER JOIN profesores prf ON obs.id_profesor=prf.id_profesor INNER JOIN codigo cod ON obs.id_codigo=cod.id_cod INNER JOIN tipo_codigo tcod ON tcod.id_tip_cod=cod.id_tip_cod WHERE obs.id_alumno="'.$alumno.'"'); 
        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	} //Fin

function crearObservacionesAlumno($fecha,$codigo,$descripcion,$profesor,$cod){



		$sql = $this->db->query("INSERT INTO observaciones (fecha, id_alumno, descripcion, id_profesor, id_codigo) VALUES ('$fecha','$codigo','$descripcion','$profesor','$cod')"); 
		
        if($sql == true){

        	return true;

        }else{

        	return false;

        }



	} //Fin


}

 ?>

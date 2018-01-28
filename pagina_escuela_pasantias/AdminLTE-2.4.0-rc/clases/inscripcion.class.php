<?php
require_once "../conexion/conexion.php";
class inscripcion extends Conexion{


	private $id;
	private $id_responsable;
	private $id_padre;
	private $id_madre;
	private $fecha;
	private $id_alumno;


	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->id_responsable = "";
		$this->id_padre = "";		
		$this->id_madre = "";
		$this->fecha = "";
		$this->id_alumno = "";
	

	}
		function agregarInscripcion($codigo,$id_responsable,$id_padre,$id_madre,$fecha,$id_alumno){
		$sql = $this->db->query("INSERT INTO inscripcion (id_inscripcion,id_responsable,id_padre,id_madre,fecha,id_alumno) VALUES ('$codigo','$id_responsable','$id_padre','$id_madre','$fecha','$id_alumno')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar
		function  consultarInscripcion($codigo){

		$sql = $this->db->query("SELECT * FROM inscripcion WHERE id_inscripcion='$codigo'"); 
        $inscripcion= $sql->fetch_all(MYSQLI_ASSOC); 
        return $inscripcion;  
	}// fin consultar 
	function  cargarInscripcion(){

		$sql = $this->db->query("SELECT * FROM inscripcion"); 
        $inscripcion= $sql->fetch_all(MYSQLI_ASSOC); 
        return $inscripcion;  
	}// fin consultar 
		function  cargarAlumnos(){

		$sql = $this->db->query("SELECT * FROM alumno WHERE estado='Activo'"); 
        $inscripcion= $sql->fetch_all(MYSQLI_ASSOC); 
        return $inscripcion;  
	}// fin consultar 
			function  cargarPadre(){

		$sql = $this->db->query("SELECT * FROM pardres"); 
        $inscripcion= $sql->fetch_all(MYSQLI_ASSOC); 
        return $inscripcion;  
	}// fin consultar 
		function  cargarMadre(){

		$sql = $this->db->query("SELECT * FROM madres"); 
        $inscripcion= $sql->fetch_all(MYSQLI_ASSOC); 
        return $inscripcion;  
	}// fin consultar 
		function  cargarResponsable(){

		$sql = $this->db->query("SELECT * FROM resonsables"); 
        $inscripcion= $sql->fetch_all(MYSQLI_ASSOC); 
        return $inscripcion;  
	}// fin consultar 
	function eliminarInscripcion($codigo){

		
		$sql = $this->db->query("DELETE FROM inscripcion WHERE id_inscripcion = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar
function modificarInscripcion($codigo,$id_responsable,$id_padre,$id_madre,$fecha,$id_alumno){

		
		$sql = $this->db->query("UPDATE inscripcion SET fecha='$fecha', id_responsable='$id_responsable', id_padre='$id_padre', id_madre='$id_madre', id_alumno='$id_alumno' WHERE id_inscripcion = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin
}//fin class

?>
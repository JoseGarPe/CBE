<?php 

require_once "../conexion/conexion.php";

class periodo extends Conexion{

	private $id;
	private $nombre;
	private $ponderacion;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";
		$this->ponderacion = "";

	} //Fin del constructor


function cargarPeriodos(){

		$sql = $this->db->query('SELECT * FROM periodo ORDER BY id_periodo'); 
        $periodo = $sql->fetch_all(MYSQLI_ASSOC); 
        return $periodo;  
 
	} //Fin

function cargarArea($codigo){

		$sql = $this->db->query("SELECT * FROM area_mantenimiento WHERE id_area = '$codigo'"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function crearAreas($codigo,$nombre){

		
		$sql = $this->db->query("INSERT INTO area_mantenimiento (id_area,nombre) VALUES ('$codigo','$nombre')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

function eliminarAreas($codigo){

		
		$sql = $this->db->query("DELETE FROM area_mantenimiento WHERE id_area = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

function modificarAreas($codigo,$nombre){

		
		$sql = $this->db->query("UPDATE area_mantenimiento SET nombre='$nombre' WHERE id_area = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin


}

 ?>

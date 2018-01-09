<?php 

require_once "../conexion/conexion.php";

class periodos extends Conexion{

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

function cargarPeriodo(){

		$sql = $this->db->query("SELECT * FROM periodo"); 
        $periodo = $sql->fetch_all(MYSQLI_ASSOC); 
        return $periodo;  
 
	} //Fin

function cargaPeriodo($codigo){

		$sql = $this->db->query("SELECT * FROM periodo WHERE id_periodo ='$codigo'"); 
        $periodo = $sql->fetch_all(MYSQLI_ASSOC); 
        return $periodo;  
 
	} //Fin

function crearPeriodo($codigo,$nombre,$ponderacion){

		
		$sql = $this->db->query("INSERT INTO periodo (id_periodo,nombre,ponderacion) VALUES ('$codigo','$nombre','$ponderacion')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

	function eliminarPeriodo($codigo){

		
		$sql = $this->db->query("DELETE FROM periodo WHERE id_periodo = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin



}

 ?>

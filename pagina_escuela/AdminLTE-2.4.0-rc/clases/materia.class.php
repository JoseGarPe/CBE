<?php
require_once "../conexion/conexion.php";
/**
* 
*/
class materia extends Conexion
{
	private $id_materia;
	private $nombre;
	function __construct()
	{
		parent::__construct();
		$this->id_materia="";
		$this->nombre="";
	}

	function agregarMateria($codigo,$nombre){

			$sql = $this->db->query("INSERT INTO materia (id_materia,nombre) VALUES ('$codigo','$nombre')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar madre

	function  consultarMateria($materia){

		$sql = $this->db->query("SELECT * FROM materia WHERE id_materia = '$materia'"); 
        $mat = $sql->fetch_all(MYSQLI_ASSOC); 
        return $mat;  
	}// fin consultar madre
		function  cargarMateria(){

		$sql = $this->db->query("SELECT * FROM materia"); 
        $materia= $sql->fetch_all(MYSQLI_ASSOC); 
        return $materia;  
	}// fin consultar madre
	function eliminarMateria($codigo){

		
		$sql = $this->db->query("DELETE FROM materia WHERE id_materia = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar madre

	function modificarMateria($codigo,$nombre){

		
		$sql = $this->db->query("UPDATE materia SET nombre='$nombre' WHERE id_materia = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin



}

?>
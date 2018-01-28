<?php
require_once "../conexion/conexion.php";
class avisos extends Conexion{


	private $id;
	private $nombre;
	private $descripcion;
	private $fecha;


	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";
		$this->descripcion = "";
		$this->fecha = "";
	

	}
	function agregarAviso($codigo,$nombre,$descripcion,$fecha){
		$sql = $this->db->query("INSERT INTO avisos (id_aviso,nombre,descripcion,fecha) VALUES ('$codigo','$nombre','$descripcion','$fecha')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar
	function  consultarAviso($codigo){

		$sql = $this->db->query("SELECT * FROM avisos WHERE id_aviso='$codigo'"); 
        $aviso= $sql->fetch_all(MYSQLI_ASSOC); 
        return $aviso;  
	}// fin consultar 
	function  cargarAvisos(){

		$sql = $this->db->query("SELECT * FROM avisos WHERE Estado='SI' ORDER BY fecha"); 
        $aviso= $sql->fetch_all(MYSQLI_ASSOC); 
        return $aviso;  
	}// fin consultar 

	function modificarAviso($codigo,$nombre,$descripcion,$fecha){

		
		$sql = $this->db->query("UPDATE avisos SET fecha='$fecha', nombre='$nombre', descripcion='$descripcion' WHERE id_aviso = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

		function eliminarAviso($codigo){

		
		$sql = $this->db->query("DELETE FROM avisos WHERE id_aviso = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar
		function modificarPublicados($codigo,$estado){

		
		$sql = $this->db->query("UPDATE avisos SET Estado='$estado' WHERE id_aviso = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

}//fin  clase
?>
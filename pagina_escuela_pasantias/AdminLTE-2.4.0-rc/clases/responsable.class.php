<?php
require_once "../conexion/conexion.php";

/**
* 
*/
class responsable extends Conexion
{
	private $id_responsable;
	private $nombre;
	private $apellido;
	private $dui;
	private $correo;
	private $celular;
	
	function __construct()
	{
		parent::__construct();
		$this->id_responsable="";
		$this->nombre="";
		$this->apellido="";
		$this->dui="";
		$this->correo="";
		$this->celular="";
	}

	function agregarResponsable($nombre,$apellido,$dui,$correo,$celular){

			$sql = $this->db->query("INSERT INTO resonsables (id_responsable,nombre,apellido,dui,correo,celular) VALUES ('$codigo','$nombre','$apellido','$dui','$correo','$celular')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar madre

	function  consultarResponsable($responsable){

		$sql = $this->db->query("SELECT * FROM resonsables WHERE id_responsable = '$responsable'"); 
        $madr = $sql->fetch_all(MYSQLI_ASSOC); 
        return $madr;  
	}// fin consultar madre
		function  cargarResponsable(){

		$sql = $this->db->query("SELECT * FROM resonsables"); 
        $responsable= $sql->fetch_all(MYSQLI_ASSOC); 
        return $responsable;  
	}// fin consultar madre
	function eliminarResponsable($codigo){

		
		$sql = $this->db->query("DELETE FROM resonsables WHERE id_responsable = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar madre

	function modificarResponsable($codigo,$nombre,$apellido,$dui,$correo,$celular){

		
		$sql = $this->db->query("UPDATE resonsables SET nombre='$nombre', apellido='$apellido', dui='$dui', correo='$correo', celular='$celular' WHERE id_responsable = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin



}

?>
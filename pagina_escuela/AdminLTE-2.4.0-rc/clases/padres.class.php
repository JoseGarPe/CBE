<?php
require_once "../conexion/conexion.php";

/**
* 
*/
class padres extends Conexion
{
	private $id_padre;
	private $nombre;
	private $apellido;
	private $dui;
	private $correo;
	private $celular;
	
	function __construct()
	{
		parent::__construct();
		$this->id_padre="";
		$this->nombre="";
		$this->apellido="";
		$this->dui="";
		$this->correo="";
		$this->celular="";
	}

	function agregarPadre($codigo,$nombre,$apellido,$dui,$correo,$celular){

			$sql = $this->db->query("INSERT INTO pardres (id_padre,nombre,apellido,dui,correo,celular) VALUES ('$codigo','$nombre','$apellido','$dui','$correo','$celular')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar madre

	function  consultarPadre($padre){

		$sql = $this->db->query("SELECT * FROM pardres WHERE id_padre = '$padre'"); 
        $madr = $sql->fetch_all(MYSQLI_ASSOC); 
        return $madr;  
	}// fin consultar madre
		function  cargarPadre(){

		$sql = $this->db->query("SELECT * FROM pardres"); 
        $padre= $sql->fetch_all(MYSQLI_ASSOC); 
        return $padre;  
	}// fin consultar madre
	function eliminarPadre($codigo){

		
		$sql = $this->db->query("DELETE FROM pardres WHERE id_padre = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar madre

	function modificarPadre($codigo,$nombre,$apellido,$dui,$correo,$celular){

		
		$sql = $this->db->query("UPDATE pardres SET nombre='$nombre', apellido='$apellido', dui=''$dui, correo=''$correo, celular='$celular' WHERE id_padre = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin



}

?>
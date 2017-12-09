<?php
require_once "../conexion/conexion.php";
/**
* 
*/
class madres extends Conexion
{
	private $id_madre;
	private $nombre;
	private $apellido;
	private $dui;
	private $correo;
	private $celular;
	
	function __construct()
	{
		parent::__construct();
		$this->id_madre="";
		$this->nombre="";
		$this->apellido="";
		$this->dui="";
		$this->correo="";
		$this->celular="";
	}

	function agregarMadre($codigo,$nombre,$apellido,$dui,$correo,$celular){

			$sql = $this->db->query("INSERT INTO madres (id_madre,nombre,apellido,dui,correo,celular) VALUES ('$codigo','$nombre','$apellido','$dui','$correo','$celular')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar madre

	function  consultarMadre($madre){

		$sql = $this->db->query("SELECT * FROM madres WHERE id_madre = '$madre'"); 
        $madr = $sql->fetch_all(MYSQLI_ASSOC); 
        return $madr;  
	}// fin consultar madre
		function  cargarMadre(){

		$sql = $this->db->query("SELECT * FROM madres"); 
        $madre= $sql->fetch_all(MYSQLI_ASSOC); 
        return $madre;  
	}// fin consultar madre
	function eliminarMadre($codigo){

		
		$sql = $this->db->query("DELETE FROM madres WHERE id_madre = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar madre

	function modificarMadre($codigo,$nombre,$apellido,$dui,$correo,$celular){

		
		$sql = $this->db->query("UPDATE madres SET nombre='$nombre', apellido='$apellido', dui='$dui', correo='$correo', celular='$celular' WHERE id_madre = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin



}

?>
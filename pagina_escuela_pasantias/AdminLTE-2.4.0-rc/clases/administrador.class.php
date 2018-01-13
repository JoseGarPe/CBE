<?php
require_once "../conexion/conexion.php";

class administrador extends Conexion{

	private $id;
	private $nombre;
	private $apellido;
	private $clave;
	private $estado;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";
		$this->apellido = "";
		$this->clave = "";
		$this->estado = "";

	} //Fin del constructor

function agregarAdmin($codigo,$nombre,$apellido,$clave){
		$password = hash('sha256', $clave);

			$sql = $this->db->query("INSERT INTO administrador (id_administrador,nombre,apellido,clave,estado) VALUES ('$codigo','$nombre','$apellido','$password','Activo')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar
	function  consultarAdmin($codigo){

		$sql = $this->db->query("SELECT * FROM administrador WHERE id_administrador='$codigo'"); 
        $admin= $sql->fetch_all(MYSQLI_ASSOC); 
        return $admin;  
	}// fin consultar 
	function  cargarAdmins(){

		$sql = $this->db->query("SELECT * FROM administrador"); 
        $admin= $sql->fetch_all(MYSQLI_ASSOC); 
        return $admin;  
	}// fin consultar 

	function modificarActivos($codigo,$estado){

		
		$sql = $this->db->query("UPDATE administrador SET estado='$estado' WHERE id_administrador = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }
     } //Fin

 	function modificarAdmin($codigo,$nombre,$apellido){

		
		$sql = $this->db->query("UPDATE administrador SET nombre='$nombre', apellido='$apellido' WHERE id_administrador = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

		function modificarContra($codigo,$clave){
$password = hash('sha256', $clave);
		
		$sql = $this->db->query("UPDATE administrador SET clave='$password' WHERE id_administrador = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }
     } //Fin
}

?>
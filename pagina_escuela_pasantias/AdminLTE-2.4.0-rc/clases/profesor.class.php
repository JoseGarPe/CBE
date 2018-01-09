<?php
require_once "../conexion/conexion.php";
/**
* 
*/
class profesores extends Conexion
{
	private $id_profesor;
	private $nombre;
	private $apellido;
	private $clave;
	private $dui;
	private $celular;
	private $correo;
	private $direccion;
	private $estado;
	
	function __construct()
	{
		parent::__construct();
		$this->id_madre="";
		$this->nombre="";
		$this->apellido="";
		$this->clave="";
		$this->dui="";
		$this->celular="";
		$this->correo="";
		$this->direccion="";
		$this->estado="";
	}

	function agregarProfesor($codigo,$nombre,$apellido,$clave,$dui,$celular,$correo,$direccion,$estado){
		$password = hash('sha256', $clave);

			$sql = $this->db->query("INSERT INTO profesores (id_profesor,nombre,apellido,clave,dui,telefono,correo,direccion,estado) VALUES ('$codigo','$nombre','$apellido','$password','$dui','$celular','$correo','$direccion','$estado')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar profesor
	
	function  consultarProfesor($codigo){

		$sql = $this->db->query("SELECT * FROM profesores WHERE id_profesor='$codigo'"); 
        $profe= $sql->fetch_all(MYSQLI_ASSOC); 
        return $profe;  
	}// fin consultar profesores
	
	function  cargarProfesor(){

		$sql = $this->db->query("SELECT * FROM profesores"); 
        $profe= $sql->fetch_all(MYSQLI_ASSOC); 
        return $profe;  
	}// fin consultar profesores
	
	function modificarActivos($codigo,$estado){

		
		$sql = $this->db->query("UPDATE profesores SET estado='$estado' WHERE id_profesor = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

	function modificarProfe($codigo,$nombre,$apellido,$dui,$celular,$correo,$direccion){

		
		$sql = $this->db->query("UPDATE profesores SET nombre='$nombre', apellido='$apellido',dui='$dui', telefono='$celular', correo='$correo', direccion='$direccion' WHERE id_profesor = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin





}	
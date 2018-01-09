<?php 

require_once "../conexion/conexion.php";

class area extends Conexion{

	private $id;
	private $actividad;
	private $nota;
	private $alumno;
	private $materia;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->actividad = "";
		$this->nota = "";
		$this->alumno = "";
		$this->materia = "";

	} //Fin del constructor

function cargarArea(){

		$sql = $this->db->query("SELECT * FROM area"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function crearAreas($codigo,$nombre){

		
		$sql = $this->db->query("INSERT INTO area (id_area,nombre) VALUES ('$codigo','$nombre')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

	function eliminarAreas($codigo){

		
		$sql = $this->db->query("DELETE FROM area WHERE id_area = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

	function cargarAreas($codigo){

		$sql = $this->db->query("SELECT * FROM area WHERE id_area = '$codigo'"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin


	function modificarAreas($codigo,$nombre){

		
		$sql = $this->db->query("UPDATE area SET nombre='$nombre' WHERE id_area = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

//-----------------------------------------------------------------------------------------------------


function cargarNotasAlumno($alumno){

		$sql = $this->db->query('SELECT * FROM notas WHERE id_aluno = '.$alumno.' ORDER BY id_notas'); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin











}

 ?>

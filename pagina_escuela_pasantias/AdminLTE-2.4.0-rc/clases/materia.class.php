<?php 

require_once "../conexion/conexion.php";

class materia extends Conexion{

	private $id;
	private $nombre;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";
	} //Fin del constructor


	function cargarMaterias($profesor,$grado,$seccion){

		$sql = $this->db->query('SELECT dtm.id_detalle_materia as id, mat.nombre as nombre,hr.hora_inicio as inicio ,hr.hora_fin as fin FROM profesores pr INNER JOIN asignacion_materia asm on pr.id_profesor=asm.id_profesor INNER JOIN materia mat ON mat.id_materia=asm.id_materia INNER JOIN detalle_horario dth ON dth.id_asignacion_materia=asm.id_asignacion_materia INNER JOIN detalle_materia dtm ON dtm.id_detalle_horario=dth.id_detalle_horario INNER JOIN detalle_grado dtg on dtg.id_detalle_grado=dtm.id_detalle_grado INNER JOIN horario hr ON hr.id_horario=dth.id_horario WHERE asm.id_profesor="'.$profesor.'" AND dtg.id_grado="'.$grado.'" AND dtg.id_seccion="'.$seccion.'"'); 
        $materia = $sql->fetch_all(MYSQLI_ASSOC); 
        return $materia;  
 
	} //Fin

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

<?php 

require_once "../conexion/conexion.php";

class seccion extends Conexion{

	private $id;
	private $nombre;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";

	} //Fin del constructor

function cargaSeccions(){

		$sql = $this->db->query("SELECT * FROM seccion"); 
        $periodo = $sql->fetch_all(MYSQLI_ASSOC); 
        return $periodo;  
 
	} //Fin
function cargaSeccionNom($codigo){

		$sql = $this->db->query("SELECT * FROM seccion WHERE id_seccion='$codigo'"); 
        $periodo = $sql->fetch_all(MYSQLI_ASSOC); 
        return $periodo;  
 
	} //Fin
function cargarSeccion($seccion,$profesor){

		$sql = $this->db->query('SELECT secc.id_seccion as id, secc.nombre as nombre FROM detalle_materia dtm INNER JOIN detalle_horario dth ON dtm.id_detalle_horario=dth.id_detalle_horario INNER JOIN asignacion_materia asm ON dth.id_asignacion_materia=asm.id_asignacion_materia INNER JOIN profesores prf ON prf.id_profesor=asm.id_profesor INNER JOIN detalle_grado dtg ON dtm.id_detalle_grado=dtg.id_detalle_grado INNER JOIN grado grd ON dtg.id_grado=grd.id_grado INNER JOIN seccion secc ON dtg.id_seccion=secc.id_seccion WHERE prf.id_profesor = "'.$profesor.'" AND dtg.id_grado="'.$seccion.'" GROUP BY  secc.id_seccion'); 
        $seccion = $sql->fetch_all(MYSQLI_ASSOC); 
        return $seccion;  
 
	} //Fin

function modificarActivos($codigo,$estado){

		
		$sql = $this->db->query("UPDATE seccion SET estado='$estado' WHERE id_seccion = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

function crearSeccion($codigo,$nombre){

		
		$sql = $this->db->query("INSERT INTO seccion (id_seccion,nombre,estado) VALUES ('$codigo','$nombre','Activo')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin


}

 ?>

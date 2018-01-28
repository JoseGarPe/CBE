<?php 

require_once "../conexion/conexion.php";

class actividad extends Conexion{

	private $id;
	private $nombre;
	private $periodo;
	private $ponderacion;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->actividad = "";
		$this->periodo = "";
		$this->ponderacion = "";

	} //Fin del constructor

function cargarActividad(){

		$sql = $this->db->query("SELECT * FROM actividad"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function cargarActividad2(){

		$sql = $this->db->query("SELECT da.id_detalle_actividad as id, p.nombre as periodo,ac.nombre as actividad, da.ponderacion as ponderacion FROM detalle_actividad da inner join periodo p on da.id_periodo=p.id_periodo inner join actividad ac on ac.id_actividad=da.id_actividad"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function cargarActividad3($codigo){

		$sql = $this->db->query("SELECT da.id_detalle_actividad as id, da.id_actividad as aa ,da.id_periodo as bb, p.nombre as periodo,ac.nombre as actividad, da.ponderacion as ponderacion FROM detalle_actividad da inner join periodo p on da.id_periodo=p.id_periodo inner join actividad ac on ac.id_actividad=da.id_actividad WHERE da.id_detalle_actividad='$codigo'"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function cargarPeriodoAct($act){

		$sql = $this->db->query("SELECT da.id_periodo as id,p.nombre as nombre FROM detalle_actividad da inner join periodo p on da.id_periodo=p.id_periodo WHERE da.id_actividad='$act'"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function cargarnotaActividad($seccion,$grado,$materia){

		$sql = $this->db->query("

				SELECT DISTINCT act.nombre as nombre, act.id_actividad as id FROM actividad act LEFT JOIN detalle_actividad dact ON dact.id_actividad=act.id_actividad LEFT JOIN notas nt ON nt.id_detalle_actividad = dact.id_detalle_actividad LEFT JOIN detalle_materia dmat ON dmat.id_detalle_materia=nt.id_detalle_materia LEFT JOIN detalle_grado dgra ON dgra.id_detalle_grado=dmat.id_detalle_grado LEFT JOIN detalle_horario dhr ON dmat.id_detalle_horario=dhr.id_detalle_horario LEFT JOIN asignacion_materia amat ON dhr.id_asignacion_materia=amat.id_asignacion_materia WHERE dgra.id_seccion = '$seccion' AND dgra.id_grado = '$grado'  AND dmat.id_detalle_materia = '$materia'

			"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function cargarActividades($codigo){

		$sql = $this->db->query("SELECT * FROM actividad WHERE id_actividad = '$codigo'"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin

function modificarActividad($codigo,$nombre){

		
		$sql = $this->db->query("UPDATE actividad SET nombre='$nombre' WHERE id_actividad = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin


function crearActividad($codigo,$nombre){

		
		$sql = $this->db->query("INSERT INTO actividad (id_actividad,nombre) VALUES ('$codigo','$nombre')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

function crearActividad2($a,$b,$c,$d){
		
		$sql = $this->db->query("INSERT INTO detalle_actividad (id_detalle_actividad,id_periodo,id_actividad,ponderacion) VALUES ('$a','$c','$b','$d')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }
 
	} //Fin

function modificarActividad2($aa,$bb,$cc,$dd){

		
		$sql = $this->db->query("UPDATE detalle_actividad SET id_periodo='$cc',id_actividad='$bb',ponderacion='$dd' WHERE id_detalle_actividad = '$aa'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin


	function eliminarActividad($codigo){

		
		$sql = $this->db->query("DELETE FROM actividad WHERE id_actividad = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

function cargarAsignacionActividad(){

		$sql = $this->db->query("

					SELECT 
	
					    act.nombre as actividad,
					    concat(per.nombre,' (',per.ponderacion,'%)')  as periodo,
					    dta.ponderacion as ponderacion

					FROM detalle_actividad dta 
					INNER JOIN periodo per ON dta.id_periodo = per.id_periodo
					INNER JOIN actividad act ON dta.id_actividad = act.id_actividad

			"); 
        $area = $sql->fetch_all(MYSQLI_ASSOC); 
        return $area;  
 
	} //Fin











}

 ?>

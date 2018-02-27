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

function cargarnotaActividad($profesor,$materia){

		$sql = $this->db->query("SELECT ac.id_actividad as id, ac.nombre as nombre FROM notas nt INNER JOIN detalle_actividad da ON nt.id_detalle_actividad=da.id_detalle_actividad INNER JOIN actividad ac ON ac.id_actividad=da.id_actividad INNER Join asignacion_materia am ON am.id_asignacion_materia=nt.id_asignacion_materia WHERE am.id_profesor='$profesor' AND am.id_asignacion_materia=".$materia." GROUP BY ac.id_actividad,ac.nombre"); 
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
        
		$sql2 = $this->db->query("INSERT INTO notas (id_detalle_actividad,nota,id_alumno,id_detalle_materia)
									SELECT 
									'$a', 
									0, 
									al.id_alumno, 
									am.id_asignacion_materia 
									FROM detalle_materia dm 
									INNER JOIN alumno al ON dm.id_detalle_grado = al.id_detalle_grado 
									INNER JOIN detalle_horario dh ON dh.id_detalle_horario=dm.id_detalle_horario 
									INNER JOIN asignacion_materia am ON am.id_asignacion_materia=dh.id_asignacion_materia 
									GROUP by al.id_alumno,am.id_asignacion_materia"); 

        if($sql2 == true){

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

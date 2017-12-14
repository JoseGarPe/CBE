<?php 



require_once "../conexion/conexion.php";

class observaciones extends Conexion{

	private $id;
	private $fecha;
	private $alumno;
	private $estado;
	private $materia;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->fecha = "";
		$this->alumno = "";
		$this->estado = "";
		$this->materia = "";

	} //Fin del constructor



function cargarObservacionesAlumno($alumno){


		$sql = $this->db->query('SELECT obs.id_alumno, obs.fecha as fecha, obs.descripcion as descripcion, prf.nombre as profesor, mat.nombre as materia FROM observaciones obs INNER JOIN detalle_materia dtm ON obs.id_detalle_materia=dtm.id_detalle_materia INNER JOIN detalle_horario dth ON dtm.id_detalle_horario=dth.id_detalle_horario INNER JOIN asignacion_materia asm ON dth.id_asignacion_materia=asm.id_asignacion_materia INNER JOIN profesores prf ON asm.id_profesor=prf.id_profesor INNER JOIN materia mat ON asm.id_materia=mat.id_materia WHERE obs.id_alumno="'.$alumno.'"'); 
        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	} //Fin
		function  cargarObservaciones(){

		$sql = $this->db->query("SELECT   observaciones.id_observacion,alumno.id_alumno,alumno.nombre,observaciones.id_profesor,alumno.apellido,observaciones.fecha,observaciones.descripcion
  								FROM (escuela_lice.observaciones observaciones
        						INNER JOIN escuela_lice.profesores profesores
         						  ON (observaciones.id_profesor = profesores.id_profesor))
      							 INNER JOIN escuela_lice.alumno alumno
         						 ON (observaciones.id_alumno = alumno.id_alumno)"); 
        $madre= $sql->fetch_all(MYSQLI_ASSOC); 
        return $madre;  
	}// fin consultar todas las observaciones
function cargarObservacionProfesor($profesor){


		$sql = $this->db->query("SELECT * FROM observaciones WHERE id_profesor= '$profesor'"); 
        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	} //Fin observaciones profesores
function cargarObservacion($obs){


		$sql = $this->db->query("SELECT * FROM observaciones WHERE id_observacion= '$obs'"); 
        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	} //Fin observaciones profesores
	function  cargarObservacionAlumno($alumno){

		$sql = $this->db->query("SELECT o.fecha , o.id_alumno , o.descripcion, p.nombre,p.apellido 
								FROM observaciones o INNER JOIN profesores p ON p.id_profesor = o.id_profesor 
								WHERE id_alumno = '$alumno'"); 
        $madre= $sql->fetch_all(MYSQLI_ASSOC); 
        return $madre;  
	}// fin consultar todas las observaciones

function agregarObservacion($fecha,$alumno,$materia,$estado){

			$sql = $this->db->query("INSERT INTO observaciones (fecha,id_alumno,id_profesor,descripcion) VALUES ('$fecha','$alumno','$materia','$estado')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }
        

	}//agregar observacion

function eliminarObservacion($codigo){

		
		$sql = $this->db->query("DELETE FROM observaciones WHERE id_observacion = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar madre

function modificarObservacion($fecha,$alumno,$estado,$codigo){

		
		$sql = $this->db->query("UPDATE observaciones SET fecha='$fecha',id_alumno='$alumno', descripcion='$estado' WHERE id_observacion = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin

}// fin class observaciones


 ?>

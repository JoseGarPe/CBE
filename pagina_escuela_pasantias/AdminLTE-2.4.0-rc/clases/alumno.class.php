<?php 

require_once "../conexion/conexion.php";

class alumno extends Conexion{

	private $id;
	private $nombre;
	private $apellido;
	private $nie;
	private $clave;
	private $id_grado_detalle;
	private $estado;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";
		$this->apellido = "";
		$this->nie = "";
		$this->clave = "";
		$this->id_grado_detalle = "";
		$this->estado = "";

	} //Fin del constructor


function cargarAlumno($codigo){

		$sql = $this->db->query('SELECT CONCAT(alum.nombre, " ", alum.apellido) as nombre, alum.nie as nie, gr.nombre as grado,secc.nombre as seccion FROM alumno alum INNER JOIN detalle_grado dtg ON dtg.id_detalle_grado=alum.id_detalle_grado INNER JOIN grado gr ON dtg.id_grado=gr.id_grado INNER JOIN seccion secc ON dtg.id_seccion=secc.id_seccion WHERE alum.id_alumno="'.$codigo.'"'); 
        $seccion = $sql->fetch_all(MYSQLI_ASSOC); 
        return $seccion;  
 
	} //Fin
function consultarAlumno($codigo){

		$sql = $this->db->query("SELECT * FROM alumno WHERE id_alumno='$codigo'"); 
        $alu = $sql->fetch_all(MYSQLI_ASSOC); 
        return $alu;  
 
	} //Fin

function cargarAlumnoObservacion($codigo){

		$sql = $this->db->query('SELECT CONCAT(alum.nombre, " ", alum.apellido) as nombre FROM alumno alum WHERE alum.id_alumno="'.$codigo.'"'); 
        $obv = $sql->fetch_all(MYSQLI_ASSOC); 
        return $obv;  
 
	} //Fin

function cargarDetalleGrados(){

		$sql = $this->db->query('SELECT detalle_grado.id_detalle_grado as id, grado.nombre as grado, seccion.nombre as seccion
  								FROM (lice.detalle_grado detalle_grado
        						INNER JOIN lice.seccion seccion
           						ON (detalle_grado.id_seccion = seccion.id_seccion))
      							 INNER JOIN lice.grado grado
         						 ON (detalle_grado.id_grado = grado.id_grado)'); 
        $grasec = $sql->fetch_all(MYSQLI_ASSOC); 
        return $grasec;  
 
	} //Fin
	function agregarAlumno($codigo,$nombre,$apellido,$nie,$clave,$id_grado_detalle){
		$password = hash('sha256', $clave);

			$sql = $this->db->query("INSERT INTO alumno (id_alumno,nombre,apellido,nie,clave,id_detalle_grado,estado) VALUES ('$codigo','$nombre','$apellido','$nie','$password','$id_grado_detalle','Activo')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar 
	function modificarActivos($codigo,$estado){

		
		$sql = $this->db->query("UPDATE alumno SET estado='$estado' WHERE id_alumno = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin
	function modificarAlumno($codigo,$nombre,$apellido,$nie,$clave,$id_grado_detalle){
		$password = hash('sha256', $clave);
		
		$sql = $this->db->query("UPDATE alumno SET nombre='$nombre', apellido='$apellido',nie='$nie', clave='$password',id_detalle_grado='$id_grado_detalle' WHERE id_alumno = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin
	function modificarContra($codigo,$clave){
		$password = hash('sha256', $clave);
		
		$sql = $this->db->query("UPDATE alumno SET clave='$password' WHERE id_alumno = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }
     } //Fin


}

 ?>

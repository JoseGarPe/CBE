<?php 

require_once "../conexion/conexion.php";

class grado extends Conexion{

	private $id;
	private $nombre;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";

	} //Fin del constructor


function cargarGrados($profesor){

		$sql = $this->db->query('SELECT grd.nombre as nombre,grd.id_grado as id FROM detalle_materia dtm INNER JOIN detalle_horario dth ON dtm.id_detalle_horario=dth.id_detalle_horario INNER JOIN asignacion_materia asm ON dth.id_asignacion_materia=asm.id_asignacion_materia INNER JOIN profesores prf ON prf.id_profesor=asm.id_profesor INNER JOIN detalle_grado dtg ON dtm.id_detalle_grado=dtg.id_detalle_grado INNER JOIN grado grd ON dtg.id_grado=grd.id_grado WHERE prf.id_profesor = "'.$profesor.'" GROUP BY grd.id_grado '); 
        $grado = $sql->fetch_all(MYSQLI_ASSOC); 
        return $grado;  
 
	} //Fin

	function cargarGrado(){

		$sql = $this->db->query('SELECT * FROM grado'); 
        $grado = $sql->fetch_all(MYSQLI_ASSOC); 
        return $grado;  
 
	} //Fin

	function cargarGradoasignacion(){

		$sql = $this->db->query("SELECT dtg.id_detalle_grado as id, gr.nombre as grado, sec.nombre as seccion from detalle_grado dtg INNER JOIN grado gr ON gr.id_grado=dtg.id_grado INNER JOIN seccion sec ON sec.id_seccion=dtg.id_seccion"); 
        $grado = $sql->fetch_all(MYSQLI_ASSOC); 
        return $grado;  
 
	} //Fin

	function cargarGradoNom($codigo){

		$sql = $this->db->query("SELECT * FROM grado WHERE id_grado='$codigo'"); 
        $grado = $sql->fetch_all(MYSQLI_ASSOC); 
        return $grado;  
 
	} //Fin


function cargarAlumnosGrado($grado,$seccion){

		$sql = $this->db->query("SELECT alumno.id_alumno,alumno.nombre,alumno.estado,alumno.apellido,detalle_grado.id_grado,detalle_grado.id_seccion
								 FROM lice.alumno alumno
       							INNER JOIN lice.detalle_grado detalle_grado
         						 ON (alumno.id_detalle_grado = detalle_grado.id_detalle_grado)
             					WHERE detalle_grado.id_grado =  '$grado' AND detalle_grado.id_seccion='$seccion'"); 
        $alumnos = $sql->fetch_all(MYSQLI_ASSOC); 
        return $alumnos;  
 
	} //Fin

function cargarAlumnosGrado1($grado,$seccion){

		$sql = $this->db->query("SELECT inscripcion.id_inscripcion,alumno.nombre,alumno.apellido,inscripcion.fecha,detalle_grado.id_grado,detalle_grado.id_seccion
								  FROM ((((lice.inscripcion inscripcion
								           INNER JOIN lice.pardres pardres
								              ON (inscripcion.id_padre = pardres.id_padre))
								          INNER JOIN lice.madres madres
								             ON (inscripcion.id_madre = madres.id_madre))
								         INNER JOIN lice.alumno alumno
								            ON (inscripcion.id_alumno = alumno.id_alumno))
								        INNER JOIN lice.detalle_grado detalle_grado
								           ON (alumno.id_detalle_grado = detalle_grado.id_detalle_grado))
								       INNER JOIN lice.resonsables resonsables
								          ON (inscripcion.id_responsable = resonsables.id_responsable)
             					WHERE detalle_grado.id_grado =  '$grado' AND detalle_grado.id_seccion='$seccion'"); 
        $alumnos = $sql->fetch_all(MYSQLI_ASSOC); 
        return $alumnos;  
 
	} //Fin
}
 ?>

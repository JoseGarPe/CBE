<?php 

require_once "../conexion/conexion.php";

class alumno extends Conexion{

	private $id;
	private $nombre;
	private $apellido;
	private $nie;
	private $clave;
	private $id_grado_detalle;

	//Constructor de la clase

	function __construct(){

		parent::__construct(); //Llamada al constructor de la clase padre

		$this->id = "";
		$this->nombre = "";
		$this->apellido = "";
		$this->nie = "";
		$this->clave = "";
		$this->id_grado_detalle = "";

	} //Fin del constructor


function cargarAlumno($codigo){

		$sql = $this->db->query('SELECT CONCAT(alum.nombre, " ", alum.apellido) as nombre, alum.nie as nie, gr.nombre as grado,secc.nombre as seccion FROM alumno alum INNER JOIN detalle_grado dtg ON dtg.id_detalle_grado=alum.id_detalle_grado INNER JOIN grado gr ON dtg.id_grado=gr.id_grado INNER JOIN seccion secc ON dtg.id_seccion=secc.id_seccion WHERE alum.id_alumno="'.$codigo.'"'); 
        $seccion = $sql->fetch_all(MYSQLI_ASSOC); 
        return $seccion;  
 
	} //Fin
	function cargarAlumnos(){

		$sql = $this->db->query('SELECT * FROM alumno '); 
        $seccion = $sql->fetch_all(MYSQLI_ASSOC); 
        return $seccion;  
 
	} //Fin




}

 ?>

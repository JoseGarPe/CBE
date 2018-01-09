<?php
require_once "../conexion/conexion.php";
/**
* CODIGOS ALUMNOS
*/

class codigo_alumno extends Conexion
{
	private $id_cod_al;
	private $id_cod;
	private $id_alumno;
	private $id_profesor;
	private $fecha;

	function __construct()
	{
		parent::__construct();
		$this->id_cod_al="";
		$this->id_cod="";
		$this->id_alumno="";
		$this->id_profesor="";
		$this->fecha="";
	}

function agregarCodigoAlumno($codigo,$alumno,$profesor,$fecha){

$query="INSERT INTO codigo_alumno (id_cod_al,id_cod,id_alumno,id_profesor,fecha) VALUES (0,'$codigo','$alumno','$profesor','$fecha')";
			$sql = $this->db->query($query) or trigger_error($this->db->error."[$query]"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;
        


        }

	}//agregar codigo
	function  consultarCodigoAlumno($alumno){

		$sql = $this->db->query("SELECT codigo_alumno.fecha,codigo_alumno.id_cod_al,codigo.nombre AS codigoo,
     							 tipo_codigo.nombre AS tipo,tipo_codigo.id_tip_cod,
       							 alumno.id_alumno,alumno.nombre AS nomal,alumno.apellido AS apelal,
      							 profesores.id_profesor,profesores.nombre AS nompro,profesores.apellido AS apelpro
 								 FROM (((lice.codigo_alumno codigo_alumno
 								   INNER JOIN lice.profesores profesores
             						ON (codigo_alumno.id_profesor = profesores.id_profesor))
         							INNER JOIN lice.alumno alumno ON (codigo_alumno.id_alumno = alumno.id_alumno))
        							INNER JOIN lice.codigo codigo ON (codigo_alumno.id_cod = codigo.id_cod))
     								INNER JOIN lice.tipo_codigo tipo_codigo ON (codigo.id_tip_cod = tipo_codigo.id_tip_cod)
								 WHERE alumno.id_alumno = '$alumno'"); 
        $codi = $sql->fetch_all(MYSQLI_ASSOC); 
        return $codi;  
	}// fin consultar codigos alumno

	function eliminarCodigoAlumno($codigo){

		
		$sql = $this->db->query("DELETE FROM codigo_alumno WHERE id_cod_al = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar
 
}
?>
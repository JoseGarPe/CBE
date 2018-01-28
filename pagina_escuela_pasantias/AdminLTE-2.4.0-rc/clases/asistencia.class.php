<?php 



require_once "../conexion/conexion.php";

class asistencia extends Conexion{

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



function cargarAsistenciaAlumno($alumno){


		$sql = $this->db->query('SELECT ast.fecha as fecha, ast.estado as estado, prf.nombre as profesor, mat.nombre as materia FROM asistencia ast INNER JOIN detalle_materia dtm ON ast.id_detalle_materia=dtm.id_detalle_materia INNER JOIN detalle_horario dth ON dtm.id_detalle_horario=dth.id_detalle_horario INNER JOIN asignacion_materia asm ON dth.id_asignacion_materia=asm.id_asignacion_materia INNER JOIN profesores prf ON asm.id_profesor=prf.id_profesor INNER JOIN materia mat ON asm.id_materia=mat.id_materia WHERE ast.id_alumno="'.$alumno.'"'); 
        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	} //Fin

function cargarAlumnos($grado,$seccion,$profesor,$materia){


		$sql = $this->db->query('


			     SELECT CONCAT(alum.nombre, " ", alum.apellido) as alumno, alum.id_alumno as codigo, detm.id_detalle_materia as materia FROM alumno alum INNER JOIN detalle_grado detg on alum.id_detalle_grado=detg.id_detalle_grado INNER JOIN detalle_materia detm on detg.id_detalle_grado=detm.id_detalle_grado INNER JOIN detalle_horario deth on detm.id_detalle_horario=deth.id_detalle_horario INNER JOIN asignacion_materia asgm on asgm.id_asignacion_materia=deth.id_asignacion_materia INNER JOIN profesores prof on prof.id_profesor=asgm.id_profesor WHERE prof.id_profesor="'.$profesor.'" AND detg.id_grado="'.$grado.'" AND detg.id_seccion="'.$seccion.'" AND detm.id_detalle_materia="'.$materia.'"'

		);

        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	}

	function cargarAlumnos2($grado,$seccion,$materia){


		$sql = $this->db->query('

						SELECT CONCAT(alum.nombre, " " , alum.apellido) as alumno, alum.id_alumno as codigo, detm.id_detalle_materia as materia, "" as guia FROM alumno alum INNER JOIN detalle_grado detg on alum.id_detalle_grado=detg.id_detalle_grado INNER JOIN detalle_materia detm on detg.id_detalle_grado=detm.id_detalle_grado INNER JOIN detalle_horario deth on detm.id_detalle_horario=deth.id_detalle_horario INNER JOIN asignacion_materia asgm on asgm.id_asignacion_materia=deth.id_asignacion_materia INNER JOIN profesores prof on prof.id_profesor=asgm.id_profesor WHERE detg.id_grado="'.$grado.'" AND detg.id_seccion="'.$seccion.'" AND detm.id_detalle_materia="'.$materia.'"
						UNION ALL
						SELECT "" as alumno, "" as codigo, "" as materia, CONCAT(pf.nombre, " ", pf.apellido) as profesor  FROM profesores pf 
							INNER JOIN asignacion_materia am ON pf.id_profesor=am.id_profesor
							INNER JOIN detalle_horario dh ON dh.id_asignacion_materia=am.id_asignacion_materia
							INNER JOIN detalle_materia dm on dh.id_detalle_horario=dm.id_detalle_horario
							INNER JOIN detalle_grado dg ON dm.id_detalle_grado=dg.id_detalle_grado
						WHERE dg.id_grado="'.$grado.'" AND dg.id_seccion ="'.$seccion.'" AND dm.id_detalle_materia="'.$materia.'"

			   ');

        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	}


function cargarAlumnosAsistencia($grado,$seccion,$profesor,$fecha){


		$sql = $this->db->query('


			      SELECT 

			      	CONCAT(alum.nombre, " ", alum.apellido) as alumno,
					CONCAT(prof.nombre, " ", prof.apellido) as profesor,
					mat.nombre as materia,
					ast.hora as hora,
					ast.estado as estado

					FROM asistencia ast 
					INNER JOIN alumno alum ON alum.id_alumno=ast.id_alumno
					INNER JOIN detalle_materia dtm ON ast.id_detalle_materia=dtm.id_detalle_materia 
					INNER JOIN detalle_horario dth ON dtm.id_detalle_horario=dth.id_detalle_horario 
					INNER JOIN asignacion_materia asm ON dth.id_asignacion_materia=asm.id_asignacion_materia
					INNER JOIN materia mat ON asm.id_materia=mat.id_materia
					INNER JOIN profesores prof on prof.id_profesor=asm.id_profesor
					INNER JOIN detalle_grado detg on alum.id_detalle_grado=detg.id_detalle_grado 

				  WHERE prof.id_profesor="'.$profesor.'" AND detg.id_grado="'.$grado.'" AND detg.id_seccion="'.$seccion.'" AND fecha="'.$fecha.'"' 

		);

        $not = $sql->fetch_all(MYSQLI_ASSOC); 
        return $not;  


	}


function insetarAsistencia($alumno,$estadp,$materia){


		$sql = $this->db->query("INSERT INTO asistencia (fecha, hora, id_alumno, estado, id_detalle_materia) VALUES (CAST(NOW() as date),TIME(NOW()),'$alumno','$estadp','$materia')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}

function insetarNota($a,$b,$c,$d,$e){


		$sql = $this->db->query("
			INSERT INTO notas (id_detalle_actividad, nota, id_alumno, id_detalle_materia)
			SELECT dac.id_detalle_actividad, '$c' as nota, '$d' as alumno, '$e' as materia FROM detalle_actividad dac WHERE dac.id_periodo = '$a' AND dac.id_actividad = '$b'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}


}

 ?>

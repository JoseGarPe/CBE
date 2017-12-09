<?php
require_once "../conexion/conexion.php";

class mensualidad_alumno extends Conexion{
	
	public $id_ma;
	public $id_mensua;
	public $id_alumno;
	public $estado;
	public $fecha_limi;
	public $mora;
	public $fech_pago;
	public $año;

public function __construct(){
	parent::__construct();
		$this->id_ma="";
		$this->id_mensua="";
		$this->id_alumno=0;
		$this->estado="";
		$this->fecha_limi="";
		$this->mora="";
		$this->fecha_pago="";
		$this->año="";
	}
//-----------------------------------------------------------------------
//-------------- Consultar mensualdades de un alumno---------------------
//-----------------------------------------------------------------------
	function  consultarMensualidadA($id_alumno){

		$sql = $this->db->query("SELECT n.id_ma, m.mes, n.id_alumno, n.estado, n.id_mensua, n.fech_pago, n.fecha_limi, n.mora
								 FROM mensualidad_alumno n INNER JOIN mensualidad m ON n.id_mensua = m.id_mensua 
			 					 WHERE n.id_alumno = '$id_alumno' AND n.anio = YEAR(NOW())"); 
        $ma = $sql->fetch_all(MYSQLI_ASSOC); 
        return $ma;  
	}// fin consultar mensualidad de un alumno
//-----------------------------------------------------------------------
//-------------- Consultar mensualdades de un alumno---------------------
//-----------------------------------------------------------------------
function  consultarMa($codigo){

		$sql = $this->db->query("SELECT * FROM mensualidad_alumno WHERE id_ma = '$codigo'"); 
        $madr = $sql->fetch_all(MYSQLI_ASSOC); 
        return $madr;  
	}// fin consultar ma

//-----------------------------------------------------------------------
//-------------- Modificarr mensualidad de un alumno---------------------
//-----------------------------------------------------------------------
	function modificarMensualidadA($codigo,$estado,$fech_pago,$mora){
			
		$sql = $this->db->query("UPDATE mensualidad_alumno SET estado ='$estado',fech_pago ='$fech_pago',mora ='$mora' WHERE id_ma = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	}// fin modificar mensualidad  de alumno

}

?>
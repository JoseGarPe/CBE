<?php
require_once "../conexion/conexion.php";
/**
* 
*/
class codigo extends Conexion
{
	private $id_cod;
	private $id_tip_cod;
	private $nombre;
	function __construct()
	{
		parent::__construct();
		$this->id_cod="";
		$this->id_tip_cod="";
		$this->nombre="";
	}

	function agregarCodigo($codigo,$nombre){

			$sql = $this->db->query("INSERT INTO codigo (id_tip_cod,nombre) VALUES ('$codigo','$nombre')"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

	}//agregar madre

	function  consultarCodigo($codigo){

		$sql = $this->db->query("SELECT * FROM codigo WHERE id_cod = '$codigo'"); 
        $codi = $sql->fetch_all(MYSQLI_ASSOC); 
        return $codi;  
	}// fin consultar madre
		function  cargarCodigo(){

		$sql = $this->db->query("SELECT codigo.id_cod AS id, codigo.nombre as codigo, tipo_codigo.nombre as categoria, codigo.id_tip_cod as tipcodigo
  									FROM escuela_lice.codigo codigo
      							 INNER JOIN escuela_lice.tipo_codigo tipo_codigo
         						 ON (codigo.id_tip_cod = tipo_codigo.id_tip_cod)
         						 ORDER BY tipcodigo"); 
        $codi= $sql->fetch_all(MYSQLI_ASSOC); 
        return $codi;  
	}// fin consultar madre
	function eliminarCodigo($codigo){

		
		$sql = $this->db->query("DELETE FROM codigo WHERE id_cod = '$codigo'"); 
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin eliminar madre

	function modificarCodigo($codigo,$tipo_codigo,$nombre){

		
		$sql = $this->db->query("UPDATE codigo SET nombre='$nombre', id_tip_cod='$tipo_codigo' WHERE id_cod = '$codigo'"); 
		
        
        if($sql == true){

        	return true;

        }else{

        	return false;

        }

 
	} //Fin
//--------------------------------------------------------------------------------------------------------
//---------------------------T I P O _ C O D I G O -------------------------------------------------------
//--------------------------------------------------------------------------------------------------------
		function  consultarTCodigo(){

		$sql = $this->db->query("SELECT * FROM tipo_codigo"); 
        $codi = $sql->fetch_all(MYSQLI_ASSOC); 
        return $codi;  
	}// fin consultar tipo_codigo
	function  consultarNTC($codigo){

		$sql = $this->db->query("SELECT nombre FROM tipo_codigo WHERE id_tip_cod = '$codigo'"); 
        $codi = $sql->fetch_all(MYSQLI_ASSOC); 
        return $codi;  
	}// fin consultar madre

}

?>
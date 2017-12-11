<?php 

session_start();

require_once "../clases/observaciones.class.php";

	$profesor= $_SESSION['profesor'];
	$codigo = $_POST['alumno'];
	$descripcion = $_POST['descripcion'];

	$fecha_actual = new DateTime();
	$cadena_fecha_actual = $fecha_actual->format("d-m-Y");



   //Instancia del objeto
    $area = new observaciones();

    //Envio los datos al método    
    $verificar = $area->agregarObservacion($cadena_fecha_actual,$codigo,$profesor,$descripcion);


      if ($verificar == true) {
        header('Location: ../listas/observacion_profesor.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&usuario="'.$profesor.'"&alumno="'.$codigo.'"');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/observacion_profesor.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&usuario="'.$profesor.'"&alumno="'.$codigo.'"&fecha="'.$cadena_fecha_actual.'"&descr="'.$descripcion.'"');
    }


?>
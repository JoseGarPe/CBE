<?php 

session_start();

require_once "../clases/observaciones.class.php";

	$profesor= $_SESSION["profesor"];
	$codigo = $_POST['cod'];
	$descripcion = $_POST['descripcion'];

	$fecha_actual = new DateTime();
	$cadena_fecha_actual = $fecha_actual->format("Y-m-d");



   //Instancia del objeto
    $area = new observaciones();

    //Envio los datos al método    
    $verificar = $area->crearObservacionesAlumno($cadena_fecha_actual,$codigo,$descripcion,$profesor);


      if ($verificar == true) {
        header('Location: ../listas/observacion_profesor.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/observacion_profesor.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
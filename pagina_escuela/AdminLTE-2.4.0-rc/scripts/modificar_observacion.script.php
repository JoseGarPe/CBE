<?php 

session_start();

require_once "../clases/observaciones.class.php";

	$profesor= $_SESSION["profesor"];
	$codigo = $_POST['codigo'];
  $alumno = $_POST['alumno'];
	$descripcion = $_POST['descripcion'];

	$fecha_actual = new DateTime();
	$cadena_fecha_actual = $fecha_actual->format("d-m-Y");



   //Instancia del objeto
    $area = new observaciones();

    //Envio los datos al método    
    $verificar = $area->modificarObservacion($cadena_fecha_actual,$alumno,$descripcion,$codigo);


      if ($verificar == true) {
        header('Location: ../listas/observacion_profesor.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/observacion_profesor.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
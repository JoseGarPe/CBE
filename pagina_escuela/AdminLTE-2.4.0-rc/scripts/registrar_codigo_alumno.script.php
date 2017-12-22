<?php 

session_start();

require_once "../clases/codigo_alumno.class.php";

	$profesor= $_SESSION['profesor'];
	$alumno = $_SESSION['alumno'];
	$codigo = $_POST['codigo'];

	$fecha_actual = new DateTime();
	$cadena_fecha_actual = $fecha_actual->format("d-m-Y");



   //Instancia del objeto
    $ca = new codigo_alumno();

    //Envio los datos al método    
    $verificar = $ca->agregarCodigoAlumno($codigo,$alumno,$profesor,$cadena_fecha_actual);


      if ($verificar == true) {
        header('Location: ../listas/lista_alumnos.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&usuario="'.$profesor.'"&alumno="'.$codigo.'"');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/codigos_profesor.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&usuario="'.$profesor.'"&alumno="'.$alumno.'"&fecha="'.$cadena_fecha_actual.'"&codig="'.$codigo.'"');
    }


?>
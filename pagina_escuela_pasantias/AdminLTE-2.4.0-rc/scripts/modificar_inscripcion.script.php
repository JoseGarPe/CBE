<?php 


require_once "../clases/inscripcion.class.php";

$codigo = $_POST['codigo'];
$fecha = $_POST['fecha'];
$id_responsable = $_POST['id_responsable'];
$id_padre = $_POST['id_padre'];
$id_madre = $_POST['id_madre'];
$id_alumno = $_POST['id_alumno'];


   //Instancia del objeto
    $inscripcion = new inscripcion();

    //Envio los datos al método    
    $verificar = $inscripcion;->modificarInscripcion($codigo,$id_responsable,$id_padre,$id_madre,$fecha,$id_alumno);


      if ($verificar == true) {
        header('Location: ../listas/lista_inscripcion.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_inscripcion.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
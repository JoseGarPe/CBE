<?php 


require_once "../clases/inscripcion.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $inscripcion = new inscripcion();

    //Envio los datos al método    
    $verificar = $inscripcion->eliminarInscripcion($codigo);


      if ($verificar == true) {
        header('Location: ../listas/lista_inscripcion.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_inscripcion.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
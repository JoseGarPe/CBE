<?php 


require_once "../clases/observaciones.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $ob = new observaciones();

    //Envio los datos al método    
    $verificar = $ob->eliminarObservacion($codigo);


      if ($verificar == true) {
        header('Location: ../listas/observacion_profesor.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/observacion_profesor.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
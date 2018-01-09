<?php 


require_once "../clases/codigo.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $materia = new codigo();

    //Envio los datos al método    
    $verificar = $materia->eliminarCodigo($codigo);


      if ($verificar == true) {
        header('Location: ../listas/lista_codigo.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_codigo.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
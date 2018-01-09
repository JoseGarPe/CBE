<?php 


require_once "../clases/responsable.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $responsable = new responsable();

    //Envio los datos al método    
    $verificar = $responsable->eliminarResponsable($codigo);


      if ($verificar == true) {
        header('Location: ../listas/lista_responsables.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_responsables.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
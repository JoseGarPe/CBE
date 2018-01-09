<?php 


require_once "../clases/madres.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $madre = new madres();

    //Envio los datos al método    
    $verificar = $madre->eliminarMadre($codigo);


      if ($verificar == true) {
        header('Location: ../listas/lista_madres.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_madres.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
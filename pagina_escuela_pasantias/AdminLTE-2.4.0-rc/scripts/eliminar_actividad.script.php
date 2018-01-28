<?php 


require_once "../clases/actividad.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $misActividades = new actividad();

    //Envio los datos al método    
    $verificar = $misActividades->eliminarActividad($codigo);


      if ($verificar == true) {
        header('Location: ../listas/lista_area.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_area.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
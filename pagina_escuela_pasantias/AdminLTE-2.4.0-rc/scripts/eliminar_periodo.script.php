<?php 


require_once "../clases/periodos.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $periodos = new periodos();

    //Envio los datos al método    
    $verificar = $periodos->eliminarPeriodo($codigo);


      if ($verificar == true) {
        header('Location: ../listas/lista_periodo.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_periodo.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
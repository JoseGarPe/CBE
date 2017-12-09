<?php 


require_once "../clases/mensualidad_alumno.class.php";

$codigo = $_GET['cod'];


   //Instancia del objeto
    $ma = new mensualidad_alumno();

    //Envio los datos al método    
    $verificar = $ma->consultarMensualidadA($codigo);


      if ($verificar == true) {
        header('Location: ../listas/lista_ma.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&codigo='.$codigo);
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_ma.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&codigo='.$codigo);
    }


?>
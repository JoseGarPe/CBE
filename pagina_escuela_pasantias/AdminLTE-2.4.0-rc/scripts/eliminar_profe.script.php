<?php 


require_once "../clases/profesor.class.php";

$codigo = $_GET['cod'];
$estado = $_GET['estado'];


   //Instancia del objeto
    $madre = new profesores();

    //Envio los datos al método    
    $verificar = $madre->modificarActivos($codigo,$estado);


      if ($verificar == true) {
        header('Location: ../listas/lista_profesores.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_profesores.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
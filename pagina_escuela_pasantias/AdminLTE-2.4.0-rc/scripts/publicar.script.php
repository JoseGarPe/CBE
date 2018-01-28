<?php 


require_once "../clases/avisos.class.php";

$codigo = $_GET['cod'];
$estado = $_GET['estado'];


   //Instancia del objeto
    $aviso = new avisos();

    //Envio los datos al método    
    $verificar = $aviso->modificarPublicados($codigo,$estado);


      if ($verificar == true) {
        header('Location: ../listas/lista_aviso.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_aviso.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
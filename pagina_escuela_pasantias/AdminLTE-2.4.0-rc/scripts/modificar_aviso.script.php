<?php 


require_once "../clases/avisos.class.php";

$codigo = $_POST['codigo'];
$fecha = $_POST['fecha'];
$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];



   //Instancia del objeto
    $aviso = new avisos();

    //Envio los datos al método    
    $verificar = $aviso->modificarAviso($codigo,$nombre,$descripcion,$fecha);


      if ($verificar == true) {
        header('Location: ../listas/lista_aviso.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_aviso.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
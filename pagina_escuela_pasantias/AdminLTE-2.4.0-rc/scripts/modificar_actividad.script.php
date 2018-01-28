<?php 


require_once "../clases/actividad.class.php";

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];



  //Instancia del objeto
    $misActividades = new actividad();

    //Envio los datos al método    
    $verificar = $misActividades->modificarActividad($codigo,$nombre);


      if ($verificar == true) {
        header('Location: ../listas/lista_actividadPeriodo.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_actividadPeriodo.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
<?php 


require_once "../clases/actividad.class.php";

$codigo = $_POST['codigo'];
$act = $_POST['actividad'];
$periodo = $_POST['periodo'];
$ponderacion = $_POST['ponderacion'];



  //Instancia del objeto
    $actividad = new actividad();

    //Envio los datos al método    
    $verificar = $actividad->modificarActividad2($codigo,$act,$periodo,$ponderacion);


      if ($verificar == true) {
        header('Location: ../listas/lista_detalle_actividad.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_detalle_actividad.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
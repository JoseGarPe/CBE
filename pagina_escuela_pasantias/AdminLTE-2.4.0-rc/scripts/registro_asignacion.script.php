<?php 


require_once "../clases/materia.class.php";

$codigo = $_POST['marca'];
$nombre = $_POST['estado'];


   //Instancia del objeto
    $materia = new materia();

    //Envio los datos al método    
    $verificar = $materia->agregarAMateria($codigo,$nombre);


      if ($verificar == true) {
        header('Location: ../listas/lista_asignacion_materia.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_asignacion_materia.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
<?php 


require_once "../clases/padres.class.php";


$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$dui=$_POST['dui'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];



   //Instancia del objeto
    $padre = new padres();

    //Envio los datos al método    
    $verificar = $padre->modificarPadre($codigo,$nombre,$apellido,$dui,$correo,$celular);


      if ($verificar == true) {
        header('Location: ../listas/lista_padres.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_padres.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
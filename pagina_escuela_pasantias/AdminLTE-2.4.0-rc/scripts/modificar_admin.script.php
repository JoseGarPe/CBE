<?php 


require_once "../clases/administrador.class.php";


$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
   //Instancia del objeto
    $admin = new administrador();

    //Envio los datos al método    
    $verificar = $admin->modificarAdmin($codigo,$nombre,$apellido);


      if ($verificar == true) {
        header('Location: ../listas/lista_admins.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_admins.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
<?php 


require_once "../clases/profesor.class.php";


$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];

$dui=$_POST['dui'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];




   //Instancia del objeto
    $profe = new profesores();

    //Envio los datos al método    
    $verificar = $profe->modificarProfe($codigo,$nombre,$apellido,$dui,$celular,$correo,$direccion);


      if ($verificar == true) {
        header('Location: ../listas/lista_profesores.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_profesores.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
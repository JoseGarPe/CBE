<?php 


require_once "../clases/profesor.class.php";

$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$clave=$_POST['clave'];
$dui=$_POST['dui'];
$correo=$_POST['correo'];
$celular=$_POST['celular'];
$direccion=$_POST['direccion'];
$estado='Activo';


   //Instancia del objeto
    $profe = new profesores();

    //Envio los datos al método    
    $verificar = $profe->agregarProfesor($codigo,$nombre,$apellido,$clave,$dui,$celular,$correo,$direccion,$estado);


      if ($verificar == true) {
        header('Location: ../listas/lista_profesores.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_profesores.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
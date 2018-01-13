<?php 
session_start();

require_once "../clases/alumno.class.php";

$codigo = $_SESSION['alumno'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];
   //Instancia del objeto
    $admin = new alumno();

    if ($clave1==$clave2) {
    //Envio los datos al método 
    	  $verificar = $admin->modificarContra($codigo,$clave1);

    	   if ($verificar == true) {
        header('Location: ../listas/notas_alumno.php');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/contra_alumno.php');
    };
    	# code...
    }else{
    	header('Location: ../registros/contra_alumno.php?error2=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    };
?>
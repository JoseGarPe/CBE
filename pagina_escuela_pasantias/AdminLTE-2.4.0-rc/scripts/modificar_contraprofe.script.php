<?php 
session_start();

require_once "../clases/profesor.class.php";

$codigo = $_SESSION['profesor'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];
   //Instancia del objeto
    $admin = new profesores();

    if ($clave1==$clave2) {
    //Envio los datos al método 
    	  $verificar = $admin->modificarContra($codigo,$clave1);

    	   if ($verificar == true) {
        header('Location: ../listas/asistencia_profesor.php');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/contra_profe.php');
    };
    	# code...
    }else{
    	header('Location: ../registros/contra_profe.php?error2=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    };
?>
<?php 
session_start();

require_once "../clases/administrador.class.php";

$codigo = $_SESSION['admin'];
$clave1 = $_POST['clave1'];
$clave2 = $_POST['clave2'];
   //Instancia del objeto
    $admin = new administrador();

    if ($clave1==$clave2) {
    //Envio los datos al método 
    	  $verificar = $admin->modificarContra($codigo,$clave1);

    	   if ($verificar == true) {
        header('Location: ../listas/lista_admins.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_admins.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&admin='.$codigo.'');
    };
    	# code...
    }else{
    	header('Location: ../registros/contra_admins.php?error2=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    };
?>
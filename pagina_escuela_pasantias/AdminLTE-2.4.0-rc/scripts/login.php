<?php 

require_once "../clases/login.class.php";

$username = $_POST['usuario'];
$password = $_POST['password'];

   //Instancia del objeto
    $datos = new login();

    //Envio los datos al método    
    $verificar = $datos->login($username, $password);

      if ($verificar == 1) {
        header('Location: ../listas/notas_alumno.php');
    }else if($verificar == 2) {
        header('Location: ../listas/asistencia_profesor.php');
    }else if($verificar == 3) {
        header('Location: ../listas/inicioAdmin.php');
    }else{ //Sino hay error en el login
    	 header('Location: ../index.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
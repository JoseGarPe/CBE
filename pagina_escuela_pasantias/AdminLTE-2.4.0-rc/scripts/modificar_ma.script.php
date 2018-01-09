<?php 
require_once "../clases/mensualidad_alumno.class.php";

$alumno = $_POST['alumno'];
$codigo = $_POST['acod'];
$estado = $_POST['estado'];
$fecha_pago=$_POST['fech_pago'];
$mora=$_POST['mora'];



   //Instancia del objeto
    $ma = new mensualidad_alumno();

    //Envio los datos al método    
    $verificar = $ma->modificarMensualidadA($codigo,$estado,$fecha_pago,$mora);


      if ($verificar == true) {
        header('Location: ../listas/lista_ma.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&codigo='.$alumno.'');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/lista_ma.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }


?>
<?php 
require_once "../clases/alumno.class.php";
$codigo = $_POST['codigo'];
$nombre = $_POST['nombre'];
$apellido=$_POST['apellido'];
$nie=$_POST['nie'];
$clave=$_POST['clave'];
$id_detalle_grado=$_POST['id_detalle_grado'];


   //Instancia del objeto
     $alumno = new alumno();

    //Envio los datos al método    
    $verificar = $alumno->agregarAlumno($codigo,$nombre,$apellido,$nie,$clave,$id_detalle_grado);


      if ($verificar == true) {
        header('Location: ../listas/lista_alumno.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/indexAdmin.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS&grado'+$id_detalle_grado);
    }


?>
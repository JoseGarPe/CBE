<?php

session_start();

		$nm = $_SESSION["nm"];
		$profesor= $_SESSION["profesor"];
        $seccion = $_SESSION["secc"];
        $grado = $_SESSION["grad"];
        $materia=$_SESSION["mat"];   
        $actividad=$_SESSION["act"];        
        $periodo = $_SESSION["per"];

		require_once "../clases/asistencia.class.php";

        $misAsistencias = new asistencia();
	

            for ($i=1; $i <$nm ; $i++) { 
				$misAsistencias->insetarNota($_POST['nota'.$i.''],$_POST['A'.$i.''],$materia);
			}

	 if ($misAsistencias == true) {
        header('Location: ../listas/notas_profesor2.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/notas_profesor2.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }
		

?>
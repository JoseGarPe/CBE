<?php

session_start();

		$nm = $_SESSION["nm"];
		$materia = $_SESSION["mat"];  

		require_once "../clases/asistencia.class.php";

        $misAsistencias = new asistencia();
	
      	



            for ($i=1; $i <$nm ; $i++) { 

			if ($_POST['r'.$i.'']==1) {
				$misAsistencias->insetarAsistencia($_POST['A'.$i.''],'No ausente',$materia);
			}else{
				$misAsistencias->insetarAsistencia($_POST['A'.$i.''],'Ausente',$materia);
			}

			}

	 if ($misAsistencias == true) {
        header('Location: ../listas/asistencia_profesor.php?success=abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }else{ //Sino lo retorno al formulario con error
        header('Location: ../listas/asistencia_profesor.php?error=abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS');
    }
		

?>
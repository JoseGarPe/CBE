<?php

session_start();

?>
		<div class="modal fade" id="myModal" role="dialog">
    	<div class="modal-dialog">
    
	      <!-- Modal content-->
	      <div class="modal-content">
	        <div class="modal-header">
	          <button type="button" class="close" class="btn btn-danger" data-dismiss="modal">&times;</button>
	          <h4 class="modal-title">Codigos</h4>
	        </div>
	        <div class="modal-body">


	        	<form role="form" action="../scripts/registrar_codigo_alumno.script.php" method="post">
	              <div class="box-body">


				        <?php


                            require_once "../clases/alumno.class.php";

                            $misAlumno = new alumno();

                            
                            $codigo = $_POST['codigo'];
                            $alumno = $misAlumno->cargarAlumno($codigo);

                            foreach ($alumno as $row) {
                              
                              echo '
                              	<div class="form-group">
				                  <label for="codigo1">Alumno:'.$codigo.' &nbsp&nbsp</label>
				                  <input type="hidden"  id="alumno" name="alumno" value="'.$codigo.'" > 

				                </div>
                             	<div class="form-group">
				                  <label for="codigo1">Nombre: &nbsp&nbsp</label><label for="nombre">'.$row['nombre'].'</label>
				                  
				                </div>

				                <div class="form-group">
				                  <label for="codigo2">Nie: &nbsp&nbsp</label><label for="nie">'.$row['nie'].'</label>
				                </div>

				                <div class="form-group">
				                  <label for="codigo3">Grado: &nbsp&nbsp</label><label for="grado">'.$row['grado'].'</label>
				                  <label for="codigo4">&nbsp&nbsp&nbsp&nbspSeccion: &nbsp&nbsp</label><label for="seccion">'.$row['seccion'].'</label>
				                </div>


                              ';

                            }


				        ?>

	                <div class="form-group">
	                  <label for="descripcion">Codigo</label>
	                  <select id="codigo" name="codigo" class="form-control select2" style="width: 100%;">

                       <?php 

                            require_once "../clases/codigo.class.php";

                            $codigo = new codigo();

                            $categoria = $codigo->cargarCodigo();

                            foreach ($categoria as $row) {
                              
                              echo '
                                  <option value="'.$row["id"].'">'.$row["codigo"].'</option>

                              ';

                            }

                            ?>

                    </select>
	                </div>


	              <div class="box-footer">
	                <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
	              </div>
	            </form>
	          
	        </div>

	      </div>
	      
	    </div>
	    </div>
  


			
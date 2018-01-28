<?php 
session_start();
?>

	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog" style="width: 50% !important">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Asignacion de materias</h4>
	      </div>
	      <div class="modal-body">

	      		<div class="box">
		           <div class="box-body">
		              
		              
		            	<form role="form" action="../scripts/registro_asignacion.script.php" method="post">
              			
              			<?php

              			$profesor = $_POST["cod_band"];

              				echo '

              						<div class="form-group">
					                  <input type="text" style="display:none;" class="form-control" value="'.$profesor.'" required="" id="marca" name="marca">
					                </div>

              				'

              			?>

              			

              			<div class="form-group">
                  
		                    <br>
		                    <center>
		                    <select id="estado" name="estado" class="form-control select2" style="width: 50%;">

		                          <option value="">Selecciona la materia que impartira este usuario:</option>

		                        <?php 
		                        


		                            require_once "../clases/materia.class.php";

		                            $mismaterias = new materia();
		                            
		                            $materia = $mismaterias->cargarMateria();

		                            foreach ($materia as $row) {
		                              
		                              echo '

		                              <option value="'.$row['id_materia'].'">'.$row['nombre'].'</option>


		                              ';

		                            }


		                            ?>


		                  </select>
		                  </center>
		                  <br>
		                </div>

		                  <div class="box-footer">
			                <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
			                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
			              </div>
		            </form>
		            </div>
		            <!-- /.box-body -->
		          </div>
	        
	      </div>

	    </div>

	  </div>
	</div>
  


			
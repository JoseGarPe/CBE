

	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
				
				<?php

					$d = date("d");
			        $m = date("m");
			        $y = date("Y");

			        $day = $y."-".$m."-".$d;

			        echo '<h4 class="modal-title">'.$day.'</h4>';

				?>

	        
	      </div>
	      <div class="modal-body">

	      		<div class="box">
		            <div class="box-body">
		              
		                <form role="form" action="../scripts/registrar_observaciones_profesor.php" method="post">
			              <div class="box-body">

			              <?php 
                        


                            require_once "../clases/alumno.class.php";

                            $misAlumnos = new alumno();
                            $codigo= $_POST["cod_band"];
                            $alumno = $misAlumnos->cargarAlumnoObservacion($codigo);

                            foreach ($alumno as $row) {
                              
                              echo '

                              	<div class="form-group">
			                  		<label for="alumno">Alumno</label>
			                  		<input type="text" class="form-control" readonly="" id="alumno" name="alumno" value="'.$row['nombre'].'">
			                	</div>

			                	<div class="form-group">
			                  	<input type="text" class="form-control" style="display:none;" ="" id="alumno" name="alumno" value="'.$codigo.'">
			                	</div>

                              ';

                            }

                            ?>

                        <div class="form-group">
			            <label for="descripcion">Codigos de conducta</label>   
                        <select id="codig" name="codig" class="form-control select2" style="width: 75%;">

                        <?php 
                        


                            require_once "../clases/codigo.class.php";

                            $miscodigo = new codigo();
                            $codigo = $miscodigo->cargCodigo();

                            foreach ($codigo as $row) {
                              
                              echo '

                              <option value="'.$row['id_cod'].'">'.$row['nombre'].'</option>


                              ';

                            }


                            ?>


                  		</select>
                  		</div>
			                
			                  
			                 <div class="form-group">
			                  <label for="descripcion">Descripcion</label>
			                  <textarea class="form-control" maxlength="280" style="resize:none; height: 270px;" required="" id="descripcion" name="descripcion" placeholder="..."></textarea>
			                </div>
			              </div>

			              <div class="box-footer">
			                <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
			              </div>
			            </form>
		              
		            </div>
		            <!-- /.box-body -->
		          </div>
	        
	      </div>

	    </div>

	  </div>
	</div>
  


			
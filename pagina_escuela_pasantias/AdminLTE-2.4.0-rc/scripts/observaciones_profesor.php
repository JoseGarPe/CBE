

	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog" style="width: 80% !important">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Modal Header</h4>
	      </div>
	      <div class="modal-body">

	      		<div class="box">
		            <div class="box-body">
		              
		              
		              <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>Profesor</th>
		                  <th>Codigo</th>
		                  <th>Tipo</th>
		                  <th>Descripcion</th>
		                  <th>Fecha</th>
		                </tr>
		                </thead>


		                <tbody>
		                
		                
		                <?php 

		                            
		                            require_once "../clases/observaciones.class.php";

		                            $misObservaciones = new observaciones();

		                            $alumno = $_POST['cod_band'];

		                            $observaciones = $misObservaciones->cargarObservacionesAlumno($alumno);

		                            foreach ($observaciones as $row) {
		                              
		                              echo '

		                              <tr>
		                                  <td>'.$row["profesor"].'</td>
		                                  <td>'.$row["cod"].'</td>
		                                  <td>'.$row["tcod"].'</td>
		                                  <td>'.$row["descripcion"].'</td>
		                                  <td>'.$row["fecha"].'</td>
		                                  
		                              </tr>

		                              ';

		                            }

		                            ?>

		                </tbody>


		                
		              </table>
		            </div>
		            <!-- /.box-body -->
		          </div>
	        
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div>
	    </div>

	  </div>
	</div>
  


			
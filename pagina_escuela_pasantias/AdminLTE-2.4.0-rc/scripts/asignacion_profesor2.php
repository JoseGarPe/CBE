

	
	<div id="myModal" class="modal fade" role="dialog">
	  <div class="modal-dialog" style="width: 40% !important">

	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">

	      		<div class="box">
		            <div class="box-body">
		              
		              
		              <table id="example1" class="table table-bordered table-striped">
		                <thead>
		                <tr>
		                  <th>Materia asignadas</th>
		                </tr>
		                </thead>


		                <tbody>
		                
		                
		                <?php 

		                            
		                            require_once "../clases/materia.class.php";

		                            $mismaterias = new materia();

		                            $profesor = $_POST['cod_band'];

		                            $materia = $mismaterias->verAMateria($profesor);

		                            foreach ($materia as $row) {
		                              
		                              echo '

		                              <tr>
		                                  <td>'.$row["nombre"].'</td>
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
  


			
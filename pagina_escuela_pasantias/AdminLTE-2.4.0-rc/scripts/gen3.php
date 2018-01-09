<?php 
session_start();


?>
<br><br>


<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
            
          <div class="box">
            <div class="box-body">
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  
                  <th>Alumno</th>
                  <th>Profesor</th>
                  <th>Materia</th>
                  <th>Hora</th>
                  <th>Estado</th>
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                            
                            require_once "../clases/asistencia.class.php";

                            $misAsistencias = new asistencia();

                            $profesor= $_SESSION["profesor"];
                            $seccion = $_SESSION["secc"];
                            $grado = $_SESSION["grad"];        
                            $fecha = $_POST['cob_banda'];

                            $asistencia = $misAsistencias->cargarAlumnosAsistencia($grado,$seccion,$profesor,$fecha);

                            foreach ($asistencia as $row) {
                              
                              echo '

                              <tr>
                                  <td >'.$row["alumno"].'</td>
                                  <td >'.$row["profesor"].'</td>
                                  <td >'.$row["materia"].'</td>
                                  <td >'.$row["hora"].'</td>
                                  <td >'.$row["estado"].'</td>
                                  
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
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>

    <div class="clearfix"></div>
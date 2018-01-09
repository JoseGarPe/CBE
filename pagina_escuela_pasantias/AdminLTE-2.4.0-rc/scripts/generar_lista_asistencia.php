<?php 
session_start();


?>

<div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>Alumno</th>
                  <th>Estado</th>
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                            
                            require_once "../clases/asistencia.class.php";

                            $misAsistencias = new asistencia();

                            $profesor= $_SESSION["profesor"];
                            $seccion = $_POST['cob_banda'];
                            $grado = $_SESSION["grad"];
                            
                            $asistencia = $misAsistencias->cargarAlumnos($grado,$seccion,$profesor);

                            foreach ($asistencia as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["codigo"].'</td>
                                  <td>'.$row["alumno"].'</td>
                                  <td>
                                    <div class="form-group">
                                      <label>
                                        <input type="radio" name="r2" class="minimal-red" checked>
                                        No asistio
                                      </label>
                                      <label>
                                        <input type="radio" name="r2" class="minimal-red">
                                        Asistio
                                      </label>
                                    </div>
                                  </td>
                                  
                              </tr>

                              ';

                            }

                            ?>

                </tbody>


                
              </table>

              <div class="row no-print">
                <div class="col-xs-12">
                  <a href="../scripts/imprimir_asistencia_alumno.php" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
                 
                </div>
              </div>

            </div>
            <!-- /.box-body -->
          </div>

    <div class="clearfix"></div>
<?php 
session_start();


?>
<br><br>



<div class="box">
            <div class="box-body">
            <form role="form" action="../scripts/registro_nota_materia.script.php" method="post">
              
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>Alumno</th>
                  <th>Nota</th>
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                            
                            require_once "../clases/asistencia.class.php";

                            $misAsistencias = new asistencia();

                            $profesor= $_SESSION["profesor"];
                            $seccion = $_SESSION["secc"];
                            $grado = $_SESSION["grad"];
                            $materia=$_SESSION["mat"];   
                            $actividad=$_SESSION["act"];        
                            $periodo = $_POST['cob_banda'];
    
                            $_SESSION["per"] = $periodo;

                            $cs = 1;

                            $asistencia = $misAsistencias->cargarAlumnos($grado,$seccion,$profesor,$materia);

                            foreach ($asistencia as $row) {
                              
                              echo '

                              <tr>
                                  <td ><label>'.$row["codigo"].'</label> <input type="hidden" name="A'.$cs.'" id="A'.$cs.'" value="'.$row["codigo"].'" /></td>
                                  <td >'.$row["alumno"].'</td>
                                  <td>
                                    <div class="form-group">
                                      <label>
                                        <input id="nota'.$cs.'" name="nota'.$cs.'" type="number" min="0" max="10" value="0"/>
                                      </label>
                                    </div>
                                  </td>
                                  <td style="display: none;">'.$row["materia"].'</td>
                                  
                              </tr>

                              ';

                              $cs = $cs +1;

                              $_SESSION["nm"]=$cs;

                            }

                            ?>

                </tbody>


                
              </table>

              <div class="row no-print">
                <div class="col-xs-12">
                  <input type="submit" class="btn btn-info pull-left" style="margin:0.5%;" name="submit" value="Guardar">
                </div>
              </div>
              </form>
            </div>
            <!-- /.box-body -->
          </div>

    <div class="clearfix"></div>
<?php 
session_start();


?>
<br><br>



<div class="box">
            <div class="box-body">
              
              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>N°</th>
                  <th>Alumno</th>
                  <th>Operaciones</th>
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                            
                            require_once "../clases/asistencia.class.php";

                            $misAsistencias = new asistencia();

                            $profesor= $_SESSION["profesor"];
                            $seccion = $_SESSION["secc"];
                            $grado = $_SESSION["grad"];        
                            $materia = $_POST['cob_banda'];
                            $_SESSION["mat"]=$materia;

                            $cs = 1;

                            $asistencia = $misAsistencias->cargarAlumnos($grado,$seccion,$profesor,$materia);

                            foreach ($asistencia as $row) {
                              
                              echo '

                              <tr>
                                  <td ><label>'.$row["codigo"].'</label> <input type="hidden" name="A'.$cs.'" value="'.$row["codigo"].'" /></td>
                                  <td >'.$row["alumno"].'</td>
                                  <td>
                                    <div class="form-group">
                                      <button class="btn btn-warning" onclick=" mostrar_ob(this.value)" id="mostrar" name="mostrar" value="'.$row["codigo"].'" >Mostrar</button>
                                      <button class="btn btn-info" onclick="agregar_ob(this.value)" id="agregar" name="agregar" value="'.$row["codigo"].'" >Agregar</button>
                                    </div>
                                  </td>
                                  
                                  
                              </tr>

                              ';

                              $cs = $cs +1;

                              $_SESSION["nm"]=$cs;

                            }

                            ?>

                </tbody>


                
              </table>
            </div>
            <!-- /.box-body -->
          </div>


    <section class="content">
      <div class="row">
        <div class="col-xs-4">
          
            <div id="respuesta">

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


    <div class="clearfix"></div>


                                      
    
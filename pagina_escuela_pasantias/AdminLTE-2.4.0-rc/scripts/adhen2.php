<?php 
session_start();



                      require_once "../clases/asistencia.class.php";

                            $misAsistencias = new asistencia();

                            $seccion = $_SESSION["secc"];
                            $grado = $_SESSION["grad"];        
                            $materia = $_POST['cob_banda'];
                            $_SESSION["mat"]=$materia;

                            $cs = 1;

                            $asistencia = $misAsistencias->cargarAlumnos2($grado,$seccion,$materia);



            ?>

<br><br>






<div class="box">
            <div class="box-body">



              
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th colspan="3"><?php  

                    foreach ($asistencia as $row) {

                              if ($row["guia"] <> '') {
                                 echo '<h5><h4>Maestro asignado:<h4> '.$row["guia"].'</h5>';
                              }
                               

                            }

                  ?></th>
                </tr>
                <tr>
                  <th>N°</th>
                  <th>Alumno</th>
                  <th>Operaciones</th>
                </tr>
                </thead>

                

                <tbody>
                
                
                <?php 
                            
                             foreach ($asistencia as $row) {
                              
                              if ($row["codigo"] != '') {
                                echo '

                                  <tr>
                                      <td ><label>'.$row["codigo"].'</label> <input type="hidden" name="A'.$cs.'" value="'.$row["codigo"].'" /></td>
                                      <td >'.$row["alumno"].'</td>
                                      <td>
                                        <div class="form-group">
                                          <button class="btn btn-warning" onclick=" mostrar_ob(this.value)" id="mostrar" name="mostrar" value="'.$row["codigo"].'" >Mostrar</button>
                                        </div>
                                      </td>
                                      
                                      
                                  </tr>

                                  ';
                              }

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


                                      
    
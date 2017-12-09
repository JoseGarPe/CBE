<?php 
session_start();
?>

<div class="box" style="width: 75%">
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">

                <tr>
                  <th style="width: 30%">Actividad</th>
                  <th style="width: 10%">Ponderacion</th>
                  <th style="width: 5%">Nota</th>
                </tr>

<?php

                  require_once "../clases/notas.class.php";

                        $misNotas = new notas();

                        //Envio los datos al método    
                        $not = $misNotas->cargarNotasAlumno($codigo,$row['materia'],$alumno);

                        foreach ($not as $raw) {

                          echo '

                          <tr>
                            <td>'.$raw['actividad'].'</td>
                            <td>'.$raw['ponderacion'].'%</td>
                            <td>'.$raw['nota'].'</td>
                          </tr>

                          ';

                        }


?>

                          
                </table>
            </div>
          </div>

    <div class="clearfix"></div>
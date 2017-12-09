<?php 

session_start();

require_once "../clases/notas.class.php";

$codigo = $_POST['cod_banda'];
$alumno= $_SESSION["alumno"];

//Instancia del objeto
    $misMaterias = new notas();

    //Envio los datos al método    
    $repor = $misMaterias->cargarMateriasAlumno($codigo,$alumno);
                            

    echo '                    <div class="row no-print">
                                <div class="col-xs-12">
                                  <a href="../scripts/imprimir_nota_alumno.php?id='.$codigo.'" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir notas</a>
                                 
                                </div>
                              </div><br>
         ';


    foreach ($repor as $row) {

      $total = 0;
                              
                              echo '


          <center>
          <div class="box" style="width: 75%">
            <div class="box-header">
              <h3 class="box-title">'.$row['materia'].' - '.$row['profesor'].'</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body no-padding">
              <table class="table table-condensed">

                <tr>
                  <th style="width: 30%">Actividad</th>
                  <th style="width: 10%">Ponderacion</th>
                  <th style="width: 5%">Nota</th>
                </tr>

                ';


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

                          $nota1 = ($raw['ponderacion']/100)*$raw['nota'];
                          $total = $total + $nota1;

                        }



                

                echo '
                          <tr>
                            <td colspan="3"><center> Promedio: '.$total.' </center></td>
                          </tr>
                          
                </table>
            </div>

          </div>
          </center>

    <div class="clearfix"></div>



            
                              ';

                           
                            }




   

?>
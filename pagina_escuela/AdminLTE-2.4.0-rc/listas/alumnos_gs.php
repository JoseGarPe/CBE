<?php
session_start();
?>
</br>
<div class="box" >
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Observaciones</th>
          
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                            require_once "../clases/grados.class.php";
                       
                            
                            $grado =$_SESSION["grad"] ;
                            $seccion = $_POST['cod_banda'];
                            $_SESSION["seccion"] = $seccion;

                            $misAreas = new grado();

                            $area = $misAreas->cargarAlumnosGrado($grado,$seccion);

                            foreach ($area as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["id_alumno"].'</td>
                                  <td>'.$row["nombre"].' '.$row["apellido"].'</td>
                                  
                                  <td>
                                    <a href="../listas/lista_osbalum.php?cod='.$row["id_alumno"].'" class="btn btn-warning">Mostrar</a>
                                  </td>
                              </tr>

                              ';

                            }

                            ?>

                </tbody>
                <div id="alumnos">
                  
                </div>
                 <button type="button" onClick="location.href = '../listas/observacion_profesor.php'" class="btn btn-default pull-right"><i class="fa fa-plus"></i> Nueva Observacion</button>
             
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
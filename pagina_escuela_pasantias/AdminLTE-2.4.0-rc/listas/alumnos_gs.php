<?php
session_start();
 $grado = $_SESSION['grad'] ;
 $seccion = $_POST['cod_banda'];
  require_once "../clases/grados.class.php";
  require_once "../clases/seccion.class.php";
   $misAreas = new grado();
   $misSeccion = new seccion();
?>
</br>
<div class="box" >
<?php
$GradoSelect = $misAreas->cargarGradoNom($grado);
foreach ($GradoSelect as $row) {
 echo '  <section class="content-header">
      <h1>

         '.$row['nombre'].'
       
     ';}

$SeccionSelect = $misSeccion->cargaSeccionNom($seccion);
foreach ($SeccionSelect as $row) {
 echo ' '.$row['nombre'].'</h1>    </section>';
  echo '                    <div class="row no-print">
                                <div class="col-xs-12">
                                  <a href="../scripts/imprimir_lista_alumnos.php?seccion='.$seccion.'&grado='.$grado.'" target="_blank" class="btn btn-primary"><i class="fa fa-print"></i> Imprimir notas</a>
                                 
                                </div>
                              </div><br>
         ';
}
?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Operaciones</th>
          
          
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                           
                       
                            
                            $grado =$_SESSION['grad'] ;
                            $seccion = $_POST['cod_banda'];
                            $_SESSION["seccion"] = $seccion;

                           $area = $misAreas->cargarAlumnosGrado($grado,$seccion);

                            foreach ($area as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["id_alumno"].'</td>
                                  <td>'.$row["nombre"].' '.$row["apellido"].'</td>
                                  
                                  <td>
                                   <a href="../registros/modificar_alumno.php?cod='.$row["id_alumno"].'" class="btn btn-warning">Modificar</a>
                              
                                
                                
                              ';
                              if ($row["estado"]=="Activo") {
                                echo'<a href="../scripts/eliminar_alumno.script.php?cod='.$row["id_alumno"].'&estado=Inactivo" class="btn btn-danger">Desactivar</a>
                                  </td>
                              </tr>';
                                # code...
                              } else{
                                echo'<a href="../scripts/eliminar_alumno.script.php?cod='.$row["id_alumno"].'&estado=Activo" class="btn btn-info">Activar</a>
                                  </td>
                              </tr>';

                              }


                            }

                            ?>

                </tbody>
                <div id="alumnos">
                  
                </div>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
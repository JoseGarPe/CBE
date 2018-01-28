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
}
?>
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                   <th>Fecha</th>
                  <th>Operaciones</th>
                 
          
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                           
                       
                            
                            $grado =$_SESSION['grad'] ;
                            $seccion = $_POST['cod_banda'];
                            $_SESSION["seccion"] = $seccion;

                           $area = $misAreas->cargarAlumnosGrado1($grado,$seccion);

                            foreach ($area as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["id_inscripcion"].'</td>
                                  <td>'.$row["nombre"].' '.$row["apellido"].'</td>
                                  <td>'.$row["fecha"].'</td>
                                  <td>
                                   <a href="../registros/modificar_inscripcion.php?cod='.$row["id_inscripcion"].'" class="btn btn-warning">Modificar</a>
                                   <a href="../scripts/eliminar_inscripcion.script.php?cod='.$row["id_inscripcion"].'&estado=Inactivo" class="btn btn-danger">Desactivar</a>
                                  </td>
                              </tr>
                                
                                
                              ';
                              
                              }


                          

                            ?>

                </tbody>
                <div id="alumnos">
                  
                </div>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>
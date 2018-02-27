<?php
session_start();
 $seccion = $_GET['seccion'];
 $grado = $_GET['grado'];
   require_once "../clases/grados.class.php";
  require_once "../clases/seccion.class.php";
   $misAreas = new grado();
   $misSeccion = new seccion();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CEB | Administrador</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="../dist/css/skins/_all-skins.min.css">
  <!-- Morris chart -->
  <link rel="stylesheet" href="../bower_components/morris.js/morris.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="../bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Date Picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- Google Font -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

</head>
<body onload="window.print();">
<font size="1">


<!-- Contenedor-->
  <div class="wrapper">
    <section class="content-header">
      <h1>
        Colegio Bautista Emmanuel
      </h1>
    </section>
    <br>


<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
          
        <small>Colegio Bautista Emmanuel</small><br/>
        <small>Profesor: _________________ Materia__________________ </small>
     
     <small> Lista asistencia Alumnos
          <?php
$GradoSelect = $misAreas->cargarGradoNom($grado);
foreach ($GradoSelect as $row) {
 echo '  
      

         '.$row['nombre'].'
       
     ';}

$SeccionSelect = $misSeccion->cargaSeccionNom($seccion);
foreach ($SeccionSelect as $row) {
 echo ' '.$row['nombre'].'';
}
?>
</small>
</h2>
        </div>
        <!-- /.col -->
      </div>
      <br>
      <!-- /.row -->
      <div class="box" >
            <div class="box-body">

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>  
                  <th>N°</th>
                  <th>Fecha</th>
                  <?php
                    for ($i=0; $i <=29; $i++) { 
                      echo '<th> </th>';
                    }
                  ?>               
                  <th>Total</th>
                </tr>
                </thead>


                <tbody>
                  <tr>  
                  <td> </td>
                  <td>Codigo/Nombre de Estudiante</td>
                  <?php
                    for ($i=0; $i <=4; $i++) { 
                      echo '<td><small>L</small></td>';
                      echo '<td><small>M</small></td>';
                      echo '<td><small>M</small></td>';
                      echo '<td><small>J</small></td>';
                      echo '<td><small>V</small></td>';
                      echo '<td> </td>';
                    }
                  ?>               
                  <td> </td>
                </tr>
                
                <?php 
                           $area = $misAreas->cargarAlumnosGrado($grado,$seccion);
                            $nlista=1;
                            foreach ($area as $row) {
                              $Nulis=$nlista++;
                              echo '
                               <tr>
                                  <td>'.$Nulis.'</td>
                                  <td><small>'.$row["id_alumno"].' '.$row["nombre"].' '.$row["apellido"].'</small></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td><td></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td><td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                  <td></td>
                                   <td></td>
                                  
                              </tr>';
                             
                             


                            }

                            ?>

                </tbody>
                <div id="alumnos">
                  
                </div>
                
              </table>
            </div>
            <!-- /.box-body -->
          </div>

        </section>

      </div>


  </div>


</font>
</body>
</html>

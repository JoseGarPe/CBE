<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Hotel Quality | Administracion</title>
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



<!-- Contenedor-->
  <div class="wrapper">
    <section class="content-header">
      <h1>
        Alumnos
        <small>Observaciones</small>
      </h1>
    </section>
    <br>


<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Observaciones del estudiante
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <br>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-bordered">
            <thead>
            <tr class="success">
                  <th>Fecha</th>
                  <th>Descripcion</th>
                  <th>Profesor</th>
            </tr>
            </thead>
            <tbody>
                
                
                <?php 

                            
                            require_once "../clases/observaciones.class.php";

                            $misObservaciones = new observaciones();
                            $alumno= $_SESSION["alumno"];
                            $observaciones = $misObservaciones->cargarObservacionAlumno($alumno);

                            foreach ($observaciones as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["fecha"].'</td>
                                  <td>'.$row["descripcion"].'</td>
                                   <td>'.$row["nombre"].' '.$row["apellido"].'</td>
                                  
                              </tr>

                              ';

                            }

                            ?>

                </tbody>


                
              </table>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

        </section>

      </div>


  </div>



</body>
</html>

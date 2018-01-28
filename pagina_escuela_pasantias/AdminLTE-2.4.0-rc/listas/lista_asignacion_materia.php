<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>CBE | Administracion</title>
   <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="../bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="../bower_components/Ionicons/css/ionicons.min.css">

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
  <link rel="stylesheet" href="../bower_components/select2/dist/css/select2.min.css">


<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
<script>
  
function mostrar_ob(mostrar)
  {
        var parametros = {
                "cod_band" : mostrar
        };

        var url = "../scripts/asignacion_profesor.php"; // El script a dónde se realizará la petición.
          $.ajax({
                 type: "POST",
                 url: url,
                 data: parametros, // Adjuntar los campos del formulario enviado.
                 success: function(data)
                 {
                     $("#datos").html(data); // Mostrar la respuestas del script PHP.
                     $('#myModal').modal('show');
                 }
               });
  }

  function mostrar_oc(mostrar)
  {
        var parametros = {
                "cod_band" : mostrar
        };

        var url = "../scripts/asignacion_profesor2.php"; // El script a dónde se realizará la petición.
          $.ajax({
                 type: "POST",
                 url: url,
                 data: parametros, // Adjuntar los campos del formulario enviado.
                 success: function(data)
                 {
                     $("#datos").html(data); // Mostrar la respuestas del script PHP.
                     $('#myModal').modal('show');
                 }
               });
  }

</script>

</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo  -->
      <span class="logo-mini"><b>H</b>Q</span>
      <!-- logo regular s -->
      <span class="logo-lg"><b>Hotel</b>Quality</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">

          <!-- Cuenta del usuario -->

          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="../dist/img/user2-160x160.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs">****</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">

                <p>
                  ****
                </p>
              </li>

              <li class="user-footer">
                <div class="pull-right">
                  <a href="../scripts/logout.php" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>


        </ul>
      </div>
    </nav>
  </header>





  <!-- Menu -->


  <aside class="main-sidebar">
    <section class="sidebar">

    <?php 
    require_once "../menu_admin.php";  
     ?>
        
    </section>
  </aside>



  <!-- Contenedor-->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Profesores
        <small>Asignacion de materias</small>
      </h1>
    </section>
    <br>
    <?php 

            if (isset($_GET['success'])) {
                

                if ($_GET['success']=='abcFTY778mclhgGHLCVbyyt8976paaaYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS') {
                    

                    echo '

              <div class="callout callout-success">
              
                Los datos han sido guardados exitosamente.
             </div>

                    ';

                }

            }elseif (isset($_GET['error'])) {

               if ($_GET['error']=='abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS') {
                    

                    echo '

              <div class="callout callout-danger">
              
                Error al guardar, verifique los datos ingresados.
             </div>

                    ';

                }

            }


             ?>
  

<section class="content">
      <div class="row">
        <div class="col-xs-12">
          
            
            <!-- /.box-header -->
            

          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nombre</th>
                  <th>Operaciones</th>
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                            require_once "../clases/profesor.class.php";

                            $miProfesor = new profesores();

                            $profesores = $miProfesor->cargarProfesor();

                            foreach ($profesores as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["nombre"].'</td>
                                  <td>
                                    <div class="form-group">
                                      <button class="btn btn-warning" onclick=" mostrar_ob(this.value)" id="mostrar" name="mostrar" value="'.$row["id_profesor"].'" >Asignar materia</button>
                                      <button class="btn btn-warning" onclick=" mostrar_oc(this.value)" id="mostrar" name="mostrar" value="'.$row["id_profesor"].'" >Ver materia</button>
                                    </div>
                                  </td>
                              </tr>

                              ';

                            }

                            ?>

                </tbody>


                
              </table>

              <div class="box-footer clearfix no-border">
              </div>

            </div>
            <!-- /.box-body -->
          </div>
                <div class="form-group">
                    <div id="datos"></div>
                </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>


  </div>

<!-- jQuery 3 -->
<script src="../bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.7 -->
<script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<script src="../bower_components/select2/dist/js/select2.full.min.js"></script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>



<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>

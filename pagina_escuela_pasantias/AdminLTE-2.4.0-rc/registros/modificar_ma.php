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
  <!-- DataTables -->
  <link rel="stylesheet" href="../../bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
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

<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">
    <!-- Logo -->
  <a href="../indexAdmin.php" class="logo">
      <!-- mini logo  -->
      <span class="logo-mini"><b>C</b>BE</span>
      <!-- logo regular s -->
      <span class="logo-lg"><b>Colegio</b>Bautista Emmanuel</span>
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
        Area mantenimiento
        <small>Modificar de Mensualidad alumno</small>
      </h1>
    </section>

    
    <section class="content">
     
      <div class="row">
        
        <section class="col-lg-6 connectedSortable">
          <div class="box box-primary">

            <div class="box-header with-border">
              <br>
              <center><h6 class="box-title">*No dejes ningun campo vacio*</h6></center>
            </div>

            <form role="form" action="../scripts/modificar_ma.script.php" method="post">
              <div class="box-body">


                            <?php 

                            require_once "../clases/mensualidad_alumno.class.php";

                            $codigo = $_GET['cod'];
                            $alumno = $_GET['alumno'];

                            $miMa = new mensualidad_alumno();

                            $ma = $miMa->consultarMa($codigo);

                            foreach ($ma as $row) {
                              
                              echo '

                    <div class="form-group">
                      <input type="text" class="form-control" style="display:none;" value="'.$row["id_ma"].'" id="acod" name="acod">
                    </div>
                      
                    <input type="hidden" name="alumno" value="'.$alumno.'" id="'.$alumno.'">
                    
                    <div class="form-group">
                      <label for="nombre">Estado</label>
                      <select id="estado" name="estado" class="form-control select2" style="width: 50%;">
                               ';  
                        
                        if ($row["estado"]==1) {
                            echo'<option selected value="1">Pagado</option>
                                 <option value="2">No pagado</option>
                                ';
                        }else{
                            echo'<option value="1">Pagado</option>
                                 <option selected value="2">No pagado</option>
                                ';
                        }
                        
                      echo'
                      </select>
                    </div>
                    
                    <div class="form-group">
                      <label for="nombre">Fecha de pago</label>
                      <input type="date" class="form-control" required="" style="width: 50%; value="'.$row["fech_pago"].'" id="fech_pago" name="fech_pago" placeholder="YY-MM-DD">
                    </div>

                    <div class="form-group">
                      <label for="nombre">Estado</label>
                      <select id="mora" name="mora" class="form-control select2" style="width: 50%;">
                                    ';

                    
                        if ($row["mora"]==1) {
                            echo'<option selected value="1">Si</option>
                                 <option value="2">No</option>
                                ';
                        }else{
                            echo'<option value="1">Si</option>
                                 <option selected value="2">No</option>
                                ';
                        }
                        
                      echo'
                      </select>
                    </div>
                    
                                    ';

                            }

                            ?>

            </div>

                 <div class="box-footer">
                    <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
                    <input type="button" class="btn btn-danger" onClick="location.href = '../listas/lista_ma.php'" name="cancel" value="Cancelar" >
                 </div>

            </form>

          </div>
        </section>

      </div>
   
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

</body>
</html>



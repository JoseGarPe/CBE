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
    require_once "../menu_trab.php";  
     ?>
        
    </section>
  </aside>



  <!-- Contenedor-->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Reportes
        <small>Solicitud de trabajo</small>
      </h1>
    </section>
<br>


    
  




<?php 

                            require_once "../clases/detalle_mantenimiento.class.php";

                            $misDet = new detalle();

                            $codigo = $_GET['id'];
                            $tipo = $_GET['tip'];



                            $det = $misDet->solic($codigo);


                            $d = date("d");
                            $m = date("m");
                            $y = date("Y");

                            foreach ($det as $row) {
                              
                              echo '



<section class="invoice">
      <!-- title row -->
      <div class="row">
        <div class="col-xs-12">
          <h2 class="page-header">
            <i class="fa fa-globe"></i> Area de '.$row['Area'].'
            <small class="pull-right">Fecha: '.$d.'-'.$m.'-'.$y.'</small>
          </h2>
        </div>
        <!-- /.col -->
      </div>
      <!-- info row -->
      <div class="row invoice-info">
        <div class="col-sm-4 invoice-col">
          <b>Datos del equipo</b><br>
          <br>
          <b>Componente:</b> '.$row['Componente'].'<br>
          <b>Marca:</b> '.$row['Marca'].'<br>
          <b>Model:</b> '.$row['Modelo'].'
        </div>
        <!-- /.col -->
        <div class="col-sm-4 invoice-col">
          <b>Responsable de mantenimiento</b><br>
          <br>
          <b>Codigo:</b> '.$row['CodigoTecnico'].'<br>
          <b>Nombre:</b> '.$row['NombreTecnico'].'<br>
          <b>Apellido:</b> '.$row['ApellidoTecnico'].'
        </div>
        <!-- /.col -->
      </div>
      <br>
      <!-- /.row -->

      <!-- Table row -->
      <div class="row">
        <div class="col-xs-12 table-responsive">
          <table class="table table-striped">
            <thead>
            <tr>
              <th width="10%">Codigo Mant.</th>
              <th width="10%">Categoria</th>
              <th width="40%">Descripcion</th>
              <th width="10%">Retrasos</th>
              <th width="20%">Perido de trabajo</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>'.$row['Num'].'</td>
              <td>'.$row['Categoria'].'</td>
              <td>'.$row['Descripcion'].'</td>
              <td>'.$row['Retrasos'].'</td>
              <td>'.$row['Periodo'].'</td>
            </tr>
            
            </tbody>
          </table>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<br><br><br>
      <div class="row">
          <center><table>
            <thead>
            <tr>
              <th width="18%" >_______________</th>
              <th width="18%" >_______________</th>
              <th width="18%" >_______________</th>
              <th width="18%" >_______________</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td>F. Jefe de area</td>
              <td>F. Sup. de Mant.</td>
              <td>F. Tecnico</td>
              <td>F. Gerente de Mant.</td>
            </tr>
            
            </tbody>
          </table></center>
        <!-- /.col -->
      </div>
      <!-- /.row -->
<br><br>
      <!-- this row will not appear when printing -->
      <div class="row no-print">
        <div class="col-xs-12">
          <a href="../scripts/imprimir_solicitud.php?id='.$row['Num'].'" target="_blank" class="btn btn-default"><i class="fa fa-print"></i> Imprimir</a>
          
';

    if ($tipo=='PRE01') {
    
           echo'

          <a href="../listas/lista_mantenimiento_preventivo_t.php" class="btn btn-success pull-right"> Regresar</a>
          </button>
        </div>
      </div>
    </section>

<div class="clearfix"></div>


                              ';


    }elseif ($tipo=='COR02') {

       echo'

          <a href="../listas/lista_mantenimiento_correctivo_t.php" class="btn btn-success pull-right"> Regresar</a>
          </button>
        </div>
      </div>
    </section>

<div class="clearfix"></div>


                              ';


    }

                           
                            }

                            ?>





    
  
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

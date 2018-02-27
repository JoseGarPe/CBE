<?php
session_start();
$alumno = $_SESSION['alumno'];
?>
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
  <a href="#" class="logo">
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
               <span class="hidden-xs"><?php echo $alumno?></span>
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
    require_once "../menu_alumno.php";  
     ?>
        
    </section>
  </aside>



  <!-- Contenedor-->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Avisos
        <small></small>
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
             <section>
  <div class="row">
      <div class="box">
      <div class="box-body">
      <div class="col-lg-12 col-md-8">
      <div class="col-md-6 col-md-4">
        <blockquote>
        <h1>Mision</h1>
  <p>Somos una institución que educa con alta calidad academica a la niñez, a la adolescencia  y a la juventud
  mediante el fortalecimiento de lso principios y valores cristiamos, con el apoyo de la familia,la iglesia y la comunidad en general
  promuevan una cultura de paz como forma de vida y anhelo de una convivencia social mas justa,fraterna y humana.</p>
      </blockquote>
      </div>
        <div class="col-md-6 col-md-4">
        <img src="../dist/img/logoo.jpg" width="75%" height="75%" class="img-thumbnail">
        </div>
      <div class="col-md-6 col-md-4">
        <blockquote class="blockquote-reverse">
        <h1>Vision</h1>
           <p>Ser una institución educativa de inspiración cristiana,ecuménica de alta calidad académica, que promueva
           la practica valores cristianos que posibiliten en el estudiante con el apoyo de la familia, la iglesia y la comunidad en general el compromiso de una convivencia social para una cultura de paz.</p>
        </blockquote>
      </div>
      </div>
      </div>
      </div>

 </div>
</section>
<section class="content">
      
             <?php 

                            require_once "../clases/avisos.class.php";

                            $avisoss = new avisos();
                            $aviso = $avisoss->cargarAvisos();

                            foreach ($aviso as $row) {
                              
                              echo '
                                <div class="row">
                                 <div class="col-md-12">
                                   <!-- /.box-header -->
                                  <div class="box">
                                     <div class="box-body">
                              <dl class="dl-horizontal">
                                 <dt> <H1>'.$row["nombre"].'</H1><mark>'.$row["fecha"].'</mark></dt>
                                  <dd>'.$row["descripcion"].'</dd>
                                  </dl>
                                
                              
                                      </div>
                                      <!-- /.box-body -->
                                    </div>
                                    <!-- /.box -->
                                  </div>
                                  <!-- /.col -->
                                </div>


                              ';

                            }

                            ?>

               

              <div class="box-footer clearfix no-border">
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

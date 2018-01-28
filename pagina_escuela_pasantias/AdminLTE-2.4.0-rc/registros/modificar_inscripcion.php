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
  <a href="../listas/indexAdmin.php" class="logo">
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
              <span class="hidden-xs">Administrador</span>
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
        Inscripciones
        <small>Modificar de Inscripcion</small>
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

            <form role="form" action="../scripts/modificar_inscripcion.script.php" method="post">
              <div class="box-body">


                       <?php 

                            require_once "../clases/inscripcion.class.php";

                            $codigo = $_GET['cod'];

                            $codi = new inscripcion();

                            $inscripcion = $codi->consultarInscripcion($codigo);

                            foreach ($inscripcion as $row) {
                              
                              echo '

                            <div class="form-group">
                                <label for="codigo">Codigo</label>
                                <input type="text" class="form-control" readonly value="'.$row["id_inscripcion"].'" id="codigo" name="codigo" maxlength="5" minlength="5">
                            </div> ';

                              echo '<div class="form-group">
                                      <label for="categoria">Alumno</label>
                                        <select id="id_alumno" name="id_alumno" class="selectpicker form-control" data-live-search="true">';
                                       $alumno = new inscripcion();
                                      $categoria = $alumno->cargarAlumnos();
                                        foreach ($categoria as $raw) {
                                        if ($row["id_alumno"]==$raw["id_alumno"]) {
                                                 echo '
                                                          <option selected value="'.$raw["id_alumno"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }else{

                                                     echo '
                                                          <option value="'.$raw["id_alumno"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }        
                                                                      }
                                 echo'        
                                 </select>
                               </div>';
                                 echo '<div class="form-group">
                                      <label for="categoria">Padre</label>
                                        <select id="id_padre" name="id_padre" class="selectpicker form-control" data-live-search="true">';
                                       $padre = new inscripcion();
                                      $categoria = $padre->cargarPadre();
                                        foreach ($categoria as $raw) {
                                        if ($row["id_padre"]==$raw["id_padre"]) {
                                                 echo '
                                                          <option selected value="'.$raw["id_padre"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }else{

                                                     echo '
                                                          <option value="'.$raw["id_padre"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }        
                                                                      }
                                 echo'        
                                 </select>
                               </div>';
                                 echo '<div class="form-group">
                                      <label for="categoria">Madre</label>
                                        <select id="id_madre" name="id_madre" class="selectpicker form-control" data-live-search="true">';
                                       $madre = new inscripcion();
                                      $categoria = $madre->cargarMadre();
                                        foreach ($categoria as $raw) {
                                        if ($row["id_madre"]==$raw["id_madre"]) {
                                                 echo '
                                                          <option selected value="'.$raw["id_madre"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }else{

                                                     echo '
                                                          <option value="'.$raw["id_madre"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }        
                                                                      }
                                 echo'        
                                 </select>
                               </div>';
                                 echo '<div class="form-group">
                                      <label for="categoria">Responsable</label>
                                        <select id="id_responsable" name="id_responsable" class="selectpicker form-control" data-live-search="true">';
                                       $responsable = new inscripcion();
                                      $categoria = $responsable->cargarResponsable();
                                        foreach ($categoria as $raw) {
                                        if ($row["id_responsable"]==$raw["id_responsable"]) {
                                                 echo '
                                                          <option selected value="'.$raw["id_responsable"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }else{

                                                     echo '
                                                          <option value="'.$raw["id_responsable"].'" data-tokens="'.$row["nombre"].'">'.$raw["nombre"].'</option>
                                                          ';
                                                }        
                                                                      }
                                 echo'        
                                 </select>
                               </div>';

                                                        }


                        ?>

            
                  
                
              </div>
              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../listas/lista_inscripcion.php'" name="cancel" value="Cancelar" >
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

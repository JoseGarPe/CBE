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
  <!--DATA LIVE SEARCH -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/css/bootstrap-select.css" />

    
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
    require_once "../menu_profe.php";  
     ?>
        
    </section>
  </aside>




  <!-- Contenedor-->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
        Areas mantenimiento
        <small>Agregar Observacion</small>
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

            <form role="form" action="../scripts/registrar_observaciones_profesor.php" method="post">
              <div class="box-body">

            <div class="form-group">
                  <label for="nombre">Alumno</label>
                <span class="form-group-btn">
                  <button class="btn btn-success" data-toggle="modal" data-target="#modalForm">Buscar</button>
                </span>
                 
                  <output type="text" class="form-control" required="" id="talumno" name="talumno">
                  </br>
               
           </div>
        
                datos
                <h1 id="alumnos">AAA000</h1>
             <div class="form-group">
            <label>alumnos</label>
            <div class="row-fluid"></div>
            <select name="alumno" id="SAlumno" class="form-control selectpicker" id="alumno" data-live-search="true" data-live-search-style="startsWith">
             <?php 

                            require_once "../clases/alumno.class.php";

                            $madress = new alumno();

                            $madre = $madress->cargarAlumnos();

                            foreach ($madre as $row) {
                              
                              echo'

                              <option value="'.$row["id_alumno"].'">
                                 '.$row["id_alumno"].' 
                                  </option>
                                 
                                  ';

                            }

                            ?>
            </select>
          </div>

            <!--MODAL-->
            <!-- Button to trigger modal -->



<!-- Modal -->
<div class="modal fade" id="modalForm" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">
                    <span aria-hidden="true">×</span>
                    <span class="sr-only">Close</span>
                </button>
                <h4 class="modal-title" id="myModalLabel">Contact Form</h4>
            </div>
            <h1 id="alumnos"></h1>
            
            <!-- Modal Body -->
            <div class="modal-body">
                <p class="statusMsg"></p>
             
                <table id="example1" class="table table-bordered table-striped">
         
                <thead>
                <tr>
                  <th>Codigo</th>
                  <th>Nombre</th>
                  <th>Apellido</th>
                  <th>Seleccionar</th>
                </tr>
                </thead>


                <tbody>
                
                
                <?php 

                            require_once "../clases/alumno.class.php";

                            $madress = new alumno();

                            $madre = $madress->cargarAlumnos();

                            foreach ($madre as $row) {
                              
                              echo '

                              <tr>
                                  <td>'.$row["id_alumno"].'</td>
                                  <input type="hidden" name="alumno" value="'.$row["id_alumno"].'" id="alumno">
                                  <td>'.$row["nombre"].'</td>
                                 
                                   <td>'.$row["id_detalle_grado"].'</td> 
                                   <td>
                                  <button type="button" class="btn btn-primary" id="agregarAl" data-dismiss="modal">+</button>
                                 </td>
                              </tr>

                              ';

                            }

                            ?>

                </tbody>
              </table>
           
                   </div>
            
            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>



            <!-- fin modal-->
             
                        
            <div class="form-group">
                  <label for="nombre">Descripcion</label>
                  <input type="text" class="form-control" required="" id="descripcion" name="descripcion" placeholder="ejemplo@mail.com">
                </div>
            
            </div>

              <div class="box-footer">
                <input type="submit" class="btn btn-primary" name="submit" value="Guardar" >
                <input type="button" class="btn btn-danger" onClick="location.href = '../listas/observacion_profesor.php'" name="cancel" value="Cancelar" >
              </div>
            </form>
</div>
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
<script src="../dist/js/funciones.js"></script>
<script src="../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- (Optional) Latest compiled and minified JavaScript translation files -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.1/js/bootstrap-select.js"></script>

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
<script type="text/javascript">
  $(document).ready(function(){
      $('#agregarAl').click(function(){
      agregarAlumno();
      });
  });
  function agregarAlumno(){
    dato=document.getElementById('alumno').value.split('_');
    id_alumno=dato[0];
    $("#talumno").html("");
    $("#talumno").html(dato);
  }
</script>
</body>
</html>

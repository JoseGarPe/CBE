<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>CEB | Administracion</title>
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

//Funcion para traer a las secciones.

function mostrarInfo(cod){

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari.
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5.
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos").innerHTML=xmlhttp.responseText;
    }else{ 
  document.getElementById("datos").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","../scripts/secciones_administrador.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cod_banda="+cod);

}


//Funcion para traer a las materias de los profesores.

function mostrarList(cob){

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari.
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5.
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos2").innerHTML=xmlhttp.responseText;
    }else{ 
  document.getElementById("datos2").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","../scripts/materia_administrador.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cob_banda="+cob);

}

//Genera la lista de alulmnos.

function mostList(cos){

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }

xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("datos3").innerHTML=xmlhttp.responseText;
    }else{ 
  document.getElementById("datos3").innerHTML='Cargando...';
    }
  }
xmlhttp.open("POST","../scripts/hen2.php",true);
xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
xmlhttp.send("cob_banda="+cos);

}

//Funcion para ver las observaciones de los alumnos.

function mostrar_ob(mostrar)
	{
				var parametros = {
                "cod_band" : mostrar
        };

			 	var url = "../scripts/Observaciones_profesor.php"; // El script a dónde se realizará la petición.
			    $.ajax({
			           type: "POST",
			           url: url,
			           data: parametros, // Adjuntar los campos del formulario enviado.
			           success: function(data)
			           {
			               $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
			               $('#myModal').modal('show');
			           }
			         });
	}

//Funcion para agregar las observaciones de los alumnos.

function agregar_ob(agregar)
	{
        var parametros = {
                "cod_band" : agregar
        };

        var url = "../scripts/observaciones_profesor2.php"; // El script a dónde se realizará la petición.
          $.ajax({
                 type: "POST",
                 url: url,
                 data: parametros, // Adjuntar los campos del formulario enviado.
                 success: function(data)
                 {
                     $("#respuesta").html(data); // Mostrar la respuestas del script PHP.
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
      <span class="logo-mini"><b>C</b>EB</span>
      <!-- logo regular s -->
      <span class="logo-lg"><b>C</b>EB</span>
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
              <img src="../dist/img/avatar1.png" class="user-image" alt="User Image">
              <span class="hidden-xs">****</span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="../dist/img/avatar1.png" class="img-circle" alt="User Image">

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
        Observaciones de alumnos
        <small>Lista de observaciones</small>
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
          
            
             <div class="form-group">
                  
                    <br>
                    <select onchange="mostrarInfo(this.value)" id="estado" name="estado" class="form-control select2" style="width: 25%;">

                          <option value="">Selecciona un grado</option>

                        <?php 
                        


                            require_once "../clases/grados.class.php";

                            $misGrados = new grado();

                            $grado = $misGrados->cargarGrado();

                            foreach ($grado as $row) {
                              
                              echo '

                              <option value="'.$row['id_grado'].'">'.$row['nombre'].'</option>


                              ';

                            }


                            ?>


                  </select>
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

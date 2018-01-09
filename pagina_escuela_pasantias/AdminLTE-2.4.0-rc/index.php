<!DOCTYPE html>
<html>


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Nombre de escuela | Inicio</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>



<body class="hold-transition skin-blue sidebar-mini" style="background: skyblue;">

<section style="margin-left: 30%; margin-right: 30%; margin-top: 10%">

<div class="box box-info">
            <div class="box-header with-border">
              <br>
              <center><h3 class="box-title">Inicio de sesion</h3></center>
            </div>
            <!-- /.box-header -->
            <!-- form start -->


             <?php 

            if (isset($_GET['error'])) {
                

                if ($_GET['error']=='abcFTY778mclhgGHLCVbyyt8976poooYusnbsjaja8654OUYGVBM987654kjhgvSJHGFkjhgfdhjiuytredfghjvcx23456789okKIUYTRDFGH098765reS') {
                    

                    echo '

                   <div class="callout callout-danger">
              
                ERROR: Usario o contraseña incorrectos.
             </div>

                    ';

                }

            }


             ?>


            <form class="form-horizontal" action="scripts/login.php" method="post">
              <div class="box-body">
                <div class="form-group">
                  <label for="usuario" class="col-sm-2 control-label">Usuario</label>

                  <div class="col-sm-10">
                    <input type="usuario" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
                  </div>
                </div>
                <div class="form-group">
                  <label for="password" class="col-sm-2 control-label">Contraseña</label>

                  <div class="col-sm-10">
                    <input type="password" name="password" class="form-control" id="password" placeholder="Contraseña">
                  </div>
                </div>

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
                
                <input type="button" class="btn btn-danger pull-right" style="margin:0.5%;" onClick="location.href = '../Company/index.php'" name="cancel" value="Cancelar" >
                <input type="submit" class="btn btn-info pull-right" style="margin:0.5%;" name="submit" value="Ingresar">
              </div>
              <!-- /.box-footer -->
            </form>
          </div>
   
</section>




<!-- jQuery 3 -->
<script src="bower_components/jquery/dist/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="bower_components/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Company-HTML Bootstrap theme</title>

  <!-- Bootstrap -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/animate.css">
  <link href="css/prettyPhoto.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
</head>

<body>
 <header>
   
    <?php 
    require_once "menu.php";  
     ?>

  </header>

  <div id="breadcrumb">
    <div class="container">
      <div class="breadcrumb">
        <li><a href="index.html">Inicio</a></li>
        <li>Avisos</li>
      </div>
    </div>
  </div>

  <?php 

                            require_once "clases/avisos.class.php";

                            $misAviso = new aviso();

                            $aviso = $misAviso->cargarAvisos();

                            foreach ($aviso as $row) {
                              
                              echo '


                              <div class="services">
                                <div class="container">
                                  <div class="col-md-8">
                                    <div class="media">
                                      <ul>
                                        <li>
                                          <div class="media-left">
                                            <i class="fa fa-pencil"></i>
                                          </div>
                                          <div class="media-body">
                                            <h4 class="media-heading">'.$row['nombre'].'</h4>
                                            <p>Fecha: '.$row['fecha'].'</p>
                                            <p>'.$row['descripcion'].'</p>
                                          </div>
                                        </li>
                                        
                                      </ul>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              ';

                            }

                            ?>

  


  <footer>
    <?php 
    require_once "pie.php";  
     ?>
  </footer>

  <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
  <script src="js/jquery-2.1.1.min.js"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.prettyPhoto.js"></script>
  <script src="js/jquery.isotope.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/functions.js"></script>

</body>

</html>

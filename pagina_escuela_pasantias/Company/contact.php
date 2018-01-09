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
        <li>Contactos</li>
      </div>
    </div>
  </div>

  <div class="map">
    <div id="google-map" data-latitude="40.713732" data-longitude="-74.0092704"></div>
  </div>

  <section id="contact-page">
    <div class="aboutus">
    <div class="container">
      <h3>Nuestra escuela...</h3>
      <hr><center>
      <div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
      </div></center>
    </div>
  </div>
  </section>
  <!--/#contact-page-->

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
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY">
  </script>
  <script src="js/functions.js"></script>
  <script src="contactform/contactform.js"></script>

</body>

</html>

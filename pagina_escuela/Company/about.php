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
        <li><a href="index.php">Inicio</a></li>
        <li>Nuestra historia</li>
      </div>
    </div>
  </div>

  <div class="aboutus">
    <div class="container">
      <h3>Nuestra escuela...</h3>
      <hr>
      <div class="col-md-7 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
        <img src="images/7.jpg" class="img-responsive"><br>
        <p>Nam tempor velit sed turpis imperdiet vestibulum. In mattis leo ut sapien euismod id feugiat mauris euismod. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Phasellus id nulla risus, vel tincidunt
          turpis. Aliquam a nulla mi, placerat blandit eros. </p>
        <p>In neque lectus, lobortis a varius a, hendrerit eget dolor. Fusce scelerisque, sem ut viverra sollicitudin, est turpis blandit lacus, in pretium lectus sapien at est. Integer pretium ipsum sit amet dui feugiat vitae dapibus odio eleifend.</p>
      </div>
      <div class="col-md-5 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
        <div class="skill">

          <div>
            <h3>Mision</h3>
            <div >
             <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

          <div>
            <h3>Vision</h3>
            <div>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>

  <div class="our-team">
    <div class="container">
      <h3>Representantes</h3>
      <div class="text-center">
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
          <img src="images/services/1.jpg" alt="">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
          <img src="images/services/2.jpg" alt="">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
        <div class="col-md-4 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="900ms">
          <img src="images/services/3.jpg" alt="">
          <h4>John Doe</h4>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod tempor</p>
        </div>
      </div>
    </div>
  </div>

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

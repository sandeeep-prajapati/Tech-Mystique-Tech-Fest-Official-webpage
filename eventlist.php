<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">


    <!-- Css Styles -->
    <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="home/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <?php
    require 'usercomponents\mainnav.php';
    ?>
    <!-- Header End -->
  <?php
  require 'usercomponents/navbar.php';
  ?>
  <p class="text-danger text-center">date and time are not fixed yet, all there date and time are dummy yet</p>
  <h1 class="text-center text-success" id="technical">All event list releted to technical</h1>

    <div class="row">
      <?php
      require './admin/connect.php';
      $query1 = "select * from main_events where type = 'technical'";
      $exe1 = mysqli_query($dbc, $query1);
      while ($row1 = mysqli_fetch_array($exe1)) {
        $p_id = $row1['eid'];
        $name = $row1['name'];
        $desc = $row1['description'];
        $type = $row1['type'];
        $date = $row1['date'];
        $time = $row1['time'];
      ?>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-success"><?php echo $name ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
            <p class="card-text"><?php echo $desc ?></p>
          </div>
        </div>
      </div>
      <?php

      }
      ?>
    </div>
  <h1 class="text-center text-primary" id="cultural">All event list releted to cultural</h1>

  
  <div class="row">
    <?php
    require './admin/connect.php';
    $query1 = "select * from main_events where type = 'cultural'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      $name = $row1['name'];
      $desc = $row1['description'];
      $type = $row1['type'];
      $date = $row1['date'];
      $time = $row1['time'];
    ?>
    <div class="col-sm-6 col-md-3">
      <div class="card">
        <div class="card-body">
          <h5 class="card-title text-primary"><?php echo $name ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
          <p class="card-text"><?php echo $desc ?></p>
        </div>
      </div>
    </div>
    <?php

    }
    ?>
  </div>

  <h1 class="text-center text-warning" id="sport">All event list releted to Sport</h1>
  <div class="row">
  <?php
    require './admin/connect.php';
    $query1 = "select * from main_events where type = 'Sport'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      $name = $row1['name'];
      $desc = $row1['description'];
      $type = $row1['type'];
      $date = $row1['date'];
      $time = $row1['time'];
    ?>
    <div class="col-md-3 col-sm-6">
      <div class="card" >
        <div class="card-body">
          <h5 class="card-title text-warning"><?php echo $name ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
          <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
          <p class="card-text"><?php echo $desc ?></p>
        </div>
      </div>
    </div>
    <?php

    }
    ?>
  </div>
  
  <?php
    require 'usercomponents\mainFooter.php';

    ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="home/js/jquery-3.3.1.min.js"></script>
  <script src="home/js/bootstrap.min.js"></script>
  <script src="home/js/jquery.magnific-popup.min.js"></script>
  <script src="home/js/jquery.countdown.min.js"></script>
  <script src="home/js/jquery.slicknav.js"></script>
  <script src="home/js/owl.carousel.min.js"></script>
  <script src="home/js/main.js"></script>
</body>

</html>
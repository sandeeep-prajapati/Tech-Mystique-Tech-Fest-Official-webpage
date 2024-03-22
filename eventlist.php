<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="PARAMPARA @ITM">
        <meta name="keywords" content="PARAMPARA, ITM, ITMPARAMPARA, PARAMPARA2024, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parampara</title>
    <style>
            @import url('https://fonts.googleapis.com/css2?family=Madimi+One&display=swap');

            .madimi-one-regular {
                font-family: "Madimi One", sans-serif;
                font-weight: 400;
                font-style: normal;
            }
        </style>
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
    require 'usercomponents/mainnav.php';
    ?>
    <!-- Header End -->
  <?php
  require 'usercomponents/navbar.php';
  ?>
            <!-- <button class="btn m-2 bg-success"><a style="text-decoration: none;" class="text-white" href="addevent/addevnt.php?id=<?php echo  $p_id ?>&token=<?php echo $token ?>">add it in your list</a> </button> -->
  
  <h2 class="text-center text-success" id="technical">All Event list related to Technical</h2>
  

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
      $winner = $row1['winner'];
      $runnerup = $row1['runnerup'];
      $registrationfee = $row1['registrationfee'];

    ?>
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="border p-3 border-success">
              <h5 class="card-title text-success"><?php echo $name ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Winner prize : <?php echo $winner ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Runner Up : <?php echo $runnerup ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">External Participent fee : <?php echo $registrationfee ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Event Date : <?php echo $date ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Event Time : <?php echo $time ?></h6>
            </div>
            <p class="card-text p-2"><?php echo $desc ?></p>
            <button class="btn m-2 bg-info"><a style="text-decoration: none;" class="text-white" href="https://t.me/ItmParamparaTechchnical">Join Technical Group</a> </button>
          </div>
        </div>
      </div>
    <?php

    }
    ?>
  </div>
  <h2 class="text-center text-primary" id="cultural">All Event list related to Cultural</h2>

  
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
      $winner = $row1['winner'];
      $runnerup = $row1['runnerup'];
      $registrationfee = $row1['registrationfee'];

    ?>
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="border p-3 border-primary">
              <h5 class="card-title text-primary"><?php echo $name ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Winner prize : <?php echo $winner ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Runner Up : <?php echo $runnerup ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">External Participent fee : <?php echo $registrationfee ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Event Date : <?php echo $date ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Event Time : <?php echo $time ?></h6>
            </div>
            <p class="card-text p-2"><?php echo $desc ?></p>
            <button class="btn m-2 bg-info"><a style="text-decoration: none;" class="text-white" href="https://t.me/ItmParamparaCultural">Join Cultural Group</a> </button>
          </div>
        </div>
      </div>
    <?php

    }
    ?>
  </div>

  <h2 class="text-center text-warning" id="sport">All Event list releted to Sport</h2>
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
      $winner = $row1['winner'];
      $runnerup = $row1['runnerup'];
      $registrationfee = $row1['registrationfee'];

    ?>
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <div class="card-body">
            <div class="border p-3 border-warning">
              <h5 class="card-title text-warning"><?php echo $name ?></h5>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Winner prize : <?php echo $winner ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Runner Up : <?php echo $runnerup ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">External Participent fee : <?php echo $registrationfee ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Event Date : <?php echo $date ?></h6>
              <h6 class="card-subtitle mb-2 text-body-secondary">Event Time : <?php echo $time ?></h6>
            </div>
            <p class="card-text p-2"><?php echo $desc ?></p>
            <button class="btn m-2 bg-info"><a style="text-decoration: none;" class="text-white" href="https://t.me/ItmParamparaSports">Join Sports Group</a> </button>
          </div>
        </div>
      </div>
    <?php

    }
    ?>
  </div>
  
  <?php
    require 'usercomponents/mainFooter.php';

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

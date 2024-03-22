<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parampara | all events</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="home/css/bootstrap.min.css" type="text/css">
  <link rel="stylesheet" href="home/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="home/css/elegant-icons.css" type="text/css">
  <link rel="stylesheet" href="home/css/owl.carousel.min.css" type="text/css">
  <link rel="stylesheet" href="home/css/magnific-popup.css" type="text/css">
  <link rel="stylesheet" href="home/css/slicknav.min.css" type="text/css">
  <link rel="stylesheet" href="home/css/style.css" type="text/css">
</head>

<body>
  <?php
  require 'usercomponents/mainnav.php';
  require 'usercomponents/navbar.php';
  ?>
  <h1 class="text-center text-success">List of all Teacher who lead events</h1>
  
  <div class="row">
    <?php
      require './admin/connect.php';
      $query1 = "select * from participants where position = 'teacher'";
      $exe1 = mysqli_query($dbc, $query1);
      while ($row1 = mysqli_fetch_array($exe1)) {
        $p_id = $row1['eid'];
        $name = $row1['name'];
        $position = $row1['position'];
        $eventname = $row1['eventname'];
      ?>
      <div class="col-md-3 col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-success"><?php echo $name ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $position ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $eventname ?></h6>
            
          </div>
        </div>
      </div>
      <?php

      }
      ?>
    </div>
  </div>

  <?php
  include 'usercomponents/mainFooter.php'
  ?>
  <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/jquery.countdown.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
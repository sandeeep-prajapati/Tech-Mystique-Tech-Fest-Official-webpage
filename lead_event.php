<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Parampara | all events</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
  <?php
  require 'usercomponents/navbar.php';
  ?>
  <div class="row p-2">
    <h2 class="text-success text center text-center">All event head Utkarsh Dubey contact info : +919580990883</h2>
  </div>
  
  <div class="row">
    <h2 class="text-center text-success" id = "technical">List of all Leaders who leads technical events</h2>
    <?php
    require './admin/connect.php';
    $query1 = "select * from participants where position = 'head' and type = 'technical'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      $name = $row1['name'];
      $type = $row1['type'];
      $position = $row1['position'];
      $eventname = $row1['eventname'];
      ?>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-success"><?php echo $name ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $type ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $position ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $eventname ?></h6>

          </div>
        </div>
      </div>
    <?php

    }
    ?>



<h2 class="text-center text-primary" id = "cultural">List of all Leaders who leads cultural events</h2>
    <?php
    require './admin/connect.php';
    $query1 = "select * from participants where position = 'head' and type = 'cultural'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      $name = $row1['name'];
      $type = $row1['type'];
      $position = $row1['position'];
      $eventname = $row1['eventname'];
    ?>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-primary"><?php echo $name ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $type ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $position ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $eventname ?></h6>

          </div>
        </div>
      </div>
    <?php

    }
    ?>

<h2 class="text-center text-warning" id="sport">List of all Leaders who leads Sport events</h2>
    <?php
    require './admin/connect.php';
    $query1 = "select * from participants where position = 'head' and type = 'Sport'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      $name = $row1['name'];
      $type = $row1['type'];
      $position = $row1['position'];
      $eventname = $row1['eventname'];
    ?>
      <div class="col-sm-6 col-md-3">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title text-warning"><?php echo $name ?></h5>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $type ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $position ?></h6>
            <h6 class="card-subtitle mb-2 text-body-secondary pt-2"><?php echo $eventname ?></h6>

          </div>
        </div>
      </div>
    <?php

    }
    ?>
  </div>

  <?php
  include 'usercomponents/footer.php'
  ?>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
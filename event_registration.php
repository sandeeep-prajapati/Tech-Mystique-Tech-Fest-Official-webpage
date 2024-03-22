<?php
$token = $_GET['token'];
// echo "<script> alert('$token')</script>";
$data=array();
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>join events</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body class="bg-light">
  <div class="conatiner-fluid">
    <div class="row">
      <h1 class="text-center text-dark">Dear external participants you can register here, all the charges for participation will be taken in college on event date</h1>
    </div>
    <div class="row text-danger">
      <h1 class="text-center">All events you have registered yet</h1>
    </div>
    <div class="row">
      <?php
      require 'admin/connect.php';

      // Check if token is set
      if (isset($_GET['token'])) {
        // Prevent SQL injection using prepared statement
        $query1 = "SELECT main_events.*, tokenregistration.*
           FROM main_events
           JOIN tokenregistration ON main_events.eid = tokenregistration.eid
           WHERE tokenregistration.token = '$token'";
        $result1 = mysqli_query($dbc, $query1);

        // Check if query was successful
        if ($result1) {
          // Check if any rows are returned
          if (mysqli_num_rows($result1) > 0) {
            // Loop through each row
            while ($row1 = mysqli_fetch_array($result1)) {
              $p_id = $row1['eid'];
              $name = $row1['name'];
              $desc = $row1['description'];
              $type = $row1['type'];
              $date = $row1['date'];
              $time = $row1['time'];
              $winner = $row1['winner'];
              $runnerup = $row1['runnerup'];
              $registrationfee = $row1['registrationfee'];
              array_push($data,$p_id);
      ?>
              <div class="col-md-3 col-sm-6">
                <div class="card">
                  <div class="card-body">
                    <div class="border p-1 border-danger">
                      <div class="border p-1 border-danger">
                        <h5 class="card-title text-danger"><?php echo $name ?></h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $type ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $date ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $time ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Winner prize : <?php echo $winner ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">Runner Up : <?php echo $runnerup ?></h6>
                        <h6 class="card-subtitle mb-2 text-body-secondary">External Participant fee :<?php echo $registrationfee ?></h6>
                      </div>
                      <p class="card-text"><?php echo $desc ?></p>
                      <button class="btn bg-danger"><a style="text-decoration: none;" class="text-white" href="addevent/delete.php?id=<?php echo  $p_id ?>&token=<?php echo $token ?>">Delete from your list</a> </button>
                    </div>
                  </div>
                </div>
              </div>
      <?php
            }
          } else {
            echo "No events found for the given token.";
          }
        } else {
          echo "Error: " . mysqli_error($dbc);
        }
      } else {
        echo "Token not provided.";
      }
      // echo implode(', ', $data);
      
      ?>
    </div>
  </div>

  <div class="text-center">
    <div class="">

      <button class="btn text-white bg-success"><a herf="./joiningEvent/addtechnical.php">Join technical team </a></button>

      <button herf="joiningEvent/addCultural.php" class="btn text-white bg-info">Join cultural team</button>

      <button herf="joiningEvent/addSport.php" class="btn text-white bg-warning">Join sport team</button>
    </div>
  </div>
  </div>
  <h1 class="text-center text-success" id="technical">All event list releted to technical</h1>

  <div class="row">
    <?php
    require './admin/connect.php';
    $query1 = "select * from main_events where type = 'technical'";
    $exe1 = mysqli_query($dbc, $query1);
    while ($row1 = mysqli_fetch_array($exe1)) {
      $p_id = $row1['eid'];
      if (in_array($p_id, $data)) {
        continue;
      }
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
            <div class="border p-1 border-success">
              <div class="border p-1 border-success">
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
              <button class="btn m-2 bg-success"><a style="text-decoration: none;" class="text-white" href="addevent/addevnt.php?id=<?php echo  $p_id ?>&token=<?php echo $token ?>">add it in your list</a> </button>
              <button class="btn m-2 bg-info"><a style="text-decoration: none;" class="text-white" href="https://t.me/ItmParamparaTechchnical">Join Technical Group</a> </button>
            </div>
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
      if (in_array($p_id, $data)) {
        continue;
      }
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
            <div class="border p-1 border-primary">
              <div class="border p-1 border-primary">
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
              <button class="btn m-2 bg-primary"><a style="text-decoration: none;" class="text-white" href="addevent/addevnt.php?id=<?php echo  $p_id ?>&token=<?php echo $token ?>">add it in your list</a> </button>
              <button class="btn m-2 bg-info"><a style="text-decoration: none;" class="text-white" href="https://t.me/ItmParamparaCultural">Join Cultural Group</a> </button>
            </div>
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
      if (in_array($p_id, $data)) {
        continue;
      }
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
            <div class="border p-1 border-warning">
            <div class="border p-1 border-warning">
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
            <button class="btn m-2 bg-warning"><a style="text-decoration: none;" class="text-white" href="addevent/addevnt.php?id=<?php echo  $p_id ?>&token=<?php echo $token ?>">add it in your list</a> </button>
            <button class="btn m-2 bg-info"><a style="text-decoration: none;" class="text-white" href="https://t.me/ItmParamparaSports">Join Sports Group</a> </button>
          </div>
        </div>
        </div>
      </div>
    <?php

    }
    ?>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
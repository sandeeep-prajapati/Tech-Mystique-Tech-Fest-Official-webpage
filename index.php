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
  <h1 class="text-center">All event list releted to technical</h1>
  <table class="table container table-striped">
    <thead>
      <tr>
        <th scope="col">Event ID</th>
        <th scope="col">Event Name</th>
        <th scope="col">Description</th>
        <th scope="col">Type</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>
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
        echo "
                                                <tr>
                                                    <td>" . $p_id . "</td>
                                                    <td>" . $name . "</td>
                                                    <td>" . $desc . "</td>
                                                    <td>" . $type . "</td>
                                                    <td>" . $date . "</td>
                                                    <td>" . $time . "</td>
                                                    

                            </tr>";
      }

      ?>
    </tbody>
  </table>

  <h1 class="text-center">All event list releted to cultural</h1>
  <table class="table container table-striped">
    <thead>
      <tr>
        <th scope="col">Event ID</th>
        <th scope="col">Event Name</th>
        <th scope="col">Description</th>
        <th scope="col">Type</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>
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
        echo "
                                                <tr>
                                                    <td>" . $p_id . "</td>
                                                    <td>" . $name . "</td>
                                                    <td>" . $desc . "</td>
                                                    <td>" . $type . "</td>
                                                    <td>" . $date . "</td>
                                                    <td>" . $time . "</td>
                                                    

                            </tr>";
      }

      ?>
    </tbody>
  </table>
  <h1 class="text-center">All event list releted to Sport</h1>
  <table class="table container table-striped">
    <thead>
      <tr>
        <th scope="col">Event ID</th>
        <th scope="col">Event Name</th>
        <th scope="col">Description</th>
        <th scope="col">Type</th>
        <th scope="col">Date</th>
        <th scope="col">Time</th>
      </tr>
    </thead>
    <tbody>
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
        echo "
                                                <tr>
                                                    <td>" . $p_id . "</td>
                                                    <td>" . $name . "</td>
                                                    <td>" . $desc . "</td>
                                                    <td>" . $type . "</td>
                                                    <td>" . $date . "</td>
                                                    <td>" . $time . "</td>
                                                    

                            </tr>";
      }

      ?>
    </tbody>
  </table>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>
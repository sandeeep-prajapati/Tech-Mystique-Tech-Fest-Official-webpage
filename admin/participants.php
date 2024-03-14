<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location: index.php');
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <link rel="shortcut icon" href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMadras_Institute_of_Technology&psig=AOvVaw24Hw_au4PBbWiMiHhdyvE4&ust=1666952722381000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCKCDkfuYgPsCFQAAAAAdAAAAABAE" type="image/x-icon">

        <title>Parampar | View participants</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>

        <?php
        include_once('../templates/sidebar.php');
        
        ?>

        <div class="container" style="padding-top: 150px; padding-left: 50px">
            <div class="row">
                <div class="col-lg-12">
                    
                    <?php
                    require 'connect.php';

                    if (count($_POST) > 0) {
                        $event = $_POST['event'];
                        $query1 = "select * from participants p 
                            JOIN users u
                            ON u.uid = p.uid
                            WHERE p.eid = '$event'";
                        $exe1 = mysqli_query($dbc, $query1);
                        echo "Event Name :  " . eventName($event) . "<br> Event ID : " . $event;
                        echo "\n";
                    }
                    
                    ?>
                    
                    <br>
                    <div>
                    </div>
                    <div class="row" style="margin-top: 75px; margin-bottom: 20px; margin-left: 20px;">
                        <a href="../components/heads/add.php"><button type="button" class="btn btn-primary ml-4 pl-2">Add
                                New</button></a>
                    </div>
                    <br>
                    <h2 class ="text-center">All member related to events</h2>
                    <a href="./participants.php" style="text-decoration: none; padding:10px">All members</a>
                    <a href="./cultural_events.php" style="text-decoration: none; padding:10px">All cultural events member</a>
                    <a href="./sport_participants.php" style="text-decoration: none; padding:10px">All sport events member</a>
                    <a href="./technical_participants.php" style="text-decoration: none; padding:10px">All technical event member</a>
                    
                    <table class="table container">
                        <thead>
                            <tr>
                                <th scope="col">Members ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Role</th>
                                <th scope="col">Department</th>
                                <th scope="col">Event Name </th>
                                <th scope="col">action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // $query1 = "select * from participants where type = 'Technical'";
                            $query1 = "select * from participants";
                            
                            $exe1 = mysqli_query($dbc, $query1);
                            while ($row1 = mysqli_fetch_array($exe1)) {
                                $p_id = $row1['eid'];
                                $name = $row1['name'];
                                $type = $row1['type'];
                                $position = $row1['position'];
                                $eventname = $row1['eventname'];
                                echo "
                                <tr>
                                    <td>" . $p_id . "</td>
                                    <td>" . $name . "</td>
                                    <td>" . $type . "</td>
                                    <td>" . $position . "</td>
                                    <td>" . $eventname . "</td>
                                    <td>
						            <a href='../components/heads/update.php?id=".$p_id."'>
                                    <button type='button' class='btn btn-info'>Edit</button>
                                    </a>

                                    <a href='../components/heads/delete.php?id=".$p_id."'>
                                    <button type='button' class='btn btn-danger btn-xs'>Delete</button> 
                                    </a>
                                    </td>

                                </tr>";
                            }

                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        </section>
        </body>

        <?php
        include_once('../templates/footer.php');
        ?>

    </html>

<?php
}
?>
<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header('location: ../admin/index.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="shortcut icon"
        href="https://www.google.com/url?sa=i&url=https%3A%2F%2Fen.wikipedia.org%2Fwiki%2FMadras_Institute_of_Technology&psig=AOvVaw24Hw_au4PBbWiMiHhdyvE4&ust=1666952722381000&source=images&cd=vfe&ved=0CA0QjRxqFwoTCKCDkfuYgPsCFQAAAAAdAAAAABAE"
        type="image/x-icon">

    <title>Parampara | View participants</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
        </script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo $server; ?>css/style.css">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
        </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
        </script>

    <?php
   
    include_once('../templates/sidebar.php');
    require 'connect.php'
    ?>
    <br><br>
    <table class="table container" style="margin-top: 75px; margin-left: 20px; padding-right: 20px">
        <div class="row" style="margin-top: 75px; margin-bottom: 20px; margin-left: 20px;">
            
        </div>
        <thead>
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Contact No</th>
                <th scope="col">Email</th>
                <th scope="col">Adhar</th>
                <th scope="col">Date Of Birth</th>
                <th scope="col">College Name</th>
                <th scope="col">Events</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $query1 = "SELECT name, contact, email, adharcard, dob, collegeName, token from externalparticipents  where 1";
            $exe1 = mysqli_query($dbc, $query1);
            while ($row1 = mysqli_fetch_array($exe1)) {
                ?>
                <tr>
                    <td><?php echo $row1['name']; ?></td>
                    <td><?php echo $row1['contact']; ?></td>
                    <td><?php echo $row1['email']; ?></td>
                    <td><?php echo $row1['adharcard']; ?></td>
                    <td><?php echo $row1['dob']; ?></td>
                    <td><?php echo $row1['collegeName']; ?></td>
                    <td>
                <?php
                $token= $row1['token'];
                $query2 = "select eid from tokenregistration WHERE token='".$token."';";
                $exe2 = mysqli_query($dbc, $query2);
                while ($row2 = mysqli_fetch_array($exe2)) {
                    $eid=$row2[0];
                    $query3 = "select name, registrationfee from main_events where eid=".$eid.";";
                    $exe3 = mysqli_query($dbc, $query3);
                    while ($row3 = mysqli_fetch_array($exe3)) {
                        echo $row3[0]."-".$row3[1]."/- ";
                    }
                    echo "</br>";
                }
                ?>
                    </td>
                </tr>
                <?php
            }

            ?>
        </tbody>
    </table>
    </div>
    </div>
    </div>
    </section>
    <?php
    include_once('../templates/footer.php');
    ?>
    </body>
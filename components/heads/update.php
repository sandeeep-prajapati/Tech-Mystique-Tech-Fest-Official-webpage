<?php
require '../../admin/connect.php';
session_start();

if (!isset($_SESSION['admin'])) {
    echo "Unauthorized Access";
    return;
}
$id = $_GET['id'];

$SelSql = "SELECT * FROM `participants` WHERE eid=$id";
$res = mysqli_query($dbc, $SelSql);
$r = mysqli_fetch_assoc($res);


if (!empty($_POST)) {
    $name = $_POST['name'];
    $type = $_POST['type'];
    $position = $_POST['position'];
    $eventname = $_POST['eventname'];
    $fb = $_POST['fb'];
    $insta = $_POST['insta'];
    $twitter = $_POST['twitter'];
    $linkedin = $_POST['linkedin'];
    $edu = $_POST['edu'];

    // Prepare the SQL statement
    $query = "UPDATE `participants` SET `name`=?, `type`=?, `position`=?, `eventname`=?, `fb`=?, `insta`=?, `twitter`=?, `linkedin`=?, `edu`=? WHERE `participants`.`eid`=?";
            
    // Initialize a prepared statement
    $stmt = $dbc->prepare($query);

    // Bind parameters
    $stmt->bind_param("sssssssssi", $name, $type, $position, $eventname, $fb, $insta, $twitter, $linkedin, $edu, $id);

    // Execute the statement
    $res = $stmt->execute();
            
    if ($res) {
        header('location: ../../admin/participants.php');
        exit(); // Terminates the script immediately after redirection
    } else {
        $fmsg = "Failed to update data.";
        echo $fmsg;
    }
} else {
    echo "No data received.";
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <title>Parampara | Add Events</title>
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

    <link rel="stylesheet" href="home.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../../admin/home.css">
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class='bx bxl-c-plus-plus'></i>
            <span class="logo_name">Parampara</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="home.php" class="active">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="user.php">
                    <i class='bx bx-box'></i>
                    <span class="links_name">Users</span>
                </a>
            </li>
            <li>
                <a href="events.php">
                    <i class='bx bx-list-ul'></i>
                    <span class="links_name">Event list</span>
                </a>
            </li>
            <li>
                <a href="participants.php">
                    <i class='bx bx-pie-chart-alt-2'></i>
                    <span class="links_name">Participants</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-heart'></i>
                    <span class="links_name">Feedback</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class='bx bx-cog'></i>
                    <span class="links_name">Queries</span>
                </a>
            </li>
            <li class="log_out">
                <a href="logout.php">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name">Log out</span>
                </a>
            </li>
        </ul>
    </div>

    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class='bx bx-menu sidebarBtn'></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
                <input type="text" placeholder="Search...">
                <i class='bx bx-search'></i>
            </div>
            <div class="profile-details">
                <img src="https://t4.ftcdn.net/jpg/00/97/00/09/360_F_97000908_wwH2goIihwrMoeV9QF3BW6HtpsVFaNVM.jpg"
                    alt="profile">
                <span class="admin_name">
                    <?php echo $_SESSION["admin"] ?>
                </span>
                <i class='bx bx-chevron-down'></i>
            </div>
        </nav>

        <div class="container">
            <?php if (isset($fmsg)) { ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo $fmsg; ?>
                </div>
            <?php } ?>

            <h2 style="padding-top: 120px; margin-left: 20px">Update Member of Participants</h2>


            <!-- <form method="post" style="margin-left: 20px" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="" required />
                </div>
                <div class="form-group">
                    <label>Category: </label>
                    <select name="type" class="form-control">
                        <option value="" class="form-control">Add type</option>
                        <option value="cultural">Cultural</option>
                        <option value="Sport">Sport</option>
                        <option value="Technical">Technical</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Event Name</label>
                    <input type="text" class="form-control" name="eventname" value="" required />
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select name="position" class="form-control">
                    <option value="">Add type</option>
                        <option value="leader">Leader</option>
                        <option value="event-head">head(for a event)</option>
                        <option value="event-co-head">co-head(for a event)</option>
                        <option value="Co-ordinator">Co-ordinator</option>
                        <option value="Core Coordinator">Core Coordinator</option>
                    </select>
                </div>
                <input type="submit" class="btn btn-primary" value="Add Event" />
            </form> -->
            <form method="post" style="margin-left: 20px">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" value="<?php echo $r['name']; ?>" required />
                </div>
                <div class="form-group">
                    <label>Category: </label>
                    <select name="type" class="form-control">
                        <option value="<?php echo $r['type']; ?>" class="form-control">Add type</option>
                        <option value="cultural">Cultural</option>
                        <option value="Sport">Sport</option>
                        <option value="Technical">Technical</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Event Name</label>
                    <input type="text" class="form-control" name="eventname" value="<?php echo $r['eventname']; ?>" required />
                </div>
                <div class="form-group">
                    <label>Position</label>
                    <select name="position" class="form-control">
                        <option value="<?php echo $r['eventname']; ?>" selected>Add type</option>
                        <option value="leader">Leader</option>
                        <option value="event-head">head(for a event)</option>
                        <option value="event-co-head">co-head(for a event)</option>
                        <option value="Co-ordinator">Co-ordinator</option>
                        <option value="Core Coordinator">Core Coordinator</option>
                    </select>
                    <label for="fb">Enter your facebook profile link</label>
                    <input type="text" value="<?php echo $r['fb']; ?>" class="form-control" name="fb">
                    <label for="profile img">Enter your Instagram profile link</label>
                    <input type="text" class="form-control" value="<?php echo $r['insta']; ?>" name="insta">
                    <label for="twitter link">Enter your Twitter profile link</label>
                    <input type="text" class="form-control" value="<?php echo $r['twitter']; ?>" name="twitter">
                    <label for="linkedin">Enter your Linkedin profile link</label>
                    <input type="text" class="form-control" value="<?php echo $r['linkedin']; ?>" name="linkedin">
                    <label for="linkedin">Enter Educion level</label>
                    <input type="text" class="form-control" value="<?php echo $r['edu']; ?>" name="edu">
                </div>
                <!-- <div class="form-group">
                    <label>Image </label>
                    <input type="url" class="form-control" name="img" value="" />
                </div> -->
                <input type="submit" class="btn btn-primary" value="Update Event" />
            </form>
        </div>

        <?php require_once('../../templates/footer.php') ?>
</body>

</html>
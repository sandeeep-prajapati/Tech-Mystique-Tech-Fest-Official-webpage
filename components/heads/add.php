<?php
require '../../admin/connect.php';
session_start();

if (!isset($_SESSION['admin'])) {
    echo "Unauthorized Access";
    return;
}

if (!empty($_POST)) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    $check = getimagesize($_FILES["image"]["tmp_name"]);
    if($check !== false) {
        // Proceed with file upload
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
            // File uploaded successfully, continue with database insertion
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
            $query = "INSERT INTO `participants` (`eid`, `name`, `type`, `position`, `eventname`, `img`, `fb`, `insta`, `twitter`, `linkedin`, `edu`) VALUES (NULL, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
            
            // Initialize a prepared statement
            $stmt = mysqli_prepare($dbc, $query);

            // Bind parameters
            mysqli_stmt_bind_param($stmt, 'ssssssssss', $name, $type, $position, $eventname, $target_file, $fb, $insta, $twitter, $linkedin, $edu);
            
            // Execute the statement
            $res = mysqli_stmt_execute($stmt);
            
            if ($res) {
                header('location: ../../admin/participants.php');
                exit(); // Terminates the script immediately after redirection
            } else {
                $fmsg = "Failed to insert data.";
                echo $fmsg;
            }
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    } else {
        echo "File is not an image.";
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
    <script>
            function go() {
                alert("onchange");
            }
    </script>
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
                    <?php echo $_SESSION["email"] ?>
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

            <h2 style="padding-top: 120px; margin-left: 20px">Assign Team Lead</h2>
            <form method="post" style="margin-left: 20px" enctype="multipart/form-data">
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
                        <option value="" selected>Add type</option>
                        <option value="leader">Leader</option>
                        <option value="event-head">head(for a event)</option>
                        <option value="event-co-head">co-head(for a event)</option>
                        <option value="Co-ordinator">Co-ordinator</option>
                        <option value="Core Coordinator">Core Coordinator</option>
                    </select>
                    <label for="Profile image"> Enter your profile image</label>
                    <input type="file" class="form-control" name ="image">
                    <label for="fb">Enter your facebook profile link</label>
                    <input type="text" class="form-control" name="fb">
                    <label for="profile img">Enter your Instagram profile link</label>
                    <input type="text" class="form-control" name="insta">
                    <label for="twitter link">Enter your Twitter profile link</label>
                    <input type="text" class="form-control" name="twitter">
                    <label for="linkedin">Enter your Linkedin profile link</label>
                    <input type="text" class="form-control" name="linkedin">
                    <label for="linkedin">Enter Educion level</label>
                    <input type="text" class="form-control" name="edu">
                </div>
                <!-- <div class="form-group">
                    <label>Image </label>
                    <input type="url" class="form-control" name="img" value="" />
                </div> -->
                <input type="submit" class="btn btn-primary" value="Add Event" />
            </form>
        </div>

        <?php include_once('../../templates/footer.php') ?>


</body>

</html>
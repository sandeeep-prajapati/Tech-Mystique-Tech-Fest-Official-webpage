<?php
session_start();
if (!isset($_SESSION['Aaccess'])) {
    header('location: ../index1.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Parampara-2k24</title>
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Bootstrap icons-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <!-- Google fonts-->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="./css/styles.css" rel="stylesheet" />
</head>

<body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
        <div class="container px-5">
            <a class="navbar-brand fw-bold" href="#page-top">Parampara-2k24</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="bi-list"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0">
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#features">Features</a></li>
                    <li class="nav-item"><a class="nav-link me-lg-3" href="#download">Final Events</a></li>
                </ul>
                <button class="btn btn-primary rounded-pill px-3 mb-2 mb-lg-0" data-bs-toggle="modal" data-bs-target="#feedbackModal">
                    <span class="d-flex align-items-center">
                        <i class="bi-chat-text-fill me-2"></i>
                        <span class="small">Send Feedback</span>
                    </span>
                </button>
            </div>
        </div>
    </nav>
    <!-- Mashead header-->
    <header class="masthead">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <!-- Mashead text and app badges-->
                    <div class="mb-5 mb-lg-0 text-center text-lg-start">
                        <h1 class="display-1 lh-1 mb-3">6th, 7th & 8th March, 2024</h1>
                        <p class="lead fw-normal text-muted mb-5">Welcome to Parampara 2024, the pinnacle of technological innovation and creativity at ITM GIDA Gorkhpur.
                            As we gear up to embark on a journey filled with fervor and zeal, we invite you to witness the convergence of intellect, passion, and imagination like never before.</p>

                    </div>
                </div>
                <div class="col-lg-6">
                    <!-- Masthead device mockup feature-->
                    <div class="masthead-device-mockup">
                        <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                    <stop class="gradient-start-color" offset="0%"></stop>
                                    <stop class="gradient-end-color" offset="100%"></stop>
                                </linearGradient>
                            </defs>
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                            <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect>
                        </svg><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                            <circle cx="50" cy="50" r="50"></circle>
                        </svg>
                        <div class="device-wrapper">
                            <div class="device" data-device="iPhoneX" data-orientation="portrait" data-color="black">
                                <div class="screen bg-black">
                                    <!-- PUT CONTENTS HERE:-->
                                    <!-- * * This can be a video, image, or just about anything else.-->
                                    <!-- * * Set the max width of your media to 100% and the height to-->
                                    <!-- * * 100% like the demo example below.-->
                                    <video muted="muted" autoplay="" loop="" style="max-width: 100%; height: 100%">
                                        <source src="assets/img/demo-screen.mp4" type="video/mp4" />
                                    </video>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Quote/testimonial aside-->
    <aside class="text-center bg-gradient-primary-to-secondary">
        <div class="container px-5">
            <div class="row gx-5 justify-content-center">
                <div class="col-xl-8">
                    <div class="h2 fs-1 text-white mb-4">"Event Schedule: Stay abreast of the latest event schedules, timings, and venue details
                        to ensure you don't miss out on any of the action-packed moments unfolding at Parampara 2024."</div>
                    <img src="assets/img/tnw-logo.svg" alt="..." style="height: 3rem" />
                </div>
            </div>
        </div>
    </aside>
    <!-- App features section-->



    <!-- Basic features section-->
    <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12 col-lg-5">


                    <!-- form -->
                    <h2 class="text-center p-3">Give use some suggestions for events</h2>



                    <form action="../eventSuggestions.php" method="post">
                        <label for="name">Event-Name</label>
                        <input type="text" name="name" class="form-control" required placeholder="Enter event-name">
                        <br>
                        <label for="discription">Discription about Event</label>
                        <textarea name="discription" class="form-control" id="" required rows="5"></textarea>
                        <br>
                        <label for="type">Type of event</label>
                        <select name="type" class="form-control" required>
                            <option value="">Add type</option>
                            <option value="cultural">Cultural</option>
                            <option value="Sport">Sport</option>
                            <option value="Technical">Technical</option>
                        </select>
                        <br>
                        <label for="date">date</label>
                        <input type="date" name="date" class="form-control">
                        <br>
                        <label for="time">Suggest Time</label>
                        <input type="time" class="form-control" required name="time" id="">
                        <br>
                        <input type="submit" class="bg-success form-control text-white">
                    </form>

                </div>
                <div class="col-sm-8 col-md-6">
                    <div class="px-5 px-sm-0"><img class="img-fluid rounded-circle" src="https://source.unsplash.com/u8Jn2rzYIps/900x900" alt="..." /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- event-list -->
    <section id="features">
        <div class="container px-5">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-12 order-lg-1 mb-5 mb-lg-0">
                    <div class="container-fluid ">
                        <h2 class="text-center"> all suggested event of CRs for Technical activity </h1>
                            <table class="table container">
                                <thead>
                                    <tr>
                                        <th scope="col">Event ID</th>
                                        <th scope="col">Event Name</th>
                                        <th scope="col">Description</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require '../admin/connect.php';
                                    $query1 = "select * from events where type = 'Technical'";
                                    $exe1 = mysqli_query($dbc, $query1);
                                    while ($row1 = mysqli_fetch_array($exe1)) {
                                        $p_id = $row1['eid'];
                                        $name = $row1['name'];
                                        $desc = $row1['description'];
                                        $type = $row1['type'];
                                        $date = $row1['date'];
                                        $time = $row1['time'];
                                        $img = $row1['image'];
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
                            <h2 class="text-center"> all suggested event of CRs for Sport activity </h1>
                                <table class="table container">
                                    <thead>
                                        <tr>
                                            <th scope="col">Event ID</th>
                                            <th scope="col">Event Name</th>
                                            <th scope="col">Description</th>
                                            <th scope="col">Type</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Time</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        require '../admin/connect.php';
                                        $query1 = "select * from events where type = 'Sport'";
                                        $exe1 = mysqli_query($dbc, $query1);
                                        while ($row1 = mysqli_fetch_array($exe1)) {
                                            $p_id = $row1['eid'];
                                            $name = $row1['name'];
                                            $desc = $row1['description'];
                                            $type = $row1['type'];
                                            $date = $row1['date'];
                                            $time = $row1['time'];
                                            $img = $row1['image'];
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

                                <h2 class="text-center"> all suggested event of CR for cultural activity</h1>
                                    <table class="table container">
                                        <thead>
                                            <tr>
                                                <th scope="col">Event ID</th>
                                                <th scope="col">Event Name</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Type</th>
                                                <th scope="col">Date</th>
                                                <th scope="col">Time</th>
                                                <th></th>
                                                <th></th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            require '../admin/connect.php';
                                            $query1 = "select * from events where type = 'cultural'";
                                            $exe1 = mysqli_query($dbc, $query1);
                                            while ($row1 = mysqli_fetch_array($exe1)) {
                                                $p_id = $row1['eid'];
                                                $name = $row1['name'];
                                                $desc = $row1['description'];
                                                $type = $row1['type'];
                                                $date = $row1['date'];
                                                $time = $row1['time'];
                                                $img = $row1['image'];
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
                    </div>
                </div>
            </div>

        </div>
        </div>
    </section>


    <!-- Call to action section-->
    <section class="cta">
        <div class="cta-content">
            <div class="container px-5">
                <h2 class="text-white display-1 lh-1 mb-4">
                    Stop waiting.
                    <br />
                    Start building.
                </h2>
            </div>
        </div>
    </section>
    <!-- App badge section-->
    <section class="bg-gradient-primary-to-secondary" id="download">
        <div class="container px-5">
            <h2 class="text-center text-white font-alt mb-4">All final event as listed bellow</h2>
            <table class="table container">
                <thead>
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date</th>
                        <th scope="col">Time</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require '../admin/connect.php';
                    $query1 = "select * from main_events";
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
        </div>
    </section>
    <!-- Footer-->
    <footer class="bg-black text-center py-5">
        <div class="container px-5">
            <div class="text-white-50 small">
                <div class="mb-2">&copy; Your Website 2023. All Rights Reserved.</div>
                <a href="#!">Privacy</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">Terms</a>
                <span class="mx-1">&middot;</span>
                <a href="#!">FAQ</a>
            </div>
        </div>
    </footer>
    <!-- Feedback Modal-->
    <div class="modal fade" id="feedbackModal" tabindex="-1" aria-labelledby="feedbackModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header bg-gradient-primary-to-secondary p-4">
                    <h5 class="modal-title font-alt text-white" id="feedbackModalLabel">Send feedback</h5>
                    <button class="btn-close btn-close-white" type="button" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body border-0 p-4">
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- * * SB Forms Contact Form * *-->
                    <!-- * * * * * * * * * * * * * * *-->
                    <!-- This form is pre-integrated with SB Forms.-->
                    <!-- To make this form functional, sign up at-->
                    <!-- https://startbootstrap.com/solution/contact-forms-->
                    <!-- to get an API token!-->
                    <form action="../backend/suggestion.php" method="post">
                        <label for="Name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Enter your name">
                        <br>
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your Email">
                        <br>
                        <label for="mobile">Mobile No</label>
                        <input type="text" class="form-control" name="mobile" placeholder="Enter your mobile no">
                        <br>
                        <label for="description">Suggestion</label>
                        <textarea name="suggestion" id="" class="form-control" rows="5" placeholder="Enter Your suggestion"></textarea>
                        <br>
                        <input type="submit" class="form-control text-white bg-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <!-- * *                               SB Forms JS                               * *-->
    <!-- * * Activate your form at https://startbootstrap.com/solution/contact-forms * *-->
    <!-- * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *-->
    <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
</body>

</html>
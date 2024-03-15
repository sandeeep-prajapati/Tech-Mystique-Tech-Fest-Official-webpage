<?php
require './admin/connect.php';
$conn=$dbc;
if(!$conn){
    echo "Page Not Found.";
}
else{

    $c=0;
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Parampara 2K24</title>

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
    require 'usercomponents\mainnav.php';
    ?>
    <!-- Header End -->

    <!-- Hero Section Begin -->
    <section class="hero-section set-bg" data-setbg="image/banner/main.jpg">
        <div class="container">
            <div class="row p-4">
                <div class="col-lg-7">
                    <div class="hero-text">
                        <!-- <span>11 to 13 April 2K24, ITM, GIDA, Gorakhpur</span> -->
                        <h2>Get ready on<br /> 11<sup>th</sup> April</h2>
                        <a href="register.php" class="primary-btn">Join Us</a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <img src="home/img/logo.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Counter Section Begin -->
    <section class="counter-section bg-gradient">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="counter-text">
                        <span>Conference Date</span>
                        <h3>Count Every Second <br />Until the Event</h3>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="cd-timer" id="countdown">
                        <div class="cd-item">
                            <span>32</span>
                            <p>Days</p>
                        </div>
                        <div class="cd-item">
                            <span>04</span>
                            <p>Hours</p>
                        </div>
                        <div class="cd-item">
                            <span>46</span>
                            <p>Minutes</p>
                        </div>
                        <div class="cd-item">
                            <span>32</span>
                            <p>Seconds</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Counter Section End -->

    <!-- Home About Section Begin -->
    <section class="home-about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="image/teachers/head.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h2>Welcome to Parampara 2K24</h2>
                        <p>
                            Welcome one and all to Parampara, our college’s beacon of tradition and innovation! As the Convener of this grand fest, it is my pleasure to extend a heartfelt invitation to immerse yourself in the rich tapestry of our cultural heritage and contemporary talents.
                        </p>
                        <p>
                            Parampara stands as a testament to our enduring customs and the new paths we forge. This year, we bring you a plethora of events that celebrate both our roots and our wings—from classical art forms to modern-day workshops, engaging debates to enthralling performances.
                        </p>
                        <p>
                            In my role as the Convener, I am committed to orchestrating an event that honors our past while embracing the future. It is my duty to ensure that Parampara not only entertains but also inspires, leaving a lasting impression on all who join us.
                        </p>
                        <a href="about-us.php" class="ha-btn">Discover Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Home About Section End -->

    <!-- Team Member Section Begin -->
    <!-- <section class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Coordinators</h2>
                        <p>Respect the Guidence and Experience</p>
                    </div>
                </div>
            </div>
        </div> -->

    <!-- Home About Section Begin -->
    <!-- <section class="home-about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h2>Cultural Event Coordinator - Parampara</h2>
                        <p>
                            Embark on a journey through tradition and modernity with Parampara, our college fest that celebrates the rich tapestry of our heritage. As the Cultural Event Coordinator, you are the custodian of our legacy, orchestrating a symphony of events that resonate with the timeless rhythms of our culture.
                        </p>
                        <p>
                        Key Responsibilities:
                        
                        </p>
                        <ul type="bullets">
                            <li style="list-style-type:bullets;"> Crafting a vibrant mosaic of cultural showcases that honor our past while embracing the future.</li>
                            <li style="list-style-type:bullets;"> Fostering collaborations that bridge the gap between classical and contemporary art forms.</li>
                            <li style="list-style-type:bullets;"> Scheduling a panorama of events that cater to an array of artistic tastes and preferences.</li>
                            <li style="list-style-type:bullets;"> Managing the seamless execution of events, ensuring each moment is etched in the annals of our history.</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="image/teachers/head.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Home About Section End -->

    <!-- Home About Section Begin -->
    <!-- <section class="home-about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="image/teachers/head.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h2>Technical Event Coordinator - Parampara</h2>
                        <p>
                        Dive into the confluence of heritage and innovation at Parampara, where we celebrate the legacy of the past while forging the future. As the Technical Event Coordinator, you are the catalyst for change, the pioneer leading our quest for knowledge and technological prowess.
                        </p>
                        <p>
                        We Are Looking For:
                        
                        </p>
                        <ul type="bullets">
                            <li style="list-style-type:bullets;"> A visionary with a deep respect for our roots and an eye on the horizon of technology.</li>
                            <li style="list-style-type:bullets;"> Proven experience in orchestrating technical events that captivate and educate.</li>
                            <li style="list-style-type:bullets;"> The ability to create a platform where ancient practices meet modern tech solutions.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Home About Section End -->

    <!-- Home About Section Begin -->
    <!-- <section class="home-about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ha-text">
                        <h2>Welcome to Parampara 2K24</h2>
                        <p>
                            Welcome one and all to Parampara, our college’s beacon of tradition and innovation! As the Convener of this grand fest, it is my pleasure to extend a heartfelt invitation to immerse yourself in the rich tapestry of our cultural heritage and contemporary talents.
                        </p>
                        <p>
                            Parampara stands as a testament to our enduring customs and the new paths we forge. This year, we bring you a plethora of events that celebrate both our roots and our wings—from classical art forms to modern-day workshops, engaging debates to enthralling performances.
                        </p>
                        <p>
                            In my role as the Convener, I am committed to orchestrating an event that honors our past while embracing the future. It is my duty to ensure that Parampara not only entertains but also inspires, leaving a lasting impression on all who join us.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ha-pic">
                        <img src="image/teachers/head.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- Home About Section End -->

        <!-- Technical -->
        <?php
            $query="select * from participants where position = 'Leader' and type = 'Technical';";
            $res=mysqli_query($conn,$query);
            $row=mysqli_num_rows($res);
            if($row>0)
            {
                while($row=mysqli_fetch_array($res))
                {
        ?>
        <div class="member-item set-bg" data-setbg="<?php echo $row['img']; ?>">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="<?php echo $row['fb']; ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['insta']; ?>"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5><?php echo $row['name'] ?></h5>
                <span><?php echo $row['type'] ?> <?php echo $row['position'] ?></span>
            </div>
        </div>
        <?php
                }
            }
        ?>
        
        <!-- Cultural -->
        
        <?php
            $query="select * from participants where position = 'Leader' and type = 'Cultural'";
            $res=mysqli_query($conn,$query);
            $row=mysqli_num_rows($res);
            if($row>0)
            {
                while($row=mysqli_fetch_array($res))
                {
                           
        ?>
        <div class="member-item set-bg" data-setbg="<?php echo $row['img']; ?>">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="<?php echo $row['fb']; ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['insta']; ?>"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5><?php echo $row['name'] ?></h5>
                <span><?php echo $row['type'] ?> <?php echo $row['position'] ?></span>
            </div>
        </div>
        <?php 
                }
            }
        ?>

        <!-- Sport -->

        <?php
            $query="select * from participants where position = 'Leader' and type = 'Sport'";
            $res=mysqli_query($dbc,$query);
            $row=mysqli_num_rows($res);
            if($row>0)
            {
                while($row=mysqli_fetch_array($res))
                {
                           
        ?>
        <div class="member-item set-bg" data-setbg="<?php echo $row['img']; ?>">
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="<?php echo $row['fb']; ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['insta']; ?>"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['twitter']; ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $row['linkedin']; ?>"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5><?php echo $row['name'] ?></h5>
                <span><?php echo $row['type'] ?> <?php echo $row['position'] ?></span>
            </div>
        </div>
        <?php 
                }
            }
        ?>
    </section>
    <!-- Team Member Section End -->

    <!-- Schedule Section Begin -->
    <section class="schedule-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Schedule</h2>
                        <p>Do not miss any fun of the events</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="schedule-tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab">
                                    <h5>Technical core committee</h5>
                                    <p>Technical heads for all events</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab">
                                    <h5>Sport core committee</h5>
                                    <p>Sport heads for all events</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab">
                                    <h5>Cultural core committee</h5>
                                    <p>Cultural heads for all events</p>
                                </a>
                            </li>
                        </ul><!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                            <?php
                                $query= "SELECT * FROM `participants` where `position` = 'head' and `type` = 'Technical'";
                                $res=mysqli_query($conn,$query);
                                $row=mysqli_num_rows($res);
                                if($row>0)
                                {
                                    while($row=mysqli_fetch_array($res))
                                {
                           
                                ?>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="<?php echo $row['img'] ?>"alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4><?php echo $row['name'] ?></h4>
                                                    <ul>
                                                        <!-- <li><i class="fa fa-graduation-cap"></i> John Smith</li> -->
                                                        <li><i class="fa fa-instagram"></i> @<?php echo $row['insta'] ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 09:00 am - 4:00 PM</li>
                                                    <li><i class="fa fa-map-marker"></i> ITM GIDA, Gorakhpur
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                }
                            }
                            ?>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <!-- sport  -->
                                <?php
                                $query= "SELECT * FROM `participants` where `position` = 'head' and `type` = 'Sport'";
                                $res=mysqli_query($conn,$query);
                                $row=mysqli_num_rows($res);
                                if($row>0)
                                {
                                    while($row=mysqli_fetch_array($res))
                                {
                           
                                ?>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="<?php echo $row['img'] ?>"alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4><?php echo $row['name'] ?></h4>
                                                    <ul>
                                                        <!-- <li><i class="fa fa-user"></i> John Smith</li> -->
                                                        <li><i class="fa fa-instagram"></i> @<?php echo $row['insta'] ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 09:00 am - 4:00 PM</li>
                                                    <li><i class="fa fa-map-marker"></i> ITM GIDA, Gorakhpur
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            }
                        }
                            ?>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <!-- cultural -->
                                <?php
                                $query= "SELECT * FROM `participants` where `position` = 'head' and `type` = 'cultural'";
                                $res=mysqli_query($conn,$query);
                                $row=mysqli_num_rows($res);
                                if($row>0)
                                {
                                    while($row=mysqli_fetch_array($res))
                                {
                           
                                ?>
                                <div class="st-content">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-lg-3">
                                                <div class="sc-pic">
                                                    <img src="<?php echo $row['img'] ?>"alt="">
                                                </div>
                                            </div>
                                            <div class="col-lg-5">
                                                <div class="sc-text">
                                                    <h4><?php echo $row['name'] ?></h4>
                                                    <ul>
                                                        <!-- <li><i class="fa fa-user"></i> John Smith</li> -->
                                                        <li><i class="fa fa-instagram"></i> @<?php echo $row['insta'] ?>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <ul class="sc-widget">
                                                    <li><i class="fa fa-clock-o"></i> 09:00 am - 4:00 PM</li>
                                                    <li><i class="fa fa-map-marker"></i> ITM GIDA, Gorakhpur
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php

                            }
                        }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Schedule Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section set-bg spad" data-setbg="home/img/pricing-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Parampara Events</h2>
                        <p>Viewing Total Prozepool</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Culturalal Events</h4>
                        <div class="pi-price">
                            <h2><span>₹</span>66600/-</h2>
                        </div>
                        <?php
                            $query="select name from main_events where type = 'Cultural' limit 10 offset 10";
                            $res=mysqli_query($conn,$query);
                            $row=mysqli_num_rows($res);
                            if($row>0)
                            {
                           
                        ?>
                        <ul>
                        <?php
                                while($row=mysqli_fetch_array($res))
                                {
                        ?>
                            <li><?php echo $row[0]; ?></li>
                        <?php
                                }
                        ?>
                        </ul>
                        <?php
                            }
                        ?>
                        <a href="#" class="price-btn">View All <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item top-rated">
                        <div class="tr-tag">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Technical Events</h4>
                        <div class="pi-price">
                            <h2><span>₹</span>32600/-</h2>
                        </div>
                        <?php
                            $query="select name from main_events where type = 'Technical' limit 10 offset 10";
                            $res=mysqli_query($conn,$query);
                            $row=mysqli_num_rows($res);
                            if($row>0)
                            {
                           
                        ?>
                        <ul>
                        <?php
                                while($row=mysqli_fetch_array($res))
                                {
                        ?>
                            <li><?php echo $row['name']; ?></li>
                        <?php
                                }
                        ?>
                        </ul>
                        <?php
                            }
                        ?>
                        <a href="#" class="price-btn">View All <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-8">
                    <div class="price-item">
                        <h4>Sport Events</h4>
                        <div class="pi-price">
                            <h2><span>₹</span>96000/-</h2>
                        </div>
                        <?php
                            $query="select name from main_events where type = 'Sport' limit 10";
                            $res=mysqli_query($conn,$query);
                            $row=mysqli_num_rows($res);
                            if($row>0)
                            {
                           
                        ?>
                        <ul>
                        <?php
                                while($row=mysqli_fetch_array($res))
                                {
                        ?>
                            <li><?php echo $row[0]; ?></li>
                        <?php
                                }
                        ?>
                        </ul>
                        <?php
                            }
                        ?>
                        <a href="#" class="price-btn">View All <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- latest BLog Section Begin -->
    <section class="latest-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Latest News</h2>
                        <p>Do not miss anything topic abput the event</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="latest-item set-bg large-item" data-setbg="home/img/blog/latest-b/latest-1.jpeg">
                        <div class="li-tag">Inauguration</div>
                        <div class="li-text">
                            <h4><a href="./blog-details.php">Improve You Business Cards And Enchan Your Sales</a></h4>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="latest-item set-bg" data-setbg="home/img/blog/latest-b/latest-2.jpeg">
                        <div class="li-tag">Launching</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.php">All users on MySpace will know that there are millions of people out there.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                    <div class="latest-item set-bg" data-setbg="home/img/blog/latest-b/latest-3.jpeg">
                        <div class="li-tag">Winning</div>
                        <div class="li-text">
                            <h5><a href="./blog-details.php">A Pocket PC is a handheld computer, which features many of the same capabilities.</a></h5>
                            <span><i class="fa fa-clock-o"></i> 19th May, 2019</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- latest BLog Section End -->

    <!-- Newslatter Section Begin -->
    <section class="newslatter-section">
        <div class="container">
            <div class="newslatter-inner set-bg" data-setbg="home/img/newslatter-bg.jpg">
                <div class="ni-text">
                    <h3>Subscribe Newsletter</h3>
                    <p>Subscribe to our newsletter and don’t miss anything</p>
                </div>
                <form action="#" class="ni-form">
                    <input type="text" placeholder="Your email">
                    <button type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
    <!-- Newslatter Section End -->

    <!-- Contact Section Begin -->
    <section class="contact-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="section-title">
                        <h2>Location</h2>
                        <p>Get directions to our event center</p>
                    </div>
                    <div class="cs-text">
                        <div class="ct-address">
                            <span>Address:</span>
                            <p>Institute of Technology & Management, GIDA <br />Gorakhpur <br />Bharat</p>
                        </div>
                        <ul>
                            <li>
                                <span>Phone:</span>
                                (+91) 8924869797
                            </li>
                            <li>
                                <span>Email:</span>
                                info.paramparaITM@gmail.com
                            </li>
                        </ul>
                        <div class="ct-links">
                            <span>Website:</span>
                            <p>https://parampara2024.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cs-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14252.17757297977!2d83.25502273219577!3d26.742959405733274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6acb3de3508d%3A0x4595d733fd766bf9!2sITM%20college%20GIDA!5e0!3m2!1sen!2sin!4v1709950925840!5m2!1sen!2sin"
                            height="400" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <?php
    require 'usercomponents\mainFooter.php';

    ?>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="home/js/jquery-3.3.1.min.js"></script>
    <script src="home/js/bootstrap.min.js"></script>
    <script src="home/js/jquery.magnific-popup.min.js"></script>
    <script src="home/js/jquery.countdown.min.js"></script>
    <script src="home/js/jquery.slicknav.js"></script>
    <script src="home/js/owl.carousel.min.js"></script>
    <script src="home/js/main.js"></script>
</body>

</html>

<?php
}

?>
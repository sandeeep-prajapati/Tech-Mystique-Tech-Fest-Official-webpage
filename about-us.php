<?php
require 'admin/connect.php';

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Manup Template">
    <meta name="keywords" content="Manup, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manup | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap" rel="stylesheet">
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
    <header class="header-section header-normal">
        <div class="container">
            <div class="logo">
                <a href="./index.html">
                    <!-- <img style="background:black;" src="img/logo.png" alt="" height="70px"> -->
                    <h3 style="font-family:'Madimi One';">Parampara 2024</h3>
                </a>
            </div>
            <div class="nav-menu">
                <nav class="mainmenu mobile-menu">
                    <ul>
                        <li class="active"><a href="./index.html">Home</a></li>
                        <li><a href="./about-us.html">About</a></li>
                        <li><a href="./speaker.html">Speakers</a>
                            <ul class="dropdown">
                                <li><a href="#">Jayden</a></li>
                                <li><a href="#">Sara</a></li>
                                <li><a href="#">Emma</a></li>
                                <li><a href="#">Harriet</a></li>
                            </ul>
                        </li>
                        <li><a href="./schedule.html">Schedule</a></li>
                        <li><a href="./blog.html">Blog</a></li>
                        <li><a href="./contact.html">Contacts</a></li>
                    </ul>
                </nav>
                <a href="#" class="primary-btn top-btn"><i class="fa fa-ticket"></i> Participate</a>
            </div>
            <div id="mobile-menu-wrap"></div>
        </div>
    </header>
    <!-- Header End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About Parampara</h2>
                        <div class="bt-option">
                            <a href="#">Home</a>
                            <span>About</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- About Section Begin -->
    <section class="about-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Parampara: Celebrating Tradition and Talent</h2>
                        <p class="f-para">Get ready to immerse yourself in a whirlwind of culture, creativity, and camaraderie as we proudly announce the annual fest of our esteemed institution - Parampara! Scheduled from April 11th to April 13th, 2024, Parampara promises to be an unforgettable celebration of tradition and talent.</p>
                        <p>Parampara isn't just another college fest; it's a vibrant platform where students from diverse backgrounds come together to showcase their skills, passion, and innovation. With a rich tapestry of events, performances, and competitions, Parampara encapsulates the essence of our cultural heritage while embracing the spirit of modernity.Throughout the three days, Parampara will offer a plethora of activities catering to every interest and talent. From electrifying dance performances that fuse classical elegance with contemporary flair to soul-stirring music concerts that resonate with the beats of tradition and innovation, there's something for everyone to enjoy.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-pic">
                        <img src="./home/img/about-us.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-text">
                        <h3>The 2019 Conference</h3>
                        <p>When I first got into the online advertising business, I was looking for the magical combination that would put my website into the top search engine rankings, catapult me to the forefront of the minds or individuals looking to buy my product, and generally make me rich beyond my wildest dreams! After succeeding in the business for this long, I’m able to look back on my old self with this kind of thinking and shake my head. </p>
                        <ul>
                            <li><span class="icon_check"></span> Write On Your Business Card</li>
                            <li><span class="icon_check"></span> Advertising Outdoors</li>
                            <li><span class="icon_check"></span> Effective Advertising Pointers</li>
                            <li><span class="icon_check"></span> Kook 2 Directory Add Url Free</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Team Member Section Begin -->
    <section class="team-member-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Meet with core committee for events</h2>
                        <p>These are our communicators, you can see each person information</p>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $query= "SELECT * FROM `participants` where `position` = 'head' and `type` = 'Technical'";
        $res=mysqli_query($dbc,$query);
        $row=mysqli_num_rows($res);
        if($row>0)
        {
        while($row=mysqli_fetch_array($res))
        {                                          
        ?>
        <div class="member-item set-bg" data-setbg="<?php echo str_replace('\\', '/', $row['img'])?>">
        
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="<?php echo $row['fb'] ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['insta'] ?>"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $row['linkedin'] ?>"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5><?php echo $row['name'] ?></h5> 
                <span><?php echo $row['type'] ?></span>
            </div>
        </div>
        <?php

        }}
        ?>
        <?php
        $query= "SELECT * FROM `participants` where `position` = 'head' and `type` = 'Sport'";
        $res=mysqli_query($dbc,$query);
        $row=mysqli_num_rows($res);
        if($row>0)
        {
        while($row=mysqli_fetch_array($res))
        {                                          
        ?>
        <div class="member-item set-bg" data-setbg="<?php echo str_replace('\\', '/', $row['img'])?>">
        
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="<?php echo $row['fb'] ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['insta'] ?>"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $row['linkedin'] ?>"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5><?php echo $row['name'] ?></h5> 
                <span><?php echo $row['type'] ?></span>
            </div>
        </div>
        <?php

        }}
        ?>
        <?php
        $query= "SELECT * FROM `participants` where `position` = 'head' and `type` = 'cultural'";
        $res=mysqli_query($dbc,$query);
        $row=mysqli_num_rows($res);
        if($row>0)
        {
        while($row=mysqli_fetch_array($res))
        {                                          
        ?>
        <div class="member-item set-bg" data-setbg="<?php echo str_replace('\\', '/', $row['img'])?>">
        
            <div class="mi-social">
                <div class="mi-social-inner bg-gradient">
                    <a href="<?php echo $row['fb'] ?>"><i class="fa fa-facebook"></i></a>
                    <a href="<?php echo $row['insta'] ?>"><i class="fa fa-instagram"></i></a>
                    <a href="<?php echo $row['twitter'] ?>"><i class="fa fa-twitter"></i></a>
                    <a href="<?php echo $row['linkedin'] ?>"><i class="fa fa-linkedin"></i></a>
                </div>
            </div>
            <div class="mi-text">
                <h5><?php echo $row['name'] ?></h5> 
                <span><?php echo $row['type'] ?></span>
            </div>
        </div>
        <?php

        }}
        ?>
        
    </section>
    <!-- Team Member Section End -->

    <!-- Story Section Begin -->
    <section class="story-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Our Story</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="story-left">
                        <div class="story-item">
                            <h2>2008</h2>
                            <div class="si-text">
                                <h4>Adwords Keyword Research For Beginners</h4>
                                <p>However this is also the most expensive position. Give it a try if the second to fourth display position gives you more visitors and more customers for less money.</p>
                            </div>
                        </div>
                        <div class="story-item">
                            <h2>2011</h2>
                            <div class="si-text">
                                <h4>Adwords Keyword Research For Beginners</h4>
                                <p>Virgin Mobile took a more effective approach in marketing their cell phone service by focusing not on the people that would be making the actual purchase.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="story-right">
                        <div class="story-item">
                            <h2>2015</h2>
                            <div class="si-text">
                                <h4>15 Tips To Increase Your Adwords Profits</h4>
                                <p>There is no better advertisement campaign that is low cost and also successful at the same time. Great business ideas when utilized effectively can save lots of money.</p>
                            </div>
                        </div>
                        <div class="story-item">
                            <h2>2019</h2>
                            <div class="si-text">
                                <h4>Advertising Internet Online Opportunities To Explore</h4>
                                <p>Many people sign up for affiliate programs with the hopes of making some serious money. They advertise a few places and then wait for the money to start pouring in.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Story Section End -->

    <!-- Pricing Section Begin -->
    <section class="pricing-section set-bg spad" data-setbg="./home/img/pricing-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Ticket Pricing</h2>
                        <p>Get your event ticket plan</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="price-item">
                        <h4>1 Day Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>129</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-item top-rated">
                        <div class="tr-tag">
                            <i class="fa fa-star"></i>
                        </div>
                        <h4>Full Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>199</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                        </ul>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="price-item">
                        <h4>Group Pass</h4>
                        <div class="pi-price">
                            <h2><span>$</span>79</h2>
                        </div>
                        <ul>
                            <li>One Day Conference Ticket</li>
                            <li>Coffee-break</li>
                            <li>Lunch and Networking</li>
                            <li>Keynote talk</li>
                            <li>Talk to the Editors Session</li>
                        </ul>
                        <a href="#" class="price-btn">Get Ticket <span class="arrow_right"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Testimonials</h2>
                        <p>Our customers are our biggest supporters. What do they think of us?</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="testimonial-slider owl-carousel">
                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <div class="ti-author">
                                        <div class="quote-pic">
                                            <img src="./home/img/quote.png" alt="">
                                        </div>
                                        <div class="ta-pic">
                                            <img src="./home/img/testimonial/testimonial-1.jpg" alt="">
                                        </div>
                                        <div class="ta-text">
                                            <h5>Emma Sandoval</h5>
                                            <span>Speaker Manager</span>
                                        </div>
                                    </div>
                                    <p>“First impression is made by logo or its absence. To know the importance of a logo just answer one question: How many big, leading and famous companies don’t have logos?”</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <div class="ti-author">
                                        <div class="quote-pic">
                                            <img src="./home/img/quote.png" alt="">
                                        </div>
                                        <div class="ta-pic">
                                            <img src="./home/img/testimonial/testimonial-2.jpg" alt="">
                                        </div>
                                        <div class="ta-text">
                                            <h5>John Smith</h5>
                                            <span>Speaker Manager</span>
                                        </div>
                                    </div>
                                    <p>“There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement.”</p>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="testimonial-item">
                                    <div class="ti-author">
                                        <div class="quote-pic">
                                            <img src="./home/img/quote.png" alt="">
                                        </div>
                                        <div class="ta-pic">
                                            <img src="./home/img/testimonial/testimonial-2.jpg" alt="">
                                        </div>
                                        <div class="ta-text">
                                            <h5>John Smith</h5>
                                            <span>Speaker Manager</span>
                                        </div>
                                    </div>
                                    <p>“There is no denying the fact that the success of an advertisement lies mostly in the headline. The headline should attract the reader and make him read the rest of the advertisement.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Newslatter Section Begin -->
    <section class="newslatter-section about-newslatter">
        <div class="container">
            <div class="newslatter-inner set-bg" data-setbg="./home/img/newslatter-bg.jpg">
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
                            <p>Institute of Technology & Management <br />GIDA, Gorakhpur, Bharat</p>
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
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14252.17757297977!2d83.25502273219577!3d26.742959405733274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6acb3de3508d%3A0x4595d733fd766bf9!2sITM%20college%20GIDA!5e0!3m2!1sen!2sin!4v1709950925840!5m2!1sen!2sin" height="400" style="border:0;" allowfullscreen=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="partner-logo owl-carousel">
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="./home/img/partner-logo/logo-1.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="./home/img/partner-logo/logo-2.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="./home/img/partner-logo/logo-3.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="./home/img/partner-logo/logo-4.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="./home/img/partner-logo/logo-5.png" alt="">
                    </div>
                </a>
                <a href="#" class="pl-table">
                    <div class="pl-tablecell">
                        <img src="./home/img/partner-logo/logo-6.png" alt="">
                    </div>
                </a>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer-text">
                        <div class="ft-logo">
                            <a href="#" class="footer-logo"><img src="./home/img/footer-logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Speakers</a></li>
                            <li><a href="#">Schedule</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                        <div class="copyright-text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                        <div class="ft-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-youtube-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
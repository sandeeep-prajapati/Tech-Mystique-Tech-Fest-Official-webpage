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

    <!-- Contact Top Content Section Begin -->
    <section class="contact-content-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="cc-text set-bg" data-setbg="img/contact-content-bg.jpg">
                        <div class="row">
                            <div class="col-lg-8 offset-lg-4">
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
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="cc-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14252.17757297977!2d83.25502273219577!3d26.742959405733274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae6acb3de3508d%3A0x4595d733fd766bf9!2sITM%20college%20GIDA!5e0!3m2!1sen!2sin!4v1709950925840!5m2!1sen!2sin"
                            height="580" style="border:0;" allowfullscreen=""></iframe>
                        <div class="map-hover">
                            <i class="fa fa-map-marker"></i>
                            <div class="map-hover-inner">
                                <h5>ITM, GIDA</h5>
                                <p>Gorakhpur City, Bharat</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Top Content Section End -->

    <!-- Contact Form Section Begin -->
    <section class="contact-from-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Contact Us By Email!</h2>
                        <p>Fill out the form below to recieve a free and confidential intial consultation.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form action="#" class="comment-form contact-form">
                        <div class="row">
                            <div class="col-lg-4">
                                <input type="text" placeholder="Name">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Email">
                            </div>
                            <div class="col-lg-4">
                                <input type="text" placeholder="Phone">
                            </div>
                            <div class="col-lg-12 text-center">
                                <textarea placeholder="Messages"></textarea>
                                <button type="submit" class="site-btn">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form Section End -->

    <!-- Footer Section Begin -->
    <?php

    require 'usercomponents\mainnav.php';
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
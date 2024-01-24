<?php
    include './nav.php'
  ?> 
  <?php
if (isset($_SESSION['user_id'])) {
    // User is already logged in, redirect to the home page or any other page
    $text = "Welcome To Toriox";
}
else{
    $text = "Signup";
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Favicons -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300|Nunito:400,700&display=swap" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

        <!-- Vendor CSS Files -->
        <link href="vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
        <link href="vendor/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="vendor/lightbox/css/lightbox.min.css" rel="stylesheet">

        <!-- Main Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
    </head>

    <body>
        
        
        <!-- Banner Section Start-->
        <section class="banner">
            <div class="container">
                <div class="col-lg-12">
                    <div class="banner-nav">
                        <div class="banner-box">
                            <a href="../index.php">Home </a>
                            <a href="../about.php">About</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Banner Section End-->

        <!-- About Us Section Start-->
        <section class="about">
            <div class="container">
                <header class="section-header">
                    <h3>About Us</h3>
                    <p><strong>
                    "[TORIOX LEAD] - our IT Solutions Partner. We're here to solve your tech challenges and drive success with our expertise."</p></strong>
                </header>

                <div class="row align-items-center about-row">
                    <div class="col-md-6">
                        <img src="img/about.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <h2 class="title"><a href="#">Welcome to Our Site</a></h2>
                        <p>
                        "Welcome to [TORIOX LEAD]. We're a forward-thinking IT company dedicated to providing innovative solutions to meet your tech needs. With a team of passionate experts, we're committed to delivering high-quality services, transforming challenges into opportunities, and ensuring your success in the digital world. Let's embark on a tech journey together."</p>
                        <div class="read-more">
                            <a href="#">Read More</a>
                        </div>
                    </div>
                </div>

                <div class="row about-cols">
                    <div class="col-md-4">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-mission.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-disc"></i></div>
                            </div>
                            <h2 class="title"><a href="#">MEET OUR TEAM</a></h2>
                            <p>
                            Our dedicated team of lead generation experts is passionate about helping you succeed. We understand the challenges you face, and we're here to provide tailored solutions that drive results.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-vision.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-eye"></i></div>
                            </div>
                            <h2 class="title"><a href="#">OUR CORE VALUES</a></h2>
                            <p>
                            Integrity, transparency, and excellence are the cornerstones of our business. We believe in building strong client relationships based on trust, and we go above and beyond to exceed your expectations.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="about-col">
                            <div class="img">
                                <img src="img/about-objective.jpg" alt="" class="img-fluid">
                                <div class="icon"><i class="ion-ios-options"></i></div>
                            </div>
                            <h2 class="title"><a href="#">OUR JOURNEY</a></h2>
                            <p>
                            TorioxLead was founded in [Year] with a vision to revolutionize lead generation. Since our inception, we've partnered with businesses of all sizes and industries, helping them achieve remarkable growth.</p>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Section End -->

        <!-- Footer Start -->
        <footer class="footer">
            <div class="footer-top">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 footer-info">
                            <h3>TorioxLead</h3>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam a tortor commodo, sollicitudin velit nec, lobortis erat. Sed rutrum metus ac augue scelerisque, vel commodo erat commodo. Mauris quis mattis sem. Maecenas dictum nunc.
                            </p>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-links">
                            <h4>About Us</h4>
                            <ul>
                                <li><i class="ion-md-arrow-dropright"></i> <a href="index.php ">Home</a></li>
                                <li><i class="ion-md-arrow-dropright"></i> <a href="about.php">About us</a></li>
                                <li><i class="ion-md-arrow-dropright"></i> <a href="solution.php">Solution</a></li>
                                <li><i class="ion-md-arrow-dropright"></i> <a href="parcials/contact.php">Contact</a></li>
                                <li><i class="ion-md-arrow-dropright"></i> <a href="">portal</a></li>
                                <li><i class="ion-md-arrow-dropright"></i> <a href="parcials/chatbot.php">chatbot</a></li>

                            </ul>
                        </div>

                        <div class="col-lg-3 col-md-6 footer-contact">
                            <h4>Contact Us</h4>
                            <p>
                                NO 30/3A, 32, 1A&1B,<br>
                                Vascon Weikfield Corporate Park Hyatt Hotel,<br>
                                OFF. NO 902 PLATINUM SQUARE S,30/3B 31/1, Nagar Rd, Pune, Maharashtra 411014 <br>
                                <strong>Phone:</strong> +123-456-7890<br>
                                <strong>Email:</strong> info@example.com<br>
                            </p>

                            <div class="social-links">
                                <a href=""><i class="ion-logo-twitter"></i></a>
                                <a href=""><i class="ion-logo-facebook"></i></a>
                                <a href=""><i class="ion-logo-linkedin"></i></a>
                                <a href=""><i class="ion-logo-instagram"></i></a>
                            </div>

                        </div>

                        <div class="col-lg-3 col-md-6 footer-newsletter">
                            <h4>Portal</h4>
                            <p>At TorioxLead, we redefine the way you do business. Our data solutions empower you to make strategic decisions, enhance customer relationships, and boost your bottom line.</p>
                            <form action="" method="post">
                                <a href="parcials/signup.php"><input type="submit"  value="Portal"></a>
                            </form>
                        </div>

                    </div>
                </div>
            </div>

            <div class="container">
                <div class="copyright">
                    &copy; Copyright <a href="">TorioxLead</a>. All Rights Reserved<br>
					website By <a href="">TorioxLead Team</a>
                </div>
            </div>
        </footer>
        
        <a href="#" class="back-to-top"><i class="ion-md-arrow-dropup"></i></a>

        <!-- Vendor JS Files -->
        <script src="vendor/jquery/jquery.min.js"></script>
        <script src="vendor/jquery/jquery-migrate.min.js"></script>
        <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <script src="vendor/easing/easing.min.js"></script>
        <script src="vendor/superfish/hoverIntent.js"></script>
        <script src="vendor/superfish/superfish.min.js"></script>
        <script src="vendor/waypoints/waypoints.min.js"></script>
        <script src="vendor/touchSwipe/jquery.touchSwipe.min.js"></script>
        <script src="vendor/counterup/counterup.min.js"></script>
        <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
        <script src="vendor/isotope/isotope.pkgd.min.js"></script>
        <script src="vendor/lightbox/js/lightbox.min.js"></script>

        <!-- Main Javascript File -->
        <script src="js/main.js"></script>
</body>
</html>
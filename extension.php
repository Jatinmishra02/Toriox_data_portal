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





        <!-- Banner Section Start-->

        <section class="banner">

            <div class="container">

                <div class="col-lg-12">

                    <div class="banner-nav">

                        <div class="banner-box">

                            <a href="index.html">Home </a>

                            <a href="service.html">Service</a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- Banner Section End-->



        <!-- Services Section Start -->

        <section id="services" class="services">

            <div class="container">

                <header class="section-header">

                    <h3>Toriox Chrome Extension</h3>

                    
                    <br>

                </header>




                            <h5>LinkedIn Prospector - </h5>

                            <p>connect, call and message for the verified contact data. The extension helps you send requests for connection and add people to a separate list and also view the account insights by staying in Linked.</p>

                        

                    <div class="">
                        <div class="float-start">



                            <h5>Toriox Everywhere -</h5>

                            <p>The extension can co-exist on any web page which helps you search for key contact information, and insights into the account without switching to a different web page.</p>

                        </div>

                    </div>

                    <div class="float-start">

                            <h5>Google Calendar - </h5>

                            <p>connect your toriox extension to Apollo data so you won't be required to switch to new tabs for meetings or to view your daily schedule.</p>

                        </div>

                    </div>

                            <h5>Gmail Integration -</h5>

                            <p>Add links, text and paragraphs immediately. Keep an eye on emails, and get notified of those who haven't replied also you could use templates in emails </p>

                </div>

            </div>

        </section>

        <!-- Services Section End -->



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
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
                    <h3>Solution</h3>
                    <p>
                    We specialize in providing innovative and customized IT solutions to meet the evolving needs of businesses in today's fast-paced digital landscape.                    </p>
                </header>
                <div class="row">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <i class="ion-ios-desktop"></i>
                            <h4><a href="">1. Data Accuracy and Reliability</a></h4>
                            <p>In the world of B2B transactions, accurate data is paramount. We guarantee the highest level of accuracy and reliability in our database. Our dedicated team of data experts meticulously verifies and updates the information, ensuring you have access to the most reliable data for your business decisions.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <i class="ion-ios-laptop"></i>
                            <h4><a href="">2. Comprehensive Business Profiles</a></h4>
                            <p>Get deep insights into businesses with our detailed company profiles. From basic contact information to financial data, our portal provides a 360-degree view of your potential partners. Make informed decisions by understanding your prospects inside out.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <i class="ion-ios-tablet-portrait"></i>
                            <h4><a href="">3. Targeted Lead Generation</a></h4>
                            <p>Identify and target your ideal customers effortlessly. Our advanced filtering options allow you to narrow down your search based on industry, location, company size, and more. Reach out to the right prospects and increase your chances of converting leads into loyal customers.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <i class="ion-ios-phone-portrait"></i>
                            <h4><a href="">4. Real-time Updates</a></h4>
                            <p>Stay ahead of the competition with real-time updates. Our data portal is continuously updated to reflect the latest changes in the business landscape. Be it new startups, mergers, or expansions – you’ll be the first to know, giving you a competitive edge in the market.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <i class="ion-ios-desktop"></i>
                            <h4><a href="">5. Customized Solutions</a></h4>
                            <p>We understand that every business is unique. That’s why we offer customized data solutions tailored to your specific requirements. Whether you need data for market research, sales campaigns, or partner identification, we have you covered. Our flexible solutions adapt to your evolving business needs.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <i class="ion-ios-laptop"></i>
                            <h4><a href="">6. Seamless Integration</a></h4>
                            <p>Integrate our data seamlessly into your existing systems. Our API integration ensures a smooth flow of data into your CRM, marketing automation, or analytics tools. Save time and effort, and focus on what matters – growing your business.</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="single-service">
                            <i class="ion-ios-tablet-portrait"></i>
                            <h4><a href="">7. Expert Support</a></h4>
                            <p>We believe in providing exceptional customer support. Our team of experts is available round the clock to assist you. Have a question or need assistance? Don’t hesitate to reach out. Your success is our priority.</p>
                        </div>
                    </div>
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
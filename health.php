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

                    <h3>Health Centre</h3>

                    <br>

                </header>

                <div class="float-start">

                    <h5>Target Market</h5>

                    <p>Instant data on Target Market sourced from Toriox data band CRM.</p>

                </div>

                <div class="float-start">

                    <h5>Data Update</h5>

                    <p>Track and update data due to job changes, contact detail changes etc.</p>

                </div>

                <div class="float-start">

                    <h5>Missing Emails</h5>

                    <p>Make a note of missing Emails and reorganize.</p>

                </div>

                <div class="float-start">

                    <h5>Automatic addition</h5>

                    <p>Schedule automatic data update to your CRM as the new data is available.</p>

                </div>

                <header class="section-header">

                    <h3>CRM Update</h3>

                    <br>

                </header>

                <p>A CRM that has correct and up-to-date data get all the details from the Toriox database to your CRM.</p>

                <div class="float-start">

                    <h5>Data Attributes</h5>

                    <p>Update company data attribute and contacts from toriox database which include job title, phone number email etc.</p>

                </div>

                <div class="float-start">

                    <h5>Autocorrect and Autofill</h5>

                    <p>Make changes in Bulk or auto-correct with the latest data or auto-fill the vacant CRM sections.</p>

                </div>

                <div class="float-start">

                    <h5>Improve, Update and search with Toriox API</h5>

                    <p>Utilize it to search and improve lead data by making use of our B2B database or auto sync tasks, sequences etc.</p>

                </div>

                <div class="float-start">

                    <h5>Data Improvement</h5>

                    <p>Update your data in all your systems.</p>

                </div>

                <div class="float-start">

                    <h5>Custom Outreach</h5>

                    <p>Leave the task of manually clicking to modify sequence with API calls.</p>

                </div>

                <div class="float-start">

                    <h5>Manage your work</h5>

                    <p>Filter your work by task priority, submission, custom fields, target etc.</p>

                </div>

                <header class="section-header">

                    <h3>CSV Enrichment</h3>

                    <br>

                </header>

                <p>Upload a CSV file and improve its quality with the help of Toriox database. Manually edit until you feel it is perfect before importing it to other systems.</p>

                <div class="float-start">

                    <h5>Complete control</h5>

                    <p>Even a non-technical person can run a manual improvement to receive  improved data from Toriox.</p>

                </div>

                <div class="float-start">

                    <h5>CSV quality report</h5>

                    <p>Check the amount of data uploaded with Extra data from Toriox.</p>

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
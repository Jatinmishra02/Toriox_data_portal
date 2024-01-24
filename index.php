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

<html>

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>TorioxLead</title>

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

<section class="slider" style="background-size: cover;background-repeat: no-repeat;min-height: 100vh;background: url('https://motionarray.imgix.net/preview-717128-dflg1c5ccM-high_0015.jpg?w=660&q=60&fit=max&auto=format') center center no-repeat;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;">

            <div class="slider-container" >

                <div id="carousel" class="carousel  slide carousel-fade" data-ride="carousel">



                    <!--<ol class="carousel-indicators"></ol>-->



                    <div class="carousel-inner" role="listbox">



                        <div class="carousel-item active">

                            <div class="carousel-background"><img src="#" alt=""></div>

                            <div class="carousel-container">

                                <div class="carousel-content">

                                    <h2>One solution for all your sales targets</h2>

                                    <p>

                                    Over 16000 Businesses trust Toriox for their Growth                                    </p>

                                    <a href="parcials/signup.php" class="btn-get-started">Sign up for free</a>

                                </div>

                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="carousel-background"><img src="#" alt=""></div>

                            <div class="carousel-container">

                                <div class="carousel-content">

                                    <h2>Generating leads to customer acquisition <br> Is our responsibility</h2>

                                    <p>

                                    Over 16000 Businesses trust Toriox for their Growth                                    </p>                                    </p>

                                    <a href="parcials/signup.php" class="btn-get-started">Sign up for free</a>

                                </div>

                            </div>

                        </div>

                        <div class="carousel-item">

                            <div class="carousel-background"><img src="#" alt=""></div>

                            <div class="carousel-container">

                                <div class="carousel-content">

                                    <h2>Why Toriox? <br> </h2>

                                    <p>We provide you with access to a database of million-plus contacts with the necessary filters which makes finding the perfect lead easier</p>

                                    <p>The Business is evolving constantly due to changes in customer preferences so is our database which is constantly added, deleted and edited so that our customers can find Perfect leads whenever they require</p>

                                    <a href="parcials/signup.php" class="btn-get-started">Sign up for free</a>

                                </div>

                            </div>

                        </div>





                        <div class="carousel-item">

                            <div class="carousel-background"><img src="#" alt=""></div>

                            <div class="carousel-container">

                                <div class="carousel-content">

                                    <h2>Features of our software <br> </h2>

                                    <center>

                                    <table class="table table-bordered table-sm w-75" style="color:white">

                                        <tr>

                                            <th>50+ filters</th>

                                            <th>Verified contacts</th>

                                            <th>Potential buyer's behaviour</th>

                                            <th>Alerts</th>

                                        </tr>

                                        <tr>

                                            <td>No need to Long lists to find a perfect lead</td>

                                            <td>Our contacts are verified, with a dual check before uploading it into a database</td>

                                            <td>Our list will include only potential behaviour. You will also be able to view buyers' behaviour on the products and services offered</td>
                                            
                                            <td>Every time a Buyer reaches your website and searches you will notified. This helps you in conversion before your competitor does</td>

                                        </tr>

                                    </table>

                                    </center>

                                    <a href="parcials/signup.php" class="btn-get-started">Sign up for free</a>

                                </div>

                            </div>

                        </div>



            



                    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">

                        <span class="carousel-control-prev-icon ion-md-arrow-back" aria-hidden="true"></span>

                        <span class="sr-only">Previous</span>

                    </a>



                    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">

                        <span class="carousel-control-next-icon ion-md-arrow-forward" aria-hidden="true"></span>

                        <span class="sr-only">Next</span>

                    </a>



                </div>

            </div>

        </section>

        <!-- Slider Section End-->



    <section class="about">

            <div class="container">

                <!-- <header class="section-header">

                    <h3>Easy and Powerful way to Drive Huge Results</h3>

                    <p>

                    See our proven 3-step process </p>

                </header>



                <div class="row align-items-center about-row">

                    <div class="col-md-6">

                        <img src="img/about.jpg" alt="" class="img-fluid">

                    </div>

                    <div class="col-md-6">

                        <h2 class="title"><a href="#">Welcome to Our Site</a></h2>

                        <p>

                        At Toriox, we are passionate about technology and dedicated to delivering cutting-edge IT solutions to meet your business needs. With a team of experienced professionals and a commitment to innovation, we're here to help you navigate the ever-evolving world of technology and harness its power to drive your business forward                        </p>

                        <div class="read-more">

                            <a href="#">Read More</a>

                        </div>

                    </div>

                </div> -->



                <div class="row about-cols">

                    <div class="col-md-4">

                        <div class="about-col">

                            <div class="img">

                                <img src="img/about-mission.jpg" alt="" class="img-fluid">

                                <div class="icon"><i class="ion-ios-disc"></i></div>

                            </div>

                            <h2 class="title"><a href="#">Lead Scoring</a></h2>

                            <p>

                            <strong>Our Database comes with automated scores of every lead driven by the power of Artificial Intelligence it takes insights from customer relationships management software and toriox account history. These scores will help you identify profiles that have high conversion rates easily <br></strong>

                            </p>

                            <div class="read-more">

                                <a href="lead.php">Read More</a>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-4">

                        <div class="about-col">

                            <div class="img">

                                <img src="img/about-vision.jpg" alt="" class="img-fluid">

                                <div class="icon"><i class="ion-ios-eye"></i></div>

                            </div>

                            <h2 class="title"><a href="#">Toriox Chrome extension</a></h2>

                            <p>

                                <strong>Grow your Business by connecting with customers instantly Toriox Extension gives you access to verified contacts, and insights into tools such as Gmail and Google Calendar as well as any company website you wish.<br></strong>

                            </p>

                            <div class="read-more">

                                <a href="extension.php">Read More</a>

                            </div>

                        </div>

                    </div>



                    <div class="col-md-4">

                        <div class="about-col">

                            <div class="img">

                                <img src="img/about-objective.jpg" alt="" class="img-fluid">

                                <div class="icon"><i class="ion-ios-options"></i></div>

                            </div>

                            <h2 class="title"><a href="#">Create a pathway and complete a deal</a></h2>

                            <p><strong>All in one </br> Make a sequence of tasks personalize emails you need to contact and make a productive cold call. Also, connect in Linked and fill your pathway with qualified opportunities?<br></strong>

                            <!-- At Toriox, we're more than consultants; we're growth partners. We empower companies to sharpen their focus, implement cutting-edge technologies, and optimize operational costs. Join our journey of success, and let's share the risks and rewards together. -->

                            </p>

                            <div class="read-more">

                                <a href="deal.php">Read More</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="about-col">

                            <div class="img">

                                <img src="img/about.jpg" alt="" class="img-fluid">

                                <div class="icon"><i class="ion-ios-options"></i></div>

                            </div>

                            <h2 class="title"><a href="#">Conversation Intelligence</a></h2>

                            <p><strong>Design winning strategies with AI-powered Video call feedback, Get recommendations to move forward, Point out and Scale top conversations, Act swiftly on conversations and customer recommendations<br></strong>

                            <!-- At Toriox, we're more than consultants; we're growth partners. We empower companies to sharpen their focus, implement cutting-edge technologies, and optimize operational costs. Join our journey of success, and let's share the risks and rewards together. -->

                            </p>

                            <div class="read-more">

                                <a href="conversation.php">Read More</a>

                            </div>

                        </div>

                    </div>

                    <div class="col-md-4">

                        <div class="about-col">

                            <div class="img">

                                <img src="img/portfolio-2.jpg" alt="" class="img-fluid">

                                <div class="icon"><i class="ion-aperture-sharp"></i></div>

                            </div>

                            <h2 class="title"><a href="#">Health Centre</a></h2>

                            <p><strong>Here you will know your target market and help you to recognize missing or wrong data. Keep an eye on your data health and keep your CRM up to date.<br></strong>

                            <p><strong>Target Market, Data Update, Missing Emails, Automatic addition<br></strong>

                            <!-- At Toriox, we're more than consultants; we're growth partners. We empower companies to sharpen their focus, implement cutting-edge technologies, and optimize operational costs. Join our journey of success, and let's share the risks and rewards together. -->

                            </p>

                            <div class="read-more">

                                <a href="health.php">Read More</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>



        <section class="call-to-action">

            <div class="container text-center">

                <header class="section-header">

                    <h3>Why you need to Purchase our Products?</h3>

                </header>

                <a class="cta-btn" href="#">24 x 7 customer care</a><br>

                <a class="cta-btn" href="#">Every product is built with researched data</a><br>

                <a class="cta-btn" href="#">Researches are conducted regularly to improve the products offerred</a><br>

                </div>

            </div>

        </section>

        <section class="testimonials">

            <div class="container">

                <header class="section-header">

                    <h3 class="section-title">Customer Reviews</h3>

                    <p>See what Customers tell about us </p>

                </header>



                <div class="owl-carousel testimonials-carousel">

                    <div class="testimonial-item row align-items-center">

                        <div class="col-sm-3">

                            <div class="testimonial-img">

                                <img src="img/testimonial-1.jpg" alt="Testimonial image">

                            </div>

                        </div>

                        <div class="col-sm-9">

                            <div class="testimonial-text">

                                <h3>Lisa Anderson</h3>

                                <h4>Rating: 4/5 <br>⭐⭐⭐⭐</h4>

                                <p>

                                "The lead generation services have been beneficial for our marketing efforts. Good job!"</p>

                            </div>

                        </div>

                    </div>

                    <div class="testimonial-item row align-items-center">

                        <div class="col-sm-3">

                            <div class="testimonial-img">

                                <img src="img/testimonial-2.jpg" alt="Testimonial image">

                            </div>

                        </div>

                        <div class="col-sm-9">

                            <div class="testimonial-text">

                                <h3>Michael Brown</h3>

                                <h4>Rating: 5/5 <br>⭐⭐⭐⭐🌟</h4>

                                <p>

                                "I highly recommend their services. We've seen a significant increase in our leads since we started working with them."</p>

                            </div>

                        </div>

                    </div>

                    <div class="testimonial-item row align-items-center">

                        <div class="col-sm-3">

                            <div class="testimonial-img">

                                <img src="img/testimonial-3.jpg" alt="Testimonial image">

                            </div>

                        </div>

                        <div class="col-sm-9">

                            <div class="testimonial-text">

                                <h3>Susan Taylor</h3>

                                <h4>Rating: 4/5 <br>⭐⭐⭐⭐</h4>

                                <p>

                                "Their team is dedicated to helping clients succeed. We've had a great experience working with them."</p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <section id="services" class="services">

            <div class="container">

                <header class="section-header">

                    <h3>Frequently Asked Questions</h3>

                    <p>

                    We aim to address your most common queries about [Toriox] and our IT services. We understand that technology can be complex, and you may have questions about how we can assist your business or the specific solutions we offer. This section is designed to provide you with quick and informative answers.                    </p>

                </header>

                <div class="row">

                    <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="single-service">

                            <i class="ion-ios-desktop"></i>

                            <h4>What is lead generation?</h4>

                            <p>Lead generation is the process of attracting and converting potential customers into leads who have shown interest in your product or service.</p>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="single-service">

                            <i class="ion-ios-laptop"></i>

                            <h4>How can I improve my lead generation efforts?</h4>

                            <p>Improving lead generation involves strategies like creating compelling content, optimizing your website, and using effective marketing channels.</p>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="single-service">

                            <i class="ion-ios-tablet-portrait"></i>

                            <h4>Why is email marketing important for lead generation?</h4>

                            <p>Email marketing allows you to nurture leads over time and build relationships, making it a crucial part of the lead generation process.</p>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="single-service">

                            <i class="ion-ios-phone-portrait"></i>

                            <h4>What tools can I use for lead generation?</h4>

                            <p>There are various tools available, including CRM software, email marketing platforms, and lead capture forms, to help with your lead generation efforts.</p>

                        </div>

                    </div>

                    <div class="col-sm-6 col-md-4 col-lg-3">

                        <div class="single-service">

                            <i class="ion-ios-desktop"></i>

                            <h4>Is social media effective for lead generation?</h4>

                            <p>Yes, social media platforms can be powerful tools for lead generation, allowing you to reach and engage with a broad audience.</p>

                        </div>

                    </div>

        </section>



        <section class="call-to-action">

            <div class="container text-center">

                <header class="section-header">

                    <h3>Get Started Today!</h3>

                    <p>

                    Join our community and start optimizing your conversions.</p>

                </header>

                <a class="cta-btn" href="./parcials/signup.php">Sign Up</a>

            </div>

        </section>

        <br><br>





<?php include './footer.php'?>

    <script>

        // JavaScript animations (fade-in for cards)

        const leadCards = document.querySelectorAll('.lead-card');



        leadCards.forEach((card, index) => {

            card.style.animationDelay = `${index * 0.2}s`;

        });

    </script>





    <script src="./parcials/index.js"></script>

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



<a href="new_link_api/index.php" class="btn-get-started">Sign Up</a>

</body>

</html>
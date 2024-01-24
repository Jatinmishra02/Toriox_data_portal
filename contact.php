<?php

// Include your database connection configuration file

include("./parcials/_dbconnection.php");



// Define variables to hold form data and validation messages

$name = $email = $message = "";

$nameErr = $emailErr = $messageErr = "";

$successMessage = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Validate and process the form data

    if (empty($_POST["name"])) {

        $nameErr = "Name is required";

    } else {

        $name = test_input($_POST["name"]);

    }



    if (empty($_POST["email"])) {

        $emailErr = "Email is required";

    } else {

        $email = test_input($_POST["email"]);

        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {

            $emailErr = "Invalid email format";

        }

    }



    if (empty($_POST["message"])) {

        $messageErr = "Message is required";

    } else {

        $message = test_input($_POST["message"]);

    }



    // If there are no validation errors, insert data into the database

    if (empty($nameErr) && empty($emailErr) && empty($messageErr)) {

        // Insert data into the database (similar to your previous code)



        // Display a success message

        $successMessage = "Message stored successfully. Our team will contact you!";

    }

}



// Function to sanitize input data

function test_input($data) {

    $data = trim($data);

    $data = stripslashes($data);

    $data = htmlspecialchars($data);

    return $data;

}

?>

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

         

        <!-- Banner Section Start-->

        <section class="banner">

            <div class="container">

                <div class="col-lg-12">

                    <div class="banner-nav">

                        <div class="banner-box">

                            <a href="../index.php">Home </a>

                            <a href="../contact.php">Contact</a>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- Banner Section End-->

        <!-- Contact Section Start -->

        <section class="contact">

            <div class="container">

                <div class="section-header">

                    <h3 class="section-title">Contact Us</h3>

                    <p>

                    We value your interest in reaching out to us, and we're here to make it as easy as possible for you to get in touch. Whether you have questions about our services, want to discuss a potential partnership, need technical support, or simply wish to say hello, we're just a message away.</p>

                </div>



                <div class="row contact-info">

                    <div class="col-md-4">

                        <div class="contact-address">

                            <i class="ion-md-pin"></i>

                            <h3>Address</h3>

                            <address>NO 30/3A, 32, 1A&1B,

Vascon Weikfield Corporate Park Hyatt Hotel,

OFF. NO 902 PLATINUM SQUARE S,30/3B 31/1, Nagar Rd, Pune, Maharashtra 411014</address>

                        </div>

                    </div>



                    <div class="col-md-4">

                        <div class="contact-phone">

                            <i class="ion-md-call"></i>

                            <h3>Phone Number</h3>

                            <p><a href="tel:+91 20 4864 0957">+91 20 4864 0957</a></p>

                        </div>

                    </div>



                    <div class="col-md-4">

                        <div class="contact-email">

                            <i class="ion-md-mail"></i>

                            <h3>Email</h3>

                            <p><a href="mailto:contactus@toriox.net">contactus@toriox.net</a></p>

                        </div>

                    </div>

                </div>



                <div class="row">

                    <div class="col-md-6">

                        <div class="map">

                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26361250.667320687!2d-113.75533773453304!3d36.24128894212527!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1574923227698!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                        </div>

                    </div>

                    <div class="col-md-6">

                        <div class="form">

                          <?php if (!empty($successMessage)) : ?>

          <div class="success-message"><?php echo $successMessage; ?></div>

      <?php else : ?>

          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

          <div class="form-group col-md-6">

                  <label for="name">Name</label>

                  <input type="text" id="name" name="name" required>

                  <span class="error"><?php echo $nameErr; ?></span>

              </div>

              <div class="form-group col-md-6">

                  <label for ="email">Email</label>

                  <input type="email" id="email" name="email" required>

                  <span class="error"><?php echo $emailErr; ?></span>

      </div> <br>

              <div class="form-group col-md-6">

                  <label for="message">Message</label>

                  <textarea id="message" name="message" required></textarea>

                  <span class="error"><?php echo $messageErr; ?></span>

              </div>

              <div class="form-group">

                  <button type="submit">Submit</button>

              </div>

          </form>

    <?php endif; ?>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!-- Contact Section End -->



        <!-- Footer Start -->



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



</body>

</html><script>(function($){

  var canvas = $('#bg').children('canvas'),

    background = canvas[0],

    foreground1 = canvas[1],

    foreground2 = canvas[2],

    config = {

      circle: {

        amount: 18,

        layer: 3,

        color: [157, 97, 207],

        alpha: 0.3

      },

      line: {

        amount: 12,

        layer: 3,

        color: [255, 255, 255],

        alpha: 0.3

      },

      speed: 0.5,

      angle: 20

    };



  if (background.getContext){

    var bctx = background.getContext('2d'),

      fctx1 = foreground1.getContext('2d'),

      fctx2 = foreground2.getContext('2d'),

      M = window.Math, // Cached Math

      degree = config.angle/360*M.PI*2,

      circles = [],

      lines = [],

      wWidth, wHeight, timer;

    

    requestAnimationFrame = window.requestAnimationFrame || 

      window.mozRequestAnimationFrame ||

      window.webkitRequestAnimationFrame ||

      window.msRequestAnimationFrame ||

      window.oRequestAnimationFrame ||

      function(callback, element) { setTimeout(callback, 1000 / 60); };



    cancelAnimationFrame = window.cancelAnimationFrame ||

      window.mozCancelAnimationFrame ||

      window.webkitCancelAnimationFrame ||

      window.msCancelAnimationFrame ||

      window.oCancelAnimationFrame ||

      clearTimeout;



    var setCanvasHeight = function(){

      wWidth = $(window).width();

      wHeight = $(window).height(),



      canvas.each(function(){

        this.width = wWidth;

        this.height = wHeight;

      });

    };



    var drawCircle = function(x, y, radius, color, alpha){

      var gradient = fctx1.createRadialGradient(x, y, radius, x, y, 0);

      gradient.addColorStop(0, 'rgba('+color[0]+','+color[1]+','+color[2]+','+alpha+')');

      gradient.addColorStop(1, 'rgba('+color[0]+','+color[1]+','+color[2]+','+(alpha-0.1)+')');



      fctx1.beginPath();

      fctx1.arc(x, y, radius, 0, M.PI*2, true);

      fctx1.fillStyle = gradient;

      fctx1.fill();

    };



    var drawLine = function(x, y, width, color, alpha){

      var endX = x+M.sin(degree)*width,

        endY = y-M.cos(degree)*width,

        gradient = fctx2.createLinearGradient(x, y, endX, endY);

      gradient.addColorStop(0, 'rgba('+color[0]+','+color[1]+','+color[2]+','+alpha+')');

      gradient.addColorStop(1, 'rgba('+color[0]+','+color[1]+','+color[2]+','+(alpha-0.1)+')');



      fctx2.beginPath();

      fctx2.moveTo(x, y);

      fctx2.lineTo(endX, endY);

      fctx2.lineWidth = 3;

      fctx2.lineCap = 'round';

      fctx2.strokeStyle = gradient;

      fctx2.stroke();

    };



    var drawBack = function(){

      bctx.clearRect(0, 0, wWidth, wHeight);



      var gradient = [];

      

      gradient[0] = bctx.createRadialGradient(wWidth*0.3, wHeight*0.1, 0, wWidth*0.3, wHeight*0.1, wWidth*0.9);

      gradient[0].addColorStop(0, 'rgb(0, 26, 77)');

      gradient[0].addColorStop(1, 'transparent');



      bctx.translate(wWidth, 0);

      bctx.scale(-1,1);

      bctx.beginPath();

      bctx.fillStyle = gradient[0];

      bctx.fillRect(0, 0, wWidth, wHeight);



      gradient[1] = bctx.createRadialGradient(wWidth*0.1, wHeight*0.1, 0, wWidth*0.3, wHeight*0.1, wWidth);

      gradient[1].addColorStop(0, 'rgb(0, 150, 240)');

      gradient[1].addColorStop(0.8, 'transparent');



      bctx.translate(wWidth, 0);

      bctx.scale(-1,1);

      bctx.beginPath();

      bctx.fillStyle = gradient[1];

      bctx.fillRect(0, 0, wWidth, wHeight);



      gradient[2] = bctx.createRadialGradient(wWidth*0.1, wHeight*0.5, 0, wWidth*0.1, wHeight*0.5, wWidth*0.5);

      gradient[2].addColorStop(0, 'rgb(40, 20, 105)');

      gradient[2].addColorStop(1, 'transparent');



      bctx.beginPath();

      bctx.fillStyle = gradient[2];

      bctx.fillRect(0, 0, wWidth, wHeight);

    };



    var animate = function(){

      var sin = M.sin(degree),

        cos = M.cos(degree);



      if (config.circle.amount > 0 && config.circle.layer > 0){

        fctx1.clearRect(0, 0, wWidth, wHeight);

        for (var i=0, len = circles.length; i<len; i++){

          var item = circles[i],

            x = item.x,

            y = item.y,

            radius = item.radius,

            speed = item.speed;



          if (x > wWidth + radius){

            x = -radius;

          } else if (x < -radius){

            x = wWidth + radius

          } else {

            x += sin*speed;

          }



          if (y > wHeight + radius){

            y = -radius;

          } else if (y < -radius){

            y = wHeight + radius;

          } else {

            y -= cos*speed;

          }



          item.x = x;

          item.y = y;

          drawCircle(x, y, radius, item.color, item.alpha);

        }

      }



      if (config.line.amount > 0 && config.line.layer > 0){

        fctx2.clearRect(0, 0, wWidth, wHeight);

        for (var j=0, len = lines.length; j<len; j++){

          var item = lines[j],

            x = item.x,

            y = item.y,

            width = item.width,

            speed = item.speed;



          if (x > wWidth + width * sin){

            x = -width * sin;

          } else if (x < -width * sin){

            x = wWidth + width * sin;

          } else {

            x += sin*speed;

          }



          if (y > wHeight + width * cos){

            y = -width * cos;

          } else if (y < -width * cos){

            y = wHeight + width * cos;

          } else {

            y -= cos*speed;

          }

          

          item.x = x;

          item.y = y;

          drawLine(x, y, width, item.color, item.alpha);

        }

      }



      timer = requestAnimationFrame(animate);

    };



    var createItem = function(){

      circles = [];

      lines = [];



      if (config.circle.amount > 0 && config.circle.layer > 0){

        for (var i=0; i<config.circle.amount/config.circle.layer; i++){

          for (var j=0; j<config.circle.layer; j++){

            circles.push({

              x: M.random() * wWidth,

              y: M.random() * wHeight,

              radius: M.random()*(20+j*5)+(20+j*5),

              color: config.circle.color,

              alpha: M.random()*0.2+(config.circle.alpha-j*0.1),

              speed: config.speed*(1+j*0.5)

            });

          }

        }

      }



      if (config.line.amount > 0 && config.line.layer > 0){

        for (var m=0; m<config.line.amount/config.line.layer; m++){

          for (var n=0; n<config.line.layer; n++){

            lines.push({

              x: M.random() * wWidth,

              y: M.random() * wHeight,

              width: M.random()*(20+n*5)+(20+n*5),

              color: config.line.color,

              alpha: M.random()*0.2+(config.line.alpha-n*0.1),

              speed: config.speed*(1+n*0.5)

            });

          }

        }

      }



      cancelAnimationFrame(timer);

      timer = requestAnimationFrame(animate);

      drawBack();

    };



    $(document).ready(function(){

      setCanvasHeight();

      createItem();

    });

    $(window).resize(function(){

      setCanvasHeight();

      createItem();

    });

  }

})(jQuery);</script>

</html>
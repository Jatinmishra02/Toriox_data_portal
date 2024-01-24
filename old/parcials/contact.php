<?php
// Include your database connection configuration file
include("_dbconnection.php");

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    <style>


#bg {
 background: #090d00;
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

#bg canvas {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}</style>
<div id="bg">
  <canvas></canvas>
  <canvas></canvas>
  <canvas></canvas>
</div>
</body>


    <style>
        /* Style for main container */
        body{
            color: #fff;
        }
        .contact {
            text-align: center;
            margin: 0 auto;
            max-width: 500px;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Style for error messages */
        .error {
            color: #d9534f; /* Red color for errors */
            font-size: 14px;
        }

        /* Style for success message */
        .success-message {
            color: #5bc0de; /* Blue color for success message */
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin-top: 20px;
        }

        /* Style for form elements */
        label {
            display: block;
            margin-top: 10px;
        }

        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 10px;
            border-radius: 5px;
            cursor: pointer;
        }
           .custom-btn {
        width: 130px;
        height: 40px;
        color: #fff;
        border-radius: 5px;
        padding: 10px 25px;
        font-family: 'Lato', sans-serif;
        font-weight: 500;
        background: transparent;
        cursor: pointer;
        transition: all 0.3s ease;
        position: absolute;
        left: 20px; /* Adjust the left position as needed */
        top: 20px; /* Adjust the top position as needed */
        z-index: 2; /* Ensure it's on top of other content */
    }

    .btn-16 {
        border: none;
        color: #000;
    }

    .btn-16:after {
        position: absolute;
        content: "";
        width: 0;
        height: 100%;
        top: 0;
        left: 0;
        direction: rtl;
        z-index: -1;
        box-shadow:
            -7px -7px 20px 0px #fff9,
            -4px -4px 5px 0px #fff9,
            7px 7px 20px 0px #0002,
            4px 4px 5px 0px #0001;
        transition: all 0.3s ease;
    }

    .btn-16:hover {
        color: #000;
    }

    .btn-16:hover:after {
        left: auto;
        right: 0;
        width: 100%;
    }

    .btn-16:active {
        top: 2px;
    }
 
    .material-symbols-outlined {
      font-variation-settings:
      'FILL' 0,
      'wght' 400,
      'GRAD' 0,
      'opsz' 24;
    }
    </style>
</head>
<body>
    <a href="../index.php">
    <button class="custom-btn btn-16">
        <span class="material-symbols-outlined">
            home
        </span>
    </button>
</a>
    <div class="contact">
        <h1>Contact Us</h1>
        
        <?php if (!empty($successMessage)) : ?>
            <div class="success-message"><?php echo $successMessage; ?></div>
        <?php else : ?>
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
                <div>
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>
                    <span class="error"><?php echo $nameErr; ?></span>
                </div>
                <div>
                    <label for "email">Email</label>
                    <input type="email" id="email" name="email" required>
                    <span class="error"><?php echo $emailErr; ?></span>
                </div>
                <div>
                    <label for="message">Message</label>
                    <textarea id="message" name="message" required></textarea>
                    <span class="error"><?php echo $messageErr; ?></span>
                </div>
                <div>
                    <button type="submit">Submit</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
</body>
<script>(function($){
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
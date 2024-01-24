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

       <link rel="shortcut icon" href="./parcials/images/favicon.ico" type="image/x-icon">

   

    <link rel="stylesheet" href="./parcials/footer.css">

</head>

<body>

  <style>

        /* General Styles */

      @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

body{

    margin: 0px ;

    padding: 0px;

}

.homeContainer{

    display: flex;

    justify-content: center;

    align-items: center;

    padding: 1vmax 5vmax;



}

.context {

    

    width: 100%;

    position: absolute;

   top:4vmax

    

}

.context h1{

    text-align: center;

    color: #fff;

    font-size: 40px;

}

.area{

    background: #63b1ff;  

    background: -webkit-linear-gradient(to left, #ffffff, #3489ff);  

    width: 100%;

    height:80vh;

  

    box-sizing: border-box;



}





.button-40 {

  background-color: white;

  color:black;

  border: 1px solid transparent;

  background-color: #fff;

  border: 2px solid  #111827;

  border-radius: 1.25rem;

  box-sizing: border-box;



  cursor: pointer;

  flex: 0 0 auto;

  font-family: "Inter var",ui-sans-serif,system-ui,-apple-system,system-ui,"Segoe UI",Roboto,"Helvetica Neue",Arial,"Noto Sans",sans-serif,"Apple Color Emoji","Segoe UI Emoji","Segoe UI Symbol","Noto Color Emoji";

  font-size: 1.3rem;

  font-weight: 600;

  line-height: .8rem;

  padding: .35rem .5rem;

  text-align: center;

  text-decoration: none #6B7280 solid;

  text-decoration-thickness: auto;

  transition-duration: .2s;

  transition-property: background-color,border-color,color,fill,stroke;

  transition-timing-function: cubic-bezier(.4, 0, 0.2, 1);

  user-select: none;

  -webkit-user-select: none;

  touch-action: manipulation;

  width: auto;

  margin-top:-5px;

}



.button-40:hover {

    color:white;

  background-color:black;

}



@media (min-width: 768px) {

  .button-40 {

    padding: .75rem 1.5rem;

  }

}



.circles{

    margin-top: -15px;

}

.circles li{

    position: absolute;

    display: block;

    list-style: none;

    width: 20px;

    height: 20px;

    background: rgba(255, 255, 255, 0.2);

    animation: animate 25s linear infinite;

    bottom: -150px;

    

}



.circles li:nth-child(1){

    left: 25%;

    width: 80px;

    height: 80px;

    animation-delay: 0s;

}





.circles li:nth-child(2){

    left: 10%;

    width: 20px;

    height: 20px;

    animation-delay: 2s;

    animation-duration: 12s;

}



.circles li:nth-child(3){

    left: 70%;

    width: 20px;

    height: 20px;

    animation-delay: 4s;

}



.circles li:nth-child(4){

    left: 40%;

    width: 60px;

    height: 60px;

    animation-delay: 0s;

    animation-duration: 18s;

}



.circles li:nth-child(5){

    left: 65%;

    width: 20px;

    height: 20px;

    animation-delay: 0s;

}



.circles li:nth-child(6){

    left: 75%;

    width: 110px;

    height: 110px;

    animation-delay: 3s;

}



.circles li:nth-child(7){

    left: 35%;

    width: 150px;

    height: 150px;

    animation-delay: 7s;

}



.circles li:nth-child(8){

    left: 50%;

    width: 25px;

    height: 25px;

    animation-delay: 15s;

    animation-duration: 45s;

}



.circles li:nth-child(9){

    left: 20%;

    width: 15px;

    height: 15px;

    animation-delay: 2s;

    animation-duration: 35s;

}



.circles li:nth-child(10){

    left: 85%;

    width: 150px;

    height: 150px;

    animation-delay: 0s;

    animation-duration: 11s;

}







@keyframes animate {



    0%{

        transform: translateY(0) rotate(0deg);

        opacity: 1;

        border-radius: 0;

    }



    100%{

        transform: translateY(-1000px) rotate(720deg);

        opacity: 0;

        border-radius: 50%;

    }



}

.box{

   display: flex;

   flex-direction: column;

    justify-content: center;

    text-align: center;

    margin-top:100px;

    padding-top: 100px;

    height: 100px;

;

}

.heading{

    margin-top: 3vmax;

    font-size: xx-large;

    font-family: sans-serif;

}

.heading2{

    margin: 3vmax 0vmax;

    font-size: large;

    font-family: sans-serif;

}

.rating{

    margin-top: 1vmax;

}

.imageBox{

 padding: 20px 20px;

 width: 70%;

 height: 70vh;

 display: flex;



}

img{

    width: 100%;

    height: 100%;

}

/* Define styles for desktop screens */



  

  /* Add media query for tablet screens */

  @media (max-width: 768px) {

    .box {

        height:auto;

      padding: 50px;

    }

  }



  /* Add media query for mobile screens */

  @media (max-width: 680px) {

    .box {

        margin-top:10px;

 padding: 5px;

    height: auto;

    }

    .heading h1 {

      font-size: 24px;

    }

    .heading2 h3 {

      font-size: 16px;

    }

    .homeContainer{

        margin-top: 50px;

        display: flex;

        flex-direction: column;

    }

    .logo{

        display: flex; 

        align-items: center;

        justify-content: center;

    }

    .imageBox{

        padding: 5px 5px;

        width: 100%;

        height: 30vh;

        display: flex;

   

    }



  }

  /* Header Styles */

.header {

    text-align: center;

    padding: 20px;

    background-color: #3498db;

    color: white;

 background: rgb(253,29,29);

background: linear-gradient(90deg, rgba(253,29,29,1) 15%, rgba(252,250,69,1) 100%);

}



.google-icon {

    font-size: 6rem;

}



.main-title {

    font-size: 2.5rem;

    margin-top: 1rem;

    font-weight: bold;

}



.subtitle {

    font-size: 1.5rem;

    margin-top: 1rem;

}



.cta-link a {

    color: #3498db;

    text-decoration: none;

    font-weight: bold;

}



/* Options Container Styles */

.options-container {

    display: flex;

    justify-content: space-around;

    background-color: #f5f5f5;

    padding: 1rem;

   

}



.options-container .option {

    flex: 1;

    padding: 1rem;

    text-align: center;

    border: 1px solid #ccc;

    cursor: pointer;

    transition: background-color 0.3s ease-in-out;

}



.options-container .option:hover {

    background-color: #3498db;

    color: white;

}



/* Feature Section Styles */

.feature-section {

    background-color: #f5f5f5;

    padding: 2rem;

   

}



.feature-section h2 {

    font-size: 1.5rem;

    font-weight: bold;

    margin-bottom: 1rem;

}



.feature-section p {

    font-size: 1.2rem;

    line-height: 1.5;

}



/* ... Other section styles ... */



/* CTA Section Styles */

.cta-section {

    background-color: #3498db;

    color: white;

    text-align: center;

    padding: 2rem;

 

}



.cta-box {

    margin: 0 auto;

    max-width: 400px;

}



.cta-title {

    font-size: 2rem;

    font-weight: bold;

    margin-bottom: 1rem;

}



.cta-subtitle {

    font-size: 1.2rem;

    margin-top: 1rem;

}



.cta-button {

    background-color: white;

    color: #3498db;

    font-weight: bold;

    padding: 0.5rem 1rem;

    font-size: 1.2rem;

    border: none;

    border-radius: 25px;

    margin-top: 1rem;

    text-decoration: none;

    display: inline-block;

    cursor: pointer;

    transition: background-color 0.3s ease-in-out, color 0.3s ease-in-out;

}



.cta-button:hover {

    background-color: #555;

    color: white;

}



        /* Lead Generation Section Styles */

        .lead-section {

            display: flex;

            justify-content: center;

            align-items: center;

            background: #007bff;

            color: #fff;

            padding: 40px;

        }



        .lead-card {

            background: #fff;

            color: #000;

            border-radius: 10px;

            padding: 20px;

            margin: 10px;

            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);

            text-align: center;

            width: 300px;

            transition: transform 0.2s; /* Add transition for the scaling effect */

        }



        /* Add hover effect */

        .lead-card:hover {

            transform: scale(1.05); /* Scale the card on hover */

        }



        /* Responsive Styles */

        @media (max-width: 768px) {

            .lead-section {

                flex-direction: column;

            }



            .lead-card {

                width: 80%;

            }

        }



        /* JavaScript animations */

        .lead-card {

            animation: fadeIn 1s;

        }



        @keyframes fadeIn {

            0% {

                opacity: 0;

                transform: translateY(20px);

            }

            100% {

                opacity: 1;

                transform: translateY(0);

            }

        }

    </style>





<div class="context">

    <div class="homeContainer">

        <div class="box">

            <div class="heading">

                <h1>Easy and Powerful way to Drive Huge Results, FAST!</h1>

            </div>

            <div class="heading2">

                <h3>See why over 1,000,00 people joined TorioxLead last year Meet some of the 16,000 sales teams that move business forward with TorioxLead.</h3>

            </div>

            <div>

                <a href="./parcials/signup.php"><button class="button-40" role="button"><?php echo "$text"?></button></a>

            </div>

            <div class='rating'>

                <h3>Rating 4.5</h3>

                  <h3>⭐⭐⭐⭐🌟</h3>

                <!-- Add your Rating component here -->

            </div>

        </div>

      

    </div>

</div>



<div class="area" >

            <ul class="circles">

                    <li></li>

                    <li></li>

                    <li></li>

                    <li></li>

                    <li></li>

                    <li></li>

                    <li></li>

                    <li></li>

                    <li></li>

                    <li></li>

            </ul>

    </div >

<section>

        <div class="header">

            <i class="google-icon"></i>

            <h1 class="main-title">Easy and Powerful way to Drive Huge Results</h1>

            <p class="subtitle"></p>

            <div class="cta-link"><a href="#">See our proven 3-step process</a></div>

        </div>



        <div class="options-container">

            <div class="option" id="option1">Grow Your Email List</div>

            <div class="option" id="option2">Capture More Leads</div>

            <div class="option" id="option3">Increase Sales Conversion</div>

        </div>



        <div class="feature-section">

            <h2>Global Workforce Solutions</h2>

            <p>Unlock Prosperity: Toriox is more than an idea; it's a global vision. We facilitate wealth creation by connecting rising talents worldwide with developed nations, offering cost-effective solutions. Our journey extends from India to the shores of the US, UK, Canada, Australia, and beyond. We're dedicated to understanding the Indian IT narrative and tapping into the best talent pools in Accounts and Finance.</p>

        </div>

<section class="lead-section">

        <div class="lead-card">

            <h2>Lead Generation Services</h2>

            <p>Boost your business with our lead generation services. We help you acquire high-quality leads to grow your customer base and increase revenue.</p>

        </div>

        <div class="lead-card">

            <h2>Conversion Optimization</h2>

            <p>Maximize your conversion rates with our proven strategies. We analyze user behavior and implement changes to turn visitors into leads.</p>

        </div>

        <div class="lead-card">

            <h2>Email Marketing Campaigns</h2>

            <p>Stay in touch with your leads through effective email marketing campaigns. Nurture leads and convert them into loyal customers.</p>

        </div>

    </section>

    <?php include './data.php'?>

    <?php include './review.php'?>

     <?php include './faq.php'?>

        <!-- ... Other sections ... -->



        <div class="cta-section">

            <div class="cta-box">

                <h2 class="cta-title">Get Started Today!</h2>

                <p class="cta-subtitle">Join our community and start optimizing your conversions.</p>

                <button class="cta-button"><a href="./parcials/signup.php"><?php echo "$text"?></a></button>

            </div>

        </div>

    </section>

<?php include './footer.php'?>

</section>

    


        
    <script>

        // JavaScript animations (fade-in for cards)

        const leadCards = document.querySelectorAll('.lead-card');



        leadCards.forEach((card, index) => {

            card.style.animationDelay = `${index * 0.2}s`;

        });

    </script>



    <script src="./parcials/index.js"></script>

</body>

</html>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TorioxLead</title>
    <!-- Include your CSS file here -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

</head>
<?php
session_start();
 if (isset($_SESSION['user_id'])) {
    // User is already logged in, redirect to the home page or any other page
    $buttonText = "logout";
}
else {
    $buttonText = "login";
}
?>
<body>
    <style>
        body{
    margin: 0px ;
    padding: 0px;
}

.navbar input[type="checkbox"],
.navbar .hamburger-lines{
    display: none;
}

.container{
    max-width: 100%;
    width: 100%;
 
}

.navbar{
    box-shadow: 0px 5px 10px 0px #aaa;
    position: relative;
    width: 100%;
    background: #fff;
    color: #000;
   padding: 5px 20px ;
    z-index: 100;
    box-sizing: border-box;
}

.navbar-container{
    display: flex;
    justify-content: space-between;
    height: 64px;
    align-items: center;
}

.menu-items{
    order: 2;
    display: flex;
}
.logo{
 margin-top: 25px;
    font-size: 2.3rem;
}

.menu-items li{
    list-style: none;
    margin-left: 1.5rem;
    font-size: 1.3rem;
}

.navbar a {
    color: #444;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease-in-out;
   
}

.navbar a:hover{
    color: green;
      font-weight:700;
}
.submenu {
    display: none;
    position: absolute;
    background-color: #333;
    list-style: none;
    padding: 10px;
    margin: 0;
    top: 100%;
    left: 0;
}
/* Dropdown Button */
.dropbtn {
    background-color: #fff8f8;
    color: #333;
    padding: 0;
    font-size: 16px;
    border: none;
    margin: 5px 10px;
    font-size: 1.2rem;
  }
  
  /* The container <div> - needed to position the dropdown content */
  .dropdown {
    position: relative;
    display: inline-block;
  }
  
  /* Dropdown Content (Hidden by Default) */
  .dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
  }
  
  /* Links inside the dropdown */
  .dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
  }
  
  /* Change color of dropdown links on hover */
  .dropdown-content a:hover {background-color: #ddd;
text-decoration: underline;}
  
  /* Show the dropdown menu on hover */
  .dropdown:hover .dropdown-content {display: block;}
  
  /* Change the background color of the dropdown button when the dropdown content is shown */
  .dropdown:hover .dropbtn {
    color:  #117964;
text-decoration: underline;
background-color: #ddd;
}

@media (max-width: 600px){
    .navbar{
        opacity: 0.95;
    }

    .navbar-container input[type="checkbox"],
    .navbar-container .hamburger-lines{
        display: block;
    }

    .navbar-container{
        display: block;
        position: relative;
        height: 64px;
    }

    .navbar-container input[type="checkbox"]{
        position: absolute;
        display: block;
        height: 32px;
        width: 30px;
        top: 20px;
        left: 20px;
        z-index: 5;
        opacity: 0;
        cursor: pointer;
    }

    .navbar-container .hamburger-lines{
        display: block;
        height: 28px;
        width: 35px;
        position: absolute;
        top: 20px;
        left: 20px;
        z-index: 2;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .navbar-container .hamburger-lines .line{
        display: block;
        height: 4px;
        width: 100%;
        border-radius: 10px;
        background: #333;
    }
    
    .navbar-container .hamburger-lines .line1{
        transform-origin: 0% 0%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar-container .hamburger-lines .line2{
        transition: transform 0.2s ease-in-out;
    }

    .navbar-container .hamburger-lines .line3{
        transform-origin: 0% 100%;
        transition: transform 0.3s ease-in-out;
    }

    .navbar .menu-items{
        padding-top: 100px;
        background: #fff;
        height: 100vh;
        max-width: 300px;
        transform: translate(-150%);
        display: flex;
        flex-direction: column;
        margin-left: -40px;
        padding-left: 40px;
        transition: transform 0.5s ease-in-out;
        box-shadow:  5px 0px 10px 0px #aaa;
        overflow: scroll;
    }

    .navbar .menu-items li{
        margin-bottom: 1.8rem;
        font-size: 1.1rem;
        font-weight: 500;
    }
  h1{
    font-size: 24px;
    margin: 0px 0px;
  }
    .logo{
      
        font-size: 2rem;
    }
 
    .navbar-container input[type="checkbox"]:checked ~ .menu-items{
        transform: translateX(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line1{
        transform: rotate(45deg);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line2{
        transform: scaleY(0);
    }

    .navbar-container input[type="checkbox"]:checked ~ .hamburger-lines .line3{
        transform: rotate(-45deg);
    }

}
.btn{
    background-color: #117964;
    
   }
@media (max-width: 600px){
    .navbar-container input[type="checkbox"]:checked ~ .logo{
        display: none;
    }
    .torioxlogo{
   margin-left: 30%;
    width: 150px;
    height: 70px;
}
}
a#name {
    background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(34,213,106,1) 0%, rgba(249,255,0,1) 100%);
    padding:10px;
}
.torioxlogo{
    width: 150px;
    height: 70px;
}
.logo-holder{
  text-align:center;
}
.logo-9{
    position:relative;
}
.logo-9 i{
    font-size:80px;
    position:absolute;
    z-index:0;
    text-align:center;
    width:100%;
    left:0;
    top:-10px;
    color:Black;
    -webkit-animation:ring 2s ease infinite;
    animation:ring 2s ease infinite;
}
.logo-9 h3{
    font-family: 'Lora', serif;
    font-weight:600;
    
    font-size:30px;
    position:relative;
    z-index:1;
    color:black;
    text-shadow: 3px 3px 0 #fff, -3px -3px 0 #fff, 3px -3px 0 #fff, -3px 3px 0 #fff;
}
    </style>
    
    <nav class="navbar">
        <div class="navbar-container container">
        <div class="logo-holder logo-9">
        <a href="">
          <span><i class="fas fa-bell"></i></span>
          <h3>Toriox Data</h3>
        </a>
      </div>
            <input type="checkbox" name="" id="" />
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li>
                    <a href="./index.php">Home</a>
                </li>
                <li>
                    <a href="./parcials/about.php">About</a>
                </li>
                <li>
                 <a href="./solution.php">Solution</a>
                </li>
                <li>
                    <a href="./parcials/contact.php">Contact</a>
                </li>
                <li>
                <a href="./parcials/<?php echo"$buttonText" ?>.php">  
                <button class="button-40"> <?php echo "$buttonText" ?></button></li></a>
              
            </ul>
        </div>
    </nav>
</body>
</html>
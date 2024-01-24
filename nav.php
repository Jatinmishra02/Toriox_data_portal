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
    <!-- Header Section Start -->
    <header class="header">
        <div class="container-fluid">
            <div class="logo pull-left">
                <h1><a href="index.php">Toriox Data</a></h1>
                <!-- <a href="#"><img src="img/logo.png" alt="" title="" /></a> -->
            </div>

            <nav class="navbar navbar-expand-lg navbar-light bg-">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="nav-menu navbar-nav ml-auto">
                        <li class="menu-active"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a href="solution.php">Solution</a></li>
                        <li><a href="contact.php">Contact</a></li>
                        <?php if (isset($_SESSION['user_id'])) : ?>
                            <li><a href="./parcials/logout.php">Logout</a></li>
                        <?php else : ?>
                            <li><a href="./parcials/login.php">Login</a></li>
                        <?php endif; ?>
                    </ul>
                </div>
            </nav>
        </div>
    </header>
    <!-- Header Section End -->

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>

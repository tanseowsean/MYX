<?php
if (isset($_SESSION['username']))
{
    $username = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="icon" href="images/favicon.png" type="image/png" sizes="16x16">
    <title>MYX Baggage Tracking System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500&display=swap" rel="stylesheet">
</head>

<body>

    <div class="container">

        <!-- Header -->
        <header>
            <div class="logo"><img src="images/logoXS.png" alt=""></div>
            <div class="account">
                <div class="text">
                    Hello, <?php echo $username; ?>
                    <a href="logout.php" class="logout">Log Out</a>
                </div>
                <img src="images/user.png" alt="">
            </div>
        </header>
        <!-- /Header -->

        <!-- Menu -->
        <div class="menu">
            <a href="personnel-mainmenu.php" class="item">
                <div class="icon"><img src="images/icon-menu.png" alt=""></div>
                <div class="text">Main Menu</div>
            </a>
            <a href="personnel-checkinairport.php" class="item">
                <div class="icon"><img src="images/icon-checkin.png" alt=""></div>
                <div class="text">Check In</div>
            </a>
            <a href="personnel-flightsmain.php" class="item">
                <div class="icon"><img src="images/icon-plane.png" alt=""></div>
                <div class="text">Flights</div>
            </a>
            <a href="personnel-configure.php" class="item">
                <div class="icon"><img src="images/icon-gear.png" alt=""></div>
                <div class="text">Configure</div>
            </a>
            <a href="personnel-baggage.php" class="item">
                <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
                <div class="text">Baggage</div>
            </a>
            <a href="personnel-analytics.php" class="item">
                <div class="icon"><img src="images/icon-data-analytics.png" alt=""></div>
                <div class="text">Analytics</div>
            </a>
        </div>
        <!-- /Menu -->

        <!-- Hamburger -->
        <div class="hamburger">
            <img src="images/hamburger.png" alt=""> MENU
        </div>
        <!--/Hamburger -->

        <!-- Mobile Menu -->
        <div class="mobile-menu">
            <a href="personnel-mainmenu.php" class="item">
                <div class="icon"><img src="images/icon-menu.png" alt=""></div>
                <div class="text">Main Menu</div>
            </a>
            <a href="personnel-checkin.php" class="item">
                <div class="icon"><img src="images/icon-checkin.png" alt=""></div>
                <div class="text">Check In</div>
            </a>
            <a href="personnel-flightsmain.php" class="item">
                <div class="icon"><img src="images/icon-plane.png" alt=""></div>
                <div class="text">Flights</div>
            </a>
            <a href="personnel-configure.php" class="item">
                <div class="icon"><img src="images/icon-gear.png" alt=""></div>
                <div class="text">Configure</div>
            </a>
            <a href="personnel-baggage.php" class="item">
                <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
                <div class="text">Baggage</div>
            </a>
            <a href="personnel-analytics.php" class="item">
                <div class="icon"><img src="images/icon-data-analytics.png" alt=""></div>
                <div class="text">Analytics</div>
            </a>
            <div class="close"><img src="images/close.png" alt=""></div>
        </div>
        <!-- /Mobile Menu -->
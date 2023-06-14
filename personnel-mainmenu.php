<?php
    require_once 'Firestore.php';
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
                    Hello, Xuan
                    <a href="#" class="logout">Log Out</a>
                </div>
                <img src="images/user.png" alt="">
            </div>
        </header>
        <!-- /Header -->

        <!-- Menu -->
        <div class="menu">
            <a href="personnel-mainmenu.html" class="item">
                <div class="icon"><img src="images/icon-menu.png" alt=""></div>
                <div class="text">Main Menu</div>
            </a>
            <a href="personnel-checkin.html" class="item">
                <div class="icon"><img src="images/icon-checkin.png" alt=""></div>
                <div class="text">Check In</div>
            </a>
            <a href="personnel-flights.html" class="item">
                <div class="icon"><img src="images/icon-plane.png" alt=""></div>
                <div class="text">Flights</div>
            </a>
            <a href="personnel-configure.html" class="item">
                <div class="icon"><img src="images/icon-gear.png" alt=""></div>
                <div class="text">Configure</div>
            </a>
            <a href="personnel-baggage.html" class="item">
                <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
                <div class="text">Baggage</div>
            </a>
            <a href="personnel-analytics.html" class="item">
                <div class="icon"><img src="images/icon-data-analytics.png" alt=""></div>
                <div class="text">Analytics</div>
            </a>
        </div>
        <!-- /Menu -->

        <!-- Content-Area -->
        <div class="content">

            <div class="grid">
                <a href="personnel-checkin.html" class="item">
                    <div class="icon"><img src="images/icon-checkin.png" alt=""></div>
                    <div class="text">Check In</div>
                </a>
                <a href="personnel-flights.html" class="item">
                    <div class="icon"><img src="images/icon-plane.png" alt=""></div>
                    <div class="text">Flights</div>
                </a>
                <a href="personnel-configure.html" class="item">
                    <div class="icon"><img src="images/icon-gear.png" alt=""></div>
                    <div class="text">Configure</div>
                </a>
                <a href="personnel-baggage.html" class="item">
                    <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
                    <div class="text">Baggage</div>
                </a>
                <a href="personnel-analytics.html" class="item">
                    <div class="icon"><img src="images/icon-data-analytics.png" alt=""></div>
                    <div class="text">Analytics</div>
                </a>
            </div>

        </div>
        <!-- /Content-Area -->

        <!-- Footer -->
        <footer>
            <div class="logo">
                <img src="images/logo-wt.png" alt="">
            </div>
            <div class="copyright">
                Copyright © MYX Baggage Tracking System 2023 All Rights Reserved.
            </div>
        </footer>
        <!-- /Footer -->

    </div>

</body>

</html>
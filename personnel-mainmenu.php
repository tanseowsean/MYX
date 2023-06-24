<?php
session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="grid">
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
    </div>
    <div class="grid two">
        <a href="personnel-baggage.php" class="item">
            <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
            <div class="text">Baggage</div>
        </a>
        <a href="personnel-analytics.php" class="item">
            <div class="icon"><img src="images/icon-data-analytics.png" alt=""></div>
            <div class="text">Analytics</div>
        </a>
    </div>

</div>
<!-- /Content-Area -->

<?php
include 'footer.php';
?>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
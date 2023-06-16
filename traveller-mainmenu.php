<?php
session_start();
if (!isset($_SESSION['travellerUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'traveller-header.php';
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="grid two">
        <a href="traveller-airports.php" class="item">
            <div class="icon"><img src="images/icon-plane.png" alt=""></div>
            <div class="text">Flights</div>
        </a>
        <a href="traveller-baggage.php" class="item">
            <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
            <div class="text">Baggage</div>
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
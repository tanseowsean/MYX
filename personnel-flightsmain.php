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

    <!-- display flights menu options -->
    <div class="grid">
        <a href="personnel-flights.php" class="item">
            <div class="icon"><img src="images/icon-list.png" alt=""></div>
            <div class="text">Manage Flights</div>
        </a>
        <a href="personnel-bookingsadd.php" class="item">
            <div class="icon"><img src="images/icon-add.png" alt=""></div>
            <div class="text">Add Bookings</div>
        </a>
        <a href="personnel-flightsadd.php" class="item">
            <div class="icon"><img src="images/icon-add.png" alt=""></div>
            <div class="text">Add New Flight</div>
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
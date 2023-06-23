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
    <div class="grid two">
        <a href="personnel-analyticsflightstatus.php" class="item">
            <div class="icon"><img src="images/icon-plane.png" alt=""></div>
            <div class="text">Flight Status</div>
        </a>
        <a href="personnel-analyticsbaggagestatus.php" class="item">
            <div class="icon"><img src="images/icon-luggage.png" alt=""></div>
            <div class="text">Baggage Status</div>
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
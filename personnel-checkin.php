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

    <div class="main-title">
        Enter Traveller Details
    </div>

    <form id="checkinBookingNo" class="add-flight" action="validate-checkin.php" method="post">
        <div class="item">
            <label for="bookingNo">Booking Number: </label>
            <div class="input">
                <input type="text" id="bookingNo" name="bookingNo">
            </div>
        </div>

        <div class="item">
            <label for="passportNo">Passport Number: </label>
            <div class="input">
                <input type="text" id="passportNo" name="passportNo">
            </div>
        </div>

        <div class="item">
            <label for="" class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="checkin_btn">
            </div>
        </div>
    </form>
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
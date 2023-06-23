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

    <form id="checkinBookingNo" class="myx-form" action="personnel-selecttag.php" method="post">
        <div class="item">
            <label for="bookingNo">Booking Number: </label>
            <div class="input">
                <input type="text" id="bookingNo" name="bookingNo">
            </div>
        </div>

        <div class="item">
            <label for="identityNo">Identity Number: </label>
            <div class="input">
                <input type="text" id="identityNo" name="identityNo">
            </div>
        </div>

        <div class="item">
            <label for="identityType">Identity Type: </label>
            <div class="input">
                <select id="identityType" name="identityType">
                    <option value="Passport Number">Passport Number</option>
                    <option value="I/C Number">I/C Number</option>
                </select>
            </div>
        </div>

        <div class="item">
            <label class="desktop-only">&nbsp;</label>
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
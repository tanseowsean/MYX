<?php
session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';

    $aId = $_GET['airportID'];
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        Enter Tracking Point Details
    </div>

    <form id="configurePointsAdd" class="myx-form" action="add-trackingpoints.php" method="get">
        <input type="hidden" id="airportID" name="airportID" value="<?php echo $aId; ?>">
        <div class="item">
            <label for="pointID">Tracking Point ID: </label>
            <div class="input prefix">
                <div class="airport-id"><?php echo $aId; ?></div>
                <input type="text" id="pointID" name="pointID">
            </div>
        </div>

        <div class="item">
            <label for="pointDesc">Tracking Point Description: </label>
            <div class="input">
                <input type="text" id="pointDesc" name="pointDesc">
            </div>
        </div>

        <div class="item">
            <label class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="addtrackingpoint_btn">
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
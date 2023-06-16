<?php
session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';

    $aId = ($_GET['airportID']);
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        Enter Configuration Point Details
    </div>

    <form id="configurePointsAdd" class="myx-form" action="add-configurepoints.php" method="get">
        <input type="hidden" id="airportID" name="airportID" value="<?php echo $aId; ?>">
        <div class="item">
            <label for="pointID">Configuration Point ID: </label>
            <div class="input">
                <input type="text" id="pointID" name="pointID">
            </div>
        </div>

        <div class="item">
            <label for="pointDesc">Configuration Point Description: </label>
            <div class="input">
                <input type="text" id="pointDesc" name="pointDesc">
            </div>
        </div>

        <div class="item">
            <label for="" class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="addconfigpoint_btn">
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
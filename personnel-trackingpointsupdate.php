<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';

    $tpId = ($_GET['pointID']);

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try {
        // search for tracking point details
        if ($db->collection('trackingPoints')->document($tpId)->snapshot()->exists()) {
            $pointArr = $db->collection('trackingPoints')->document($tpId)->snapshot()->data();

            // retrieve tracking point details
            $aId = $pointArr['airportID'];
            $pDesc = $pointArr['trackingDesc'];
        }
    } catch (Exception $exception) {
        return $exception->getMessage();
    }
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        Update Tracking Point Details
    </div>

    <form id="configurePointsUpdate" class="myx-form" action="update-trackingpoints.php" method="get">
        <input type="hidden" id="airportID" name="airportID" value="<?php echo $aId; ?>">
        <div class="item">
            <label for="pointID">Tracking Point ID: </label>
            <div class="input">
                <input type="text" id="pointID" name="pointID" value="<?php echo $tpId; ?>" readonly>
            </div>
        </div>

        <div class="item">
            <label for="pointDesc">Tracking Point Description: </label>
            <div class="input">
                <input type="text" id="pointDesc" name="pointDesc" value="<?php echo $pDesc; ?>">
            </div>
        </div>

        <div class="item">
            <label for="" class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="updatetrackingpoint_btn">
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
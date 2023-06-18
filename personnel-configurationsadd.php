<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';

    $aId = ($_GET['airportID']);

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try {
        // search for airport name
        if ($db->collection('airports')->document($aId)->snapshot()->exists()) {
            $aArr = $db->collection('airports')->document($aId)->snapshot()->data();

            // retrieve airport name
            $aName = $aArr['airportName'];
        }
    } catch (Exception $exception) {
        return $exception->getMessage();
    }

    // if no tracking point, tell user unable to add tracking point

    // 
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        Create New Configuration in <?php echo $aName; ?>
    </div>

    <form id="configurationsAddForm" class="myx-form" action="add-configuration.php" method="post">
        <input type="hidden" id="airportID" name="airportID" value="<?php echo $aId; ?>">
        <div class="item">
            <label for="configurationName">Configuration Name: </label>
            <div class="input">
                <input type="text" id="configName" name="configName">
            </div>
        </div>

        <div class="item">
            <label for="configType">Configuration Type: </label>
            <div class="input">
                <select id="configType">
                    <option value="departure">Departure</option>
                    <option value="arrival">Arrival</option>
                </select>
            </div>
        </div>

        <div class="item">
            <div class="input">
                <label for="availablePoints">Select Tracking Points (Select with correct order): </label>
                <select id="availablePoints" multiple="multiple">
                </select>
                
                <label for="selectedPoints">Selected Tracking Points: </label>
                <select id="selectedPoints" multiple="multiple">
                </select>

                <br />
    
                <input type="button" id="left" value="<" />
                <input type="button" id="right" value=">" />
            </div>
        </div>
    </form>

    <!-- <form id="configurePointsAdd" class="myx-form" action="add-configurepoints.php" method="get">
        <input type="hidden" id="airportID" name="airportID" value="">
        <div class="item">
            <label for="pointID">Tracking Point ID: </label>
            <div class="input">
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
            <label for="" class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="addtrackingpoint_btn">
            </div>
        </div>
    </form> -->
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
<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    // retrieve input
    $fId = $_GET['flightID'];

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try {
        // search for flight details
        if ($db->collection('flights')->document($fId)->snapshot()->exists()) {
            $fArr = $db->collection('flights')->document($fId)->snapshot()->data();

            // retrieve airport name
            $fDate = $fArr['flightDate'];
            $fAircraft = $fArr['aircraft'];
            $fDepartLoc = $fArr['departLocation'];
            $fArriveLoc = $fArr['arriveLocation'];
            $fDepartTime = $fArr['departTime'];
            $fArriveTime = $fArr['arriveTime'];
            $fDepartConfig = $fArr['departConfig'];
            $fArriveConfig = $fArr['arriveConfig'];
            $fStatus = $fArr['flightStatus'];
        }
    } catch (Exception $exception) {
        return $exception->getMessage();
    }

    include 'personnel-header.php';
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        Update Flight Status
    </div>

    <!-- display form to select flight configuration -->
    <form class="myx-form" action="update-flightstatus.php" method="post">
        <div class="item">
            <label for="flightID">Flight ID: </label>
            <div class="input">
                <input type="text" id="flightID" name="flightID" value="<?php echo $fId; ?>" readonly class="greyed-out">
            </div>
        </div>
        <div class="item">
            <label for="flightDate">Flight Date: </label>
            <div class="input">
                <input type="text" id="flightDate" name="flightDate" value="<?php echo $fDate; ?>" readonly class="greyed-out">
            </div>
        </div>
        <div class="item">
            <label for="departLoc">Departure Location: </label>
            <div class="input">
                <input type="text" id="departLoc" name="departLoc" value="<?php echo $fDepartLoc; ?>" readonly class="greyed-out">
            </div>
        </div>
        <div class="item">
            <label for="arriveLoc">Arrival Location: </label>
            <div class="input">
                <input type="text" id="arriveLoc" name="arriveLoc" value="<?php echo $fArriveLoc; ?>" readonly class="greyed-out">
            </div>
        </div>
        <div class="item">
            <label for="departTime">Departure Time: </label>
            <div class="input">
                <input type="text" id="departTime" name="departTime" value="<?php echo $fDepartTime; ?>" readonly class="greyed-out">
            </div>
        </div>
        <div class="item">
            <label for="arriveTime">Arrival Time: </label>
            <div class="input">
                <input type="text" id="arriveTime" name="arriveTime" value="<?php echo $fArriveTime; ?>" readonly class="greyed-out">
            </div>
        </div>
        <div class="item">
            <label for="departConfig">Departure Configuration: </label>
            <div class="input">
                <input type="text" id="departConfig" name="departConfig" value="<?php echo $fDepartConfig; ?>" readonly class="greyed-out">
            </div>
        </div>
        <div class="item">
            <label for="arriveConfig">Arrival Configuration: </label>
            <div class="input">
                <input type="text" id="arriveConfig" name="arriveConfig" value="<?php echo $fArriveConfig; ?>" readonly class="greyed-out">
            </div>
        </div>

        <div class="item">
            <label for="fStatus">Flight Status: </label>
            <div class="input">
                <select id="fStatus" name="fStatus" onchange="checkIfLand()">

                <?php
                switch ($fStatus)
                {
                    case "":
                        echo '<option value="" selected="selected"></option>
                        <option value="Gate Open">Gate Open</option>
                        <option value="Boarding">Boarding</option>
                        <option value="Gate Closing">Gate Closing</option>
                        <option value="Departed">Departed</option>
                        <option value="Landed">Landed</option>';
                        break;
                    case "Gate Open":
                        echo '<option value=""></option>
                        <option value="Gate Open" selected="selected">Gate Open</option>
                        <option value="Boarding">Boarding</option>
                        <option value="Gate Closing">Gate Closing</option>
                        <option value="Departed">Departed</option>
                        <option value="Landed">Landed</option>';
                        break;
                    case "Boarding":
                        echo '<option value=""></option>
                        <option value="Gate Open">Gate Open</option>
                        <option value="Boarding" selected="selected">Boarding</option>
                        <option value="Gate Closing">Gate Closing</option>
                        <option value="Departed">Departed</option>
                        <option value="Landed">Landed</option>';
                        break;
                    case "Gate Closing":
                        echo '<option value=""></option>
                        <option value="Gate Open">Gate Open</option>
                        <option value="Boarding">Boarding</option>
                        <option value="Gate Closing" selected="selected">Gate Closing</option>
                        <option value="Departed">Departed</option>
                        <option value="Landed">Landed</option>';
                        break;
                    case "Departed":
                        echo '<option value=""></option>
                        <option value="Gate Open">Gate Open</option>
                        <option value="Boarding">Boarding</option>
                        <option value="Gate Closing">Gate Closing</option>
                        <option value="Departed" selected="selected">Departed</option>
                        <option value="Landed">Landed</option>';
                        break;
                    case "Landed":
                        echo '<option value=""></option>
                        <option value="Gate Open">Gate Open</option>
                        <option value="Boarding">Boarding</option>
                        <option value="Gate Closing">Gate Closing</option>
                        <option value="Departed">Departed</option>
                        <option value="Landed" selected="selected">Landed</option>';
                        break;
                }
                ?>
                </select>
            </div>
        </div>

        <br>

        <div class="item">
            <label class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="updateflightstatus_btn">
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
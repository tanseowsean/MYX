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
        Create New Configuration
    </div>

    <form id="configurationsAddForm" class="myx-form" action="add-configuration.php" method="post">
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
            <div class="multi-select">

                <div class="row labels">
                    <div class="head col-1">
                        <label for="availablePoints">
                            Select Tracking Points<br />
                            (Select with correct order):
                        </label>
                    </div>
                    <div class="head col-2">
                        &nbsp;
                    </div>
                    <div class="head col-3">
                        <label for="selectedPoints">Selected Tracking Points: </label>
                    </div>
                </div>

                <div class="row fields">
                    <div class="body col-1">
                        <select id="availablePoints" multiple="multiple" size="20">
                            <option value="">one</option>
                            <option value="">two</option>
                            <option value="">three</option>
                            <option value="">four</option>
                            <option value="">five</option>
                            <option value="">one</option>
                            <option value="">two</option>
                            <option value="">three</option>
                            <option value="">four</option>
                            <option value="">five</option>
                            <option value="">one</option>
                            <option value="">two</option>
                            <option value="">three</option>
                            <option value="">four</option>
                            <option value="">five</option>
                            <option value="">one</option>
                            <option value="">two</option>
                            <option value="">three</option>
                            <option value="">four</option>
                            <option value="">five</option>
                        </select>
                    </div>
                    <div class="body col-2">
                        <input type="button" id="right" value=">" />
                        <input type="button" id="left" value="<" />
                    </div>
                    <div class="body col-3">
                        <select id="selectedPoints" multiple="multiple" size="20">
                        </select>
                    </div>
                </div>

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

<!-- <script src="../scripts/jquery-1.11.1.min.js"></script> -->
<script>
    function moveItems(origin, dest) {
        $(origin).find(':selected').appendTo(dest);
    }

    $('#left').click(function () {
    moveItems('#selectedPoints', '#availablePoints');
    });
 
    $('#right').on('click', function () {
        moveItems('#availablePoints', '#selectedPoints');
    });
</script>

</body>

</html>
<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['travellerUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'traveller-header.php';

    if (isset($_GET['viewflight_btn']))
    {
        $aId = $_GET['airportID'];
    }

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // search for airport name
        if ($db->collection('airports')->document($aId)->snapshot()->exists())
        {
            $aArr = $db->collection('airports')->document($aId)->snapshot()->data();

            // retrieve airport name
            $aName = $aArr['airportName'];
        }
    }
    catch (Exception $exception)
    {
        return $exception->getMessage();
    }
}
?>

<!-- Content-Area -->
<div class="content">
    <input id="aID" type="hidden">
    <div class="main-title"><?php echo $aName; ?></div>

    <div class="grid two">
        <a href="traveller-flights.php?airportID=<?php echo $aId; ?>&flightType=departures" class="item">
            <div class="icon"><img src="images/icon-departures.png" alt=""></div>
            <div class="text">Departures</div>
        </a>
        <a href="traveller-flights.php?airportID=<?php echo $aId; ?>&flightType=arrivals" class="item">
            <div class="icon"><img src="images/icon-arrivals.png" alt=""></div>
            <div class="text">Arrivals</div>
        </a>
    </div>

</div>
<!-- /Content-Area -->

<?php
include 'footer.php'
?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
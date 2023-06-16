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
}
?>

<!-- Content-Area -->
<div class="content">

    <!-- display configurations settings -->
    <div id="airportNameText" class="main-title"><?php echo $aName; ?></div>
    <div class="grid two">
        <a href="personnel-configurations.php?airportID=<?php echo $aId; ?>" class="item">
            <div class="icon"><img src="images/icon-list.png" alt=""></div>
            <div class="text">Manage Configurations</div>
        </a>
        <a href="personnel-configurationsadd.php?airportID=<?php echo $aId; ?>" class="item">
            <div class="icon"><img src="images/icon-add.png" alt=""></div>
            <div class="text">Add New Configuration</div>
        </a>
    </div>

    <div class="grid two">
        <a href="personnel-configurepoints.php?airportID=<?php echo $aId; ?>" class="item">
            <div class="icon"><img src="images/icon-list.png" alt=""></div>
            <div class="text">Manage Configuration Points</div>
        </a>
        <a href="personnel-configurepointsadd.php?airportID=<?php echo $aId; ?>" class="item">
            <div class="icon"><img src="images/icon-add.png" alt=""></div>
            <div class="text">Add Configuration Point</div>
        </a>
        </a>
    </div>
</div>
<!-- /Content-Area -->

<?php
include 'footer.php';
?>

</div>

<!-- <script>
    window.addEventListener('load', () => {
        const params = (new URL(document.location)).searchParams;
        var aId = params.get('airportID');

        document.getElementById('airportNameText').innerHTML = aId;
    })
</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
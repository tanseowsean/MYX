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

    <div class="main-title">
        Create New Configuration for <?php echo $aName; ?>
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
                <select id="configType" name="configType">
                    <option value="Departure">Departure</option>
                    <option value="Arrival">Arrival</option>
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
                        <label for="selectedPoint[]">Selected Tracking Points: </label>
                    </div>
                </div>

                <div class="row fields">
                    <div class="body col-1">
                        <select id="availablePoints" multiple="multiple" size="20">
                        </select>
                    </div>
                    <div class="body col-2">
                        <input type="button" id="right" value=">" />
                        <input type="button" id="left" value="<" />
                    </div>
                    <div class="body col-3">
                        <select id="selectedPoints" name="selectedPoints[]" multiple="multiple" size="20">
                        </select>
                    </div>
                </div>

                <div class="item">
                    <label for="" class="desktop-only">&nbsp;</label>
                    <div class="input">
                        <input type="submit" class="submit-btn" name="addconfiguration_btn">
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

<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-auth.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-firestore.js"></script>

<script id="firebaseScript">
    const firebaseConfig = {
        apiKey: "AIzaSyAsIlkYQFu9rExzhdpG5HHfnhEI66Unj-4",
        authDomain: "myx-baggage.firebaseapp.com",
        projectId: "myx-baggage",
        storageBucket: "myx-baggage.appspot.com",
        messagingSenderId: "342593572959",
        appId: "1:342593572959:web:4eac93d796cfa787000bea",
        measurementId: "G-5SKV7NKZY1"
    };

    firebase.initializeApp(firebaseConfig);
    let db = firebase.firestore();

    //function to update data in real time whenever there are changes in database record
    function getAllDataRealtime() {
        db.collection("trackingPoints").onSnapshot((querySnapshot) => {
            var points = [];
            var allID = [];
            
            const params = (new URL(document.location)).searchParams;
            const seekID = params.get('airportID');

            var tempId;

            querySnapshot.forEach(doc => {
                tempId = doc.id.slice(0,3);

                if (tempId == seekID)
                {
                    points.push(doc.data());
                    allID.push(doc.id);
                }
            });

            if (points.length < 1)
            {
                alert("No tracking points for this airport! Please create tracking point first");
                window.location.href = "personnel-configureairport.php?airportID=" + seekID;
            }
            else
            {
                addAllOptions(allID, points);
            }
        });
    }

    var num = 0;
    var multiSelect = document.getElementById('availablePoints');

    function addOption(pointID, pointDesc)
    {
        var option = document.createElement('option');
        option.value = pointID;
        option.text = pointID + " - " + pointDesc;
        multiSelect.appendChild(option);
        num++;

    }

    function addAllOptions(idList, pointList)
    {
        num = 0;
        pointList.forEach(element => {
            addOption(idList[num], element.trackingDesc);
        });
    }

    window.onload = getAllDataRealtime;
</script>

</body>

</html>
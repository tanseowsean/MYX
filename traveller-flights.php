<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['travellerUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'traveller-header.php';

    $aId = $_GET['airportID'];
    $fType = $_GET['flightType'];

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
    <div class="main-title"><?php echo $aName; ?> Flights</div>

    <!-- display flights -->
    <div class="table-wrapper">
        <table class="pTable" cellspacing="0" cellpadding="0" width="100%">
            <thead>
                <th>No.</th>
                <th>Flight ID</th>
                <th>Aircraft</th>
                <th>Flight Date</th>
                <th>Departure Location</th>
                <th>Arrival Location</th>
                <th>Departure Time</th>
                <th>Arrival Time</th>
                <th>Status</th>
            </thead>
            <tbody id="tbodyFlights"></tbody>
        </table>
    </div>
    <!-- /display flights -->

</div>
<!-- /Content-Area -->

<?php
include 'footer.php'
?>
</div>

<!-- <script src="https://www.gstatic.com/firebasejs/8.2.1/firebase-app.js"></script>
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

    var aId = "";

    window.addEventListener('load', () => {
        const params = (new URL(document.location)).searchParams;
        aId = params.get('airportID');

        document.getElementById('aID').innerHTML = aId;
    })

    //function to retrieve data
    function getAllData() {
        db.collection("airports").get().then((querySnapshot) => {
            var airports = [];
            var allID = [];
            querySnapshot.forEach(doc => {
                airports.push(doc.data());
                allID.push(doc.id);
            });
            searchForAirportName(allID, airports);
        });
    }

    var i = 0;

    function getName(id, name)
    {
        if (id == aId)
        {
            document.getElementById('airportNameText').innerHTML = name;
        }
    }

    function searchForAirportName(idList, airportList)
    {
        i = 0;

        airportList.forEach(e => {
            getName(idList[i], e.airportName);
        });
    }

    window.onload = getAllData;
</script> -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
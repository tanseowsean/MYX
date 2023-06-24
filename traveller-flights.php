<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['travellerUser'])) {
    header('Location: index.php');
    exit();
} else {
    if(isset($_GET['airportID']) && $_GET['flightType'])
    {
        $aId = $_GET['airportID'];
        $fType = $_GET['flightType'];

        switch($fType)
        {
            case "departures":
                $titleText = "Departure";
                break;
            case "arrivals":
                $titleText = "Arrival";
                break;
        }

        date_default_timezone_set("Asia/Kuala_Lumpur");
        $currentDate = date("Y-m-d");

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

        include 'traveller-header.php';
    }
    else
    {
        header('Location: traveller-airports.php');
        exit();
    }
}
?>

<!-- Content-Area -->
<div class="content">
    <div class="main-title"><?php echo $aName." ".$titleText; ?> Flights</div>

    <input type="hidden" id="airportID" name="airportID" value="<?php echo $aId; ?>">
    <input type="hidden" id="flightType" name="flightType" value="<?php echo $fType; ?>">
    <input type="hidden" id="currentDate" name="currentDate" value="<?php echo $currentDate; ?>">

    <!-- display flights -->
    <div id="tableContent" class="table-wrapper">
        <table id="tableFlights" class="pTable" cellspacing="0" cellpadding="0" width="100%">
            <thead>
                <th>No.</th>
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
        db.collection("flights").onSnapshot((querySnapshot) => {
            var allflights = [];
            var allID = [];
            querySnapshot.forEach(doc => {
                allflights.push(doc.data());
                allID.push(doc.id);
            });

            prepareTable(allID, allflights);
        });
    }

    function prepareTable(allIDList, allFlightsList)
    {
        var seekAirport = document.getElementById('airportID').value;
        var seekType = document.getElementById('flightType').value;
        var currentDate = document.getElementById('currentDate').value;

        var flights = [];
        var tempIndex = 0;

        if (seekType == "departures")
        {
            allFlightsList.forEach(element => {
                if(element.flightDate == currentDate)
                {
                    if (element.flightStatus != "")
                    {
                        if(element.departLocation == seekAirport)
                        {
                            flights.push(allFlightsList[tempIndex]);
                        }
                    }
                }
                tempIndex++;
            });
        }
        else
        {
            allFlightsList.forEach(element => {
                if(element.flightDate == currentDate)
                {
                    if (element.flightStatus != "")
                    {
                        if(element.arriveLocation == seekAirport)
                        {
                            flights.push(allFlightsList[tempIndex]);
                        }
                    }
                }
                tempIndex++;
            });
        }

        var tContent = "";

        if (flights.length < 1)
        {
            tContent = '<p>No flight records found.</p>';
            $(tContent).appendTo('#tableContent');
            $('#tableFlights').hide();
        }
        else
        {
            $('p').hide();
            $('#tableFlights').show();
            addAllItemToTable(flights);
        }
    }

    //function to display data on website page table
    var flightNo = 0;
    var tbody = document.getElementById('tbodyFlights');

    function addItemToTable(aircraft, flightDate, departLocation, arriveLocation, departTime, arriveTime, status) {
        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var td5 = document.createElement('td');
        var td6 = document.createElement('td');
        var td7 = document.createElement('td');
        var td8 = document.createElement('td');

        td1.innerHTML = ++flightNo;
        td2.innerHTML = aircraft;
        td3.innerHTML = flightDate;
        td4.innerHTML = departLocation;
        td5.innerHTML = arriveLocation;
        td6.innerHTML = departTime;
        td7.innerHTML = arriveTime;
        td8.innerHTML = status;

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);
        trow.appendChild(td4);
        trow.appendChild(td5);
        trow.appendChild(td6);
        trow.appendChild(td7);
        trow.appendChild(td8);

        tbody.appendChild(trow);
    }

    function addAllItemToTable(FlightsDocList) {
        flightNo = 0;
        tbody.innerHTML = "";
        FlightsDocList.forEach(element => {
            addItemToTable(element.aircraft, element.flightDate, element.departLocation, element.arriveLocation, element.departTime, element.arriveTime, element.flightStatus);
        });
    }

    window.onload = getAllDataRealtime();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
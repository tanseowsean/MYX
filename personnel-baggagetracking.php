<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    if(isset($_GET['flightID']))
    {
        // retrieve input
        $flightID = $_GET['flightID'];

        if($flightID == "")
        {
            header('Location: personnel-baggage.php');
            exit();
        }
        
        $db = new FirestoreClient([
            'projectId' => 'myx-baggage' //Get firestore project id
        ]);

        try
        {
            if ($db->collection('flights')->document($fId)->snapshot()->exists())
            {
                include 'personnel-header.php';
            }
            else
            {
                header('Location: personnel-baggage.php');
                exit();
            }
        }
        catch (Exception $exception)
        {
            return $exception->getMessage();
        }
    }
    else
    {
        header('Location: personnel-baggage.php');
        exit();
    }
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        <?php echo $flightID; ?> Baggage Tracking
    </div>

    <div id="tableContent" class="table-wrapper">
        <table id="tableTrackings" class="pTable" cellspacing="0" cellpadding="0" width="100%">
            <thead>
                <th>No.</th>
                <th>Tracking ID</th>
                <th>Booking ID</th>
                <th>Tracking Point</th>
                <th></th>
            </thead>
            <tbody id="tbodyTrackings"></tbody>
        </table>
    </div>
</div>
<!-- /Content-Area -->

<?php
include 'footer.php';
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
        db.collection("trackings").onSnapshot((querySnapshot) => {
            var trackings = [];
            var allID = [];
            querySnapshot.forEach(doc => {
                trackings.push(doc.data());
                allID.push(doc.id);
            });

            checkFlightTrackings(allID, trackings);
        });
    }

    function checkFlightTrackings(allIDList, allTrackingsList)
    {
        const params = (new URL(document.location)).searchParams;
        var flightID = params.get('flightID');

        var idList = [];
        var trackingList = [];
        var tempIndex = 0;

        allTrackingsList.forEach(element => {
            if(element.flightID == flightID)
            {
                trackingList.push(allTrackingsList[tempIndex]);
                idList.push(allIDList[tempIndex]);
            }
            tempIndex++;
        });

        var tContent = "";

        if (trackingList.length < 1)
        {
            tContent = '<p>No tracking records found.</p>';
            $(tContent).appendTo('#tableContent');
            $('#tableTrackings').hide();
        }
        else
        {
            $('p').hide();
            $('#tableTrackings').show();
            addAllItemToTable(idList, trackingList);
        }
    }

    //function to display data on website page table
    var no = 0;
    var tbody = document.getElementById('tbodyTrackings');

    function addItemToTable(trackingID, bookingID, trackingPoints, trackingTime) {
        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var td5 = document.createElement('td');

        td1.innerHTML = ++no;
        td2.innerHTML = trackingID;
        td3.innerHTML = bookingID;

        var pointsLength = trackingPoints.length;
        var timeLength = trackingTime.length;

        var innerTable = document.createElement('table');
        var innerRow1 = document.createElement('tr');
        for(let i=0; i<pointsLength; i++)
        {
            var innerTd = document.createElement('td');
            innerTd.innerHTML = trackingPoints[i];
            innerRow1.appendChild(innerTd);
        }

        var innerRow2 = document.createElement('tr');
        for(let i=0; i<pointsLength; i++)
        {
            var innerTd = document.createElement('td');

            if(i<timeLength)
            {
                innerTd.innerHTML = trackingTime[i];
            }
            else
            {
                innerTd.innerHTML = "";
            }
            innerRow2.appendChild(innerTd);
        }

        innerTable.appendChild(innerRow1);
        innerTable.appendChild(innerRow2);
        td4.appendChild(innerTable);

        var form = document.createElement('form');
        form.setAttribute('method', 'get');
        form.setAttribute('action', 'confirm-delete-trackings.php');
        var inputField = document.createElement('input');
        inputField.type = "hidden";
        inputField.name = "trackingID";
        inputField.value = trackingID;
        var inputField2 = document.createElement('input');
        inputField2.type = "hidden";
        inputField2.name = "flightID";
        inputField2.value = flightID;
        var btn = document.createElement('input');
        btn.type = "submit";
        btn.value = "View";
        btn.className = "pSelectTableBtn";
        form.appendChild(inputField);
        form.appendChild(inputField2);
        form.appendChild(btn);
        td5.appendChild(form);

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);
        trow.appendChild(td4);
        trow.appendChild(td5);

        tbody.appendChild(trow);
    }

    function addAllItemToTable(idList, trackingList) {
        no = 0;
        tbody.innerHTML = "";
        tracking.forEach(element => {
            addItemToTable(idList[no], element.bookingID, element.trackingPoints, element.trackingTime);
        });
    }

    window.onload = getAllDataRealtime();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
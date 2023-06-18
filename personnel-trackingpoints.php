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
        <?php echo $aName; ?> Tracking Points
    </div>

    <div id="tableContent" class="table-wrapper">
        <table id="tableTrackingPoint" class="pSelectTable" cellspacing="0" cellpadding="0" width="100%">
            <thead>
                <th>No.</th>
                <th>Tracking Point ID</th>
                <th>Tracking Point Description</th>
                <th></th>
                <th></th>
            </thead>
            <tbody id="tbodyTrackingPoints"></tbody>
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

            var tContent = "";

            if (points.length < 1)
            {
                tContent = '<p>No tracking point records found.</p>';
                $(tContent).appendTo('#tableContent');
                $('#tableTrackingPoint').hide();
            }
            else
            {
                $('p').hide();
                $('#tableTrackingPoint').show();
                addAllItemToTable(allID, points);
            }
        });
    }

    //function to display data on website page table
    var pointNo = 0;
    var tbody = document.getElementById('tbodyTrackingPoints');

    function addItemToTable(pointID, pointDesc) {
        const params = (new URL(document.location)).searchParams;
        const seekID = params.get('airportID');

        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var td5 = document.createElement('td');

        td1.innerHTML = ++pointNo;
        td2.innerHTML = pointID;
        td3.innerHTML = pointDesc;

        var form = document.createElement('form');
        form.setAttribute('method', 'get');
        form.setAttribute('action', 'personnel-trackingpointsupdate.php');
        var inputField = document.createElement('input');
        inputField.type = "hidden";
        inputField.name = "pointID";
        inputField.value = pointID;
        var btn = document.createElement('input');
        btn.type = "submit";
        btn.value = "Update";
        btn.className = "pSelectTableBtn";
        form.appendChild(inputField);
        form.appendChild(btn);
        td4.appendChild(form);

        var form2 = document.createElement('form');
        form2.setAttribute('method', 'get');
        form2.setAttribute('action', 'confirm-delete-trackingpoints.php');
        var inputField2 = document.createElement('input');
        inputField2.type = "hidden";
        inputField2.name = "pointID";
        inputField2.value = pointID;
        var inputField3 = document.createElement('input');
        inputField3.type = "hidden";
        inputField3.name = "airportID";
        inputField3.value = seekID;
        var btn2 = document.createElement('input');
        btn2.type = "submit";
        btn2.value = "Delete";
        btn2.className = "pSelectTableBtn";
        form2.appendChild(inputField2);
        form2.appendChild(inputField3);
        form2.appendChild(btn2);
        td5.appendChild(form2);
        
        // var form = document.createElement('form');
        // form.setAttribute('method', 'get');
        // form.setAttribute('action', 'personnel-configureairport.html');
        // var inputField = document.createElement('input');
        // inputField.type = "hidden";
        // inputField.name = "airportID";
        // inputField.value = airportID;
        // var btn = document.createElement('input');
        // btn.type = "submit";
        // btn.value = "Configure";
        // btn.className = "pSelectTableBtn";
        // form.appendChild(inputField);
        // form.appendChild(btn);
        // td5.appendChild(form);

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);
        trow.appendChild(td4);
        trow.appendChild(td5);

        tbody.appendChild(trow);
    }

    function addAllItemToTable(trackingpointIDList, trackingpointList) {
        pointNo = 0;
        tbody.innerHTML = "";
        trackingpointList.forEach(element => {
            addItemToTable(trackingpointIDList[pointNo], element.trackingDesc);
        });
    }

    window.onload = getAllDataRealtime;
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
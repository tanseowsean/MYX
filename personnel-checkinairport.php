<?php
session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';
}
?>

<!-- Content-Area -->
<div class="content">

    <!-- display list of airports -->
    <div class="main-title">
        Select Airport to Check In
    </div>

    <div id="tableContent" class="table-wrapper">
        <table id="tableAirport" class="pSelectTable" cellspacing="0" cellpadding="0" width="100%">
            <thead>
                <th>No.</th>
                <th>Airport ID</th>
                <th>Airport Name</th>
                <th>Airport State</th>
                <th></th>
            </thead>
            <tbody id="tbodyAirports"></tbody>
        </table>
    </div>
    <!-- /display list of airports -->
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
        db.collection("airports").onSnapshot((querySnapshot) => {
            var airports = [];
            var allID = [];
            querySnapshot.forEach(doc => {
                airports.push(doc.data());
                allID.push(doc.id);
            });

            var tContent = "";

            if (allID.length < 1) {
                tContent = '<p>No airport records found.</p>';
                $(tContent).appendTo('#tableContent');
                $('#tableAirport').hide();
            } else {
                $('p').hide();
                $('#tableAirport').show();
                addAllItemToTable(allID, airports);
            }
        });
    }

    //function to display data on website page table
    var airportNo = 0;
    var tbody = document.getElementById('tbodyAirports');

    function addItemToTable(airportID, airportName, airportState) {
        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var td5 = document.createElement('td');

        td1.innerHTML = ++airportNo;
        td2.innerHTML = airportID;
        td3.innerHTML = airportName;
        td4.innerHTML = airportState;

        var form = document.createElement('form');
        form.setAttribute('method', 'get');
        form.setAttribute('action', 'personnel-checkin.php');
        var inputField = document.createElement('input');
        inputField.type = "hidden";
        inputField.name = "airportID";
        inputField.value = airportID;
        var btn = document.createElement('input');
        btn.type = "submit";
        btn.value = "Select";
        btn.className = "pSelectTableBtn";
        form.appendChild(inputField);
        form.appendChild(btn);
        td5.appendChild(form);

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);
        trow.appendChild(td4);
        trow.appendChild(td5);

        tbody.appendChild(trow);
    }

    function addAllItemToTable(AirportsIDList, AirportsDocList) {
        airportNo = 0;
        tbody.innerHTML = "";
        AirportsDocList.forEach(element => {
            addItemToTable(AirportsIDList[airportNo], element.airportName, element.airportState);
        });
    }

    window.onload = getAllDataRealtime();
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
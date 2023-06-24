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

    <!-- display list of flights -->
    <div class="main-title">
        Select Flight to View Baggage Tracking
    </div>

    <div id="tableContent" class="table-wrapper">
        <table id="tableFlights" class="pTable" cellspacing="0" cellpadding="0" width="100%">
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
                <th></th>
            </thead>
            <tbody id="tbodyFlights"></tbody>
        </table>
    </div>
    <!-- /display list of flights -->
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
        db.collection("flights").onSnapshot((querySnapshot) => {
            var flights = [];
            var allID = [];
            querySnapshot.forEach(doc => {
                flights.push(doc.data());
                allID.push(doc.id);
            });
            
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
                addAllItemToTable(allID, flights);
            }
        });
    }

    //function to display data on website page table
    var flightNo = 0;
    var tbody = document.getElementById('tbodyFlights');

    function addItemToTable(flightID, aircraft, flightDate, departLocation, arriveLocation, departTime, arriveTime, status) {
        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');
        var td5 = document.createElement('td');
        var td6 = document.createElement('td');
        var td7 = document.createElement('td');
        var td8 = document.createElement('td');
        var td9 = document.createElement('td');
        var td10 = document.createElement('td');

        td1.innerHTML = ++flightNo;
        td2.innerHTML = flightID;
        td3.innerHTML = aircraft;
        td4.innerHTML = flightDate;
        td5.innerHTML = departLocation;
        td6.innerHTML = arriveLocation;
        td7.innerHTML = departTime;
        td8.innerHTML = arriveTime;
        td9.innerHTML = status;

        var form = document.createElement('form');
        form.setAttribute('method', 'get');
        form.setAttribute('action', 'personnel-baggagetracking.php');
        var inputField = document.createElement('input');
        inputField.type = "hidden";
        inputField.name = "flightID";
        inputField.value = flightID;
        var btn = document.createElement('input');
        btn.type = "submit";
        btn.value = "View";
        btn.className = "pSelectTableBtn";
        form.appendChild(inputField);
        form.appendChild(btn);
        td10.appendChild(form);

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);
        trow.appendChild(td4);
        trow.appendChild(td5);
        trow.appendChild(td6);
        trow.appendChild(td7);
        trow.appendChild(td8);
        trow.appendChild(td9);
        trow.appendChild(td10);

        tbody.appendChild(trow);
    }

    function addAllItemToTable(FlightsIDList, FlightsDocList) {
        flightNo = 0;
        tbody.innerHTML = "";
        FlightsDocList.forEach(element => {
            addItemToTable(FlightsIDList[flightNo], element.aircraft, element.flightDate, element.departLocation, element.arriveLocation, element.departTime, element.arriveTime, element.flightStatus);
        });
    }

    window.onload = getAllDataRealtime();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
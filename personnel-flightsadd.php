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

    <div class="main-title">
        Add New Flight
    </div>

    <!-- display form to add new flight -->
    <form class="myx-form" action="personnel-selectconfiguration.php" method="post">

        <div class="item">
            <label for="fDate">Flight Date: </label>
            <div class="input">
                <input type="date" id="fDate" name="fDate">
            </div>
        </div>

        <div class="item">
            <label for="fAircraft">Aircraft: </label>
            <div class="input">
                <input type="text" id="fAircraft" name="fAircraft">
            </div>
        </div>

        <div class="item">
            <label for="fDepartLoc">Departure Location: </label>
            <div class="input">
                <select id="fDepartLoc" name="fDepartLoc"></select>
            </div>
        </div>

        <div class="item">
            <label for="fArriveLoc">Arrival Location: </label>
            <div class="input">
                <select id="fArriveLoc" name="fArriveLoc"></select>
            </div>
        </div>

        <div class="item">
            <label for="fDepartTime">Departure Time: </label>
            <div class="input">
                <input type="text" id="fDepartTime" name="fDepartTime" value="HH:MM" pattern="[0-2]{1}[0-9]{1}:[0-5]{1}[0-9]{1}" maxlength="5">
            </div>
        </div>

        <div class="item">
            <label for="fArriveTime">Arrival Time: </label>
            <div class="input">
                <input type="text" id="fArriveTime" name="fArriveTime" value="HH:MM" pattern="[0-2]{1}[0-9]{1}:[0-5]{1}[0-9]{1}" maxlength="5">
            </div>
        </div>

        <div class="item">
            <label class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="addflightdetails-btn">
            </div>
        </div>

    </form>
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
            addAllOption(allID, airports);
        });
    }

    var departNum = 0;
    var arriveNum = 0;
    var departSelect = document.getElementById('fDepartLoc');
    var arriveSelect = document.getElementById('fArriveLoc');

    function addDepartOption(airportID, airportName, airportState) {
        var option = document.createElement('option');
        option.value = "dep".concat(airportID);
        option.text = airportID + " - " + airportName + " - " + airportState;
        departSelect.appendChild(option);
        departNum++;
    }

    function addArriveOption(airportID, airportName, airportState) {
        var option = document.createElement('option');
        option.value = "arr".concat(airportID);
        option.text = airportID + " - " + airportName + " - " + airportState;
        arriveSelect.appendChild(option);
        arriveNum++;
    }

    function addAllOption(AirportIDList, AirportList) {
        departNum = 0;
        arriveNum = 0;
        AirportList.forEach(element => {
            addDepartOption(AirportIDList[departNum], element.airportName, element.airportState);
            addArriveOption(AirportIDList[arriveNum], element.airportName, element.airportState);
        });
    }

    window.onload = getAllDataRealtime();
</script>

<script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet" />

<script id="timepicker">
    var timepicker = new TimePicker(['fDepartTime', 'fArriveTime'], {
        lang: 'en'
    });

    timepicker.on('change', function(evt) {
        var value = (evt.hour || '00') + ':' + (evt.minute || '00');
        evt.element.value = value;
    });
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
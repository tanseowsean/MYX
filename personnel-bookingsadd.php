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
        Enter Booking Details
    </div>

    <form id="checkinBookingNo" class="myx-form" action="add-bookings.php" method="post">
        <div class="item">
            <label for="bookingNo">Booking Number: </label>
            <div class="input">
                <input type="text" id="bookingNo" name="bookingNo">
            </div>
        </div>

        <div class="item">
            <label for="identityNo">Identity Number: </label>
            <div class="input">
                <input type="text" id="identityNo" name="identityNo">
            </div>
        </div>

        <div class="item">
            <label for="identityType">Identity Type: </label>
            <div class="input">
                <select id="identityType" name="identityType">
                    <option value="Passport Number">Passport Number</option>
                    <option value="I/C Number">I/C Number</option>
                </select>
            </div>
        </div>

        <div class="item">
            <label for="flightID">Flight: </label>
            <div class="input">
                <select id="flightID" name="flightID"></select>
            </div>
        </div>

        <div class="item">
            <label class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="addbooking_btn">
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
        db.collection("flights").onSnapshot((querySnapshot) => {
            var flights = [];
            var allID = [];

            querySnapshot.forEach(doc => {
                allID.push(doc.id);
                flights.push(doc.data());
            });
            addAllOption(allID, flights);
        });
    }

    var flightNum = 0;
    var flightSelect = document.getElementById('flightID');

    function addOption(flightID, departLoc, arriveLoc, departTime, arriveTime)
    {
        var option = document.createElement('option');
        option.value = flightID;
        option.text = flightID + ": " + departLoc + " ✈ " + arriveLoc + " (" + departTime + " - " + arriveTime + ")";
        flightSelect.appendChild(option);
        flightNum++;
    }

    function addAllOption(idList, flightList) {
        flightNum = 0;

        flightList.forEach(element => {
            addOption(idList[flightNum], element.departLocation, element.arriveLocation, element.departTime, element.arriveTime);
        });
    }

    window.onload = getAllDataRealtime();
</script>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
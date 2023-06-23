<?php
session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    include 'personnel-header.php';

    $fId = $_GET['flightID'];
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        <?php echo $fId; ?> Flight Bookings
    </div>

    <!-- display bookings -->
    <div id="tableContent" class="table-wrapper">
        <table id="tableBookings" class="pTable" cellspacing="0" cellpadding="0" width="100%">
            <thead>
                <th>No.</th>
                <th>Booking ID</th>
                <th>Identity Type</th>
                <th></th>
            </thead>
            <tbody id="tbodyBookings"></tbody>
        </table>
    </div>
    <!-- /display bookings -->

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
        db.collection("bookings").onSnapshot((querySnapshot) => {
            var allBookings = [];
            var allID = [];

            querySnapshot.forEach(doc => {
                allBookings.push(doc.data());
                allID.push(doc.id);
            });
            
            checkAvailableBooking(allID, allBookings);
        });
    }

    function checkAvailableBooking(allIDList, allBookingList)
    {
        const params = (new URL(document.location)).searchParams;
        var flightID = params.get('flightID');

        var idList = [];
        var bookingList = [];
        var tempIndex = 0;

        allBookingList.forEach(element => {
            if (element.flightID == flightID)
            {
                bookingList.push(allBookingList[tempIndex]);
                idList.push(allIDList[tempIndex]);
            }
            tempIndex++;
        });

        var tContent = "";

        if (bookingList.length < 1)
        {
            tContent = '<p>No booking records found.</p>';
            $(tContent).appendTo('#tableContent');
            $('#tableBookings').hide();
        }
        else
        {
            $('p').hide();
            $('#tableBookings').show();
            addAllItemToTable(idList, bookingList, flightID);
        }
    }

    //function to display data on website page table
    var no = 0;
    var tbody = document.getElementById('tbodyBookings');

    function addItemToTable(bookingNo, identityType, flightID) {
        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');

        td1.innerHTML = ++no;
        td2.innerHTML = bookingNo;
        td3.innerHTML = identityType;

        var form = document.createElement('form');
        form.setAttribute('method', 'get');
        form.setAttribute('action', 'confirm-delete-bookings.php');
        var inputField = document.createElement('input');
        inputField.type = "hidden";
        inputField.name = "bookingNo";
        inputField.value = bookingNo;
        var inputField2 = document.createElement('input');
        inputField2.type = "hidden";
        inputField2.name = "flightID";
        inputField2.value = flightID;
        var btn = document.createElement('input');
        btn.type = "submit";
        btn.value = "Delete";
        btn.className = "pSelectTableBtn";
        form.appendChild(inputField);
        form.appendChild(inputField2);
        form.appendChild(btn);
        td4.appendChild(form);

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);
        trow.appendChild(td4);

        tbody.appendChild(trow);
    }

    function addAllItemToTable(idList, bookingList, flightID) {
        no = 0;
        tbody.innerHTML = "";
        bookingList.forEach(element => {
            addItemToTable(idList[no], element.identityType, flightID);
        });
    }

    window.onload = getAllDataRealtime();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
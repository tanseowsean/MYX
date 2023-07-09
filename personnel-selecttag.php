<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {

    if(isset($_POST['checkin_btn']))
    {
        // retrieve input
        $aId = $_POST['airportID'];
        $bookingNo = $_POST['bookingNo'];
        $identityNo = $_POST['identityNo'];
        $hashedIdentityNo = md5($identityNo);
        $identityType = $_POST['identityType'];

        // input validation and checking
        if ($bookingNo == "")
        {
            // empty booking number field
            echo '<script>
            alert("Booking number field is empty!");
            window.location.href = "personnel-checkin.php?airportID='.$aId.'";
            </script>';
            exit();
        }

        if ($identityNo == "")
        {
            // empty identity number field
            echo '<script>
            alert("Identity number field is empty!");
            window.location.href = "personnel-checkin.php?airportID='.$aId.'";
            </script>';
            exit();
        }

        $db = new FirestoreClient([
            'projectId' => 'myx-baggage' //Get firestore project id
        ]);

        try
        {
            // check if booking exist
            if ($db->collection('bookings')->document($bookingNo)->snapshot()->exists())
            {
                // check for similar identity type
                $bArr = $db->collection('bookings')->document($bookingNo)->snapshot()->data();

                $bIdentityType = $bArr['identityType'];
                $fId = $bArr['flightID'];

                if ($identityType == $bIdentityType)
                {
                    // validate identity number
                    $bIdentityNo = $bArr['identityNo'];
                    if ($hashedIdentityNo == $bIdentityNo)
                    {
                        // check if check in location is correct
                        $fArr = $db->collection('flights')->document($fId)->snapshot()->data();
                        $fDepartLoc = $fArr['departLocation'];

                        if($fDepartLoc != $aId)
                        {
                            // incorrect check in location
                            echo '<script>
                            alert("Incorrect check in location!");
                            window.location.href = "personnel-checkin.php?airportID='.$aId.'";
                            </script>';
                            exit();
                        }
                        else
                        {
                            // stay in this page
                            include 'personnel-header.php';
                        }
                    }
                    else
                    {
                        // incorrect identity number
                        echo '<script>
                        alert("Incorrect identity number!");
                        window.location.href = "personnel-checkin.php?airportID='.$aId.'";
                        </script>';
                        exit();
                    }
                }
                else
                {
                    // incorrect identity type
                    echo '<script>
                    alert("Incorrect identity type!");
                    window.location.href = "personnel-checkin.php?airportID='.$aId.'";
                    </script>';
                    exit();
                }
            }
            else
            {
                // booking does not exist
                echo '<script>
                alert("Booking does not exist!");
                window.location.href = "personnel-checkin.php?airportID='.$aId.'";
                </script>';
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
        header('Location: personnel-checkinairport.php');
        exit();
    }
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        Select Tag
    </div>

    <input type="hidden" id="airportID" name="airportID" value="<?php echo $aId; ?>">
    <input type="hidden" id="bookingNo" name="bookingNo" value="<?php echo $bookingNo; ?>">
    <input type="hidden" id="flightID" name="flightID" value="<?php echo $fId; ?>">

    <div id="tableContent" class="table-wrapper">
        <table id="tableTags" class="pTable" cellspacing="0" cellpadding="0" width="100%">
            <thead>
                <th>No.</th>
                <th>Tag ID</th>
                <th>Detect Time</th>
                <th></th>
            </thead>
            <tbody id="tbodyTags"></tbody>
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
        db.collection("tagCheckIn").onSnapshot((querySnapshot) => {
            var allTags = [];
            var allID = [];

            querySnapshot.forEach(doc => {
                allTags.push(doc.data());
                allID.push(doc.id);
            });
            
            checkAvailableTag(allID, allTags);
        });
    }

    function checkAvailableTag(allIDList, allTagList)
    {
        var bookingNo = document.getElementById('bookingNo').value;
        var flightID = document.getElementById('flightID').value;
        var airportID = document.getElementById('airportID').value;

        var idList = [];
        var tagList = [];
        var tempIndex = 0;

        allTagList.forEach(element => {
            if (element.usage == 0)
            {
                if (element.airportID = airportID)
                {
                    tagList.push(allTagList[tempIndex]);
                    idList.push(allIDList[tempIndex]);
                }
            }
            tempIndex++;
        });

        var tContent = "";

        if (tagList.length < 1)
        {
            tContent = '';
            $(tContent).appendTo('#tableContent');
            tContent = '<p>No tags found. Please scan a tag.</p>';
            $(tContent).appendTo('#tableContent');
            $('#tableTags').hide();
        }
        else
        {
            $('p').hide();
            $('#tableTags').show();
            addAllItemToTable(idList, tagList, bookingNo, flightID, airportID);
        }
    }

    //function to display data on website page table
    var no = 0;
    var tbody = document.getElementById('tbodyTags');

    function addItemToTable(tagID, detectTime, bookingNo, flightID, airportID) {
        var trow = document.createElement('tr');
        var td1 = document.createElement('td');
        var td2 = document.createElement('td');
        var td3 = document.createElement('td');
        var td4 = document.createElement('td');

        td1.innerHTML = ++no;
        td2.innerHTML = tagID;
        td3.innerHTML = detectTime;

        var form = document.createElement('form');
        form.setAttribute('method', 'post');
        form.setAttribute('action', 'add-trackings.php');
        var inputField = document.createElement('input');
        inputField.type = "hidden";
        inputField.name = "tagID";
        inputField.value = tagID;
        var inputField2 = document.createElement('input');
        inputField2.type = "hidden";
        inputField2.name = "bookingNo";
        inputField2.value = bookingNo;
        var inputField3 = document.createElement('input');
        inputField3.type = "hidden";
        inputField3.name = "flightID";
        inputField3.value = flightID;
        var inputField4 = document.createElement('input');
        inputField4.type = "hidden";
        inputField4.name = "airportID";
        inputField4.value = airportID;
        var btn = document.createElement('input');
        btn.type = "submit";
        btn.value = "Select";
        btn.name = "createtracking_btn";
        btn.className = "pSelectTableBtn";
        form.appendChild(inputField);
        form.appendChild(inputField2);
        form.appendChild(inputField3);
        form.appendChild(inputField4);
        form.appendChild(btn);
        td4.appendChild(form);

        trow.appendChild(td1);
        trow.appendChild(td2);
        trow.appendChild(td3);
        trow.appendChild(td4);

        tbody.appendChild(trow);
    }

    function addAllItemToTable(idList, tagList, bookingNo, flightID, airportID) {
        no = 0;
        tbody.innerHTML = "";
        tagList.forEach(element => {
            addItemToTable(idList[no], element.detectTime, bookingNo, flightID, airportID);
        });
    }

    window.onload = getAllDataRealtime();
</script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['travellerUser'])) {
    header('Location: index.php');
    exit();
} else {
    if (isset($_POST['checkbaggage_btn']))
    {
        $bookingNo = $_POST['bookingNo'];
        $identityNo = $_POST['identityNo'];
        $hashedIdentity = md5($identityNo);
        $identityType = $_POST['identityType'];

        // validate input
        if ($bookingNo == "")
        {
            echo '<script>
            alert("Booking number field is empty.");
            window.location.href = "traveller-baggagecheck.php";
            </script>';
            exit();
        }

        if ($identityNo == "")
        {
            echo '<script>
            alert("Identity number field is empty.");
            window.location.href = "traveller-baggagecheck.php";
            </script>';
            exit();
        }

        $db = new FirestoreClient([
            'projectId' => 'myx-baggage' //Get firestore project id
        ]);

        try
        {
            if($db->collection('bookings')->document($bookingNo)->snapshot()->exists())
            {
                $bArr = $db->collection('bookings')->document($bookingNo)->snapshot()->data();
                $bIdentityNo = $bArr['identityNo'];
                $bIdentityType = $bArr['identityType'];

                if($bIdentityType == $identityType)
                {
                    if($bIdentityNo == $hashedIdentity)
                    {
                        include 'traveller-header.php';
                    }
                    else
                    {
                        echo '<script>
                        alert("Incorrect identity number.");
                        window.location.href = "traveller-baggagecheck.php";
                        </script>';
                        exit();
                    }
                }
                else
                {
                    echo '<script>
                    alert("Incorrect identity type.");
                    window.location.href = "traveller-baggagecheck.php";
                    </script>';
                    exit();
                }
            }
            else
            {
                echo '<script>
                alert("Booking not found.");
                window.location.href = "traveller-baggagecheck.php";
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
        header('Location: traveller-baggagecheck.php');
        exit();
    }
}
?>

<!-- Content-Area -->
<div class="content">

<div class="main-title">
    Baggage Status
</div>

<!-- baggage-status -->
<div class="baggage-status">
    <div class="thumb">
        <img src="images/thumb-luggage.png" alt="">
    </div>

    <input type="hidden" id="bookingNo" name="bookingNo" value="<?php echo $bookingNo; ?>">

    <div id="journeyDiv" class="journey">

        <div id="checkinPath" class="path">
            <div id="checkinText" class="text">
            </div>
        </div>
    </div>
</div>
<!-- /baggage-status -->

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
        db.collection("trackings").onSnapshot((querySnapshot) => {
            var trackings = [];
            querySnapshot.forEach(doc => {
                trackings.push(doc.data());
            });

            checkSpecificTracking(trackings);
        });
    }

    function checkSpecificTracking(allTrackingList)
    {
        var bookingNo = document.getElementById('bookingNo').value;
        
        var seekTracking = [];
        var tempIndex = 0;

        allTrackingList.forEach(element => {
            if(element.bookingNo == bookingNo)
            {
                seekTracking.push(allTrackingList[tempIndex]);
            }
            tempIndex++;
        });

        if(seekTracking.length < 1)
        {
            alert("Please check in first!");
            window.location.href = "traveller-baggagecheck.php";
        }
        else
        {
            prepareTimeline(seekTracking);
        }
    }

    function prepareTimeline(tracking)
    {
        tracking.forEach(element => {
            displayTimeline(element.trackingPoints, element.trackingTime);
        });
    }

    function displayTimeline(trackingPoints, trackingTime)
    {
        var timelineLength = trackingTime.length;

        var journeyDiv = document.getElementById('journeyDiv');

        var tempText = "";

        tempText = "Baggage checked into <strong>" + trackingPoints[0] + "</strong> airport at <strong>" + trackingTime[0] + "</strong>";

        $('#checkinText').append(tempText);

        // var checkInPath = document.createElement('div');
        // checkInPath.className = "path";
        // var checkInText = document.createElement('div');
        // checkInText.className = "text";

        // checkInText.innerHTML = "Baggage checked into "<strong>X</strong> airport at <strong>XX:XX</strong>

        for(let i=1; i<timelineLength; i++)
        {
            var pathDiv = document.createElement('div');
            pathDiv.className = "path";

            var textDiv = document.createElement('div');
            textDiv.className = "text";

            tempText = "Baggage passed <strong>" + trackingPoints[i] + "</strong> point at <strong>" + trackingTime[i] +"</strong>";

            textDiv.innerHTML = tempText;
            pathDiv.appendChild(textDiv);
            journeyDiv.appendChild(pathDiv);
        }
    }

    window.onload = getAllDataRealtime();
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script src="js/main.js"></script>
</body>

</html>
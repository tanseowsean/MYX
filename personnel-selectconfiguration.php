<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (!isset($_SESSION['personnelUser'])) {
    header('Location: index.php');
    exit();
} else {
    if(isset($_POST['addflightdetails-btn']))
    {
        // retrieve input and validate for empty or invalid input
        if (isset($_POST['fDate']))
        {
            $fDate = $_POST['fDate'];

            if ($fDate == "")
            {
                echo '<script>
                alert("Flight Date not selected!");
                window.location.href = "personnel-flightsadd.php";
                </script>';
                exit();
            }
        }
        else
        {
            echo '<script>
            alert("Empty Flight Date field!");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        if (isset($_POST['fAircraft']))
        {
            $fAircraft = $_POST['fAircraft'];

            if($fAircraft == "")
            {
                echo '<script>
                alert("Empty Aircraft field!");
                window.location.href = "personnel-flightsadd.php";
                </script>';
                exit();
            }
        }
        else
        {
            echo '<script>
            alert("Empty Aircraft field!");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        if (isset($_POST['fDepartLoc']))
        {
            $fDepartLoc = $_POST['fDepartLoc'];
        }
        else
        {
            echo '<script>
            alert("Depart Location not selected!");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        if (isset($_POST['fArriveLoc']))
        {
            $fArriveLoc = $_POST['fArriveLoc'];
        }
        else
        {
            echo '<script>
            alert("Arrival Location not selected!");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        if (isset($_POST['fDepartTime']))
        {
            $fDepartTime = $_POST['fDepartTime'];
        }
        else
        {
            echo '<script>
            alert("Empty Depart Time field!");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        if (isset($_POST['fArriveTime']))
        {
            $fArriveTime = $_POST['fArriveTime'];
        }
        else
        {
            echo '<script>
            alert("Empty Arrival Time field!");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        if ($fDepartLoc == $fArriveLoc)
        {
            echo '<script>
            alert("Depart and Arrival Location cannot be similar!");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        $fDepartLoc = substr($fDepartLoc, 3);
        $fArriveLoc = substr($fArriveLoc, 3);

        $db = new FirestoreClient([
            'projectId' => 'myx-baggage' //Get firestore project id
        ]);

        $depPoints = [];
        $arrPoints = [];
        $tempID = "";
        $tempLoc = "";
        $tempType = "";

        $dbRef = $db->collection('configurations');
        $snapshot = $dbRef->documents();

        foreach($snapshot as $config)
        {
            $tempID = $config->id();
            $tempLoc = substr($tempID, 0, 3);
            $tempType = $config['configType'];

            if($tempLoc == $fDepartLoc)
            {
                if ($tempType == "Departure")
                {
                    array_push($depPoints, $tempID);
                }
            }

            if($tempLoc == $fArriveLoc)
            {
                if ($tempType == "Arrival")
                {
                    array_push($arrPoints, $tempID);
                }
            }
        }

        if(count($depPoints) < 1)
        {
            echo '<script>
            alert("No available depart configuration set yet for airport '.$fDepartLoc.'.");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }

        if(count($arrPoints) < 1)
        {
            echo '<script>
            alert("No available arrival configuration set yet for airport '.$fArriveLoc.'.");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }
    }

    include 'personnel-header.php';
}
?>

<!-- Content-Area -->
<div class="content">

    <div class="main-title">
        Select Flight Configuration
    </div>

    <!-- display form to select flight configuration -->
    <form class="myx-form" action="add-flights.php" method="post">
        <input type="hidden" id="fDate" name="fDate" value="<?php echo $fDate; ?>">
        <input type="hidden" id="fAircraft" name="fAircraft" value="<?php echo $fAircraft; ?>">
        <input type="hidden" id="fDepartLoc" name="fDepartLoc" value="<?php echo $fDepartLoc; ?>">
        <input type="hidden" id="fArriveLoc" name="fArriveLoc" value="<?php echo $fArriveLoc; ?>">
        <input type="hidden" id="fDepartTime" name="fDepartTime" value="<?php echo $fDepartTime; ?>">
        <input type="hidden" id="fArriveTime" name="fArriveTime" value="<?php echo $fArriveTime; ?>">
        <div class="item">
            <label for="fDepartConfig">Departure Configuration: </label>
            <div class="input">
                <select id="fDepartConfig" name="fDepartConfig"></select>
            </div>
        </div>

        <div class="item">
            <label for="fArriveConfig">Arrival Configuration: </label>
            <div class="input">
                <select id="fArriveConfig" name="fArriveConfig"></select>
            </div>
        </div>

        <div class="item">
            <label class="desktop-only">&nbsp;</label>
            <div class="input">
                <input type="submit" class="submit-btn" name="addflights_btn">
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
        db.collection("configurations").onSnapshot((querySnapshot) => {
            var departConfigs = [];
            var departID = [];

            var arriveConfigs = [];
            var arriveID = [];

            var departAirport = "<?php echo $fDepartLoc; ?>";
            var arriveAirport = "<?php echo $fArriveLoc; ?>";

            var tempId;

            querySnapshot.forEach(doc => {
                tempId = doc.id.slice(0,3);

                if (tempId == departAirport)
                {
                    departConfigs.push(doc.data());
                    departID.push(doc.id);
                }

                if (tempId == arriveAirport)
                {
                    arriveConfigs.push(doc.data());
                    arriveID.push(doc.id);
                }
            });
            addAllOption(departID, departConfigs, arriveID, arriveConfigs);
        });
    }

    var departNum = 0;
    var arriveNum = 0;
    var departSelect = document.getElementById('fDepartConfig');
    var arriveSelect = document.getElementById('fArriveConfig');

    function addDepartOption(configID, configName, configSetting, configType) {
        if (configType == "Departure")
        {
            var option = document.createElement('option');
            option.value = configID;
            option.text = configID + " - " + configName + " - " + configSetting;
            departSelect.appendChild(option);
        }
        departNum++;
    }

    function addArriveOption(configID, configName, configSetting, configType) {
        if (configType == "Arrival")
        {
            var option = document.createElement('option');
            option.value = configID;
            option.text = configID + " - " + configName + " - " + configSetting;
            arriveSelect.appendChild(option);
        }
        arriveNum++;
    }

    function addAllOption(departIDList, departConfigsList, arriveIDList, arriveConfigsList) {
        departNum = 0;
        arriveNum = 0;

        departConfigsList.forEach(element => {
            addDepartOption(departIDList[departNum], element.configName, element.configSetting, element.configType);
        });

        arriveConfigsList.forEach(element => {
            addArriveOption(arriveIDList[arriveNum], element.configName, element.configSetting, element.configType);
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
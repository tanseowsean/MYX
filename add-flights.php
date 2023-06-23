<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if (isset($_POST['addflights_btn']))
{
    // retrieve input
    $fDate = $_POST['fDate'];
    $fAircraft = $_POST['fAircraft'];
    $fDepartLoc = $_POST['fDepartLoc'];
    $fArriveLoc = $_POST['fArriveLoc'];
    $fDepartTime = $_POST['fDepartTime'];
    $fArriveTime = $_POST['fArriveTime'];
    $fDepartConfig = $_POST['fDepartConfig'];
    $fArriveConfig = $_POST['fArriveConfig'];
    
    $fYear = substr($fDate, 0, 4);
    $fMonth = substr($fDate, 5, 7);
    $fDay = substr($fDate, 8, 10);

    // create flight ID
    $fId = "F".$fYear.$fMonth.$fDay.$fAircraft;

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if flight exists
        if ($db->collection('flights')->document($fId)->snapshot()->exists())
        {
            // tracking point already exists, fail to create new one
            echo '<script>
            alert("Fail to add new flight! Flight already exists.");
            window.location.href = "personnel-flightsadd.php";
            </script>';
            exit();
        }
        // else (flight does not exist)
        else
        {
            $data = [
                'flightDate' => $fDate,
                'aircraft' => $fAircraft,
                'departLocation' => $fDepartLoc,
                'arriveLocation' => $fArriveLoc,
                'departTime' => $fDepartTime,
                'arriveTime' => $fArriveTime,
                'departConfig' => $fDepartConfig,
                'arriveConfig' => $fArriveConfig,
                'flightStatus' => "",
                'usage' => 0
            ];

            // update configurations usage
            $dConfigArr = $db->collection('configurations')->document($fDepartConfig)->snapshot()->data();
            $dConfigUsage = $dConfigArr['usage'];
            $aConfigArr = $db->collection('configurations')->document($fArriveConfig)->snapshot()->data();
            $aConfigUsage = $aConfigArr['usage'];

            // add one to value
            $dConfigUsage = $dConfigUsage + 1;
            $aConfigUsage = $aConfigUsage + 1;

            // update value to database
            $db->collection('configurations')->document($fDepartConfig)->update([
                ['path' => 'usage', 'value' => $dConfigUsage]
            ]);

            $db->collection('configurations')->document($fArriveConfig)->update([
                ['path' => 'usage', 'value' => $aConfigUsage]
            ]);

            // create flight
            $db->collection('flights')->document($fId)->set($data);

            // update analytics
            $analyticsArr = $db->collection('analytics')->document('flightStatusAnalytics')->snapshot()->data();
            $fCount = $analyticsArr['flightCount'];
            $fNoStatusCount = $analyticsArr['flightCount'];

            $fCount = $fCount + 1;
            $fNoStatusCount = $fNoStatusCount + 1;

            $db->collection('analytics')->document('flightStatusAnalytics')->update([
                ['path' => 'flightCount', 'value' => $fCount]
            ]);

            $db->collection('analytics')->document('flightStatusAnalytics')->update([
                ['path' => 'noStatusCount', 'value' => $fNoStatusCount]
            ]);

            echo '<script>
            alert("New flight successfully created!");
            window.location.href = "personnel-flights.php";
            </script>';
            exit();
        }
    }
    catch (Exception $exception)
    {
        return $exception->getMessage();
    }
}
?>
<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

// retrieve input
$fId = $_GET['flightID'];

$db = new FirestoreClient([
    'projectId' => 'myx-baggage' //Get firestore project id
]);

try
{
    // check if flight exists
    if ($db->collection('flights')->document($fId)->snapshot()->exists())
    {
        // check if flight is being used
        $flightDoc = $db->collection('flights')->document($fId)->snapshot()->data();

        // if not being used
        if ($flightDoc['usage'] == 0)
        {
            // remove configurations usage
            $departConfig = $flightDoc['departConfig'];
            $arriveConfig = $flightDoc['arriveConfig'];

            // retrieve value
            $departConfigDoc = $db->collection('configurations')->document($departConfig)->snapshot()->data();
            $arriveConfigDoc = $db->collection('configurations')->document($arriveConfig)->snapshot()->data();

            $departConfigUsage = $departConfigDoc['usage'];
            $departConfigUsage = $departConfigUsage - 1;

            $arriveConfigUsage = $arriveConfigDoc['usage'];
            $arriveConfigUsage = $arriveConfigUsage - 1;

            $db->collection('configurations')->document($departConfig)->update([
                ['path' => 'usage', 'value' => $departConfigUsage]
            ]);

            $db->collection('configurations')->document($arriveConfig)->update([
                ['path' => 'usage', 'value' => $arriveConfigUsage]
            ]);

            // update analytics
            $flightStatus = $flightDoc['flightStatus'];
            $pathType = "";

            switch($flightStatus)
            {
                case "":
                    $pathType = "noStatusCount";
                    break;
                case "Gate Open":
                    $pathType = "gateOpenCount";
                    break;
                case "Boarding":
                    $pathType = "boardingCount";
                    break;
                case "Gate Closing":
                    $pathType = "gateClosingCount";
                    break;
                case "Departed":
                    $pathType = "departedCount";
                    break;
                case "Landed":
                    $pathType = "landedCount";
                    break;
            }

            $analyticsArr = $db->collection('analytics')->document('flightStatusAnalytics')->snapshot()->data();
            $fCount = $analyticsArr['flightCount'];
            $fCount = $fCount - 1;
            
            $newCount = $analyticsArr[$pathType];
            $newCount = $newCount - 1;

            $db->collection('analytics')->document('flightStatusAnalytics')->update([
                ['path' => 'flightCount', 'value' => $fCount]
            ]);

            $db->collection('analytics')->document('flightStatusAnalytics')->update([
                ['path' => $pathType, 'value' => $newCount]
            ]);

            // delete the flight from database
            $db->collection('flights')->document($fId)->delete();
            echo '<script>
            alert("Flight '.$fId.' successfully deleted!");
            window.location.href = "personnel-flights.php";
            </script>';
            exit();
        }
        else
        {
            // fail to delete
            echo '<script>
            alert("Fail to delete flight! There are bookings linked to this flight.");
            window.location.href = "personnel-flights.php";
            </script>';
            exit();
        }
    }
    // else (flight does not exist)
    else
    {
        // fail to delete
        echo '<script>
        alert("Fail to delete flight! Flight does not exist.");
        window.location.href = "personnel-flights.php";
        </script>';
        exit();
    }
}
catch (Exception $exception)
{
    return $exception->getMessage();
}
?>
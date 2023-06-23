<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();
if (isset($_POST['updateflightstatus_btn']))
{
    // retrieve input
    $fId = $_POST['flightID'];
    $fStatus = $_POST['fStatus'];

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if flight exists
        if ($db->collection('flights')->document($fId)->snapshot()->exists())
        {
            // retrieve flight details
            $flightDoc = $db->collection('flights')->document($fId)->snapshot()->data();
            $dbStatus = $flightDoc['flightStatus'];

            // check if there are any changes
            if ($dbStatus == $fStatus)
            {
                // fail to update because no changes is made
                echo '<script>
                alert("Fail to update flight status! No changes are made.");
                window.location.href = "personnel-flightsupdate.php?flightID='.$fId.'";
                </script>';
                exit();
            }
            else
            {
                // update analytics
                $analyticsArr = $db->collection('analytics')->document('flightStatusAnalytics')->snapshot()->data();
                $pathType = "";

                switch($dbStatus)
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
                
                $newCount = $analyticsArr[$pathType];
                $newCount = $newCount - 1;

                $db->collection('analytics')->document('flightStatusAnalytics')->update([
                    ['path' => $pathType, 'value' => $newCount]
                ]);

                switch($fStatus)
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

                $newCount = $analyticsArr[$pathType];
                $newCount = $newCount + 1;

                $db->collection('analytics')->document('flightStatusAnalytics')->update([
                    ['path' => $pathType, 'value' => $newCount]
                ]);

                // update the changes
                $db->collection('flights')->document($fId)->update([
                    ['path' => 'flightStatus', 'value' => $fStatus]
                ]);

                echo '<script>
                alert("Successfully updated flight status!");
                window.location.href = "personnel-flights.php";
                </script>';
                exit();
            }
        }
        else
        {
            // fail to update
            echo '<script>
            alert("Fail to update flight status! Flight does not exist.");
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
else
{
    exit();
}
?>
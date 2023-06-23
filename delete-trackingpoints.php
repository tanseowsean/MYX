<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

// retrieve input
$aId = $_GET['airportID'];
$pId = $_GET['pointID'];

$db = new FirestoreClient([
    'projectId' => 'myx-baggage' //Get firestore project id
]);

try
{
    // check if tracking point exists
    if ($db->collection('trackingPoints')->document($pId)->snapshot()->exists())
    {
        // check if tracking point is being used
        $pointDoc = $db->collection('trackingPoints')->document($pId)->snapshot()->data();

        // if not being used
        if ($pointDoc['usage'] == 0)
        {
            // delete the tracking point from database
            $db->collection('trackingPoints')->document($pId)->delete();
            echo '<script>
            alert("Tracking point '.$pId.' successfully deleted!");
            window.location.href = "personnel-trackingpoints.php?airportID='.$aId.'";
            </script>';
            exit();
        }
        else
        {
            // fail to delete
            echo '<script>
            alert("Fail to delete tracking point! Tracking point is being used.");
            window.location.href = "personnel-trackingpoints.php?airportID='.$aId.'";
            </script>';
            exit();
        }
    }
    // else (tracking point does not exist)
    else
    {
        // fail to delete
        echo '<script>
        alert("Fail to delete tracking point! Tracking point does not exist.");
        window.location.href = "personnel-trackingpoints.php?airportID='.$aId.'";
        </script>';
        exit();
    }
}
catch (Exception $exception)
{
    return $exception->getMessage();
}
?>
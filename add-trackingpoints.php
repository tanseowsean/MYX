<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if (isset($_GET['addtrackingpoint_btn']))
{
    // retrieve input
    $aId = ($_GET['airportID']);
    $pId = ($_GET['pointID']);
    $tpId = $aId.$pId;
    $pDesc = ($_GET['pointDesc']);

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if tracking point exists
        if ($db->collection('trackingPoints')->document($tpId)->snapshot()->exists())
        {
            // tracking point already exists, fail to create new one
            echo '<script>
            alert("Fail to add new tracking point! Tracking point already exists.");
            window.location.href = "personnel-configureairport.php?airportID='.$aId.'";
            </script>';
            exit();
        }
        // else (tracking point does not exist)
        else
        {
            $useArr = [];

            // create tracking point
            $data = [
                'airportID' => $aId,
                'trackingDesc' => $pDesc,
                'usage' => 0,
                'use' => $useArr
            ];

            $db->collection('trackingPoints')->document($tpId)->set($data);

            echo '<script>
            alert("New tracking point successfully created!");
            window.location.href = "personnel-trackingpoints.php?airportID='.$aId.'";
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
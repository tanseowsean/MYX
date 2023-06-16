<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if (isset($_GET['addconfigpoint_btn']))
{
    // retrieve input
    $aId = ($_GET['airportID']);
    $pId = ($_GET['pointID']);
    $pDesc = ($_GET['pointDesc']);

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if config point exists
        if ($db->collection('configurationPoints')->document($pId)->snapshot()->exists())
        {
            // config point already exists, fail to create new one
            echo '<script>
            alert("Fail to add new configuration point! Configuration point already exists.");
            window.location.href = "personnel-configureairport.php?airportID='.$aId.'";
            </script>';
            exit();
        }
        // else (config point does not exist)
        else
        {
            // create config point
            $data = [
                'airportID' => $aId,
                'configDesc' => $pDesc
            ];

            $db->collection('configurationPoints')->document($pId)->set($data);

            echo '<script>
            alert("New configuration point successfully created!");
            window.location.href = "personnel-configureairport.php?airportID='.$aId.'";
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
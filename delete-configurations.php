<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

// retrieve input
$aId = $_GET['airportID'];
$cId = $_GET['configID'];

$db = new FirestoreClient([
    'projectId' => 'myx-baggage' //Get firestore project id
]);

try
{
    // check if configuration exists
    if ($db->collection('configurations')->document($cId)->snapshot()->exists())
    {
        // check if configuration is being used
        $configDoc = $db->collection('configurations')->document($cId)->snapshot()->data();

        // if not being used
        if ($configDoc['usage'] == 0)
        {
            // remove tracking point usage
            $usedPoints = [];
            $usedPoints = $configDoc['configSetting'];
            $usedLength = count($usedPoints);

            for ($x = 0; $x < $usedLength; $x++)
            {
                $pId = $usedPoints[$x];

                // retrieve original value of usage
                $pointDoc = $db->collection('trackingPoints')->document($pId)->snapshot()->data();
                $pointUsage = $pointDoc['usage'];
                $pointUsage = $pointUsage - 1;

                $db->collection('trackingPoints')->document($pId)->update([
                    ['path' => 'usage', 'value' => $pointUsage]
                ]);
            }

            // delete the configuration from database
            $db->collection('configurations')->document($cId)->delete();
            echo '<script>
            alert("Configuration '.$cId.' successfully deleted!");
            window.location.href = "personnel-configurations.php?airportID='.$aId.'";
            </script>';
            exit();
        }
        else
        {
            // fail to delete
            echo '<script>
            alert("Fail to delete configuration! Configuration is being used.");
            window.location.href = "personnel-configurations.php?airportID='.$aId.'";
            </script>';
            exit();
        }
    }
    // else (configuration does not exist)
    else
    {
        // fail to delete
        echo '<script>
        alert("Fail to delete configuration! Configuration does not exist.");
        window.location.href = "personnel-configurations.php?airportID='.$aId.'";
        </script>';
        exit();
    }
}
catch (Exception $exception)
{
    return $exception->getMessage();
}
?>
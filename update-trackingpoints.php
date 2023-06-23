<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if (isset($_GET['updatetrackingpoint_btn']))
{
    // retrieve input
    $aId = $_GET['airportID'];
    $pId = $_GET['pointID'];
    $pDesc = $_GET['pointDesc'];

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if tracking point exists
        if ($db->collection('trackingPoints')->document($pId)->snapshot()->exists())
        {
            // retrieve tracking point details
            $pointDoc = $db->collection('trackingPoints')->document($pId)->snapshot()->data();

            // check if there are any changes
            if ($pointDoc['trackingDesc'] == $pDesc)
            {
                // fail to update because no changes is made
                echo '<script>
                alert("Fail to update tracking point! No changes are made.");
                window.location.href = "personnel-trackingpoints.php?airportID='.$aId.'";
                </script>';
                exit();
            }
            else
            {
                // validate for empty input
                if ($pDesc == "")
                {
                    // fail to update due to empty field
                    echo '<script>
                    alert("Fail to update tracking point! Field is empty.");
                    window.location.href = "personnel-trackingpoints.php?airportID='.$aId.'";
                    </script>';
                    exit();
                }
                else
                {
                    // update the changes
                    $db->collection('trackingPoints')->document($pId)->update([
                        ['path' => 'trackingDesc', 'value' => $pDesc]
                    ]);

                    echo '<script>
                    alert("Successfully updated tracking point details!");
                    window.location.href = "personnel-trackingpoints.php?airportID='.$aId.'";
                    </script>';
                    exit();
                }
            }
        }
        // else (tracking point does not exist)
        else
        {
            // fail to update
            echo '<script>
            alert("Fail to update tracking point! Tracking point does not exist.");
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
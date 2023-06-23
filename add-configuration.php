<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if (isset($_POST['addconfiguration_btn']))
{
    // retrieve input
    $aId = $_POST['airportID'];
    $cName = $_POST['configName'];
    $cType = $_POST['configType'];

    $cPoints = [];

    if(isset($_POST['selectedPoints']))
    {
        foreach($_POST['selectedPoints'] as $point)
        {
            array_push($cPoints, $point);
        }
    }

    // validate for empty input
    if ($cName == "")
    {
        // empty config name error
        echo '<script>
        alert("Fail to create new configuration! Configuration name field is empty.");
        window.location.href = "personnel-configureairport.php?airportID='.$aId.'";
        </script>';
        exit();
    }
    
    $cLength = count($cPoints);

    if ($cLength < 2 || $cLength == 0)
    {
        if ($cLength < 2)
        {
            // insufficient tracking point error
            echo '<script>
            alert("Fail to create new configuration! Insufficient configuration points selected.");
            window.location.href = "personnel-configureairport.php?airportID='.$aId.'";
            </script>';
            exit();
        }

        if ($cLength == 0)
        {
            // no tracking point error
            echo '<script>
            alert("Fail to create new configuration! No tracking point is selected.");
            window.location.href = "personnel-configureairport.php?airportID='.$aId.'";
            </script>';
            exit();
        }
    }

    date_default_timezone_set("Asia/Kuala_Lumpur");
    $current = date("YmdHis");
    $cId = $aId.$current;

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        if ($db->collection('configurations')->document($cId)->snapshot()->exists())
        {
            // configuration already exists, fail to create new one
            echo '<script>
            alert("Fail to create new configuration! Configuration already exists.");
            window.location.href = "personnel-configureairport.php?airportID='.$aId.'";
            </script>';
            exit();
        }
        else
        {
            $data = [
                'configName' => $cName,
                'configType' => $cType,
                'configSetting' => $cPoints,
                'airportID' => $aId,
                'configUsage' => 0
            ];

            // update tracking points usage
            foreach($cPoints as $pId)
            {
                // retrieve value
                $pArr = $db->collection('trackingPoints')->document($pId)->snapshot()->data();
                $x = $pArr['usage'];

                // add one to value
                $x = $x + 1;

                // update value to database
                $db->collection('trackingPoints')->document($pId)->update([
                    ['path' => 'usage', 'value' => $x]
                ]);
            }

            // create new configuration
            $db->collection('configurations')->document($cId)->set($data);

            echo '<script>
            alert("New configuration successfully created!");
            window.location.href = "personnel-configurations.php?airportID='.$aId.'";
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
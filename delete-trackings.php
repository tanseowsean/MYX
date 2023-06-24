<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

// retrieve input
$tId = $_GET['trackingID'];
$fId = $_GET['flightID'];

$db = new FirestoreClient([
    'projectId' => 'myx-baggage' //Get firestore project id
]);

try
{
    // check if tracking exists
    if ($db->collection('trackings')->document($tId)->snapshot()->exists())
    {
        $tArr = $db->collection('trackings')->document($tId)->snapshot()->data();
        $bookingNo = $tArr['bookingNo'];

        // update booking usage
        $bArr = $db->collection('bookings')->document($bookingNo)->snapshot()->data();
        $x = $bArr['usage'];

        $x = $x - 1;

        $db->collection('bookings')->document($bookingNo)->update([
            ['path' => 'usage', 'value' => $x]
        ]);

        // update analytics
        $latestPoint = $tArr['latestPoint'];
        $lastPoint = $tArr['lastPoint'];

        $analyticsArr = $db->collection('analytics')->document('baggageStatusAnalytics')->snapshot()->data();

        if($latestPoint == $lastPoint)
        {
            $updateCount = $analyticsArr['completedCount'];
            $updatePath = "completedCount";
        }
        else
        {
            $updateCount = $analyticsArr['ongoingCount'];
            $updatePath = "ongoingCount";
        }

        $updateCount = $updateCount - 1;
        $db->collection('analytics')->document('baggageStatusAnalytics')->update([
            ['path' => $updatePath, 'value' => $updateCount]
        ]);

        $totalCount = $analyticsArr['totalCount'];
        $totalCount = $totalCount - 1;
        $db->collection('analytics')->document('baggageStatusAnalytics')->update([
            ['path' => 'totalCount', 'value' => $totalCount]
        ]);

        // delete the tracking from database
        $db->collection('bookings')->document($bookingNo)->delete();
        echo '<script>
        alert("Tracking '.$tId.' successfully deleted!");
        window.location.href = "personnel-baggagetracking.php?flightID='.$fId.'";
        </script>';
        exit();
    }
    else
    {
        // fail to delete
        echo '<script>
        alert("Fail to delete tracking! Tracking not found.");
        window.location.href = "personnel-baggagetracking.php?flightID='.$fId.'";
        </script>';
        exit();
    }
}
catch (Exception $exception)
{
    return $exception->getMessage();
}
?>
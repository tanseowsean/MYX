<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if(isset($_POST['createtracking_btn']))
{
    // retrieve input
    $tagId = $_POST['tagID'];
    $bookingNo = $_POST['bookingNo'];
    $fId = $_POST['flightID'];
    $aId = $_POST['airportID'];

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if tracking already exists
        if($db->collection('trackings')->document($tagId)->snapshot()->exists())
        {
            // tracking already exists, fail to create new one
            echo '<script>
            alert("Fail to check in! Tag already used for tracking.");
            window.location.href = "personnel-checkin.php?airportID='.$aId.'";
            </script>';
            exit();
        }
        else
        {
            // store checkin information
            $initialPoint = [];
            $trackingTime = [];
            array_push($initialPoint, $aId);

            $checkInArr = $db->collection('tagCheckIn')->document($tagId)->snapshot()->data();
            $detectTime = $checkInArr['detectTime'];
            array_push($trackingTime, $detectTime);

            // retrieve flight depart and arrive config
            $fArr = $db->collection('flights')->document($fId)->snapshot()->data();
            $departConfigId = $fArr['departConfig'];
            $arriveConfigId = $fArr['arriveConfig'];

            $configArr1 = $db->collection('configurations')->document($departConfigId)->snapshot()->data();
            $departConfig = $configArr1['configSetting'];

            $configArr2 = $db->collection('configurations')->document($arriveConfigId)->snapshot()->data();
            $arriveConfig = $configArr2['configSetting'];

            $lastPoint = end($arriveConfig);

            $trackingPoints = [];
            $trackingPoints = array_merge($initialPoint, $departConfig, $arriveConfig);

            $data = [
                'trackingPoints' => $trackingPoints,
                'trackingTime' => $trackingTime,
                'lastPoint' => $lastPoint,
                'latestPoint' => $aId,
                'bookingNo' => $bookingNo
            ];

            // update booking usage
            $bArr = $db->collection('bookings')->document($bookingNo)->snapshot()->data();
            $x = $bArr['usage'];

            $x = $x + 1;

            $db->collection('bookings')->document($bookingNo)->update([
                ['path' => 'usage', 'value' => $x]
            ]);

            // update analytics
            $analyticsArr = $db->collection('analytics')->document('baggageStatusAnalytics')->snapshot()->data();
            $totalCount = $analyticsArr['totalCount'];
            $ongoingCount = $analyticsArr['ongoingCount'];

            $totalCount = $totalCount + 1;
            $ongoingCount = $ongoingCount + 1;

            $db->collection('analytics')->document('baggageStatusAnalytics')->update([
                ['path' => 'totalCount', 'value' => $totalCount]
            ]);

            $db->collection('analytics')->document('baggageStatusAnalytics')->update([
                ['path' => 'ongoingCount', 'value' => $ongoingCount]
            ]);

            // create tracking
            $db->collection('trackings')->document($tagId)->set($data);

            // successful check in
            echo '<script>
            alert("Successfully check in!");
            window.location.href = "personnel-checkin.php?airportID='.$aId.'";
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
    header('Location: personnel-checkinairport.php');
    exit();
}

# check if booking exists, if do not exist, alert message & return to checkin
# if booking exist, check if match with passport number
# if match, proceed to tagging page
# if does not match, alert message & return to checkin

?>
<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

// retrieve input
$bookingNo = $_GET['bookingNo'];
$fId = $_GET['flightID'];

$db = new FirestoreClient([
    'projectId' => 'myx-baggage' //Get firestore project id
]);

try
{
    // check if booking exists
    if ($db->collection('bookings')->document($bookingNo)->snapshot()->exists())
    {
        // check if booking is being used
        $bookingDoc = $db->collection('bookings')->document($bookingNo)->snapshot()->data();

        // if not being used
        if ($bookingDoc['usage'] == 0)
        {
            // remove usage on flight
            $flightDoc = $db->collection('flights')->document($fId)->snapshot()->data();
            $fUsage = $flightDoc['usage'];

            $fUsage = $fUsage - 1;

            $db->collection('flights')->document($fId)->update([
                ['path' => 'usage', 'value' => $fUsage]
            ]);

            // delete the booking from database
            $db->collection('bookings')->document($bookingNo)->delete();
            echo '<script>
            alert("Booking '.$bookingNo.' successfully deleted!");
            window.location.href = "personnel-bookings.php?flightID='.$fId.'";
            </script>';
            exit();
        }
        else
        {
            // fail to delete
            echo '<script>
            alert("Fail to delete booking! Booking is being used.");
            window.location.href = "personnel-bookings.php?flightID='.$fId.'";
            </script>';
            exit();
        }
    }
    else
    {
        // fail to delete
        echo '<script>
        alert("Fail to delete booking! Booking not found.");
        window.location.href = "personnel-bookings.php?flightID='.$fId.'";
        </script>';
        exit();
    }
}
catch (Exception $exception)
{
    return $exception->getMessage();
}
?>
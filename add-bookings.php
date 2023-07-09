<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

session_start();

if(isset($_POST['addbooking_btn']))
{
    // retrieve input
    $bookingNum = $_POST['bookingNo'];
    $identityNum = $_POST['identityNo'];
    $hashedIdentityNum = md5($identityNum);
    $identityType = $_POST['identityType'];
    $fId = $_POST['flightID'];

    // validate for empty input
    if ($bookingNum == "")
    {
        // empty booking number field
        echo '<script>
        alert("Fail to add new booking! Booking number field is empty.");
        window.location.href = "personnel-bookingsadd.php";
        </script>';
        exit();
    }

    if ($identityNum == "")
    {
        // empty identity number field
        echo '<script>
        alert("Fail to add new booking! Identity number field is empty.");
        window.location.href = "personnel-bookingsadd.php";
        </script>';
        exit();
    }

    $db = new FirestoreClient([
        'projectId' => 'myx-baggage' //Get firestore project id
    ]);

    try
    {
        // check if booking exists
        if ($db->collection('bookings')->document($bookingNum)->snapshot()->exists())
        {
            // booking already exists, fail to create new one
            echo '<script>
            alert("Fail to add new booking! Booking already exists.");
            window.location.href = "personnel-bookingsadd.php";
            </script>';
            exit();
        }
        else // booking does not exist
        {
            $data = [
                'identityNo' => $hashedIdentityNum,
                'identityType' => $identityType,
                'flightID' => $fId,
                'usage' => 0
            ];

            // update flight usage
            // retrieve value
            $fArr = $db->collection('flights')->document($fId)->snapshot()->data();
            $x = $fArr['usage'];

            // add one to value
            $x = $x + 1;

            // update value to database
            $db->collection('flights')->document($fId)->update([
                ['path' => 'usage', 'value' => $x]
            ]);

            // create booking
            $db->collection('bookings')->document($bookingNum)->set($data);

            echo '<script>
            alert("New booking successfully created!");
            window.location.href = "personnel-bookings.php?flightID='.$fId.'";
            </script>';
            exit();
        }
    }
    catch (Exception $exception)
    {
        return $exception->getMessage();
    }
}
?>
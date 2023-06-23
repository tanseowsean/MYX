<?php
session_start();

// retrieve input
$bookingNo = $_GET['bookingNo'];
$fId = $_GET['flightID'];

echo '<script>
var confirmMsg = "Are you sure you want to delete booking '.$bookingNo.'?";

if (confirm(confirmMsg))
{
    // go to delete function
    var deleteLoc = "delete-bookings.php?bookingNo='.$bookingNo.'&flightID='.$fId.'";

    window.location.href = deleteLoc;
}
else
{
    // return
    var returnLoc = "personnel-bookings.php?flightID='.$fId.'";

    window.location.href = returnLoc;
}
</script>';
?>
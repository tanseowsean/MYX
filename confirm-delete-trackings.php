<?php
session_start();

// retrieve input
$tId = $_GET['trackingID'];
$fId = $_GET['flightID'];

echo '<script>
var confirmMsg = "Are you sure you want to delete tracking with ID '.$tId.'?";

if (confirm(confirmMsg))
{
    // go to delete function
    var deleteLoc = "delete-trackings.php?trackingID='.$tId.'$flightID='.$fId.'";

    window.location.href = deleteLoc;
}
else
{
    // return
    var returnLoc = "personnel-baggagetracking.php?flightID='.$fId.'";

    window.location.href = returnLoc;
}
</script>';
?>
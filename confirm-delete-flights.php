<?php
session_start();

// retrieve input
$fId = $_GET['flightID'];

echo '<script>
var confirmMsg = "Are you sure you want to delete flight with ID '.$fId.'?";

if (confirm(confirmMsg))
{
    // go to delete function
    var deleteLoc = "delete-flights.php?flightID='.$fId.'";

    window.location.href = deleteLoc;
}
else
{
    // return
    var returnLoc = "personnel-flights.php";

    window.location.href = returnLoc;
}
</script>';
?>
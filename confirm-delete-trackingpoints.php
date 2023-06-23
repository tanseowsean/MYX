<?php

session_start();

// retrieve input
$aId = $_GET['airportID'];
$pId = $_GET['pointID'];

echo '<script>
var confirmMsg = "Are you sure you want to delete tracking point with ID '.$pId.'?";

if (confirm(confirmMsg))
{
    // go to delete function
    var deleteLoc = "delete-trackingpoints.php?airportID='.$aId.'&pointID='.$pId.'";

    window.location.href = deleteLoc;
}
else
{
    // return
    var returnLoc = "personnel-trackingpoints.php?airportID='.$aId.'";

    window.location.href = returnLoc;
}
</script>';

?>
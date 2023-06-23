<?php

session_start();

// retrieve input
$aId = $_GET['airportID'];
$cId = $_GET['configID'];

echo '<script>
var confirmMsg = "Are you sure you want to delete configuration with ID '.$cId.'?";

if (confirm(confirmMsg))
{
    // go to delete function
    var deleteLoc = "delete-configurations.php?airportID='.$aId.'&configID='.$cId.'";

    window.location.href = deleteLoc;
}
else
{
    // return
    var returnLoc = "personnel-configurations.php?airportID='.$aId.'";

    window.location.href = returnLoc;
}
</script>';

?>
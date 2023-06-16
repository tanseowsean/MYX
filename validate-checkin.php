<?php
require 'vendor/autoload.php';
use Google\Cloud\Firestore\FirestoreClient;

# check if booking exists, if do not exist, alert message & return to checkin
# if booking exist, check if match with passport number
# if match, proceed to tagging page
# if does not match, alert message & return to checkin

?>
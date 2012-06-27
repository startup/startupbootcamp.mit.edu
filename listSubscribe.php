<?php
require_once 'inc/MCAPI.class.php';
require_once 'inc/config.inc.php'; //contains apikey

$api = new MCAPI($apikey);

// By default this sends a confirmation email - you will not see new members
// until the link contained in it is clicked!
$email = $_POST['email'];
$retval = $api->listSubscribe( $listId, $email);

if ($api->errorCode) {
    echo "Error";
    echo "Unable to load listSubscribe()!\n";
    echo "\tCode=".$api->errorCode."\n";
    echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Subscribed - look for the confirmation email!\n";
}
?>

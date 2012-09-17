<?php
require_once 'inc/MCAPI.class.php';

//API Key - see http://admin.mailchimp.com/account/api
$apikey = 'd77452eaea2024d53be11788202045d3-us4';

//
// A List Id to run examples against. use lists() to view all
// Also, login to MC account, go to List, then List Tools, and look for the List ID entry
$listId = '65e8f01b03';

$api = new MCAPI($apikey);

// By default this sends a confirmation email - you will not see new members
// until the link contained in it is clicked!
$email = $_POST['email'];
$name = $_POST['name'];
$mergeVars = array('FNAME'=> $name);

$retval = $api->listSubscribe( $listId, $email, $mergeVars);

if (intval($api->errorCode) == 214) { // list already subscribed
    echo "\tCode=".$api->errorCode."\n";
    echo "\tMsg=".$api->errorMessage."\n";
} else if ($api->errorCode) {
    echo "Error";
    echo "Unable to load listSubscribe()!\n";
    echo "\tCode=".$api->errorCode."\n";
    echo "\tMsg=".$api->errorMessage."\n";
} else {
    echo "Subscribed - look for the confirmation email!\n";
}
?>

<?php
require_once('vendor/autoload.php');

use AfricasTalking\SDK\SMS;
use AfricasTalking\SDK\AfricasTalking;


function successmessage(){
$username = '1308'; // use 'sandbox' for development in the test environment
$apiKey   = '5367c348c0864c7bb4be6a0198d6aale5e79d244eee89566f7c519df810eb7fe';

$AT       = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms      = $AT->sms();

// Use the service
$result   = $sms->send([
    'to'      => '+25489707629',
    'message' => 'Hello World!'

]);
}

//API KEY= '5367c348c0864c7bb4be6a0198d6aale5e79d244eee89566f7c519df810eb7fe;'
?>
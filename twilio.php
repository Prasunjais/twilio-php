// Send an SMS using Twilio's REST API and PHP
<?php
require_once('Twilio/autoload.php');

$sid = "ACa4112aa84b7cbe41489d2feb97d911f3"; // Your Account SID from www.twilio.com/console
$token = "9852e30ac2c5b616eccd04d3488634a6"; // Your Auth Token from www.twilio.com/console

$client = new Twilio\Rest\Client($sid, $token);
try {
	$message = $client->messages->create(
	  //'+919884469219', // Text this number
	  '+918240288516',
	  array(
	  		  'from' => '+17048101377', // From a valid Twilio number
	    'body' => 'This is a testing sms!'
	  )	
	);
} catch(Exception $e) {
	echo $e;
}

print $message->sid;
echo '---------------';
echo '<pre>';
print_r($message);
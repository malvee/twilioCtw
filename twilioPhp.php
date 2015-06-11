<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once('twilio-php-master/Services/Twilio.php'); // Loads the library
 
// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACf3bff83741dbbac71cc86f19e4c78884"; 
$token = "ec08fa98cd88723f9798ec9d82df60e7"; 
//$client = new Services_Twilio($sid, $token);
$http = new Services_Twilio_TinyHttp('https://api.twilio.com');

array('curlopts' => array(CURLOPT_SSL_VERIFYPEER => true,

CURLOPT_SSL_VERIFYHOST => 2) );




 $client = new Services_Twilio($sid, $token, "2010-04-01", $http);
 
$call = $client->account->calls->create( "+441702806342","+447949319540", "http://twimlets.com/holdmusic?Bucket=com.twilio.music.ambient", array());
echo $call->sid;

?>
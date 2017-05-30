<?php
// Get the PHP helper library from twilio.com/docs/php/install
require_once '/path/to/vendor/autoload.php'; // Loads the library
use Twilio\Rest\Client;

// Your Account Sid and Auth Token from twilio.com/user/account
$sid = "ACXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX";
$token = "your_auth_token";
$client = new Client($sid, $token);

$command = $client->preview->wireless
    ->commands
    ->create(
        'wakeup',
        'AliceSmithSmartMeter',
        'https://sim-manager.mycompany.com/commands/mobile-terminated-command-callback'
    );

print_r($command);

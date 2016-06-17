<?php

define("DB_HOST") ? null : define("DB_HOST", "localhost");

define("DB_USER") ? NULL: define ("DB_USER", "root");
define("DB_PASS") ? NULL: define ("DB_PASS", "");
define("DB_NAME") ? NULL: define ("DB_NAME", "sms");
$con = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$config = [
    'account_sid' => 'AC0f48446946d5366ad87989c1d00e8643',
    'auth_token' => 'e3ea03efe74c54272d4650e655a6d06c',
    'phone_number' => '5032172776'
];


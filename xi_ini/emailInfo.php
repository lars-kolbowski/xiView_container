<?php
$secretRecaptchaKey = "your secret recaptcha key";
$mailInfo = array (
    "account" => "your admin email address",
    "password" => "its password",
    "host" => "its host",
    "port" => 587 // change to your port number
);
$urlRoot = "http://address of your webserver/";  // cos sniffing it in php via $_SERVER can be set clientside which is bad
$noGroups = true;
?>

<?php 
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
include 'vendor\autoload.php';

$key = "123456";
$payload = array(
    "name" => "Mithun banerjee",
    "pass" => "123456789",
    "phone" => "01713574869",
    "city" => "Dhaka"
);

$encodeString = JWT::encode($payload,$key,'HS256');
echo $encodeString;

?>
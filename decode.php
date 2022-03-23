<?php 
use Firebase\JWT\JWT;
use Firebase\JWT\Key;
include 'vendor\autoload.php';

$key = "123456";

$encodeString ="eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJuYW1lIjoiTWl0aHVuIGJhbmVyamVlIiwicGFzcyI6IjEyMzQ1Njc4OSIsInBob25lIjoiMDE3MTM1NzQ4NjkiLCJjaXR5IjoiRGhha2EifQ.lcCAAlxZHUAhqHdGXykcZVr95kYd_qOzHz7C57A1AYQ";

$decodeData = JWT::decode($encodeString,new Key($key, 'HS256'));
print_r($decodeData);

//$decoded_array = (array) $decodeData;

?>
<?php

require "./vendor/autoload.php";

use Firebase\JWT\JWT;

$secretKey  = 'bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=';

function create_access_token($user){
    $payload = array(
        "user" => $user,
        "iss" => "http://example.org",
        "aud" => "http://example.com",
        "iat" => 1356999524,
        "nbf" => 1357000000
        );
    return JWT::encode($payload,$GLOBALS['secretKey']);
}
function decode_access_token($jwt){
     $decoded = JWT::decode($jwt, $GLOBALS['secretKey'], array('HS256'));
    $decoded_array = (array) $decoded;

    return $decoded_array;
}

?>
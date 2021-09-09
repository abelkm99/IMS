<?php

require "./vendor/autoload.php";

use Firebase\JWT\JWT;

$secretKey  = 'bGS6lzFqvvSQ8ALbOxatm7/Vk7mLQyzqaS34Q4oR1ew=';

function create_access_token($data)
{
    $payload = array(
        "data" => $data,
        "iss" => "http://example.org",
        "aud" => "http://example.com",
        "iat" => 1356999524,
        "nbf" => 1357000000,
        "random" => random_str(700),
        "random2" => random_str(700)
    );
    return JWT::encode($payload, $GLOBALS['secretKey']);
}
function decode_access_token($jwt)
{
    $decoded = JWT::decode($jwt, $GLOBALS['secretKey'], array('HS256'));
    $decoded_array = (array) $decoded;

    return $decoded_array;
}
function random_str(
    int $length = 64,
    string $keyspace = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ'
): string {
    if ($length < 1) {
        throw new \RangeException("Length must be a positive integer");
    }
    $pieces = [];
    $max = mb_strlen($keyspace, '8bit') - 1;
    for ($i = 0; $i < $length; ++$i) {
        $pieces[] = $keyspace[random_int(0, $max)];
    }
    return implode('', $pieces);
}

function validate_accesstoken($roles)
{
    try{
        $headers = Auth::getAuthorizationHeader();
        
        $separated = explode(' ',$headers);
        if (count($separated)>1){

            $bearer_token =$separated[1];
            $decoded_role = decode_access_token($bearer_token)['data']->Role;
            if (in_array($decoded_role, $roles)) {
                return 1;
            } else {
                http_response_code(401);
                echo json_encode(array("result" => 'unAuthorized person'));
                return 0;
            }
        }else{
            http_response_code(401);
            echo json_encode(array("result" => 'invalid accesstoken'));
            return 0;
        }

      
    }
    catch(Exception $e){
        http_response_code(401);
        echo json_encode(array("result" => 'invalid accesstoken'));
        return 0;
    }
}

<?php
    class Auth{
        function Login(){
            $access_token =  create_access_token('admin');
            setcookie('access_token',$access_token);
            $response =  array("access_token"=>$access_token);
            print_r(json_encode($response)); 
        }
        
    }

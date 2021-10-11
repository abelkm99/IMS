<?php
class Auth
{
    public static $header;
    function DatabaseTest()
    {
        $conn = get_connection();
        if ($conn) {
            http_response_code(200);

            $response = array("message" => "connection_established");
            print_r(json_encode($response));
        } else {            
            http_response_code(500);
            print_r(json_encode(sqlsrv_errors()));
            return;
        }
    }
    function Login()
    {
        $conn = get_connection();
  
        if ($conn) {
        } else {
           $resMessage = sqlsrv_errors($conn);
            http_response_code(500);
            echo json_encode($resMessage);
            return;
        }



        // get username or password

        $str_json = file_get_contents('php://input');
        $json = json_decode($str_json);



        if ($json === null) {
            $resMessage = array("message" => "empty or invalid json input data");
            http_response_code(400);
            echo json_encode($resMessage);
            return;
        }

        if (!key_value_Validator(array("username" => 1, "password" => 1), $json)) {
            $resMessage = array("message" => "no username or password inside the json file");
            http_response_code(400);
            echo json_encode($resMessage);
            return;
        }


        $username = $json->username;
        $password = $json->password;

        // check if the user is an admin

        $sql = "SELECT * FROM [Admin] WHERE AdminUsername = ? AND AdminPassword = ?";
        $stmt = sqlsrv_query($conn, $sql, array(&$username, &$password));

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        if ($row) {
            http_response_code(200);
            $row['Role'] = "Admin";
            $row['message'] = "Login Succesfully as an Admin";
            $row['access_token'] =  create_access_token($row);
            echo (json_encode($row));
            return;
        }

        // check if the user is an employee

        $sql = "SELECT * FROM [Employee] WHERE [EmployeeUserName] = ? AND [EmployeePassword] = ? AND [Activated] = 1";
        $stmt = sqlsrv_query($conn, $sql, array(&$username, &$password));

        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        $row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC);
        if ($row) {
            http_response_code(200);
            $row['Role'] = "Employee";
            $row['message'] = "Login Succesfully as an Employee";
            $row['access_token'] =  create_access_token($row);
            echo (json_encode($row));
            return;
        }
        http_response_code(401);
        $response = array("Role" => "Unknown", "message" => "invalid username or password");
        print_r(json_encode($response));
        sqlsrv_free_stmt($stmt);

        // print_r(decode_access_token( $row['access_token'])['data']->Role);

        // $access_token =  create_access_token('admin');
        // setcookie('access_token',"abel");
        // $response =  array("access_token"=>$access_token);
        // print_r(json_encode($response)); 
    }
    public static function getAuthorizationHeader()
    {
        $headers = null;
        if (isset($_SERVER['Authorization'])) {
            $headers = trim($_SERVER["Authorization"]);
        } else if (isset($_SERVER['HTTP_AUTHORIZATION'])) { //Nginx or fast CGI
            $headers = trim($_SERVER["HTTP_AUTHORIZATION"]);
        } elseif (function_exists('apache_request_headers')) {
            $requestHeaders = apache_request_headers();
            // Server-side fix for bug in old Android versions (a nice side-effect of this fix means we don't care about capitalization for Authorization)
            $requestHeaders = array_combine(array_map('ucwords', array_keys($requestHeaders)), array_values($requestHeaders));
            //print_r($requestHeaders);
            if (isset($requestHeaders['Authorization'])) {
                $headers = trim($requestHeaders['Authorization']);
            }
        }

        return $headers;
    }
    /**
     * get access token from header
     * */
    public static function getBearerToken()
    {
        $headers = Auth::getAuthorizationHeader();
        // HEADER: Get the access token from the header
        if (!empty($headers)) {
            if (preg_match('/Bearer\s(\S+)/', $headers, $matches)) {
                return $matches[1];
            }
        }
        return null;
    }
}

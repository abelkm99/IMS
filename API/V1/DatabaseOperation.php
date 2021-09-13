<?php

function get_connection()
{

    // $database = "Assya-Treading";
    $database = "IMSQuasar";
    $username = "assya";
    $password = "123";
    $serverName = "LAPTOP-LIUFT80F";

    // $database = "Assya-Treading";
    // $username = "abel";
    // $password = "ABC123!@#";
    // $serverName = "assya.database.windows.net";

    $connectionInfo = array("Database" => $database, "UID" => $username, "PWD" => $password);
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    return $conn;
}
function excute_select_operation($sqlcommand)
{
    header("Access-Control-Allow-Origin: *");
    $conn = get_connection();
    if ($conn) {
    } else {
        $resMessage = array("message" => " database Connection could not be established");
        http_response_code(500);
        echo json_encode($resMessage);
        return;
    }


    $stmt = sqlsrv_query($conn, $sqlcommand);
    if ($stmt === false) {
        $resMessage = sqlsrv_errors();
        http_response_code(400);
        echo json_encode($resMessage);
        return;
    }

    $res = array();
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        array_push($res, $row);
    }
    if (count($res) > 0) {
        $jsonString = concatranteJson($res);
        http_response_code(200);
        print_r($jsonString);
    } else {
        $resMessage = array("message" => "no data has been  found");
        http_response_code(404);
        echo json_encode($resMessage);
    }
}
function excute_delete_prodecure($valueId, $sqlcommand)
{
    $conn = get_connection();
    if ($conn) {
    } else {
        $resMessage = array("message" => " database Connection could not be established");
        http_response_code(500);
        echo json_encode($resMessage);
        return;
    }
    $result = 0;
    $message = "";
    $params = array();

    array_push($params, array(&$valueId, SQLSRV_PARAM_IN));
    array_push($params, array(&$result, SQLSRV_PARAM_OUT));
    array_push($params, array(&$message, SQLSRV_PARAM_OUT));

    $stmt = sqlsrv_query($conn, $sqlcommand, $params);
    if ($stmt === false) {
        $resMessage = sqlsrv_errors();
        http_response_code(400);
        echo json_encode($resMessage);
    } else {
        if ($result) {
            $resMessage = array("result" => $result, "message" => $message);
            http_response_code(200);
            echo json_encode($resMessage);
        } else {
            $resMessage = array("result" => $result, "message" => $message);
            http_response_code(400);
            echo json_encode($resMessage);
        }
    }
}
function excute_prodecure($inputs, $sqlcommand)
{
    $conn = get_connection();
    if ($conn) {
    } else {
        $resMessage = array("message" => " database Connection could not be established");
        http_response_code(500);
        echo json_encode($resMessage);
    }

    $str_json = file_get_contents('php://input');
    $json = json_decode($str_json);


    if ($json === null) {
        $resMessage = array("message" => "invalid json input data");
        http_response_code(400);
        echo json_encode($resMessage);
    } else {
        if (key_value_Validator($inputs, $json)) {

            $params = array();
            $input_array = array();
            $result = 0;
            $message = "";
            foreach ($inputs as $key => $value) {
                $input_array[$key] = checkNull($json->$key);
            }
            foreach ($input_array as $key => $value) {
                array_push($params, array(&$input_array[$key], SQLSRV_PARAM_IN));
            }
            // add the result and message
            array_push($params, array(&$result, SQLSRV_PARAM_OUT));
            array_push($params, array(&$message, SQLSRV_PARAM_OUT));

            $stmt = sqlsrv_query($conn, $sqlcommand, $params);
            if ($stmt === false) {
                $resMessage = sqlsrv_errors();
                http_response_code(500);
                echo json_encode($resMessage);
            } else {
                if ($result) {
                    $resMessage = array("result" => $result, "message" => $message);
                    http_response_code(200);
                    echo json_encode($resMessage);
                } else {
                    $resMessage = array("result" => $result, "message" => $message);
                    http_response_code(400);
                    echo json_encode($resMessage);
                }
            }
        } else {
            $resMessage = array("message" => "invalid input on validation");
            http_response_code(400);
            echo json_encode($resMessage);
        }
    }
}
function excute_prepared_statements($inputs, $sqlcommand)
{
    $conn = get_connection();
    if ($conn) {
    } else {
        echo "Connection could not be established";
        die(print_r(sqlsrv_errors(), true));
    }

    $params = array();
    foreach ($inputs as $paramin) {
        array_push($params, array($paramin, SQLSRV_PARAM_IN));
    }

    $stmt = sqlsrv_query($conn, $sqlcommand, $params);

    $res = array();
    while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
        array_push($res, $row);
    }
    if (count($res) > 0) {
        $jsonString = concatranteJson($res);
        http_response_code(200);
        print_r($jsonString);
    } else {
        $resMessage = array("message" => "no result found");
        http_response_code(404);
        echo json_encode($resMessage);
    }
}

function excute_prodecure_json($params, $sqlcommand)
{
    $conn = get_connection();
    if ($conn) {
    } else {
        $resMessage = array("message" => " database Connection could not be established");
        http_response_code(500);
        echo json_encode($resMessage);
    }
    if (true) {
        $result = 0;
        $message = "";

        array_push($params, array(&$result, SQLSRV_PARAM_OUT));
        array_push($params, array(&$message, SQLSRV_PARAM_OUT));

        $stmt = sqlsrv_query($conn, $sqlcommand, $params);
        if ($stmt === false) {
            $resMessage = sqlsrv_errors();
            http_response_code(500);
            echo json_encode($resMessage);
        } else {
            if ($result) {
                $resMessage = array("result" => $result, "message" => $message);
                http_response_code(200);
                echo json_encode($resMessage);
            } else {
                $resMessage = array("result" => $result, "message" => $message);
                http_response_code(400);
                echo json_encode($resMessage);
            }
        }
    } else {
        $resMessage = array("message" => "invalid input on validation");
        http_response_code(400);
        echo json_encode($resMessage);
    }
}


function excute_prodecure2($inputs, $sqlcommand)
{
    $conn = get_connection();
    if ($conn) {
    } else {
        $resMessage = array("message" => " database Connection could not be established");
        http_response_code(500);
        echo json_encode($resMessage);
    }

    $str_json = file_get_contents('php://input');
    $json = json_decode($str_json);


    if ($json === null) {
        $resMessage = array("message" => "invalid json input data");
        http_response_code(400);
        echo json_encode($resMessage);
    } else {
        if (key_value_Validator($inputs, $json)) {

            $params = array();
            $input_array = array();
            $result = 0;
            $message = "";
            foreach ($inputs as $key => $value) {
                $input_array[$key] = checkNull($json->$key);
            }
            foreach ($input_array as $key => $value) {
                array_push($params, array(&$input_array[$key], SQLSRV_PARAM_IN));
            }
            // add the result and message
            $stmt = sqlsrv_query($conn, $sqlcommand, $params);

            $result = array();

            // Get return value
            do {
                while ($row = sqlsrv_fetch_array($stmt)) {
                    // Loop through each result set and add to result array
                    $result[] = $row;
                }
            } while (sqlsrv_next_result($stmt));

            if (count($result) > 0) {
                http_response_code(200);
                $jsonString = concatranteJson($result);
                print_r($jsonString);
            } else {
                $resMessage = array("message" => "no result found");
                http_response_code(404);
                echo json_encode($resMessage);
            }
        } else {
            $resMessage = array("message" => "invalid input on validation");
            http_response_code(400);
            echo json_encode($resMessage);
        }
    }
}
function excute_prodecure_status_code($inputs, $sqlcommand)
{
    $conn = get_connection();
    if ($conn) {
    } else {
        $resMessage = array("message" => " database Connection could not be established");
        http_response_code(500);
        echo json_encode($resMessage);
    }

    $str_json = file_get_contents('php://input');
    $json = json_decode($str_json);


    if ($json === null) {
        $resMessage = array("message" => "invalid json input data");
        http_response_code(400);
        echo json_encode($resMessage);
    } else {
        if (key_value_Validator($inputs, $json)) {

            $params = array();
            $input_array = array();
            $result = 0;
            $message = "";
            foreach ($inputs as $key => $value) {
                $input_array[$key] = checkNull($json->$key);
            }
            foreach ($input_array as $key => $value) {
                array_push($params, array(&$input_array[$key], SQLSRV_PARAM_IN));
            }
            // add the result and message
            $stmt = sqlsrv_query($conn, $sqlcommand, $params);

            $result = array();

            // Get return value
            do {
                while ($row = sqlsrv_fetch_array($stmt)) {
                    // Loop through each result set and add to result array
                    $result[] = $row;
                }
            } while (sqlsrv_next_result($stmt));

            if (count($result) > 0) {

                $jsonString = concatranteJson($result);
                $decoded_response = json_decode($jsonString);
                http_response_code($decoded_response->status_code);
                print_r($jsonString);
            } else {
                $resMessage = array("message" => "no result found");
                http_response_code(404);
                echo json_encode($resMessage);
            }
        } else {
            $resMessage = array("message" => "invalid input on validation");
            http_response_code(400);
            echo json_encode($resMessage);
        }
    }
}

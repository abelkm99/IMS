<?php

    class Driver{
        function ListAllDrivers(){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }
            $sqlcommand = "select * from Driver
                            for json auto, WITHOUT_ARRAY_WRAPPER
                            ";
            
            $stmt = sqlsrv_query($conn, $sqlcommand);
            $res = array() ;
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC )) {
                array_push($res,$row);
            }
            if(count($res)>0){
                $jsonString = concatranteJson($res);
                http_response_code(200);
                print_r($jsonString);
            }
            else{
                $resMessage = array("message"=>"no Driver found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }

        
        function addDriver(){
            
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }

            $str_json = file_get_contents('php://input');
            $json = json_decode($str_json);

            $array = array(
                "DriverName"=>1,
                "DriverPhoneNumber"=>1,
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spAddDriver]
                                    @DriverName = ?,
                                    @DriverPhoneNumber = ?,
                                    @result = ?,
                                    @message = ?";
                    

                    $DriverName = $json->DriverName;
                    $DriverPhoneNumber = $json->DriverPhoneNumber;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$DriverName, SQLSRV_PARAM_IN),
                        array(&$DriverPhoneNumber, SQLSRV_PARAM_IN),
                        array(&$result, SQLSRV_PARAM_OUT) ,
                        array(&$message, SQLSRV_PARAM_OUT)  
                        );
                    
                    $stmt = sqlsrv_query($conn,$sqlcommand,$params);
                    if($stmt === false){
                        $resMessage = sqlsrv_errors();
                        http_response_code(400);
                        echo json_encode($resMessage);
                    }else{
                        $resMessage = array("result"=>$result,"message"=>$message);
                        http_response_code(200);
                        echo json_encode($resMessage);
                    }
                }
                else{
                    $resMessage = array("message"=>"invalid input");
                    http_response_code(400);
                    echo json_encode($resMessage);
                }

            }
        }
        // function get only one supplier
        function getDriverInformation($DriverName){
            
            header('Content-type: application/json');
            
            $conn = get_connection();
            if ($conn) {
            } else {
                echo "Connection could not be established";
                die(print_r(sqlsrv_errors(), true));
            }
            $sqlcommand = "select * from Driver
                            WHERE DriverName = ?
                            for json auto";
            $params = array(
                array($DriverName,SQLSRV_PARAM_IN)
            );

            $stmt = sqlsrv_query($conn, $sqlcommand,$params);

            $res = array() ;
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC )) {
                array_push($res,$row);
            }
            if(count($res)>0){
                $jsonString = concatranteJson($res);
                http_response_code(200);
                print_r($jsonString);
            }
            else{
                $resMessage = array("message"=>"no result for ".$DriverName." found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
            
        }
        // update supplier

    }
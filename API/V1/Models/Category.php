<?php

    class Category{
        function getAllCategories(){

            header('Content-type: application/json');
            echo "hey";
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }
            $sqlcommand = "select * from ItemCategory for json auto,WITHOUT_ARRAY_WRAPPER";
            
            $stmt = sqlsrv_query($conn, $sqlcommand);
            $res = null;
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC )) {
                $res = $row;
            }
    
            if($res!=null){
                foreach ($res as $key => $value) {
                    $res = $value;
                }
                http_response_code(200);
                print_r($res);
            }
            else{
                $resMessage = array("message"=>"no category found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
        function addCategory(){
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
                "CategoryName"=>1,
            );
            if($json === null){
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){
                    $sqlcommand = "EXEC	[dbo].[spAddCategory]
                                        @CategoryName = ?,
                                        @result = ?,
                                        @message = ?";
                    $CategoryName = $json->CategoryName;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$CategoryName, SQLSRV_PARAM_IN),
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

                }
            }
        }
    }
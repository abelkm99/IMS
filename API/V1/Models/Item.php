<?php

    class Item{
        function getAllItems(){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }
            $sqlcommand = "select * from item,ItemCategory
                            where item.CategoryID = ItemCategory.CategoryId
                            for json auto,WITHOUT_ARRAY_WRAPPER";

            
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
                $resMessage = array("message"=>"no item has been found found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
        function addNewItem(){
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
                "CategoryID"=>1,
                "ItemCode"=>1,
                "ItemType"=>1,
                "PPP"=>1
            );
            if($json === null){
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){
                    $sqlcommand = "EXEC	[dbo].[spAddItem]
                                    @CategoryID = ?,
                                    @ItemCode = ?,
                                    @ItemType = ?,
                                    @PPP = ?,
                                    @result = ?,
                                    @message = ?";
                    $CategoryID = $json->CategoryID;
                    $ItemCode = $json->ItemCode;
                    $ItemType = $json->ItemType;
                    $PPP = $json->PPP;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$CategoryID, SQLSRV_PARAM_IN),
                        array(&$ItemCode, SQLSRV_PARAM_IN),
                        array(&$ItemType, SQLSRV_PARAM_IN),
                        array(&$PPP, SQLSRV_PARAM_IN),
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
    }
<?php
    class Order{
        function getOrder($OrderId){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                echo "Connection could not be established";
                die(print_r(sqlsrv_errors(), true));
            }
            $sqlcommand = "select * from [dbo].[Order]
                           inner join [dbo].[Orderitems]
                           on [dbo].[Order].OrderID= [dbo].[Orderitems].OrderID
                           where [dbo].[Order].OrderID = ?
                           for json auto,WITHOUT_ARRAY_WRAPPER";
            $params = array(
                array($OrderId,SQLSRV_PARAM_IN)
            );

            $stmt = sqlsrv_query($conn, $sqlcommand,$params);

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
            }else{
                $resMessage = array("message"=>"no result for ".$OrderId." found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
        function ListAllOrders(){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }
            $sqlcommand = "select * from [dbo].[Order], Orderitems
                            where  [dbo].[Order].OrderID =  [dbo].[Orderitems].OrderID
                            for json auto
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
                $resMessage = array("message"=>"no Order ha been found found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
        function makeNewOrder(){
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
                "CustomerId"=>1,
                "OrderDate"=>1,
                "OrderInformation"=>1,
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spOrderItems]
                                @CustomerId = ?,
                                @OrderDate = ?,
                                @OrderInformation = ?,
                                @result = ?,
                                @message = ?";
                    
                    $CustomerId = $json->CustomerId;
                    $OrderDate = $json->OrderDate;
                    $OrderInformation = $json->OrderInformation;
                    $result = 0;
                    $message = '';
                    $params = array(   
                        array(&$CustomerId, SQLSRV_PARAM_IN),
                        array(&$OrderDate, SQLSRV_PARAM_IN),
                        array(&$OrderInformation, SQLSRV_PARAM_IN),
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

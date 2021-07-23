<?php

    class Purchase{
        function makeSales(){
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
                "Date"=>1,
                "CutomerID"=>1,
                "TransactionID"=>1,
                "EmployeeId"=>1,
                "DriverId"=>0,
                "SalesInformation"=>1,
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spMakeSales]
                            @Date = ?,
                            @CutomerID = ?,
                            @TransactionID = ?,
                            @EmployeeId = ?,
                            @DriverId = ?,
                            @SalesInformation = ?,
                            @result = ?,
                            @message = ?";
                    
                    $Date = $json->Date;
                    $CutomerID = $json->CutomerID;
                    $TransactionID = $json->TransactionID;
                    $EmployeeId = $json->EmployeeId;
                    $DriverId = $json->DriverId == null?null: $json->DriverId;
                    $SalesInformation = $json->SalesInformation;
                    $result = 0;
                    $message = '';
                    $params = array(   
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$CutomerID, SQLSRV_PARAM_IN),
                        array(&$TransactionID, SQLSRV_PARAM_IN),
                        array(&$EmployeeId, SQLSRV_PARAM_IN),
                        array(&$DriverId, SQLSRV_PARAM_IN),
                        array(&$SalesInformation, SQLSRV_PARAM_IN),
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
        function movetostore(){
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
                "ItemId"=>1,
                "Quantity"=>1,
                "Date"=>1,
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }
            else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spMoveWarehouseToStore]
                            @ItemId = ?,
                            @Quantity = ?,
                            @Date = ?,
                            @result = ?,
                            @message = ?";
                    
                    $ItemId = $json->ItemId;
                    $Quantity = $json->Quantity;
                    $Date = $json->Date;
                    $result = 0;
                    $message = '';
                    $params = array(   
                        array(&$ItemId, SQLSRV_PARAM_IN),
                        array(&$Quantity, SQLSRV_PARAM_IN),
                        array(&$Date, SQLSRV_PARAM_IN),
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

        function shipPurchase(){
            /*
                ship purchases
            */
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
                "DeliverdDate"=>1,
                "GRNNO"=>1,
                "ShipmentInfo"=>1,
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }
            else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spShipPurchases]
                                @DeliverdDate = ?,
                                @GRNNO = ?,
                                @ShipmentInfo = ?,
                                @result = ?,
                                @message = ?";
                    
                    $DeliverdDate = $json->DeliverdDate;
                    $GRNNO = $json->GRNNO;
                    $ShipmentInfo = $json->ShipmentInfo;
                    $result = 0;
                    $message = '';
                    $params = array(   
                        array(&$DeliverdDate, SQLSRV_PARAM_IN),
                        array(&$GRNNO, SQLSRV_PARAM_IN),
                        array(&$ShipmentInfo, SQLSRV_PARAM_IN),
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
        
        function makePurchase(){
            /*
                make sure DRIVER ID has either value or null
            */
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
                "PurchsedDate"=>1,
                "SupplierName"=>1,
                "TransactionID"=>1,
                "DriverID"=>0,
                "PurchaseString"=>1,
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "exec spMakePurchase
                        @PurchsedDate = ?,
                        @DeliverdDate = ?,
                        @SupplierName = ?,
                        @TransactionID = ?,
                        @DriverID = ?,
                        @PurchaseString = ?,
                        @result = ?,
                        @message = ?";
                    
                    $PurchsedDate = $json->PurchsedDate;
                    $DeliverdDate = null;
                    $SupplierName = $json->SupplierName;
                    $TransactionID = $json->TransactionID;;
                    $DriverID = $json->DriverID == null?null:  $json->DriverID;
                    $PurchaseString = $json->PurchaseString;
                    $result = 0;
                    $message = '';
                    $params = array(   
                        array(&$PurchsedDate, SQLSRV_PARAM_IN),
                        array(&$DeliverdDate, SQLSRV_PARAM_IN),
                        array(&$SupplierName, SQLSRV_PARAM_IN),
                        array(&$TransactionID, SQLSRV_PARAM_IN),
                        array(&$DriverID, SQLSRV_PARAM_IN),
                        array(&$PurchaseString, SQLSRV_PARAM_IN),
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
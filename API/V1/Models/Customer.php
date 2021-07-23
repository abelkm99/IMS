<?php

    class Customer{
        function ListAllCustomers(){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }
            $sqlcommand = "select * from Customer
                            left join CustomerBankAccounts 
                            on Customer.CustomerID = CustomerBankAccounts.CustomerID
                            for json auto,WITHOUT_ARRAY_WRAPPER";
            
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
                $resMessage = array("message"=>"no Customer found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
        /* 
            validate if all information is given 
            
        */
        
        function addCustomer(){
            
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
                "CustomerName"=>1,
                "CustomerAddress"=>0,
                "CustomerTinNumber"=>0,
                "CustomerPhoneNumber"=>0,
                "BankAccount"=>0
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spAddCustomer]
                            @CustomerName = ?,
                            @CustomerAddress = ?,
                            @CustomerTinNumber = ?,
                            @CustomerPhoneNumber = ?,
                            @BankAccount = ?,
                            @result = ?,
                            @message = ?";
                    

                    $CustomerName = $json->CustomerName;
                    $CustomerAddress = $json->CustomerAddress;
                    $CustomerTinNumber = $json->CustomerTinNumber;
                    $CustomerPhoneNumber = $json->CustomerPhoneNumber;
                    $BankAccount = $json->BankAccount;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$CustomerName, SQLSRV_PARAM_IN),
                        array(&$CustomerAddress, SQLSRV_PARAM_IN),
                        array(&$CustomerTinNumber, SQLSRV_PARAM_IN),
                        array(&$CustomerPhoneNumber, SQLSRV_PARAM_IN),
                        array(&$BankAccount, SQLSRV_PARAM_IN),
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
        function getCustomerInformation($CustomerName){
            
            header('Content-type: application/json');
            
            $conn = get_connection();
            if ($conn) {
            } else {
                echo "Connection could not be established";
                die(print_r(sqlsrv_errors(), true));
            }
            $sqlcommand = "select * from Customer
                            left join CustomerBankAccounts 
                            on Customer.CustomerID = CustomerBankAccounts.CustomerID
                            where CustomerName = ?
                            for json auto,WITHOUT_ARRAY_WRAPPER";
            $params = array(
                array($CustomerName,SQLSRV_PARAM_IN)
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
                $resMessage = array("message"=>"no result for ".$CustomerName." found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
            
        }
        // update supplier

    }
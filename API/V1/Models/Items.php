<?php
    require "DatabaseOperation.php";
    require "utils.php";

    class Supplier{
        function ListAllSuppliers(){
            
            $conn = get_connection();
            if ($conn) {
            } else {
                echo "Connection could not be established";
                die(print_r(sqlsrv_errors(), true));
            }
            $sqlcommand = "select * from Supplier as s
                            left join SupplierBankAccounts as sb
                            on s.SupplierID = sb.SupplierID
                            for json auto, WITHOUT_ARRAY_WRAPPER
                            ";
            
            $stmt = sqlsrv_query($conn, $sqlcommand);
            $res = null;
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC )) {
                // $res.array_push($res,json_encode($row));
                $res = $row;
            }
    
            foreach ($res as $key => $value) {
                $res = $value;
            }
            header('Content-type: application/json');
            print_r($res);
        }
        /* 
            validate if all information is given 
            
        */
        
        function addSupplier(){
            
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" databse Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }

            $str_json = file_get_contents('php://input');
            $json = json_decode($str_json);

            $array = array(
                "SupplierName"=>1,
                "SupplierAddress"=>0,
                "SupplierTinNumber"=>1,
                "SupplierPhoneNumber"=>0,
                "BankAccountNumber"=>0
            );
            if($json === null) {
                echo "problem decoding the json";
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spAddSupplier]
                            @SupplierName = ?,
                            @SupplierAddress = ?,
                            @SupplierTinNumber = ?,
                            @SupplierPhoneNumber = ?,
                            @BankAccountNumber = ?,
                            @result = ?,
                            @message = ?";
                    

                    $SupplierName = $json->SupplierName;
                    $SupplierAddress = $json->SupplierAddress;
                    $SupplierTinNumber = $json->SupplierTinNumber;
                    $SupplierPhoneNumber = $json->SupplierPhoneNumber;
                    $BankAccountNumber = $json->BankAccountNumber;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$SupplierName, SQLSRV_PARAM_IN),
                        array(&$SupplierAddress, SQLSRV_PARAM_IN),
                        array(&$SupplierTinNumber, SQLSRV_PARAM_IN),
                        array(&$SupplierPhoneNumber, SQLSRV_PARAM_IN),
                        array(&$BankAccountNumber, SQLSRV_PARAM_IN),
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
                }else{
                    $resMessage = array("message"=>"invalid input");
                    http_response_code(400);
                    echo json_encode($resMessage);
                }

            }
        }
        // function get only one supplier
        function getSupplierInformation($SupplierName){
            $conn = get_connection();
            if ($conn) {
            } else {
                echo "Connection could not be established";
                die(print_r(sqlsrv_errors(), true));
            }
            $sqlcommand = "select * from Supplier as s
                            inner join SupplierBankAccounts as sb
                            on s.SupplierID = sb.SupplierID
                            WHERE SupplierName = ?
                            for json auto, WITHOUT_ARRAY_WRAPPER
                            ";
            $params = array(
                array($SupplierName,SQLSRV_PARAM_IN)
            );

            $stmt = sqlsrv_query($conn, $sqlcommand,$params);

            $res = null;
            while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC )) {
                // $res.array_push($res,json_encode($row));
                $res = $row;
            }
    
            foreach ($res as $key => $value) {
                $res = $value;
            }
            header('Content-type: application/json');
            print_r($res);
        }
        // update supplier

    }
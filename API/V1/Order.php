<?php
    class Order{
        function getAllOrders(){
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
                $resMessage = array("message"=>"no Driver found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
    }
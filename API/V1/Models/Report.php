<?php
    class Report{
        function get_overal_report(){
            $sqlcommand = "EXEC	[dbo].[spReport]
            @date1 = ?,
            @date2 = ?,
            @option = ?";

            $params_in = array(
                "date1"=>"1",
                "date2"=>"1",
                "option"=>1
            );
            
            excute_prodecure2($params_in,$sqlcommand);
            // $conn = get_connection();
            // if ($conn) {
            // } else {
            //     $resMessage = array("message"=>" database Connection could not be established");
            //     http_response_code(500);
            //     echo json_encode($resMessage);
            //     return;
            // }

            // $str_json = file_get_contents('php://input');
            // $json = json_decode($str_json);
            
            // $params = array(
            //     array($json->date1,SQLSRV_PARAM_IN),
            //     array($json->date2,SQLSRV_PARAM_IN),
            //     array($json->option,SQLSRV_PARAM_IN)
            // );
            // $stmt = sqlsrv_query($conn, $sqlcommand,$params);
            // if(!$stmt){
            //     echo "NONE";
            //     return;
            // }
            // $result = array();

            // // Get return value
            // do {
            // while ($row = sqlsrv_fetch_array($stmt)) {
            //     // Loop through each result set and add to result array
            //     $result[] = $row;
            // }
            // } while (sqlsrv_next_result($stmt));

            // $jsonString = concatranteJson($result);
            // print_r($jsonString);


        }       
        
    }
<?php
    class Report{
        function get_report_interval(){
            $sqlcommand = "EXEC	[dbo].[spReport_Interval]
            @date1 = ?,
            @date2 = ?,
            @option = ?,
            @dayInterval = ?,
            @weekInterval = ?,
            @monthInterval = ?,
            @yearInterval = ?";
            $params_in = array(
                "date1"=>1,
                "date2"=>1,
                "option"=>1,
                "dayInterval"=>0,
                "weekInterval"=>0,
                "monthInterval"=>0,
                "yearInterval"=>0,
            );
            excute_procedure_output($params_in,$sqlcommand);
        }
        function get_overal_report_tiny(){
            $sqlcommand = "EXEC	[dbo].[spReport_tiny]
            @date1 = ?,
            @date2 = ?,
            @option = ?";

            $params_in = array(
                "date1"=>"1",
                "date2"=>"1",
                "option"=>1
            );
            
            excute_procedure_output($params_in,$sqlcommand);

        }
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
            
            excute_status_code_procedure($params_in,$sqlcommand);
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
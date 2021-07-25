<?php
    class Salary{
        function getSalaryExpence(){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
                return;
            }
            $sqlcommand = "select * from SallaryExpences
                            for json auto";
            
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
                $resMessage = array("message"=>"no salary Expence is found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
        function addSalaryExpence(){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
                return;
            }

            $str_json = file_get_contents('php://input');
            $json = json_decode($str_json);

            $array = array(
                "Date"=>1,
                "Cost"=>1,
                "EmployeeID"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spAddSalaryExpense]
                                        @Date = ?,
                                        @Cost = ?,
                                        @EmployeeID = ?,
                                        @result = ?,
                                        @message = ?";

                    $Date = $json->Date;
                    $Cost = $json->Cost;
                    $EmployeeID = $json->EmployeeID;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$EmployeeID, SQLSRV_PARAM_IN),
                        array(&$result, SQLSRV_PARAM_OUT),
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
        function deleteSalaryExpence($SalaryId){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
                return;
            }
            $sqlcommand = "EXEC	[dbo].[spDeleteSalaryExpence]
                                @SalaryID = ?,
                                @result = ?,
                                @message = ?";
            $result = 0;
            $message = "";

            $params = array(   
                array(&$SalaryId, SQLSRV_PARAM_IN),
                array(&$result, SQLSRV_PARAM_OUT),
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
        function updateSalaryExpence(){
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
                "Date"=>0,
                "Cost"=>0,
                "EmployeeID"=>0,
                "SalaryID"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spUpdateSalaryExpence]
                                        @Date = ?,
                                        @Cost = ?,
                                        @EmployeeID = ?,
                                        @SalaryID = ?,
                                        @result = ?,
                                        @message = ?";
                    

                    $Date = checkNull($json->Date);
                    $Cost = checkNull($json->Cost);
                    $EmployeeID = checkNull($json->EmployeeID);
                    $SalaryID = checkNull($json->SalaryID);
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$EmployeeID, SQLSRV_PARAM_IN),
                        array(&$SalaryID, SQLSRV_PARAM_IN),
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
                    $resMessage = array("message"=>"invalid input on validation");
                    http_response_code(400);
                    echo json_encode($resMessage);
                }

            }
        }
    }

    class Masatefiya{
        function getMasatefiyaExpence(){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
            }
            $sqlcommand = "select * from Masatefiya
                            for json auto";
            
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
                $resMessage = array("message"=>"no Masatefiya Expence is found found" );
                http_response_code(404);
                echo json_encode($resMessage);
            }
        }
        function addMasatefiyaExpence(){
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
                "Cost"=>1,
                "REFNO"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spAddMasatefiya]
                                        @REFNO = ?,
                                        @Date = ?,
                                        @Cost = ?,
                                        @result = ?,
                                        @message = ?";

                    $Date = $json->Date;
                    $Cost = $json->Cost;
                    $REFNO = $json->REFNO;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$REFNO, SQLSRV_PARAM_IN),
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$result, SQLSRV_PARAM_OUT),
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
        function deleteMasatefiyaExpence($MID){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
                return;
            }
            $sqlcommand = "EXEC	[dbo].[spDeleteMasatefiyaExpence]
                                @MID = ?,
                                @result = ?,
                                @message = ?";
            $result = 0;
            $message = "";

            $params = array(   
                array(&$MID, SQLSRV_PARAM_IN),
                array(&$result, SQLSRV_PARAM_OUT),
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
        function updateMasatefiyaExpence(){
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
                "Date"=>0,
                "Cost"=>0,
                "REFNO"=>0,
                "MID"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spUpdateMasatefiyaExpence]
                                        @Date = ?,
                                        @Cost = ?,
                                        @REFNO = ?,
                                        @MID = ?,
                                        @result = ?,
                                        @message = ?";
                    

                    $Date = checkNull($json->Date);
                    $Cost = checkNull($json->Cost);
                    $REFNO = checkNull($json->REFNO);
                    $MID = checkNull($json->MID);
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$REFNO, SQLSRV_PARAM_IN),
                        array(&$MID, SQLSRV_PARAM_IN),
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
                    $resMessage = array("message"=>"invalid input on validation");
                    http_response_code(400);
                    echo json_encode($resMessage);
                }

            }
        }
    }

    class LoadUnLoadExpences{
        function updateloadingExpence(){
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
                "Date"=>0,
                "Cost"=>0,
                "REFNO"=>0,
                "LoadID"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spUpdateloadingExpence]
                                    @Date = ?,
                                    @Cost = ?,
                                    @REFNO = ?,
                                    @LoadID = ?,
                                    @result = ?,
                                    @message = ?";

                    $Date = checkNull($json->Date);
                    $Cost = checkNull($json->Cost);
                    $REFNO = checkNull($json->REFNO);
                    $LoadID = checkNull($json->LoadID);
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$REFNO, SQLSRV_PARAM_IN),
                        array(&$LoadID, SQLSRV_PARAM_IN),
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
                    $resMessage = array("message"=>"invalid input on validation");
                    http_response_code(400);
                    echo json_encode($resMessage);
                }

            }
        }
  
        function updateUnloadingExpence(){
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
                "Date"=>0,
                "Cost"=>0,
                "GRNNO"=>0,
                "UnLoadID"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spUpdateUnloadingExpence]
                                        @Date = ?,
                                        @Cost = ?,
                                        @GRNNO = ?,
                                        @UnLoadID = ?,
                                        @result = ?,
                                        @message = ?";
                    

                    $Date = checkNull($json->Date);
                    $Cost = checkNull($json->Cost);
                    $GRNNO = checkNull($json->GRNNO);
                    $UnLoadID = checkNull($json->UnLoadID);
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$GRNNO, SQLSRV_PARAM_IN),
                        array(&$UnLoadID, SQLSRV_PARAM_IN),
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
                    $resMessage = array("message"=>"invalid input on validation");
                    http_response_code(400);
                    echo json_encode($resMessage);
                }

            }
        }
        function deleteUnloadingExpence($UnloadId){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
                return;
            }
            $sqlcommand = "EXEC	[dbo].[spDeleteUnloadingExpence]
                                @UNLoadId = ?,
                                @result = ?,
                                @message = ?";
            $result = 0;
            $message = "";

            $params = array(   
                array(&$UnloadId, SQLSRV_PARAM_IN),
                array(&$result, SQLSRV_PARAM_OUT),
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
        function deleteloadingExpence($loadId){
            header('Content-type: application/json');
            $conn = get_connection();
            if ($conn) {
            } else {
                $resMessage = array("message"=>" database Connection could not be established");
                http_response_code(500);
                echo json_encode($resMessage);
                return;
            }
            $sqlcommand = "EXEC	[dbo].[spDeleteloadingExpence]
                                    @LoadID = ?,
                                    @result = ?,
                                    @message = ?";
            $result = 0;
            $message = "";

            $params = array(   
                array(&$loadId, SQLSRV_PARAM_IN),
                array(&$result, SQLSRV_PARAM_OUT),
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
        function addUnloadingExpence(){
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
                "Cost"=>1,
                "GRNNO"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spAddUnloadingExpence]
                                        @GRNNO = ?,
                                        @Date = ?,
                                        @Cost = ?,
                                        @result = ?,
                                        @message = ?";

                    $Date = $json->Date;
                    $Cost = $json->Cost;
                    $GRNNO = $json->GRNNO;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$GRNNO, SQLSRV_PARAM_IN),
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$result, SQLSRV_PARAM_OUT),
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

        function addloadingExpence(){
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
                "Cost"=>1,
                "REFNO"=>1
            );
            if($json === null) {
                $resMessage = array("message"=>"invalid input");
                http_response_code(400);
                echo json_encode($resMessage);
            }else{
                if(key_value_Validator($array,$json)){

                    $sqlcommand = "EXEC	[dbo].[spAddLoadingExpense]
                                                @REFNO = ?,
                                                @Date = ?,
                                                @Cost = ?,
                                                @result = ?,
                                                @message = ?";

                    $Date = $json->Date;
                    $Cost = $json->Cost;
                    $REFNO = $json->REFNO;
                    $result = 0;
                    $message = "";

                    $params = array(   
                        array(&$REFNO, SQLSRV_PARAM_IN),
                        array(&$Date, SQLSRV_PARAM_IN),
                        array(&$Cost, SQLSRV_PARAM_IN),
                        array(&$result, SQLSRV_PARAM_OUT),
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

        function getUnloadingExpences(){
            header('Content-type: application/json');
                $conn = get_connection();
                if ($conn) {
                } else {
                    $resMessage = array("message"=>" database Connection could not be established");
                    http_response_code(500);
                    echo json_encode($resMessage);
                }
                $sqlcommand = "select * from UNLoadingExpence
                                for json auto";
                
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
                    $resMessage = array("message"=>"no unloading Expence is found found" );
                    http_response_code(404);
                    echo json_encode($resMessage);
                }
        }
        function getloadingExpences(){
            header('Content-type: application/json');
                $conn = get_connection();
                if ($conn) {
                } else {
                    $resMessage = array("message"=>" database Connection could not be established");
                    http_response_code(500);
                    echo json_encode($resMessage);
                }
                $sqlcommand = "select * from [dbo].[Loading-Expence]
                                for json auto";
                
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
                    $resMessage = array("message"=>"no loading Expence is found found" );
                    http_response_code(404);
                    echo json_encode($resMessage);
                }
        }
    }
<?php
    function get_connection(){
        $database = "Assya-Treading";
        $username = "assya";
        $password = "123";
        $serverName = "LAPTOP-LIUFT80F";
        $connectionInfo = array( "Database"=>$database, "UID"=>$username, "PWD"=>$password);
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
        return $conn;
    }
    
    class dbOperation{
        
        function getTransactionType(){
            $conn = get_connection();
            if( $conn ) {
                echo "Connection established.<br />";
            }else{
                    echo "Connection could not be established.<br />";
                    die( print_r( sqlsrv_errors(), true));
            }
            sqlsrv_close($conn);
        }

    }

?>
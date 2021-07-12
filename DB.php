<?php
function get_connection()
{
    $database = "Assya-Treading";
    $username = "assya";
    $password = "123";
    $serverName = "LAPTOP-LIUFT80F";
    $connectionInfo = array("Database" => $database, "UID" => $username, "PWD" => $password);
    $conn = sqlsrv_connect($serverName, $connectionInfo);
    return $conn;
}

class dbOperation
{

    function getTransactionType($params)
    {
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sql = "exec spSelect_EmployeeByName @EmployeeName = ?";
        // $sql = "SELECT * FROM Employee";
        $stmt = sqlsrv_prepare($conn, $sql, $params);
        if ($stmt === false) {
            die(print_r(sqlsrv_errors(), true));
        }
        if (sqlsrv_execute($stmt)) {
            while ($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)) {
                echo $row['EmployeeID'] . " " . $row['EmployeeName'] . " " . $row['EmployeePassword'] . "<br />";
            }
        } else {
            die(print_r(sqlsrv_errors(), true));
        }
        sqlsrv_close($conn);
    }
    function AddCategory()
    {
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sql = "exec spAddCategory @CategoryName = 'tolosa' ";

        $res = 100;
        $params = array($res);

        $stmt = sqlsrv_query($conn, $sql);
        if ($stmt === false) {
            (print_r(sqlsrv_errors(), true));
        }
        $rows_affected = -1;
        print_r(sqlsrv_fetch_array($stmt));
        // if($rows_affected=sqlsrv_execute($stmt)){

        //     // if( sqlsrv_fetch( $stmt ) === false) {
        //     //     die( print_r( sqlsrv_errors(), true));
        //     // }

        //     // $name = sqlsrv_get_field( $stmt, 0);
        //     $rows = sqlsrv_has_rows( $stmt );  
        //     if ($rows === true)  
        //         echo "\nthere are rows\n";  
        //     else   
        //         echo "\nno rows\n"; 

        //     echo "affected rows ".$rows_affected;

        //     // while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {
        //     //     print_r($row);
        //     // }
        // }else{
        //     die( print_r( sqlsrv_errors(), true));
        // }
        sqlsrv_close($conn);
    }
    function testProcedre()
    {
        $database = "AdventureWorks2019";
        $username = "assya";
        $password = "123";
        $serverName = "LAPTOP-LIUFT80F";
        $connectionInfo = array("Database" => $database, "UID" => $username, "PWD" => $password);
        $conn = sqlsrv_connect($serverName, $connectionInfo);
        
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }

        /* Drop the stored procedure if it already exists. */  
        $tsql_dropSP = "IF OBJECT_ID('GetEmployeeSalesYTD', 'P') IS NOT NULL  
        DROP PROCEDURE GetEmployeeSalesYTD";  
        $stmt1 = sqlsrv_query( $conn, $tsql_dropSP);  
        if( $stmt1 === false )  
        {  
        echo "Error in executing statement 1.\n";  
        die( print_r( sqlsrv_errors(), true));  
        }  

        /* Create the stored procedure. */  
        $tsql_createSP = " Create PROCEDURE GetEmployeeSalesYTD 
        @SalesPerson nvarchar(50),  
        @SalesYTD money OUTPUT  
        AS  
        SELECT @SalesYTD = SalesYTD  
        FROM Sales.SalesPerson AS sp  
        JOIN HumanResources.vEmployee AS e   
        ON e.BusinessEntityID = sp.BusinessEntityID
        WHERE LastName = @SalesPerson";  
        $stmt2 = sqlsrv_query( $conn, $tsql_createSP);  
        if( $stmt2 === false )  
        {  
        echo "Error in executing statement 2.\n";  
        die( print_r( sqlsrv_errors(), true));  
        }  

        /*--------- The next few steps call the stored procedure. ---------*/  

        /* Define the Transact-SQL query. Use question marks (?) in place of  
        the parameters to be passed to the stored procedure */  
        $tsql_callSP = "{call GetEmployeeSalesYTD( ?, ? )}";  

        /* Define the parameter array. By default, the first parameter is an  
        INPUT parameter. The second parameter is specified as an OUTPUT  
        parameter. Initializing $salesYTD to 0.0 sets the returned PHPTYPE to  
        float. To ensure data type integrity, output parameters should be  
        initialized before calling the stored procedure, or the desired  
        PHPTYPE should be specified in the $params array.*/  
        $lastName = "Blythe";  
        $salesYTD = 0.0;  
        $params = array(   
        array($lastName, SQLSRV_PARAM_IN),  
        array(&$salesYTD, SQLSRV_PARAM_OUT)  
        );  

        /* Execute the query. */  
        $stmt3 = sqlsrv_query( $conn, $tsql_callSP, $params);  
        if( $stmt3 === false )  
        {  
        echo "Error in executing statement 3.\n";  
        die( print_r( sqlsrv_errors(), true));  
        }  

        /* Display the value of the output parameter $salesYTD. */  
        echo "YTD sales for ".$lastName." are ". $salesYTD. ".";  

        /*Free the statement and connection resources. */  
        sqlsrv_free_stmt( $stmt1);  
        sqlsrv_free_stmt( $stmt2);  
        sqlsrv_free_stmt( $stmt3);  
        sqlsrv_close( $conn);  
    }
}

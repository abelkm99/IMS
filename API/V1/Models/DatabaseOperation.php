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
    function checkConnection(){
        $conn = get_connection();
        if ($conn) {

        } else {
            echo "Connection could not be established";
            die(print_r(sqlsrv_errors(), true));
        }
    }
    function ListAllSuppliers(){
        $conn = get_connection();
        if ($conn) {
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sqlcommand = "select * from Supplier as s
                        inner join SupplierBankAccounts as sb
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
        return $res;
    }

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
                echo $row['EmployeeID'] . " " . $row['EmployeeName'] . " " . $row['EmployeePassword'] ."<br />";
            }
        } else {
            die(print_r(sqlsrv_errors(), true));
        }
        sqlsrv_close($conn);
    }
    function listAllCategory(){
        $data = [ 'name' => 'God', 'age' => -1 ];
        $conn = get_connection();
        $jsonMessage = "";
        if($conn){
            $jsonMessage =  "Connection established";
        }else{
            die(print_r(sqlsrv_errors(), true));
            $jsonMessage =  "Connection could not be established";
        }
        $sqlcommand = "select *  from Item 
        FOR JSON AUTO, WITHOUT_ARRAY_WRAPPER";
        $sql = "select *  from Item inner join ItemCategory
                on Item.CategoryID = ItemCategory.CategoryId
                FOR JSON AUTO, WITHOUT_ARRAY_WRAPPER";
        $stmt = sqlsrv_query($conn, $sql);
        $res = null;
        while( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC )) {
            // $res.array_push($res,json_encode($row));
            $res = $row;
        }

        foreach ($res as $key => $value) {
            $res = $value;
        }
        return $res;
    }
    function addNewSupplier(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
    }
    function makeOrder(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sqlcommand = "EXEC	[dbo].[spOrderItems]
                                @CustomerId = ?,
                                @OrderDate = ?,
                                @OrderInformation = ?,
                                @result = ?,
                                @message = ?";
        $customerId = 8;
        $OrderDate = "04-15-69";
        $OrderInformation = "7,2,2;10,500,5;11,100,98;12,10,30;13,13,23;";
        $result = 0; 
        $message = '';
        $params = array(   
            array(&$customerId, SQLSRV_PARAM_IN),
            array(&$OrderDate, SQLSRV_PARAM_IN),
            array(&$OrderInformation, SQLSRV_PARAM_IN),
            array(&$result, SQLSRV_PARAM_OUT) ,
            array(&$message, SQLSRV_PARAM_OUT)  
            );

        $stmt = sqlsrv_query($conn,$sqlcommand,$params);
        if($stmt === false){
            die(print_r(sqlsrv_errors(),true));
        }
        echo "the result is  ". $result. ". the message is ".$message."</br>"; 
                        
    }
    function makeSales(){
        
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }

        /**
            sales information
            ItemId,PPP,Quantity,Total; 
         */
        $sqlcommand = "EXEC	[dbo].[spMakeSales]
                            @Date = ?,
                            @CutomerID = ?,
                            @TransactionID = ?,
                            @EmployeeId = ?,
                            @DriverId = ?,
                            @SalesInformation = ?,
                            @result = ?,
                            @message = ?";
        $Date = "04-15-69";
        $CutomerID = 8;
        $TransactionID = 1;
        $EmployeeId = 6;
        $DriverId = null;
        $SalesInformation = "7,2,2;10,500,5;11,100,98;12,10,30;13,13,23;";
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
            die(print_r(sqlsrv_errors(),true));
        }
        echo "the result is  ". $result. ". the message is ".$message."</br>"; 

    }
    function addCustomer(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sqlcommand = "EXEC	[dbo].[spAddCustomer]
                            @CustomerName = ?,
                            @CustomerAddress = ?,
                            @CustomerTinNumber = ?,
                            @CustomerPhoneNumber = ?,
                            @BankAccount = ?,
                            @result = ?,
                            @message = ?";
        $CustomerName = "bella";
        $CustomerAddress = null;
        $CustomerTinNumber = null;
        $CustomerPhoneNumber = null;
        $BankAccount = '123453245';
        $result = 0;
        $message = '';

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
            die(print_r(sqlsrv_errors(),true));
        }
        echo "the result is  ". $result. ". the message is ".$message."</br>"; 

    }
    function addEmployee(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sqlcommand = "EXEC	[dbo].[addEmployee]
                            @EmployeeName = ?,
                            @EmployeeUsername = ?,
                            @EmployeePassword = ?,
                            @EmplooyeePhoneNumber = ?,
                            @EmployeeAddress = ?,
                            @result = ?,
                            @message = ?";
        $EmployeeName = 'abel';
        $EmployeeUsername = 'bel';
        $EmployeePassword = 321;
        $EmplooyeePhoneNumber = null;
        $EmployeeAddress = null;
        $result = 0;
        $message = '';

        $params = array(   
            array(&$EmployeeName, SQLSRV_PARAM_IN),
            array(&$EmployeeUsername, SQLSRV_PARAM_IN),
            array(&$EmployeePassword, SQLSRV_PARAM_IN),
            array(&$EmplooyeePhoneNumber, SQLSRV_PARAM_IN),
            array(&$EmployeeAddress, SQLSRV_PARAM_IN),
            array(&$result, SQLSRV_PARAM_OUT) ,
            array(&$message, SQLSRV_PARAM_OUT)  
            );

        $stmt = sqlsrv_query($conn,$sqlcommand,$params);
        if($stmt === false){
            die(print_r(sqlsrv_errors(),true));
        }
        echo "the result is  ". $result. ". the message is ".$message."</br>"; 

    }
    function transferItems(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sqlcommand = "EXEC	[dbo].[spMoveWarehouseToStore]
                            @ItemId = ?,
                            @Quantity = ?,
                            @Date = ?,
                            @result = ?,
                            @message = ?";
        $ItemId = 10;
        $Quantity = 8;
        $Date = '04-15-69';
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
            die(print_r(sqlsrv_errors(),true));
        }
        echo "the result is  ". $result. ". the message is ".$message."</br>";  
    }
    function MakeShipment(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sqlcommand = "EXEC	[dbo].[spShipPurchases]
                                @DeliverdDate = ?,
                                @GRNNO = ?,
                                @ShipmentInfo = ?,
                                @result = ?,
                                @message = ?";
        // purchaseId,ItemId,Remainder,Extra
        $DeliverdDate = "12-23-99";
        $GRNNO = 7;
        $ShipmentInfo = "35,0,0;36,10,0;37,45,0;38,50,0;";
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
            die(print_r(sqlsrv_errors(),true));
        }
        echo "the result is  ". $result. ". the message is ".$message."</br>";  
    }
    function MakePurchase(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $sqlcommand = "exec spMakePurchase
                        @PurchsedDate = ?,
                        @DeliverdDate = ?,
                        @SupplierName = ?,
                        @TransactionID = ?,
                        @DriverID = ?,
                        @PurchaseString = ?,
                        @result = ?,
                        @message = ?";
        $purchaseDate = '10-04-1999';
        $DeliverdDate = null;
        $SupplierName = 'abel';
        $TransactionID = 1;
        $DriverID = null;
        $PurchaseString = '10,2,3;12,345,567;13,444,234;13,7,22;';
        $result = 0;
        $message = '';  
        $params = array(   
            array(&$purchaseDate, SQLSRV_PARAM_IN),
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
            die(print_r(sqlsrv_errors(),true));
        }
        echo "the result is  ". $result. ". the message is ".$message."</br>";  
    }
    function addNewCategory(){
        $conn = get_connection();
        if ($conn) {
            echo "Connection established.<br />";
        } else {
            echo "Connection could not be established.<br />";
            die(print_r(sqlsrv_errors(), true));
        }
        $tsql_callSP = "exec spAddCategory @CategoryName=?, @result=?, @message=? ";
        $CategoryName = "bella";  
        $result = 0;
        $message = '';  
        $params = array(   
        array(&$CategoryName, SQLSRV_PARAM_IN),  
        array(&$result, SQLSRV_PARAM_OUT) ,
        array(&$message, SQLSRV_PARAM_OUT)  
        );  

        /* Execute the query. */  
        $stmt3 = sqlsrv_query( $conn, $tsql_callSP, $params);  
        if( $stmt3 === false )  
        {  
        echo "Error in executing statement 3.\n";  
        die( print_r( sqlsrv_errors(), true));  
        }  
        
        /* Display the value of the output parameter $salesYTD. */ 
         
        echo "the result is  ". $result. ". the message is ".$message."</br>";  
        
        while( $row = sqlsrv_fetch_array( $stmt3, SQLSRV_FETCH_ASSOC )) {
            print_r($row);
        }
        sqlsrv_free_stmt( $stmt3);  
        sqlsrv_close( $conn);   
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

<?php
class BasicApi
{
    function getAllItemInventory()
    {
        $sqlcommand2 = "exec spItemInventory";
        $sqlcommand = "select * from WareHouse left join Item on Item.ItemID = WareHouse.ItemID for json auto";
        excute_select_operation($sqlcommand2);
    }
    function getAllStore()
    {
        $sqlcommand = "select * from Store left join Item on Item.ItemID = Store.ItemID for json auto";
        excute_select_operation($sqlcommand);
    }
    function getTransactionType()
    {
        $sqlcommand = "select * from TransactionType for json auto";
        excute_select_operation($sqlcommand);
    }
    function getALLGRN()
    {
        $params_in = array(
            "PageNumber" => 1,
            "GRNNO" => 0,
            "D1" => 0,
            "D2" => 0,
            "SupplierName" => 0,
            "TransactionType" => 0,
            "DriverName" => 0,
            "order" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetAllGRN]
		@PageNumber = ?,
		@GRNNO = ?,
		@D1 = ?,
		@D2 = ?,
		@SupplierName = ?,
		@TransactionType = ?,
		@DriverName = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function getAllGRNSNOTDelivered()
    {
        $params_in = array(
            "PageNumber" => 1,
            "order" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetALLGRNNotDelivered]
		@PageNumber = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function getAllReferences()
    {
        $params_in = array(
            "PageNumber" => 1,
            "REFNO" => 0,
            "D1" => 0,
            "D2" => 0,
            "CustomerName" => 0,
            "TransactionType" => 0,
            "DriverName" => 0,
            "order" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetALLREFS]
		@PageNumber = ?,
		@REFNO = ?,
		@D1 = ?,
		@D2 = ?,
		@CustomerName = ?,
		@TransactionType = ?,
		@DriverName = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function getAllPurchaseOrders()
    {
        $params_in = array(
            "PageNumber" => 1,
            "D1" => 0,
            "D2" => 0,
            "SupplierName" => 0,
            "order" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetALLPurchaseOrder]
		@PageNumber = ?,
		@D1 = ?,
		@D2 = ?,
		@SupplierName = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function getAllSalesOrders()
    {
        $params_in = array(
            "PageNumber" => 1,
            "D1" => 0,
            "D2" => 0,
            "CustomerName" => 0,
            "order" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetALLSalesOrder]
		@PageNumber = ?,
		@D1 = ?,
		@D2 = ?,
		@CustomerName = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function getGRNDetaitNotShiped($GRNNO)
    {
        $sqlcommand = "select PurchaseID,Purchase.GRNNO,ItemType,ItemCode,Purchase.PPP,Quantity,Total,ISNULL(Remainder,0) as Remainder,ISNULL(Extra,0) as Extra
            from Purchase INNER JOIN Item on Item.ItemID = Purchase.ItemID Inner JOIN GRN on GRN.GRNNO = Purchase.GRNNO
            WHERE Purchase.GRNNO = ? AND GRN.Delivered = 0
            FOR JSON PATH,INCLUDE_NULL_VALUES";
        $array = array($GRNNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getGRNDetail($GRNNO)
    {
        $sqlcommand = "select PurchaseID,GRNNO,ItemType,ItemCode,Purchase.PPP,Quantity,Total,Remainder,Extra 
            from Purchase INNER JOIN Item on Item.ItemID = Purchase.ItemID
            WHERE GRNNO = ?
            FOR JSON PATH,INCLUDE_NULL_VALUES";
        $array = array($GRNNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getONEGRN($GRNNO)
    {
        $sqlcommand = "select GRN.GRNNO,Delivered,convert(varchar, PurchsedDate, 20) as PurchsedDate,
            convert(varchar, DeliverdDate, 20) as DeliverdDate,SupplierName,TransactionType,DriverName,
            (select SUM(Total) FROM Purchase WHERE Purchase.GRNNO = GRN.GRNNO ) as Total from GRN
            LEFT JOIN Supplier on GRN.SupplierID = Supplier.SupplierID  
            LEFT JOIN TransactionType on GRN.TransactionID = TransactionType.TransactionID
            LEFT JOIN Driver on GRN.DriverID = Driver.DriverID
            WHERE GRN.GRNNO = ?
            FOR JSON PATH,INCLUDE_NULL_VALUES,WITHOUT_ARRAY_WRAPPER";
        $array = array($GRNNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getREF($REFNO)
    {
        $sqlcommand = "select Reference.REFNO,convert(varchar, Reference.[Date], 20) as SalesDate,
        CustomerName,TransactionType,DriverName,
        (select SUM(Total) FROM Sales WHERE Sales.REFNO = Reference.REFNO ) as Total from Reference
        LEFT JOIN Customer on Reference.CutomerID = Customer.CustomerID  
        LEFT JOIN TransactionType on Reference.TransactionID = TransactionType.TransactionID
        LEFT JOIN Driver on Reference.DriverID = Driver.DriverID
        WHERE Reference.REFNO = ?
        FOR JSON PATH,INCLUDE_NULL_VALUES,WITHOUT_ARRAY_WRAPPER";
        $array = array($REFNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getOrder($OrderID)
    {
        $sqlcommand = "select * from [Order] left join Orderitems on Orderitems.OrderID = [Order].OrderID where [Order].OrderID = ?
            for json auto";
        $array = array($OrderID);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getItemStock()
    {
        $params_in = array(
            "PageNumber" => 1,
            "GRNNO" => 0,
            "REFNO" => 0,
            "D1" => 0,
            "D2" => 0,
            "ItemType" => 0,
            "order" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetItemStockHistory]
		@PageNumber = ?,
		@GRNNO = ?,
		@REFNO = ?,
		@D1 = ?,
		@D2 = ?,
		@ItemType = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function getAllTransferedInfo()
    {
        $params_in = array(
            "PageNumber" => 1,
            "D1" => 0,
            "D2" => 0,
            "DriverName" => 0,
            "order" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spGetAllTransfers]
		@PageNumber = ?,
		@D1 = ?,
		@D2 = ?,
		@DriverName = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function getOneTransferedInfo($TEID)
    {
        $sqlcommand = "select TEID,CONVERT(varchar,[Date],20) as [Date],Cost,DriverName,Driver.DriverID from [Transfer-Expence] 
            LEFT JOIN Driver on Driver.DriverID = [Transfer-Expence].DriverID
            WHERE TEID = ?
            ORDER BY [Date] DESC FOR JSON PATH,INCLUDE_NULL_VALUES,WITHOUT_ARRAY_WRAPPER";
        $array = array($TEID);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getAllTransferedDetail($TEID)
    {
        $sqlcommand = "select Item.ItemID,ItemType,ItemCode,INCount,TEID,WSID from [Warehouse-Store]
            left JOIN Item ON Item.ItemID = [Warehouse-Store].ItemID
            WHERE TEID = ?
            FOR JSON PATH,INCLUDE_NULL_VALUES";
        $array = array($TEID);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getItemTransferHistory($ItemID)
    {
        $sqlcommand = "select Item.ItemID,ItemCode,ItemType,[Date],INCount,TEID,WSID from [Warehouse-Store]
        LEFT JOIN Item ON Item.ItemID = [Warehouse-Store].ItemID
        WHERE Item.ItemID = ?
        ORDER BY [Date] DESC FOR JSON PATH,INCLUDE_NULL_VALUES";
        $array = array($ItemID);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getREFDetail($REFNO)
    {
        $sqlcommand = "select SalesId,REFNO,ItemType,ItemCode,Sales.PPP,Quantity,Total
        from Sales INNER JOIN Item on Item.ItemID = Sales.ItemID
        WHERE REFNO= ?
        FOR JSON PATH,INCLUDE_NULL_VALUES";
        $array = array($REFNO);
        excute_prepared_statements($array, $sqlcommand);
    }
}

class Profile
{
    function UpdateAdminProfile()
    {
        $params_in = array(
            "AdminID" => 1,
            "AdminUsername" => 1,
            "AdminCurrentPassword" => 1,
            "AdminNewPassword" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateAdminProfile]
		@AdminID = ?,
		@AdminUsername = ?,
		@AdminCurrentPassword = ?,
		@AdminNewPassword = ?";

        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function UpdateEmployeeProfile()
    {
        $params_in = array(
            "EmployeeID" => 1,
            "EmployeeUsename" => 1,
            "EmployeeCurrentPassword" => 1,
            "EmployeeNewPassword" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateEmployeeProfile]
		@EmployeeID = ?,
		@EmployeeUsename = ?,
		@EmployeeCurrentPassword = ?,
		@EmployeeNewPassword = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
}

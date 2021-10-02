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
        $sqlcommand = "select Reference.REFNO,convert(varchar,[Reference].[Date], 20) as SalesDate, CustomerName,TransactionType,DriverName,
        (select SUM(Total) FROM Sales WHERE Sales.REFNO = Reference.REFNO) as Total from Reference
        LEFT JOIN Customer on Reference.CutomerID = Customer.CustomerID  
        LEFT JOIN TransactionType on Reference.TransactionID = TransactionType.TransactionID
        LEFT JOIN Driver on Reference.DriverID = Driver.DriverID
        ORDER BY [Reference].[Date] DESC FOR JSON PATH,INCLUDE_NULL_VALUES";
        excute_select_operation($sqlcommand);
    }
    function getAllPurchaseOrders()
    {
        $params_in = array(
            "PageNumber" => 1,
            "D1"=>0,
            "D2"=>0,
            "SupplierName"=>0,
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
        $sqlcommand = "select OrderID,convert(varchar,OrderDate, 20) as OrderDate,OrderType,CustomerName,
        (select sum(Total) from Orderitems WHERE OrderID = [Order].OrderID) as Total 
        from [Order] LEFT JOIN Customer on Customer.CustomerID = [Order].[CutomerID]
        WHERE OrderType = 2
        ORDER BY [OrderDate] DESC FOR JSON PATH,INCLUDE_NULL_VALUES";
        excute_select_operation($sqlcommand);
    }
    function getGRNDetaitNotShiped($GRNO)
    {
        $sqlcommand = "select PurchaseID,Purchase.GRNNO,ItemType,ItemCode,Purchase.PPP,Quantity,Total,ISNULL(Remainder,0) as Remainder,ISNULL(Extra,0) as Extra
            from Purchase INNER JOIN Item on Item.ItemID = Purchase.ItemID Inner JOIN GRN on GRN.GRNNO = Purchase.GRNNO
            WHERE Purchase.GRNNO = ? AND GRN.Delivered = 0
            FOR JSON PATH,INCLUDE_NULL_VALUES";
        $array = array($GRNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getGRNDetail($GRNO)
    {
        $sqlcommand = "select PurchaseID,GRNNO,ItemType,ItemCode,Purchase.PPP,Quantity,Total,Remainder,Extra 
            from Purchase INNER JOIN Item on Item.ItemID = Purchase.ItemID
            WHERE GRNNO = ?
            FOR JSON PATH,INCLUDE_NULL_VALUES";
        $array = array($GRNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getONEGRN($GRNO)
    {
        $sqlcommand = "select GRN.GRNNO,Delivered,convert(varchar, PurchsedDate, 20) as PurchsedDate,
            convert(varchar, DeliverdDate, 20) as DeliverdDate,SupplierName,TransactionType,DriverName,
            (select SUM(Total) FROM Purchase WHERE Purchase.GRNNO = GRN.GRNNO ) as Total from GRN
            LEFT JOIN Supplier on GRN.SupplierID = Supplier.SupplierID  
            LEFT JOIN TransactionType on GRN.TransactionID = TransactionType.TransactionID
            LEFT JOIN Driver on GRN.DriverID = Driver.DriverID
            WHERE GRN.GRNNO = ?
            FOR JSON PATH,INCLUDE_NULL_VALUES,WITHOUT_ARRAY_WRAPPER";
        $array = array($GRNO);
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
    function getItemStock($ItemID)
    {
        $sqlcommand = "SELECT * FROM STOCKVIEW WHERE ItemId = ? ORDER BY [Date] DESC
            for json auto,INCLUDE_NULL_VALUES";
        $array = array($ItemID);
        excute_prepared_statements($array, $sqlcommand);
    }
    function getAllTransferedInfo()
    {
        $sqlcommand = "select TEID,[Date],Cost,DriverName,Driver.DriverID from [Transfer-Expence] 
            LEFT JOIN Driver on Driver.DriverID = [Transfer-Expence].DriverID
            ORDER BY [Date] DESC FOR JSON PATH,INCLUDE_NULL_VALUES ";
        excute_select_operation($sqlcommand);
    }
    function getOneTransferedInfo($TEID)
    {
        $sqlcommand = "select TEID,[Date],Cost,DriverName,Driver.DriverID from [Transfer-Expence] 
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

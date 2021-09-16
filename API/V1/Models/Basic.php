<?php
    class BasicApi{
        function getAllItemInventory(){
            $sqlcommand2 = "exec spItemInventory";
            $sqlcommand = "select * from WareHouse left join Item on Item.ItemID = WareHouse.ItemID for json auto";
            excute_select_operation($sqlcommand2);
        }
        function getAllStore(){
            $sqlcommand = "select * from Store left join Item on Item.ItemID = Store.ItemID for json auto";
            excute_select_operation($sqlcommand); 
        }
        function getTransactionType(){
            $sqlcommand = "select * from TransactionType for json auto";
            excute_select_operation($sqlcommand);
        }
        function getALLGRN(){
            $sqlcommand = "select GRN.GRNNO,convert(varchar, PurchsedDate, 20) as PurchsedDate,
            convert(varchar, DeliverdDate, 20) as DeliverdDate,SupplierName,TransactionType,DriverName,
            (select SUM(Total) FROM Purchase WHERE Purchase.GRNNO = GRN.GRNNO ) as Total from GRN
            LEFT JOIN Supplier on GRN.SupplierID = Supplier.SupplierID  
            LEFT JOIN TransactionType on GRN.TransactionID = TransactionType.TransactionID
            LEFT JOIN Driver on GRN.DriverID = Driver.DriverID
            ORDER BY PurchsedDate DESC,DeliverdDate DESC FOR JSON PATH,INCLUDE_NULL_VALUES";
            excute_select_operation($sqlcommand);
        }
        function getAllReferences(){
            $sqlcommand = "select * from Reference left join Sales on Reference.REFNO = Sales.REFNO ORDER BY Reference.Date DESC
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function getAllPurchaseOrders(){
            $sqlcommand = "select * from [Order] left join Orderitems on Orderitems.OrderID = [Order].OrderID and OrderType = 1
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function getAllSalesOrders(){
            $sqlcommand = "select * from [Order] left join Orderitems on Orderitems.OrderID = [Order].OrderID and OrderType = 2 ORDER BY [Order].OrderDate DESC
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function getGRNDetail($GRNO){
            $sqlcommand = "select PurchaseID,GRNNO,ItemType,ItemCode,Purchase.PPP,Quantity,Total,Remainder,Extra 
            from Purchase INNER JOIN Item on Item.ItemID = Purchase.ItemID
            WHERE GRNNO = ?
            FOR JSON PATH,INCLUDE_NULL_VALUES";
            $array = array($GRNO);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getONEGRN($GRNO){
            $sqlcommand = "select GRN.GRNNO,Delivered,convert(varchar, PurchsedDate, 20) as PurchsedDate,
            convert(varchar, DeliverdDate, 20) as DeliverdDate,SupplierName,TransactionType,DriverName,
            (select SUM(Total) FROM Purchase WHERE Purchase.GRNNO = GRN.GRNNO ) as Total from GRN
            LEFT JOIN Supplier on GRN.SupplierID = Supplier.SupplierID  
            LEFT JOIN TransactionType on GRN.TransactionID = TransactionType.TransactionID
            LEFT JOIN Driver on GRN.DriverID = Driver.DriverID
            WHERE GRN.GRNNO = ?
            FOR JSON PATH,INCLUDE_NULL_VALUES,WITHOUT_ARRAY_WRAPPER";
            $array = array($GRNO);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getREF($REFNO){
            $sqlcommand = "select * from Reference left join Sales on Reference.REFNO = Sales.REFNO WHERE Reference.REFNO = ?
            for json auto";
            $array = array($REFNO);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getOrder($OrderID){
            $sqlcommand = "select * from [Order] left join Orderitems on Orderitems.OrderID = [Order].OrderID where [Order].OrderID = ?
            for json auto";
            $array = array($OrderID);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getItemStock($ItemID){
            // $params_in = array($ItemID);
            // // $sqlcommand = "EXEC [dbo].[spItemStock] @ItemID = ?";
            // $sqlcommand = "select * from STOCK WHERE ItemId  @ItemID = ? for json auto";
            // excute_prepared_statements($params_in,$sqlcommand);
            $sqlcommand = "select * from STOCK WHERE ItemId = ?
            for json auto,INCLUDE_NULL_VALUES";
            $array = array($ItemID);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getAllGRNSNOTDelivered(){
            $sqlcommand = "select GRN.GRNNO,Delivered,convert(varchar, PurchsedDate, 20) as PurchsedDate,
            convert(varchar, DeliverdDate, 20) as DeliverdDate,SupplierName,TransactionType,DriverName,
            (select SUM(Total) FROM Purchase WHERE Purchase.GRNNO = GRN.GRNNO ) as Total from GRN
            LEFT JOIN Supplier on GRN.SupplierID = Supplier.SupplierID  
            LEFT JOIN TransactionType on GRN.TransactionID = TransactionType.TransactionID
            LEFT JOIN Driver on GRN.DriverID = Driver.DriverID
            WHERE Delivered = 0
            ORDER BY PurchsedDate DESC,DeliverdDate DESC FOR JSON PATH,INCLUDE_NULL_VALUES";
            excute_select_operation($sqlcommand);
        }
        function getAllTransferedInfo(){
            $sqlcommand = "select * from [Transfer-Expence] left join [Warehouse-Store]
            on [Transfer-Expence].TEID = [Warehouse-Store].TEID for json auto";
            excute_select_operation($sqlcommand);
        }
    }
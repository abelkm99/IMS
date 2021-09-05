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
            $sqlcommand = "select * from GRN left join Purchase on GRN.GRNNO = Purchase.GRNNO ORDER BY GRN.PurchsedDate DESC for json auto";
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
            $sqlcommand = "select * from [Order] left join Orderitems on Orderitems.OrderID = [Order].OrderID and OrderType = 2
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function getGRN($GRNO){
            $sqlcommand = "select * from GRN left join Purchase on GRN.GRNNO = Purchase.GRNNO where GRN.GRNNO = ?
            for json auto";
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
            $params_in = array($ItemID);
            $sqlcommand = "EXEC [dbo].[spItemStock] @ItemID = ?";
            excute_prepared_statements($params_in,$sqlcommand);
        }
        function getAllGRNSNOTDelivered(){
            $sqlcommand = "select * from GRN left join Purchase on GRN.GRNNO = Purchase.GRNNO where Delivered = 0 for json auto";
            excute_select_operation($sqlcommand);
        }
        function getAllTransferedInfo(){
            $sqlcommand = "select * from [Transfer-Expence] left join [Warehouse-Store]
            on [Transfer-Expence].TEID = [Warehouse-Store].TEID for json auto";
            excute_select_operation($sqlcommand);
        }
    }
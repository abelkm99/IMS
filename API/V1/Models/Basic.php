<?php
    class BasicApi{
        function getTransactionType(){
            $sqlcommand = "select * from TransactionType for json auto";
            excute_select_operation($sqlcommand);
        }
        function getALLGRN(){
            $sqlcommand = "select * from GRN inner join Purchase on GRN.GRNNO = Purchase.GRNNO
                for json auto";
            excute_select_operation($sqlcommand);
            // if (validate_accesstoken(array('admin'))){
                
            // }
        }
        function getAllReferences(){
            $sqlcommand = "select * from Reference inner join Sales on Reference.REFNO = Sales.REFNO 
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function getAllPurchaseOrders(){
            $sqlcommand = "select * from [Order] inner join Orderitems on Orderitems.OrderID = [Order].OrderID and OrderType = 1
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function getAllSalesOrders(){
            $sqlcommand = "select * from [Order] inner join Orderitems on Orderitems.OrderID = [Order].OrderID and OrderType = 2
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function getGRN($GRNO){
            $sqlcommand = "select * from GRN inner join Purchase on GRN.GRNNO = Purchase.GRNNO where GRN.GRNNO = ?
            for json auto";
            $array = array($GRNO);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getREF($REFNO){
            $sqlcommand = "select * from Reference inner join Sales on Reference.REFNO = Sales.REFNO WHERE Reference.REFNO = ?
            for json auto";
            $array = array($REFNO);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getOrder($OrderID){
            $sqlcommand = "select * from [Order] inner join Orderitems on Orderitems.OrderID = [Order].OrderID where [Order].OrderID = ?
            for json auto";
            $array = array($OrderID);
            excute_prepared_statements($array,$sqlcommand);
        }
        function getItemStock($ItemID){
            $params_in = array($ItemID);
            $sqlcommand = "EXEC [dbo].[spItemStock] @ItemID = ?";
            excute_prepared_statements($params_in,$sqlcommand);
        }
    }
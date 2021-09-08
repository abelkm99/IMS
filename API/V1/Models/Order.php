<?php
    class Order{
        function getOrder($OrderId){
            $sqlcommand = "select * from [dbo].[Order]
                           inner join [dbo].[Orderitems]
                           on [dbo].[Order].OrderID= [dbo].[Orderitems].OrderID
                           where [dbo].[Order].OrderID = ?
                           for json auto";
            $params_in = array($OrderId);
            excute_prepared_statements($params_in,$sqlcommand);
        }
        function ListAllOrders(){
            
            $sqlcommand = "select * from [dbo].[Order], Orderitems
                            where  [dbo].[Order].OrderID =  [dbo].[Orderitems].OrderID
                            for json auto";
            excute_select_operation($sqlcommand);
        }
        function makeNewOrder(){
            $array = array(
                "OrderType"=>1,
                "SupplierID"=>0,
                "CutomerID"=>0,
                "OrderDate"=>1,
                "OrderInformation"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spOrderItems]
            @OrderType = ?,
            @SupplierID = ?,
            @CutomerID = ?,
            @OrderDate = ?,
            @OrderInformation = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteOrder($OrderId){
            $sqlcommand = "EXEC	[dbo].[spDeleteOrder]
                            @OrderId = ?,
                            @result = ?,
                            @message =?";
            excute_delete_prodecure($OrderId,$sqlcommand);
        }
        function updateOrder(){
            $array = array(
                "CustomerId"=>0,
                "OrderDate"=>0,
                "OrderID"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateOrder]
            @CustomerId = ?,
            @OrderDate = ?,
            @OrderID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateOrderList(){
            $array = array(
                "PPP"=>0,
                "Quantity"=>0,
                "OrderditemID"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateOrderItem]
            @PPP = ?,
            @Quantity = ?,
            @OrderditemID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }

        function DelteOrderItem($OrderdItemId){
            $sqlcommand = "EXEC	[dbo].[spDeleteOrderItems]
            @OrderditemID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($OrderdItemId,$sqlcommand);
        }
        
    }

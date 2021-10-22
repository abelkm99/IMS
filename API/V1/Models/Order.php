<?php
class Order
{
    
    function ListAllOrders()
    {

        $sqlcommand = "select * from [dbo].[Order], Orderitems
                            where  [dbo].[Order].OrderID =  [dbo].[Orderitems].OrderID
                            for json auto";
        excute_select_operation($sqlcommand);
    }
    function getOrder($orderId)
    {
        $sqlcommand = "Select OrderID,convert(varchar,OrderDate, 20) as OrderDate,CustomerName,SupplierName,Supplier.SupplierID,Customer.CustomerID,
        (select sum(Total) from Orderitems WHERE OrderID = [Order].OrderID) as [Total Orders] 
        from [Order] 
		LEFT JOIN Customer on Customer.CustomerID = [Order].[CutomerID]
		LEFT JOIN Supplier on Supplier.SupplierID = [Order].[SupplierID]
		WHERE [OrderID] = ?
        ORDER BY [OrderDate] DESC FOR JSON PATH,WITHOUT_ARRAY_WRAPPER";
        $params_in = array($orderId);
        excute_prepared_statements($params_in, $sqlcommand);
    }
    function getOrderedItems($orderId){
        $sqlcommand = "select OrderditemID,OrderID,Item.ItemID as ItemID,Item.ItemType,Orderitems.PPP,Quantity,Total from Orderitems
        INNER JOIN Item on Item.ItemID = Orderitems.ItemID
        WHERE OrderID = ?
        FOR JSON PATH,INCLUDE_NULL_VALUES";
        excute_prepared_statements(array($orderId),$sqlcommand);
    }
    function makeNewOrder()
    {
        $array = array(
            "OrderType" => 1,
            "SupplierID" => 0,
            "CutomerID" => 0,
            "OrderDate" => 1,
            "OrderInformation" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spOrderItems]
            @OrderType = ?,
            @SupplierID = ?,
            @CutomerID = ?,
            @OrderDate = ?,
            @OrderInformation = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteOrder()
    {
        $array = array(
            "OrderID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteOrder]
		@OrderId = ?";

        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateOrder()
    {
        $array = array(
            "CustomerId" => 0,
            "SupplierId" => 0,
            "OrderDate" => 0,
            "OrderID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateOrder]
		@CustomerId = ?,
		@SupplierId = ?,
		@OrderDate = ?,
		@OrderID = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateOrderList()
    {
        $array = array(
            "PPP" => 0,
            "Quantity" => 0,
            "OrderditemID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateOrderItem]
		@PPP = ?,
		@Quantity = ?,
		@OrderditemID = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }

    function DelteOrderItem()
    {
        $array = array(
            "OrderditemID" => 1,
            "OrderID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteOrderItems]
		@OrderditemID = ?,
		@OrderID = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
}

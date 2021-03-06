<?php

class Item
{
    function getAllItemsNoPagination()
    {
        $sqlcommand = "SELECT * FROM Item FOR JSON PATH";
        excute_select_operation($sqlcommand);
    }
    function getAllItems()
    {
        $params_in = array(
            "PageNumber" => 1,
            "PPR" => 0,
            "ItemCode" => 0,
            "ItemType" => 0,
            "CategoryName" => 0,
            "MinShop" => 0,
            "MaxShop" => 0,
            "MinWarehouse" => 0,
            "MaxWarehouse" => 0,
            "order" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spGetALLItems]
		@PageNumber = ?,
        @PPR = ?,
		@ItemCode = ?,
		@ItemType = ?,
		@CategoryName = ?,
		@MinShop = ?,
		@MaxShop = ?,
		@MinWarehouse = ?,
		@MaxWarehouse = ?,
        @order = ?";
        excute_status_code_procedure($params_in, $sqlcommand);
    }
    function addNewItem()
    {
        $array = array(
            "CategoryID" => 1,
            "ItemCode" => 1,
            "ItemType" => 1,
            "PPP" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddItem]
		@CategoryID = ?,
		@ItemCode = ?,
		@ItemType = ?,
		@PPP = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateItemPrice()
    {
        $array = array(
            "PPP" => 1,
            "ItemId" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateItemPrice]
            @PPP = ?,
            @ItemId = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateItem()
    {
        $array = array(
            "CategoryID" => 0,
            "ItemCode" => 0,
            "ItemType" => 0,
            "ItemId" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateItem]
            @CategoryID = ?,
            @ItemCode = ?,
            @ItemType = ?,
            @ItemId = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function ItemInventory($ItemId)
    {
        $params_in = array($ItemId);
        $sqlcommand = "EXEC	[dbo].[spGetItemInventory]
            @ItemID = ?";
        excute_prepared_statements($params_in, $sqlcommand);
    }
    function deleteItem()
    {
        $sqlcommand = "EXEC	[dbo].[spDeleteItem]
            @ItemID = ?";
        $array = array(
            "ItemID" => 1
        );
        excute_status_code_procedure($array, $sqlcommand);
    }
}

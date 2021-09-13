<?php

class Item
{
    function getAllItems()
    {
        $pre = "declare @var varchar(max)  = (";
        $suf = ")select @var as result";
        $sqlcommand = "select Item.ItemID,
        ItemCode,ItemType,PPP,
        Store.ItemCount as StoreBalance,
        WareHouse.ItemCount as WareHouseBalance,
        Item.CategoryID as CategoryID,
        CategoryName as CategoryName
 from Item
 LEFT JOIN ItemCategory on ItemCategory.CategoryId = Item.CategoryID
 LEFT JOIN WareHouse on WareHouse.ItemID = Item.ItemID
 LEFT JOIN Store on Store.ItemID = Item.ItemID 
 for json path,INCLUDE_NULL_VALUES";
        excute_select_operation($sqlcommand);
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
        excute_prodecure_status_code($array, $sqlcommand);
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
        excute_prodecure_status_code($array, $sqlcommand);
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
        excute_prodecure_status_code($array, $sqlcommand);
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
        excute_prodecure_status_code($array, $sqlcommand);
    }
}

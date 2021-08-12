<?php

    class Item{
        function getAllItems(){
            $pre = "declare @var varchar(max)  = (";
            $suf = ")select @var as result"; 
            $sqlcommand = "select * from item,ItemCategory
                            where item.CategoryID = ItemCategory.CategoryId
                            for json auto ";
            excute_select_operation($sqlcommand);
        }
        function addNewItem(){
            $array = array(
                "CategoryID"=>1,
                "ItemCode"=>1,
                "ItemType"=>1,
                "PPP"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddItem]
            @CategoryID = ?,
            @ItemCode = ?,
            @ItemType = ?,
            @PPP = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateItemPrice(){
            $array = array(
                "PPP"=>1,
                "ItemId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateItemPrice]
            @PPP = ?,
            @ItemId = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateItem(){
            $array = array(
                "CategoryID"=>0,
                "ItemCode"=>0,
                "ItemType"=>0,
                "ItemId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateItem]
            @CategoryID = ?,
            @ItemCode = ?,
            @ItemType = ?,
            @ItemId = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function ItemInventory($ItemId){
            $params_in = array($ItemId);
            $sqlcommand = "EXEC	[dbo].[spGetItemInventory]
            @ItemID = ?";
            excute_prepared_statements($params_in,$sqlcommand);
        }
        function deleteItem(){
            $sqlcommand = "EXEC	[dbo].[spDeleteItem]
            @ItemID = ?";
            $array = array(
                "ItemID"=>1
            );
            excute_prodecure2($array,$sqlcommand);
        }
    }
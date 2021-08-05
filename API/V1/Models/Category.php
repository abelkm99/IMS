<?php
    class Category{
        function getAllCategories(){
            $sqlcommand = "select * from ItemCategory for json auto";
            excute_select_operation($sqlcommand);
        }
        function addCategory(){
            
            $array = array(
                "CategoryName"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spAddCategory]
            @CategoryName = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateCategory(){
            $array = array(
                "CategoryName"=>1,
                "CategoryId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateCategory]
            @CategoryName = ?,
            @CategoryId = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteCategory(){
            $array_input = array(
                "CategoryId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteItemCategory]
            @CategoryId = ?";
            excute_prodecure2($array_input,$sqlcommand);
        }
    }
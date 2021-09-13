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
            @CategoryName = ?";
            excute_prodecure_status_code($array,$sqlcommand);
        }
        function updateCategory(){
            $array = array(
                "CategoryName"=>1,
                "CategoryId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateCategory]
            @CategoryName = ?,
            @CategoryId = ?";
            excute_prodecure_status_code($array,$sqlcommand);
        }
        function deleteCategory(){
            $array_input = array(
                "CategoryId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteItemCategory]
            @CategoryId = ?";
            excute_prodecure_status_code($array_input,$sqlcommand);
        }
    }
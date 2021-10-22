<?php
class Category
{   
    function getAllCategoriesNoPagination(){
        $sqlcommand = "SELECT * FROM ItemCategory FOR JSON PATH";
        excute_select_operation($sqlcommand);

    }
    function getAllCategories()
    {
        $array = array(
            "PageNumber" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetALLCategories]
		@PageNumber = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function addCategory()
    {

        $array = array(
            "CategoryName" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spAddCategory]
            @CategoryName = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateCategory()
    {
        $array = array(
            "CategoryName" => 1,
            "CategoryId" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateCategory]
            @CategoryName = ?,
            @CategoryId = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteCategory()
    {
        $array_input = array(
            "CategoryId" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteItemCategory]
            @CategoryId = ?";
        excute_status_code_procedure($array_input, $sqlcommand);
    }
}

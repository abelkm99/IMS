<?php
class Income
{
    function getAllIncomes()
    {
        $params_in = array(
            "PageNumber" => 1,
            "D1" => 0,
            "D2" => 0,
            "order" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spGetIncomes]
            @PageNumber = ?,
            @D1 = ?,
            @D2 = ?,
            @order = ?";
        excute_status_code_procedure($params_in, $sqlcommand);
    }
    function addNewIncome()
    {
        $params_in = array(
            "Description" => 0,
            "Amount" => 1,
            "Date" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spAddIncome]
            @Description = ?,
            @Amount = ?,
            @Date = ?";
        excute_status_code_procedure($params_in, $sqlcommand);
    }
    function deleteIncome()
    {
        $sqlcommand = "EXEC	[dbo].[spDeleteIncome]
            @IncomeID = ?";
        $params_in = array(
            "IncomeID" => 1
        );
        excute_status_code_procedure($params_in, $sqlcommand);
    }
    function updateIncome()
    {
        $params_in = array(
            "IncomeID" => 1,
            "Description" => 0,
            "Amount" => 0,
            "Date" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateIncome]
            @IncomeID = ?,
            @Description = ?,
            @Amount = ?,
            @Date = ?";
        excute_status_code_procedure($params_in, $sqlcommand);
    }
}

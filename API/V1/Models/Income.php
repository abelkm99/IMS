<?php
    class Income{
        function getAllIncomes(){
            $sqlcommand = "select * from Income for json auto";
            excute_select_operation($sqlcommand);
        }
        function addNewIncome() {
            $params_in = array(
                "Description"=>0,
                "Amount"=>1,
                "Date"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spAddIncome]
            @Description = ?,
            @Amount = ?,
            @Date = ?";
            excute_prodecure2($params_in,$sqlcommand);
        }
        function deleteIncome(){
            $sqlcommand = "EXEC	[dbo].[spDeleteIncome]
            @IncomeID = ?";
            $params_in = array(
                "IncomeID"=>1
            );
            excute_prodecure2($params_in,$sqlcommand);
        }
        function updateIncome(){
            $params_in = array(
                "IncomeID"=>1,
                "Description"=>0,
                "Amount"=>0,
                "Date"=>0,
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateIncome]
            @IncomeID = ?,
            @Description = ?,
            @Amount = ?,
            @Date = ?";
            excute_prodecure2($params_in,$sqlcommand);
        }
    }
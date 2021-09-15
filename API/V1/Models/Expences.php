<?php
class Salary
{
    function getSalaryExpence()
    {
        $sqlcommand = "select SalaryID,[Date],Cost,Employee.EmployeeID,EmployeeName from SallaryExpences
                LEFT JOIN Employee ON SallaryExpences.EmployeeID = Employee.EmployeeID ORDER BY [Date] DESC for json path";
        excute_select_operation($sqlcommand);
    }
    function addSalaryExpence()
    {
        $array = array(
            "Date" => 1,
            "Cost" => 1,
            "EmployeeID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddSalaryExpense]
                                        @Date = ?,
                                        @Cost = ?,
                                        @EmployeeID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteSalaryExpence()
    {

        $array = array(
            "SalaryID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteSalaryExpence]
            @SalaryID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateSalaryExpence()
    {

        $sqlcommand = "EXEC	[dbo].[spUpdateSalaryExpence]
                                        @Date = ?,
                                        @Cost = ?,
                                        @EmployeeID = ?,
                                        @SalaryID = ?";
        $array = array(
            "Date" => 1,
            "Cost" => 0,
            "EmployeeID" => 0,
            "SalaryID" => 1
        );
        excute_prodecure_status_code($array, $sqlcommand);
    }
}

class Masatefiya
{
    function getMasatefiyaExpence()
    {
        $sqlcommand = "select * from Masatefiya
                            for json auto";
        excute_select_operation($sqlcommand);
    }
    function addMasatefiyaExpence()
    {

        $array = array(
            "REFNO" => 1,
            "Date" => 1,
            "Cost" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddMasatefiya]
                                        @REFNO = ?,
                                        @Date = ?,
                                        @Cost = ?,
                                        @result = ?,
                                        @message = ?";

        excute_prodecure($array, $sqlcommand);
    }
    function deleteMasatefiyaExpence($MID)
    {
        $sqlcommand = "EXEC	[dbo].[spDeleteMasatefiyaExpence]
                                @MID = ?,
                                @result = ?,
                                @message = ?";
        excute_delete_prodecure($MID, $sqlcommand);
    }
    function updateMasatefiyaExpence()
    {
        $array = array(
            "Date" => 0,
            "Cost" => 0,
            "REFNO" => 0,
            "MID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateMasatefiyaExpence]
                                        @Date = ?,
                                        @Cost = ?,
                                        @REFNO = ?,
                                        @MID = ?,
                                        @result = ?,
                                        @message = ?";
        excute_prodecure($array, $sqlcommand);
    }
}

class LoadUnLoadExpences
{
    function updateloadingExpence()
    {
        $array = array(
            "Date" => 0,
            "Cost" => 0,
            "REFNO" => 0,
            "LoadID" => 1
        );

        $sqlcommand = "EXEC	[dbo].[spUpdateloadingExpence]
            @Date = ?,
            @Cost = ?,
            @REFNO = ?,
            @LoadID = ?,
            @result = ?,
            @message = ?";

        excute_prodecure($array, $sqlcommand);
    }

    function updateUnloadingExpence()
    {
        $array = array(
            "Date" => 0,
            "Cost" => 0,
            "GRNNO" => 0,
            "UnLoadID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateUnloadingExpence]
                                @Date = ?,
                                @Cost = ?,
                                @GRNNO = ?,
                                @UnLoadID = ?,
                                @result = ?,
                                @message = ?";
        excute_prodecure($array, $sqlcommand);
    }
    function deleteUnloadingExpence($UnloadId)
    {
        $sqlcommand = "EXEC	[dbo].[spDeleteUnloadingExpence]
                                @UNLoadId = ?,
                                @result = ?,
                                @message = ?";
        excute_delete_prodecure($UnloadId, $sqlcommand);
    }
    function deleteloadingExpence($loadId)
    {
        $sqlcommand = "EXEC	[dbo].[spDeleteloadingExpence]
                                    @LoadID = ?,
                                    @result = ?,
                                    @message = ?";
        excute_delete_prodecure($loadId, $sqlcommand);
    }
    function addUnloadingExpence()
    {
        $array = array(
            "GRNNO" => 1,
            "Date" => 1,
            "Cost" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddUnloadingExpence]
            @GRNNO = ?,
            @Date = ?,
            @Cost = ?,
            @result = ?,
            @message = ?";
        excute_prodecure($array, $sqlcommand);
    }

    function addloadingExpence()
    {
        $array = array(
            "REFNO" => 1,
            "Date" => 1,
            "Cost" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddLoadingExpense]
                            @REFNO = ?,
                            @Date = ?,
                            @Cost = ?,
                            @result = ?,
                            @message = ?";
        excute_prodecure($array, $sqlcommand);
    }

    function getUnloadingExpences()
    {
        $sqlcommand = "select * from UNLoadingExpence
                                for json auto";
        excute_select_operation($sqlcommand);
    }
    function getloadingExpences()
    {
        $sqlcommand = "select * from [dbo].[Loading-Expence]
                                for json auto";
        excute_select_operation($sqlcommand);
    }
}
class OET
{
    function getOET()
    {
        $sqlcommand = "select * from OtherExpencesTypes for json auto";
        excute_select_operation($sqlcommand);
    }
    function addOET()
    {
        $array = array(
            "OEType" => 1,
            "OEDescription" => 0,
        );

        $sqlcommand = "EXEC	[dbo].[spAddOtherExpences]
            @OEType = ?,
            @OEDescription = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteOET()
    {
        $array = array(
            "OEID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteOtherExpenceTypes]
            @OEID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateOET()
    {
        $array = array(
            "OEType" => 0,
            "OEDescription" => 0,
            "OEID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateOtherExpenceTypes]
            @OEType = ?,
            @OEDescription = ?,
            @OEID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class PET
{
    function getPET()
    {
        $sqlcommand = "select * from PersonalExpencesTypes for json auto";
        excute_select_operation($sqlcommand);
    }
    function addPET()
    {

        $array = array(
            "PEType" => 1,
            "PEDescription" => 0,
        );

        $sqlcommand = "EXEC	[dbo].[spAddPersonalExpences]
            @PEType = ?,
            @PEDescription = ?";

        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deletePET()
    {
        $array = array(
            "PEID" => 1,
        );
        $sqlcommand = "EXEC    [dbo].[spDeletePersonalExpenceTypes]
            @PEID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updatePET()
    {
        $array = array(
            "PEType" => 0,
            "PEDescription" => 0,
            "PEID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdatePersonalExpenceTypes]
            @PEType = ?,
            @PEDescription = ?,
            @PEID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class BT
{
    function getBT()
    {
        $sqlcommand = "select * from BillTypes for json auto";
        excute_select_operation($sqlcommand);
    }
    function addBT()
    {
        $array = array(
            "BILLType" => 1,
            "BILLDescription" => 0,
        );

        $sqlcommand = "EXEC	[dbo].[spAddBillType]
            @BILLType = ?,
            @BILLDescription = ?";

        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteBT()
    {
        $array = array(
            "BID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteBillExpenceTypes]
            @BID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateBT()
    {
        $array = array(
            "BILLType" => 0,
            "BillDescription" => 0,
            "BID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateBillTypeExpence]
            @BILLType = ?,
            @BillDescription = ?,
            @BID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class OEL
{
    function getOEL()
    {
        $sqlcommand = "select OExpencesID,OtherExpencesList.OEID,[Date],Cost,OEType from OtherExpencesList 
            LEFT JOIN OtherExpencesTypes ON OtherExpencesTypes.OEID = OtherExpencesList.OEID ORDER BY [Date] DESC for json path";
        excute_select_operation($sqlcommand);
    }
    function addOEL()
    {
        $array = array(
            "OEID" => 1,
            "Date" => 1,
            "Cost" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddOtherExpenseList]
            @OEID = ?,
            @Date = ?,
            @Cost = ?";

        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteOEL()
    {
        $array = array(
            "OExpencesID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteOtherExpenceList]
            @OExpencesID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateOEL()
    {
        $array = array(
            "Date" => 0,
            "Cost" => 0,
            "OExpencesID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateOtherExpenceList]
            @Date = ?,
            @Cost = ?,
            @OExpencesID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class PEL
{
    function getPEL()
    {
        $sqlcommand = "select PExpencesID,PersonalExpencesList.PEID,PEType,[Date],Cost from PersonalExpencesList
        LEFT JOIN PersonalExpencesTypes ON PersonalExpencesTypes.PEID = PersonalExpencesList.PEID
        ORDER BY [Date] DESC FOR JSON PATH,include_null_values";
        excute_select_operation($sqlcommand);
    }
    function addPEL()
    {
        $array = array(
            "PEID" => 1,
            "Date" => 1,
            "Cost" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddPesonalExpenseList]
           @PEID = ?,
           @Date = ?,
           @Cost = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deletePEL()
    {
        $array = array(
            "PExpencesID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeletePersonalExpenceList]
            @PExpencesID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updatePEL()
    {
        $array = array(
            "Date" => 0,
            "Cost" => 0,
            "PExpencesID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdatePersonalExpenceList]
            @Date = ?,
            @Cost = ?,
            @PExpencesID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class BL
{
    function getBL()
    {
        $sqlcommand = "select BILLEXPENCEID,BillTypes.BID,BillTypes.BILLType,[Date],Cost from BILLExpencesList 
        LEFT JOIN BillTypes ON BillTypes.BID = BILLExpencesList.BID
        ORDER BY [Date] DESC FOR JSON PATH,include_null_values";
        excute_select_operation($sqlcommand);
    }
    function addBL()
    {
        $array = array(
            "BID" => 1,
            "Date" => 1,
            "Cost" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddBillExpenseList]
            @BID = ?,
            @Date = ?,
            @Cost = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteBL()
    {
        $array = array(
            "BILLEXPENCEID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteBillExpenceList]
            @BILLEXPENCEID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateBL()
    {
        $array = array(
            "Date" => 0,
            "Cost" => 0,
            "BILLEXPENCEID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateBillExpenceList]
            @Date = ?,
            @Cost = ?,
            @BILLEXPENCEID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}

class Bank
{
    function getAllBanks()
    {
        $sqlcommand = "select * from PersonalBankAccount left join 
            BankTransaction on PersonalBankAccount.PBID = BankTransaction.PBID for json auto";
        excute_select_operation($sqlcommand);
    }
    function addNewAccount()
    {
        $array = array(
            "AccountNumber" => 1,
            "BankName" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddPersonalBankAccount]
            @AccountNumber = ?,
            @BankName = ?";
        excute_prodecure2($array, $sqlcommand);
    }
    function updateBankAccount()
    {
        $input_array = array(
            "PBID" => 1,
            "AccountNumber" => 1,
            "BankName" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdatePersonalBankAccount]
            @PBID = ?,
            @AccountNumber = ?,
            @BankName = ?";
        excute_prodecure2($input_array, $sqlcommand);
    }
    function deleteBankAccount()
    {

        $input_array = array(
            "PBID" => 1
        );

        $sqlcommand = "EXEC	[dbo].[spDeletePersonalBankAccount]
            @PBID = ?";
        excute_prodecure2($input_array, $sqlcommand);
    }
    function addTransaction()
    {
        $input_array = array(
            "PBID" => 1,
            "TransactionType" => 1,
            "Amount" => 1,
            "Description" => 0,
            "Date" => 1
        );

        $sqlcommand = "EXEC	[dbo].[spAddBankTransaction]
            @PBID = ?,
            @TransactionType = ?,
            @Amount = ?,
            @Desciption = ?,
            @Date = ?";

        excute_prodecure2($input_array, $sqlcommand);
    }
    function deleteTransaction()
    {
        $input_array = array(
            "BTID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteBankTransaction]
            @BTID = ?";
        excute_prodecure2($input_array, $sqlcommand);
    }
    function getTransaction($PBID)
    {
        $sqlcommand = "select *,
            (ISNULL(SUM([TransactionIN]) OVER(ORDER BY [DATE] ROWS BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW ),0) 
            - ISNULL( SUM([TransactionOUT]) OVER(ORDER BY [DATE] ROWS BETWEEN UNBOUNDED PRECEDING AND CURRENT ROW ), 0))
             as balance from BankTransaction where PBID = ? for json auto";
        excute_prepared_statements(array($PBID), $sqlcommand);
    }
}
class Rent
{
    function getRent()
    {
        $sqlcommand = "select * from Rent order by [Date] DESC for json path";
        excute_select_operation($sqlcommand);
    }
    function addRent()
    {
        $params_in = array(
            "Date" => 1,
            "RentType" => 1,
            "payment" => 1
        );
        $sqlcommand = "EXEC [dbo].[spAddRent]
            @Date = ?,
            @RentType = ?,
            @payment = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function updateRent()
    {
        $params_in = array(
            "RentID" => 1,
            "RentType" => 0,
            "Date" => 0,
            "Payment" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateRent]
            @RentID = ?,
            @RentType = ?,
            @Date = ?,
            @Payment = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
    function deleteRent()
    {
        $params_in = array(
            "RentID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteRent]
            @RentID = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
}

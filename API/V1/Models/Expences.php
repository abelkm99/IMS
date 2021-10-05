<?php
class Salary
{
    function getSalaryExpence()
    {
        $array = array(
            "PageNumber" => 1,
            "EmployeeName" => 0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spGetSallaryExpence]
		@PageNumber = ?,
		@EmployeeName = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function addSalaryExpence()
    {
        $array = array(
            "Date" => 1,
            "Cost" => 1,
            "EmployeeID" => 1,
            "Description" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spAddSalaryExpense]
		@Date = ?,
		@Cost = ?,
		@EmployeeID = ?,
		@Description = ?";
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
		@SalaryID = ?,
		@Description = ?";
        $array = array(
            "Date" => 1,
            "Cost" => 0,
            "EmployeeID" => 0,
            "SalaryID" => 1,
            "Description" => 1
        );
        excute_prodecure_status_code($array, $sqlcommand);
    }
}

class Masatefiya
{
    function getMasatefiyaExpence()
    {
        $array = array(
            "PageNumber" => 1,
            "REFNO" => 0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spGetMasatefiyaExpence]
		@PageNumber = ?,
		@REFNO = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function addMasatefiyaExpence()
    {

        $array = array(
            "REFNO" => 1,
            "Date" => 1,
            "Cost" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spAddMasatefiya]
		@REFNO = ?,
		@Date = ?,
		@Cost = ?,
		@Description = ?";

        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteMasatefiyaExpence()
    {
        $array = array(
            "MID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteMasatefiyaExpence]
                                @MID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateMasatefiyaExpence()
    {
        $array = array(
            "Date" => 0,
            "Cost" => 0,
            "REFNO" => 0,
            "MID" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateMasatefiyaExpence]
		@Date = ?,
		@Cost = ?,
		@REFNO = ?,
		@MID = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
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
            "UnLoadID" => 1,
            "Description" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateUnloadingExpence]
		@Date = ?,
		@Cost = ?,
		@GRNNO = ?,
		@UnLoadID = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteUnloadingExpence()
    {
        $array = array(
            "UnLoadID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteUnloadingExpence]
                                @UNLoadId = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteloadingExpence($loadId)
    {
        $sqlcommand = "EXEC	[dbo].[spDeleteloadingExpence]
                                    @LoadID = ?";
        excute_delete_prodecure($loadId, $sqlcommand);
    }
    function addUnloadingExpence()
    {
        $array = array(
            "GRNNO" => 1,
            "Date" => 1,
            "Cost" => 1,
            "Description" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spAddUnloadingExpence]
		@GRNNO = ?,
		@Date = ?,
		@Cost = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
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
        $array = array(
            "PageNumber" => 1,
            "GRNNO" => 0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spGetUnloadingExpence]
		@PageNumber = ?,
		@GRNNO = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($array, $sqlcommand);
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
    function getOET_Pagination()
    {
        $array = array(
            "PageNumber" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spGetOET]
		@PageNumber = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
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
    function getPET_Pagination()
    {
        $array = array(
            "PageNumber" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spGetPET]
		@PageNumber = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
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
    function getBTPagination()
    {
        $array = array(
            "PageNumber" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spGetBET]
		@PageNumber = ?";

        excute_prodecure_status_code($array, $sqlcommand);
    }
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
        $array = array(
            "PageNumber" => 1,
            "OEType" => 0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spGetOtherExpenceList]
		@PageNumber = ?,
		@OEType = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function addOEL()
    {
        $array = array(
            "OEID" => 1,
            "Date" => 1,
            "Cost" => 1,
            "Description" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddOtherExpenseList]
		@OEID = ?,
		@Date = ?,
		@Cost = ?,
		@Description = ?";

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
            "OExpencesID" => 1,
            "Description" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateOtherExpenceList]
		@Date = ?,
		@Cost = ?,
		@OExpencesID = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class PEL
{
    function getPEL()
    {
        $array = array(
            "PageNumber" => 1,
            "PEType" => 0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spGetPersonalExpenceList]
		@PageNumber = ?,
		@PEType = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function addPEL()
    {
        $array = array(
            "PEID" => 1,
            "Date" => 1,
            "Cost" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spAddPesonalExpenseList]
		@PEID = ?,
		@Date = ?,
		@Cost = ?,
		@Description = ?";
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
            "PExpencesID" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdatePersonalExpenceList]
		@Date = ?,
		@Cost = ?,
		@PExpencesID = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class BL
{
    function getBL()
    {
        $array = array(
            "PageNumber" => 1,
            "BILLType" => 0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spGetBillExpenseList]
		@PageNumber = ?,
		@BILLType = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function addBL()
    {
        $array = array(
            "BID" => 1,
            "Date" => 1,
            "Cost" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spAddBillExpenseList]
		@BID = ?,
		@Date = ?,
		@Cost = ?,
		@Description = ?";
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
            "BILLEXPENCEID" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateBillExpenceList]
		@Date = ?,
		@Cost = ?,
		@BILLEXPENCEID = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}

class Bank
{
    function getAllBanks()
    {
        $input_array = array(
            "PageNumber" => 1,
            "BankName" => 0,
            "order" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spGetBankAccounts]
		@PageNumber = ?,
		@BankName = ?,
		@order = ?";
        excute_prodecure_status_code($input_array, $sqlcommand);
    }
    function getOneBank($PBID)
    {
        $sqlcommand = "select * from PersonalBankAccount WHERE PBID = ? for json auto,without_array_wrapper";
        excute_prepared_statements(array($PBID), $sqlcommand);
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
        excute_prodecure_status_code($array, $sqlcommand);
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
        excute_prodecure_status_code($input_array, $sqlcommand);
    }
    function deleteBankAccount()
    {

        $input_array = array(
            "PBID" => 1
        );

        $sqlcommand = "EXEC	[dbo].[spDeletePersonalBankAccount]
            @PBID = ?";
        excute_prodecure_status_code($input_array, $sqlcommand);
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

        excute_prodecure_status_code($input_array, $sqlcommand);
    }
    function deleteTransaction()
    {
        $input_array = array(
            "BTID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteBankTransaction]
            @BTID = ?";
        excute_prodecure_status_code($input_array, $sqlcommand);
    }
    function getTransaction()
    {
        $params_in = array(
            "PageNumber" => 1,
            "PBID" => 0,
            "TransactionType"=>0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spGetBankTransaction]
		@PageNumber = ?,
		@PBID = ?,
		@TransactionType = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
    }
}
class Rent
{
    function getRent()
    {
        $params_in = array(
            "PageNumber" => 1,
            "RentType" => 0,
            "D1" => 0,
            "D2" => 0,
            "order" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spGetRent]
		@PageNumber = ?,
		@RentType = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?";
        excute_prodecure_status_code($params_in, $sqlcommand);
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

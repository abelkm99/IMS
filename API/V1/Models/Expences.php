<?php
    class Salary{
        function getSalaryExpence(){
            $sqlcommand = "select * from SallaryExpences
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function addSalaryExpence(){
            $array = array(
                "Date"=>1,
                "Cost"=>1,
                "EmployeeID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddSalaryExpense]
                                        @Date = ?,
                                        @Cost = ?,
                                        @EmployeeID = ?,
                                        @result = ?,
                                        @message = ?";
            excute_prodecure($array,$sqlcommand);                             
        }
        function deleteSalaryExpence($SalaryId){

            $sqlcommand = "EXEC	[dbo].[spDeleteSalaryExpence]
            @SalaryID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($SalaryId,$sqlcommand);

        }
        function updateSalaryExpence(){

            $sqlcommand = "EXEC	[dbo].[spUpdateSalaryExpence]
                                        @Date = ?,
                                        @Cost = ?,
                                        @EmployeeID = ?,
                                        @SalaryID = ?,
                                        @result = ?,
                                        @message = ?";
            $array = array(
                "Date"=>1,
                "Cost"=>0,
                "EmployeeID"=>0,
                "SalaryID"=>1
            );
            excute_prodecure($array,$sqlcommand);
        }
    }

    class Masatefiya{
        function getMasatefiyaExpence(){
            $sqlcommand = "select * from Masatefiya
                            for json auto";
            excute_select_operation($sqlcommand);
        }
        function addMasatefiyaExpence(){
            
            $array = array(
                "REFNO"=>1,
                "Date"=>1,
                "Cost"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddMasatefiya]
                                        @REFNO = ?,
                                        @Date = ?,
                                        @Cost = ?,
                                        @result = ?,
                                        @message = ?";
            
            excute_prodecure($array,$sqlcommand);
        }
        function deleteMasatefiyaExpence($MID){
            $sqlcommand = "EXEC	[dbo].[spDeleteMasatefiyaExpence]
                                @MID = ?,
                                @result = ?,
                                @message = ?";
            excute_delete_prodecure($MID,$sqlcommand);
        }
        function updateMasatefiyaExpence(){
            $array = array(
                "Date"=>0,
                "Cost"=>0,
                "REFNO"=>0,
                "MID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateMasatefiyaExpence]
                                        @Date = ?,
                                        @Cost = ?,
                                        @REFNO = ?,
                                        @MID = ?,
                                        @result = ?,
                                        @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }

    class LoadUnLoadExpences{
        function updateloadingExpence(){
            $array = array(
                "Date"=>0,
                "Cost"=>0,
                "REFNO"=>0,
                "LoadID"=>1
            );

            $sqlcommand = "EXEC	[dbo].[spUpdateloadingExpence]
            @Date = ?,
            @Cost = ?,
            @REFNO = ?,
            @LoadID = ?,
            @result = ?,
            @message = ?";

            excute_prodecure($array,$sqlcommand);
        }
  
        function updateUnloadingExpence(){
            $array = array(
                "Date"=>0,
                "Cost"=>0,
                "GRNNO"=>0,
                "UnLoadID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateUnloadingExpence]
                                @Date = ?,
                                @Cost = ?,
                                @GRNNO = ?,
                                @UnLoadID = ?,
                                @result = ?,
                                @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteUnloadingExpence($UnloadId){
            $sqlcommand = "EXEC	[dbo].[spDeleteUnloadingExpence]
                                @UNLoadId = ?,
                                @result = ?,
                                @message = ?";
            excute_delete_prodecure($UnloadId,$sqlcommand);
        }
        function deleteloadingExpence($loadId){
            $sqlcommand = "EXEC	[dbo].[spDeleteloadingExpence]
                                    @LoadID = ?,
                                    @result = ?,
                                    @message = ?";
            excute_delete_prodecure($loadId,$sqlcommand);
        }
        function addUnloadingExpence(){
            $array = array(
                "GRNNO"=>1,
                "Date"=>1,
                "Cost"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddUnloadingExpence]
            @GRNNO = ?,
            @Date = ?,
            @Cost = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }

        function addloadingExpence(){
            $array = array(
                "REFNO"=>1,
                "Date"=>1,
                "Cost"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddLoadingExpense]
                            @REFNO = ?,
                            @Date = ?,
                            @Cost = ?,
                            @result = ?,
                            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }

        function getUnloadingExpences(){
            $sqlcommand = "select * from UNLoadingExpence
                                for json auto";
            excute_select_operation($sqlcommand);
        }
        function getloadingExpences(){
            $sqlcommand = "select * from [dbo].[Loading-Expence]
                                for json auto";
            excute_select_operation($sqlcommand);
        }
    }
    class OET{
        function getOET(){
            $sqlcommand = "select * from OtherExpencesTypes for json auto";
            excute_select_operation($sqlcommand);
        }
        function addOET(){
            $array = array(
                "OEType"=>1,
                "OEDescription"=>0,
            );

            $sqlcommand = "EXEC	[dbo].[spAddOtherExpences]
            @OEType = ?,
            @OEDescription = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteOET($OEID){
            $sqlcommand = "EXEC	[dbo].[spDeleteOtherExpenceTypes]
            @OEID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($OEID,$sqlcommand);
        }
        function updateOET(){
            $array = array(
                "OEType"=>0,
                "OEDescription"=>0,
                "OEID"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateOtherExpenceTypes]
            @OEType = ?,
            @OEDescription = ?,
            @OEID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }
    class PET{
        function getPET(){
            $sqlcommand = "select * from PersonalExpencesTypes for json auto";
            excute_select_operation($sqlcommand);
        }
        function addPET(){

            $array = array(
                "PEType"=>1,
                "PEDescription"=>0,
            );

            $sqlcommand = "EXEC	[dbo].[spAddPersonalExpences]
            @PEType = ?,
            @PEDescription = ?,
            @result = ?,
            @message = ?";

            excute_prodecure($array,$sqlcommand);
        }
        function deletePET($PEID){
            $sqlcommand = "EXEC    [dbo].[spDeletePersonalExpenceTypes]
            @PEID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($PEID,$sqlcommand);
        }
        function updatePET(){
            $array = array(
                "PEType"=>0,
                "PEDescription"=>0,
                "PEID"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spUpdatePersonalExpenceTypes]
            @PEType = ?,
            @PEDescription = ?,
            @PEID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }
    class BT{
        function getBT(){
            $sqlcommand = "select * from BillTypes for json auto";
            excute_select_operation($sqlcommand);
        }
        function addBT(){
            $array = array(
                "BILLType"=>1,
                "BILLDescription"=>0,
            );

            $sqlcommand = "EXEC	[dbo].[spAddBillType]
            @BILLType = ?,
            @BILLDescription = ?,
            @result = ?,
            @message = ?";

            excute_prodecure($array,$sqlcommand);
        }
        function deleteBT($BID){
            $sqlcommand = "EXEC	[dbo].[spDeleteBillExpenceTypes]
            @BID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($BID,$sqlcommand);
        }
        function updateBT(){
            $array = array(
                "BILLType"=>0,
                "BillDescription"=>0,
                "BID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateBillTypeExpence]
            @BILLType = ?,
            @BillDescription = ?,
            @BID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }
    class OEL{
        function getOEL(){
            $sqlcommand = "select * from OtherExpencesList inner join OtherExpencesTypes
            on OtherExpencesTypes.OEID = OtherExpencesList.OEID
            for json AUTO";
            excute_select_operation($sqlcommand);
        }
        function addOEL(){
            $array = array(
                "OEID"=>1,
                "Date"=>1,
                "Cost"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddOtherExpenseList]
            @OEID = ?,
            @Date = ?,
            @Cost = ?,
            @result = ?,
            @message = ?";

            excute_prodecure($array,$sqlcommand);
        }
        function deleteOEL($OExpencesID){
            $sqlcommand = "EXEC	[dbo].[spDeleteOtherExpenceList]
            @OExpencesID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($OExpencesID,$sqlcommand);
        }
        function updateOEL(){
            $array = array(
                "Date"=>0,
                "Cost"=>0,
                "OExpencesID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateOtherExpenceList]
            @Date = ?,
            @Cost = ?,
            @OExpencesID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }
    class PEL{
        function getPEL(){
            $sqlcommand = "select * from PersonalExpencesList inner join PersonalExpencesTypes
            on PersonalExpencesList.PEID = PersonalExpencesTypes.PEID
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function addPEL(){
            $array = array(
                "PEID"=>1,
                "Date"=>1,
                "Cost"=>1
            );
           $sqlcommand = "EXEC	[dbo].[spAddPesonalExpenseList]
           @PEID = ?,
           @Date = ?,
           @Cost = ?,
           @result = ?,
           @message = ?";
           excute_prodecure($array,$sqlcommand);
        }
        function deletePEL($PExpencesID){
            $sqlcommand = "EXEC	[dbo].[spDeletePersonalExpenceList]
            @PExpencesID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($PExpencesID,$sqlcommand);
        }
        function updatePEL(){
            $array = array(
                "Date"=>0,
                "Cost"=>0,
                "PExpencesID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdatePersonalExpenceList]
            @Date = ?,
            @Cost = ?,
            @PExpencesID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);

        }
    }
    class BL{
        function getBL(){
            $sqlcommand = "select * from BILLExpencesList inner join BillTypes
            on BILLExpencesList.BID = BillTypes.BID
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function addBL(){
            $array = array(
                "BID"=>1,
                "Date"=>1,
                "Cost"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddBillExpenseList]
            @BID = ?,
            @Date = ?,
            @Cost = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteBL($BILLEXPENCEID){
            $sqlcommand = "EXEC	[dbo].[spDeleteBillExpenceList]
            @BILLEXPENCEID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($BILLEXPENCEID,$sqlcommand);
        }
        function updateBL(){
            $array = array(
                "Date"=>0,
                "Cost"=>0,
                "BILLEXPENCEID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateBillExpenceList]
            @Date = ?,
            @Cost = ?,
            @BILLEXPENCEID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }
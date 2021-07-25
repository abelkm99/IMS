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
<?php

    class Supplier{
        function ListAllSuppliers(){
            $sqlcommand = "select * from Supplier
                            left join SupplierBankAccounts
                            on Supplier.SupplierID = SupplierBankAccounts.SupplierID
                            for json auto
                            ";
           excute_select_operation($sqlcommand);
        }
        function addSupplier(){
            
            $array = array(
                "SupplierName"=>1,
                "SupplierAddress"=>0,
                "SupplierTinNumber"=>1,
                "SupplierPhoneNumber"=>0,
                "BankAccountNumber"=>0,
                "BankName"=>0
            );
            $sqlcommand = "EXEC	[dbo].[spAddSupplier]
                            @SupplierName = ?,
                            @SupplierAddress = ?,
                            @SupplierTinNumber = ?,
                            @SupplierPhoneNumber = ?,
                            @BankAccountNumber = ?,
                            @BankName = ?,
                            @result = ?,
                            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        // function get only one supplier
        function getSupplierInformation($SupplierName){
            $sqlcommand = "select * from Supplier as s
                            inner join SupplierBankAccounts as sb
                            on s.SupplierID = sb.SupplierID
                            WHERE SupplierName = ?
                            for json auto
                            ";
            $array = array($SupplierName);
            excute_prepared_statements($array,$sqlcommand);
        }
        function updateSupplier(){
            $array = array(
                "SupplierName"=>0,
                "SupplierAddress"=>0,
                "SupplierTinNumber"=>0,
                "SupplierPhoneNumber"=>0,
                "SupplierID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateSupplier]
            @SupplierName = ?,
            @SupplierAddress = ?,
            @SupplierTinNumber = ?,
            @SupplierPhoneNumber = ?,
            @SupplierID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function getSupplierBankAccount($SupplierId){
            $param_in = array($SupplierId);
            $sqlcommand = "select * from SupplierBankAccounts where SupplierID = ? for json auto";
            excute_prepared_statements($param_in,$sqlcommand);
        }
        function addSupplierBankAccount(){
            $array = array(
                "SupplierID"=>1,
                "BankAccount"=>1,
                "BankName"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddSupplierBankAccount]
            @SupplierID = ?,
            @BankAccount = ?,
            @BankName = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateSupplierBankAccount(){
            $array = array(
                "BankAccountID"=>1,
                "BankAccountNumber"=>0,
                "BankName"=>0
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateSupplierBankAccount]
            @BankAccountID = ?,
            @BankAccountNumber = ?,
            @BankName = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function delteSupplierBankAccount($BankAcountId){
            $sqlcommand = "EXEC	[dbo].[spDeleteSupplierBankAccount]
            @BankAccountID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($BankAcountId,$sqlcommand);
        }
        function deleteSupplier(){
            $array = array(
                "SupplierID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteSupplier]
            @SupplierID = ?";
            excute_prodecure2($array,$sqlcommand);
        }
    }
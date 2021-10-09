<?php

class Supplier
{
    function getAllSupplierPagination()
    {
        $param_in = array(
            "PageNumber" => 1,
            "SupplierName" => 0,
            "order" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spGetSuppliers]
            @PageNumber = ?,
            @SupplierName = ?,
            @order = ?";
        excute_prodecure_status_code($param_in, $sqlcommand);
    }
    function ListAllSuppliers()
    {
        $sqlcommand = "select * from Supplier
                            left join SupplierBankAccounts
                            on Supplier.SupplierID = SupplierBankAccounts.SupplierID
                            for json auto
                            ";
        excute_select_operation($sqlcommand);
    }
    function addSupplier()
    {

        $array = array(
            "SupplierName" => 1,
            "SupplierAddress" => 0,
            "SupplierTinNumber" => 1,
            "SupplierPhoneNumber" => 0,
            "BankAccountNumber" => 0,
            "BankName" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spAddSupplier]
                            @SupplierName = ?,
                            @SupplierAddress = ?,
                            @SupplierTinNumber = ?,
                            @SupplierPhoneNumber = ?,
                            @BankAccountNumber = ?,
                            @BankName = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    // function get only one supplier
    function getSupplierInformation($SupplierId)
    {
        $param_in = array($SupplierId);
        $sqlcommand = "select * from Supplier
            left join SupplierBankAccounts
            on Supplier.SupplierID = SupplierBankAccounts.SupplierID where Supplier.SupplierID = ? for json auto,include_null_values";
        excute_prepared_statements($param_in, $sqlcommand);
    }
    function updateSupplier()
    {
        $array = array(
            "SupplierName" => 0,
            "SupplierAddress" => 0,
            "SupplierTinNumber" => 0,
            "SupplierPhoneNumber" => 0,
            "SupplierID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateSupplier]
            @SupplierName = ?,
            @SupplierAddress = ?,
            @SupplierTinNumber = ?,
            @SupplierPhoneNumber = ?,
            @SupplierID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function getSupplierBankAccount($SupplierId)
    {
        $param_in = array($SupplierId);
        $sqlcommand = "select * from SupplierBankAccounts where SupplierID = ? for json auto";
        excute_prepared_statements($param_in, $sqlcommand);
    }
    function addSupplierBankAccount()
    {
        $array = array(
            "SupplierID" => 1,
            "BankAccount" => 1,
            "BankName" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddSupplierBankAccount]
            @SupplierID = ?,
            @BankAccount = ?,
            @BankName = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateSupplierBankAccount()
    {
        $array = array(
            "BankAccountID" => 1,
            "BankAccountNumber" => 0,
            "BankName" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateSupplierBankAccount]
            @BankAccountID = ?,
            @BankAccountNumber = ?,
            @BankName = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function delteSupplierBankAccount()
    {
        $array = array(
            "BankAccountID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteSupplierBankAccount]
            @BankAccountID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteSupplier()
    {
        $array = array(
            "SupplierID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteSupplier]
            @SupplierID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}

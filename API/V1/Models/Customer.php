<?php

class Customer
{
    function getCustomer_pagination()
    {
        $param_in = array(
            "PageNumber" => 1,
            "CustomerName" => 0,
            "order" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetCustomer]
            @PageNumber = ?,
            @CustomerName = ?,
            @order = ?";
        excute_status_code_procedure($param_in, $sqlcommand);
    }
    function ListAllCustomers()
    {
        $sqlcommand = "select * from Customer
                            left join CustomerBankAccounts 
                            on Customer.CustomerID = CustomerBankAccounts.CustomerID
                            for json auto";
        excute_select_operation($sqlcommand);
    }

    function addCustomer()
    {
        $array = array(
            "CustomerName" => 1,
            "CustomerAddress" => 0,
            "CustomerTinNumber" => 0,
            "CustomerPhoneNumber" => 0,
            "BankAccount" => 0,
            "BankName" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spAddCustomer]
                            @CustomerName = ?,
                            @CustomerAddress = ?,
                            @CustomerTinNumber = ?,
                            @CustomerPhoneNumber = ?,
                            @BankAccount = ?,
                            @BankName = ?";

        excute_status_code_procedure($array, $sqlcommand);
    }
    // function get only one supplier
    function getCustomerInformation($CustomerID)
    {
        $sqlcommand = "SELECT * FROM Customer LEFT JOIN CustomerBankAccounts ON Customer.CustomerID = CustomerBankAccounts.CustomerID WHERE Customer.CustomerID = ? for json auto";
        $array = array($CustomerID);
        excute_prepared_statements($array, $sqlcommand);
    }
    function updateCustomer()
    {
        $array = array(
            "CustomerName" => 0,
            "CustomerAddress" => 0,
            "CustomerTinNumber" => 0,
            "CustomerPhoneNumber" => 0,
            "CustomerID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateCustomer]
            @CustomerName = ?,
            @CustomerAddress = ?,
            @CustomerTinNumber = ?,
            @CustomerPhoneNumber = ?,
            @CustomerID = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function getCustomerBankAccount($CustomerId)
    {
        $param_in = array($CustomerId);
        $sqlcommand = "select * from CustomerBankAccounts where CustomerID = ? for json auto";
        excute_prepared_statements($param_in, $sqlcommand);
    }
    function addCustomerBankAccount()
    {
        $array = array(
            "CustomerID" => 1,
            "BankAccount" => 1,
            "BankName" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spAddCustomerBankAccount]
            @CustomerID = ?,
            @BankAccount = ?,
            @BankName = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateCustomerBankAccount()
    {
        $array = array(
            "BankAccountID" => 1,
            "BankAccount" => 0,
            "BankName" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateCustomerBankAccount]
            @BankAccountID = ?,
            @BankAccount = ?,
            @BankName = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteCustomerBankAccount()
    {
        $array = array(
            "BankAccountID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteCustomerBankAccount]
            @BankAccountID = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteCustomer()
    {
        $array_input = array(
            "CustomerID" => 1
        );
        $sqlcommand = "EXEC [dbo].[spDeleteCustomer]
            @CustomerID = ?";
        excute_status_code_procedure($array_input, $sqlcommand);
    }
}

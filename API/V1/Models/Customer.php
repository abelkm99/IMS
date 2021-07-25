<?php

    class Customer{
        function ListAllCustomers(){
            $sqlcommand = "select * from Customer
                            left join CustomerBankAccounts 
                            on Customer.CustomerID = CustomerBankAccounts.CustomerID
                            for json auto";
            excute_select_operation($sqlcommand);
        }
        
        function addCustomer(){
            $array = array(
                "CustomerName"=>1,
                "CustomerAddress"=>0,
                "CustomerTinNumber"=>0,
                "CustomerPhoneNumber"=>0,
                "BankAccount"=>0,
                "BankName"=>0,                
            );
            $sqlcommand = "EXEC	[dbo].[spAddCustomer]
                            @CustomerName = ?,
                            @CustomerAddress = ?,
                            @CustomerTinNumber = ?,
                            @CustomerPhoneNumber = ?,
                            @BankAccount = ?,
                            @BankName = ?,
                            @result = ?,
                            @message = ?";
            
            excute_prodecure($array,$sqlcommand);
        }
        // function get only one supplier
        function getCustomerInformation($CustomerName){
            $sqlcommand = "select * from Customer
                            left join CustomerBankAccounts 
                            on Customer.CustomerID = CustomerBankAccounts.CustomerID
                            where CustomerName = ?
                            for json auto";
            $array = array($CustomerName);
            excute_prepared_statements($array,$sqlcommand);
        }
        function updateCustomer(){
            $array = array(
                "CustomerName"=>0,
                "CustomerAddress"=>0,
                "CustomerTinNumber"=>0,
                "CustomerPhoneNumber"=>0,
                "CustomerID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateCustomer]
            @CustomerName = ?,
            @CustomerAddress = ?,
            @CustomerTinNumber = ?,
            @CustomerPhoneNumber = ?,
            @CustomerID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function getCustomerBankAccount($CustomerId){
            $param_in = array($CustomerId);
            $sqlcommand = "select * from CustomerBankAccounts where CustomerID = 9 for json auto";
            excute_prepared_statements($param_in,$sqlcommand);
        }
        function addCustomerBankAccount(){
            $array = array(
                "CustomerID"=>1,
                "BankAccount"=>1,
                "BankName"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddCustomerBankAccount]
            @CustomerID = ?,
            @BankAccount = ?,
            @BankName = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateCustomerBankAccount(){
            $array = array(
                "BankAccountID"=>1,
                "BankAccount"=>0,
                "BankName"=>0
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateCustomerBankAccount]
            @BankAccountID = ?,
            @BankAccount = ?,
            @BankName = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteCustomerBankAccount($BankAcountId){
            $sqlcommand = "EXEC	[dbo].[spDeleteCustomerBankAccount]
            @BankAccountID = ?,
            @result = ?,
            @message = ?";
            excute_delete_prodecure($BankAcountId,$sqlcommand);
        }

    }
<?php
    class Employee{
        function ListAllEmployees(){
            $sqlcommand = "select * from Employee for json auto";
            excute_select_operation($sqlcommand);
        }
        function getEmployeeInfromation($EmployeeId){
            $sqlcommand = "select * from Employee where EmployeeID = ? for json auto";
            $input_param = array($EmployeeId);
            excute_prepared_statements($input_param,$sqlcommand);
        }
        function addEmployee(){
            $params_in = array(
                "EmployeeName"=>1,
                "EmployeePassword"=>1,
                "EmployeePhoneNumber"=>0,
                "EmployeeAddress"=>0,
                "EmployeeUserName"=>1,
            );
            $sqlcommand = "EXEC   [dbo].[spAddEmployee]
            @EmployeeName = ?,
            @EmployeePassword = ?,
            @EmployeePhoneNumber = ?,
            @EmployeeAddress = ?,
            @EmployeeUserName = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($params_in,$sqlcommand);
        }
        function updateEmployee(){
            $params_in = array(
                "EmployeeName"=>0,
                "EmployeePhoneNumber"=>0,
                "EmployeeAddress"=>0,
                "EmployeeId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateEmployee]
            @EmployeeName = ?,
            @EmployeePhoneNumber = ?,
            @EmployeeAddress = ?,
            @EmployeeId = ?,
            @result = ?,
            @message = ?";

            excute_prodecure($params_in,$sqlcommand);
        }
        function updateEmployeeAuthentication(){
            $params_in = array(
                "EmployeeUserName"=>0,
                "EmployeePassword"=>0,
                "OldEmployeeUserName"=>1,
                "OldEmployeePassword"=>1,
                "EmployeeId"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateEmployeeAuth]
            @EmployeeUserName = ?,
            @EmployeePassword = ?,
            @OldEmployeeUserName = ?,
            @OldEmployeePassword = ?,
            @EmployeeId = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($params_in,$sqlcommand);

        }
        function activateEmployee(){
            $params_in = array("EmployeeId"=>1);
            $sqlcommand = "EXEC	[dbo].[spActivateEmployee]
            @EmployeeId = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($params_in,$sqlcommand);
        }
        function deactivateEmployee(){
            $params_in = array("EmployeeId"=>1);
            $sqlcommand = "EXEC [dbo].[spDeActivateEmployee]
            @EmployeeId = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($params_in,$sqlcommand);
        }
        function deleteEmployee(){
            $params_in = array("EmployeeId"=>1);
            $sqlcommand = "EXEC [dbo].[spDeleteEmployee]
            @EmployeeID = ?";
            excute_prodecure2($params_in,$sqlcommand);
        }
    }
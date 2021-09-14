<?php

    class Driver{
        function ListAllDrivers(){
            $sqlcommand = "select * from Driver for json auto";
            excute_select_operation($sqlcommand);
        }

        function addDriver(){

            $array = array(
                "DriverName"=>1,
                "DriverPhoneNumber"=>1,
                "DriverPlate"=>0
            );
            $sqlcommand = "EXEC	[dbo].[spAddDriver]
            @DriverName = ?,
            @DriverPhoneNumber = ?,
            @DriverPlate = ?";

            excute_prodecure_status_code($array,$sqlcommand);
        }
        function getDriverInformation($DriverName){
            $sqlcommand = "select * from Driver
            WHERE DriverName = ?
            for json auto";
            $array = array($DriverName);
            excute_prepared_statements($array,$sqlcommand);
        }

        function updateDriver(){
            $array = array(
                "DriverName"=>0,
                "DriverPhoneNumber"=>0,
                "DriverPlate"=>0,
                "DriverID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateDriver]
            @DriverName = ?,
            @DriverPhoneNumber = ?,
            @DriverPlate = ?,
            @DriverID = ?";
            excute_prodecure_status_code($array,$sqlcommand);
        }
        function deleteDriver(){
            $input_array = array(
                "DriverID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteDriver]
            @DriverID = ?";
            excute_prodecure_status_code($input_array,$sqlcommand);
        }

    }
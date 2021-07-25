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
            );
            $sqlcommand = "EXEC	[dbo].[spAddDriver]
            @DriverName = ?,
            @DriverPhoneNumber = ?,
            @result = ?,
            @message = ?";

            excute_prodecure($array,$sqlcommand);
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
                "DriverID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateDriver]
            @DriverName = ?,
            @DriverPhoneNumber = ?,
            @DriverID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }

    }
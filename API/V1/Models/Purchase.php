<?php

    class Purchase{
        function makeSales(){
            $array = array(
                "Date"=>1,
                "CutomerID"=>1,
                "TransactionID"=>1,
                "EmployeeId"=>1,
                "DriverId"=>0,
                "SalesInformation"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spMakeSales]
            @Date = ?,
            @CutomerID = ?,
            @TransactionID = ?,
            @EmployeeId = ?,
            @DriverId = ?,
            @SalesInformation = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);             
        }
        function movetostore(){
            $array = array(
                "ItemId"=>1,
                "Quantity"=>1,
                "Date"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spMoveWarehouseToStore]
            @ItemId = ?,
            @Quantity = ?,
            @Date = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
            
        }

        function shipPurchase(){
            $array = array(
                "DeliverdDate"=>1,
                "GRNNO"=>1,
                "ShipmentInfo"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spShipPurchases]
            @DeliverdDate = ?,
            @GRNNO = ?,
            @ShipmentInfo = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        
        function makePurchase(){
            $array = array(
                "PurchsedDate"=>1,
                "SupplierName"=>1,
                "TransactionID"=>1,
                "DriverID"=>0,
                "PurchaseString"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spMakePurchase]
            @PurchsedDate = ?,
            @SupplierName = ?,
            @TransactionID = ?,
            @DriverID = ?,
            @PurchaseString = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);                                                                                        
        }
        function updatePurchase(){
            $array = array(
                "PPP"=>0,
                "Quantity"=>0,
                "Remainder"=>0,
                "Extra"=>0,
                "PurchaseID"=>1,
                "GRNNO"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spUpdatePurchase]
            @PPP = ?,
            @Quantity = ?,
            @Remainder = ?,
            @Extra = ?,
            @PurchaseID = ?,
            @GRNNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deletePurchase(){
            $array = array(
                "PurchaseID"=>1,
                "GRNNO"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeletePurchase]
            @PurchaseID = ?,
            @GRNNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateGRN(){
            $array = array(
                "PurchsedDate"=>0,
                "DeliverdDate"=>0,
                "SupplierID"=>0,
                "DriverID"=>0,
                "GRNNO"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateGRN]
            @PurchsedDate = ?,
            @DeliverdDate = ?,
            @SupplierID = ?,
            @DriverID = ?,
            @GRNNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateREF(){
            $array = array(
                "SoldDate"=>0,
                "CutomerID"=>0,
                "DriverID"=>0,
                "REFNO"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateREF]
            @SoldDate = ?,
            @CutomerID = ?,
            @DriverID = ?,
            @REFNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateSales(){
            $array = array(
                "PPP"=>0,
                "Quantity"=>0,
                "SalesID"=>1,
                "REFNO"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateSales]
            @PPP = ?,
            @Quantity = ?,
            @SalesID = ?,
            @REFNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteSales(){
            $array = array(
                "SalesID"=>1,
                "REFNO"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteSales]
            @SalesID = ?,
            @REFNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }
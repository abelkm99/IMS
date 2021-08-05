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
        function warehouseToStoreJson(){

            $array = array(
                "Cost"=>1,
                "DriverId"=>0,
                "json"=>1,
                "Date"=>1
            );

            $str_json = file_get_contents('php://input');
            $req = json_decode($str_json);
            
            if($req === null) {
                $resMessage = array("message"=>"invalid json input data");
                http_response_code(400);
                echo json_encode($resMessage);
            }
            else{
                if(key_value_Validator($array,$req)){
                    $Cost = checkNull($req->Cost);
                    $DriverId = checkNull($req->DriverId);
                    $json =checkNull(json_encode($req->json));
                    $date =checkNull($req->Date);
                    $params = array(
                        array(&$Cost,SQLSRV_PARAM_IN),
                        array(&$DriverId,SQLSRV_PARAM_IN),
                        array(&$json,SQLSRV_PARAM_IN),
                        array(&$date,SQLSRV_PARAM_IN),
                    );
                    $sqlcommand = "EXEC	[dbo].[spTrasferItemsWarehouseStore]
                    @Cost = ?,
                    @DriverId = ?,
                    @json = ?,
                    @Date = ?,
                    @result = ?,
                    @message = ?";
                    excute_prodecure_json($params,$sqlcommand);
                }
            }
           
         
            // excute_prodecure($array,$sqlcommand);
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
                "SupplierID"=>1,
                "TransactionID"=>1,
                "DriverID"=>0,
                "PurchaseString"=>1,
            );
            $sqlcommand = "EXEC	[dbo].[spMakePurchase]
            @PurchsedDate = ?,
            @SupplierID = ?,
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
        function deleteGRN(){
            $array = array(
                "GRNNO"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteGRN]
            @GRNNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteREF(){
            $array = array(
                "REFNO"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteREF]
            @REFNO = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function PurchaseFromOrder(){
            $array = array(
                "OrderID"=>1,
                "TransactionID"=>1,
                "DriverId"=>0
            );
            $sqlcommand = "EXEC	[dbo].[spOrderToGRN]
            @OrderID = ?,
            @TransactionID = ?,
            @DriverId = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateMovedData(){
            $array = array(
                "TEID"=>1,
                "ItemID"=>1,
                "newVal"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateMovedData]
            @TEID = ?,
            @ItemID = ?,
            @newVal = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteTransferedItem(){
            $params_in = array(
                "WSID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteTransferedItem]
            @WSID = ?";
            excute_prodecure2($params_in,$sqlcommand);
        }
    }
<?php

class Purchase
{
    function makeSales()
    {
        $array = array(
            "Date" => 1,
            "CustomerID" => 1,
            "TransactionID" => 1,
            "EmployeeID" => 1,
            "DriverID" => 0,
            "SalesInformation" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spMakeSales]
		@Date = ?,
		@CustomerID = ?,
		@TransactionID = ?,
		@EmployeeId = ?,
		@DriverId = ?,
		@SalesInformation = ?,
		@Description = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function warehouseToStoreJson()
    {

        $array = array(
            "Cost" => 1,
            "DriverId" => 0,
            "json" => 1,
            "Date" => 1,
            "Description" => 0
        );

        $str_json = file_get_contents('php://input');
        $req = json_decode($str_json);

        if ($req === null) {
            $resMessage = array("message" => "invalid json input data");
            http_response_code(400);
            echo json_encode($resMessage);
        } else {
            if (key_value_Validator($array, $req)) {
                $Cost = checkNull($req->Cost);
                $DriverId = checkNull($req->DriverId);
                $json = checkNull(json_encode($req->json));
                $date = checkNull($req->Date);
                $Description = checkNull($req->Description);
                $params = array(
                    array(&$Cost, SQLSRV_PARAM_IN),
                    array(&$DriverId, SQLSRV_PARAM_IN),
                    array(&$json, SQLSRV_PARAM_IN),
                    array(&$date, SQLSRV_PARAM_IN),
                    array(&$Description, SQLSRV_PARAM_IN),
                );
                $sqlcommand = "EXEC	[dbo].[spTrasferItemsWarehouseStore]
                @Cost = ?,
                @DriverId = ?,
                @json = ?,
                @Date = ?,
                @Description = ?";
                excute_json_procedure($params, $sqlcommand);
            }
        }
    }
    function shipPurchase()
    {
        $array = array(
            "DeliverdDate" => 1,
            "GRNNO" => 1,
            "ShipmentInfo" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spShipPurchases]
            @DeliverdDate = ?,
            @GRNNO = ?,
            @ShipmentInfo = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function makePurchase()
    {
        $array = array(
            "PurchsedDate" => 1,
            "SupplierID" => 1,
            "TransactionID" => 1,
            "DriverID" => 0,
            "PurchaseString" => 1,
            "Description" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spMakePurchase]
            @PurchsedDate = ?,
            @SupplierID = ?,
            @TransactionID = ?,
            @DriverID = ?,
            @PurchaseString = ?,
            @Description = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updatePurchase()
    {
        $array = array(
            "PPP" => 0,
            "Quantity" => 0,
            "Remainder" => 0,
            "Extra" => 0,
            "PurchaseID" => 1,
            "GRNNO" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdatePurchase]
            @PPP = ?,
            @Quantity = ?,
            @Remainder = ?,
            @Extra = ?,
            @PurchaseID = ?,
            @GRNNO = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deletePurchase()
    {
        $array = array(
            "PurchaseID" => 1,
            "GRNNO" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeletePurchase]
            @PurchaseID = ?,
            @GRNNO = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateGRN()
    {
        $array = array(
            "PurchsedDate" => 0,
            "DeliverdDate" => 0,
            "SupplierID" => 0,
            "DriverID" => 0,
            "GRNNO" => 1,
            "Description" => 0,
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateGRN]
            @PurchsedDate = ?,
            @DeliverdDate = ?,
            @SupplierID = ?,
            @DriverID = ?,
            @GRNNO = ?,
            @Description = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateREF()
    {
        $array = array(
            "SoldDate" => 0,
            "CustomerID" => 0,
            "DriverID" => 0,
            "REFNO" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateREF]
		@SoldDate = ?,
		@CustomerID = ?,
		@DriverID = ?,
		@REFNO = ?,
		@Description = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function updateSales()
    {
        $array = array(
            "PPP" => 0,
            "Quantity" => 0,
            "SalesID" => 1,
            "REFNO" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateSales]
            @PPP = ?,
            @Quantity = ?,
            @SalesID = ?,
            @REFNO = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteSales()
    {
        $array = array(
            "SalesID" => 1,
            "REFNO" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteSales]
            @SalesID = ?,
            @REFNO = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteGRN()
    {
        $array = array(
            "GRNNO" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteGRN]
            @GRNNO = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteREF()
    {
        $array = array(
            "REFNO" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteREF]
            @REFNO = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function PurchaseFromOrder()
    {
        $array = array(
            "OrderID" => 1,
            "TransactionID" => 1,
            "DriverId" => 0,
            "PurchaseDate" => 1,
            "SupplierID" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spOrderToGRN]
		@OrderID = ?,
		@TransactionID = ?,
		@DriverId = ?,
		@PurchaseDate = ?,
		@SupplierID = ?,
		@Description = ?";
        excute_status_code_procedure($array, $sqlcommand);
    }
    function deleteTransferedItem()
    {
        $params_in = array(
            "WSID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteTransferedItem]
            @WSID = ?";
        excute_status_code_procedure($params_in, $sqlcommand);
    }
    function deleteTEID()
    {
        $params_in = array(
            "TEID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteTransferExpence]
            @TEID = ?";
        excute_status_code_procedure($params_in, $sqlcommand);
    }
    function updateTransferCount()
    {
        $sqlcommand = "EXEC	[dbo].[spUpdateTransferedItem]
            @WSID = ?,
            @newtransferdCount = ?";
        $params_in = array(
            "WSID" => 1,
            "newtransferdCount" => 1
        );
        excute_status_code_procedure($params_in, $sqlcommand);
    }
    function updateTEID()
    {
        $sqlcommand = "EXEC	[dbo].[spUpdateTransferExpence]
		@TEID = ?,
		@Date = ?,
		@Cost = ?,
		@DriverID = ?,
		@Description = ?";
        $params_in = array(
            "TEID" => 1,
            "Date" => 0,
            "Cost" => 0,
            "DriverID" => 0,
            "Description" => 0
        );
        excute_status_code_procedure($params_in, $sqlcommand);
    }
}

<?php
class GRNCreditSettlemnt
{
    function ListAllCreditSettlemts()
    {
        $sqlcommand = "SELECT GRN.GRNNO,convert(varchar, PurchsedDate, 20) as PurchsedDate,Supplier.SupplierName,Driver.DriverName,
                [dbo].GetGRNCSRemainder(GRN.GRNNO)as Remainder,
                [dbo].GetGRNPaid(GRN.GRNNO) as Paid,
                [dbo].GetGRNTotal(GRN.GRNNO) as Total
                from GRN 
                LEFT JOIN Supplier ON Supplier.SupplierID = GRN.SupplierID
                LEFT JOIN Driver ON Driver.DriverID = GRN.DriverID
                WHERE GRN.TransactionID = 2
                ORDER BY [PurchsedDate] DESC FOR JSON PATH,INCLUDE_NULL_VALUES";
        excute_select_operation($sqlcommand);
    }
    function ListOneCreditSettlemts($GRNNO)
    {
        $sqlcommand = "SELECT GRN.GRNNO,convert(varchar, PurchsedDate, 20) as PurchasedDate,Supplier.SupplierName,Driver.DriverName,
                [dbo].GetGRNCSRemainder(GRN.GRNNO)as Remainder,
                [dbo].GetGRNPaid(GRN.GRNNO) as Paid,
                [dbo].GetGRNTotal(GRN.GRNNO) as Total
                from GRN 
                LEFT JOIN Supplier ON Supplier.SupplierID = GRN.SupplierID
                LEFT JOIN Driver ON Driver.DriverID = GRN.DriverID
                WHERE GRN.TransactionID = 2 AND GRN.GRNNO = ?
                ORDER BY [PurchasedDate] DESC FOR JSON PATH,INCLUDE_NULL_VALUES,WITHOUT_ARRAY_WRAPPER";
        excute_prepared_statements(array($GRNNO), $sqlcommand);
    }
    function GetCreditSettlment($GRNNO)
    {
        $sqlcommand = "SELECT * from GRNCreditSettlement
                WHERE GRNNO = ?
                ORDER BY [Date] DESC
                for json auto,include_null_values";
        $array = array($GRNNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function addCreditSettlemt()
    {
        $array = array(
            "GRNNO" => 1,
            "Payment" => 1,
            "Date" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spAddGRNCS]
		@GRNNO = ?,
		@Payment = ?,
		@Date = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteCreditSettlment()
    {
        $array = array(
            "GRNNO" => 1,
            "CSID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteGRNCS]
                @GRNNO = ?,
                @CSID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateCreditSettlment()
    {
        $array = array(
            "GRNNO" => 1,
            "Payment" => 1,
            "CSID" => 1,
            "Date" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateGRNCS]
		@GRNNO = ?,
		@Payment = ?,
		@CSID = ?,
		@Date = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}
class REFCreditSettlemnt
{
    function ListAllCreditSettlemts()
    {
        $sqlcommand = "SELECT Reference.REFNO,convert(varchar, [Date], 20) as SalesDate,Customer.CustomerName,Driver.DriverName,
        [dbo].GetREFCSRemainder(Reference.REFNO)as Remainder,
        [dbo].GetREFPaid(Reference.REFNO) as Paid,
        [dbo].GetREFTotal(Reference.REFNO) as Total
        from Reference 
        LEFT JOIN Customer ON Customer.CustomerID= Reference.CutomerID
        LEFT JOIN Driver ON Driver.DriverID = Reference.DriverID
        WHERE Reference.TransactionID = 2
        ORDER BY [SalesDate] DESC FOR JSON PATH,INCLUDE_NULL_VALUES";
        excute_select_operation($sqlcommand);
    }
    function ListOneCreditSettlemts($REFNO)
    {
        $sqlcommand = "SELECT Reference.REFNO,convert(varchar, [Date], 20) as SalesDate,Customer.CustomerName,Driver.DriverName,
        [dbo].GetREFCSRemainder(Reference.REFNO)as Remainder,
        [dbo].GetGRNPaid(Reference.REFNO) as Paid,
        [dbo].GetGRNTotal(Reference.REFNO) as Total
        from Reference 
        LEFT JOIN Customer ON Customer.CustomerID= Reference.CutomerID
        LEFT JOIN Driver ON Driver.DriverID = Reference.DriverID
        WHERE Reference.TransactionID = 2 AND Reference.REFNO = ?
        ORDER BY [SalesDate] DESC FOR JSON PATH,INCLUDE_NULL_VALUES,WITHOUT_ARRAY_WRAPPER";
        excute_prepared_statements(array($REFNO), $sqlcommand);
    }
    function GetCreditSettlment($REFNO)
    {
        $sqlcommand = "SELECT * from REFCreditSettlement
        WHERE REFNO = ?
        ORDER BY [Date] DESC
        for json auto,include_null_values";
        $array = array($REFNO);
        excute_prepared_statements($array, $sqlcommand);
    }
    function addCreditSettlemt()
    {
        $array = array(
            "REFNO" => 1,
            "Payment" => 1,
            "Date" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spAddREFCS]
		@REFNO = ?,
		@Payment = ?,
		@Date = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function deleteCreditSettlment()
    {
        $array = array(
            "REFNO" => 1,
            "CSID" => 1
        );
        $sqlcommand = "EXEC	[dbo].[spDeleteREFCS]
		@REFNO = ?,
		@CSID = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
    function updateCreditSettlment()
    {
        $array = array(
            "REFNO" => 1,
            "Payment" => 1,
            "CSID" => 1,
            "Date" => 1,
            "Description" => 0
        );
        $sqlcommand = "EXEC	[dbo].[spUpdateREFCS]
		@REFNO = ?,
		@Payment = ?,
		@CSID = ?,
		@Date = ?,
		@Description = ?";
        excute_prodecure_status_code($array, $sqlcommand);
    }
}

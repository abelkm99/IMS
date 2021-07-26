<?php
    class GRNCreditSettlemnt{
            function ListAllCreditSettlemts(){
                $sqlcommand = "select GRN.GRNNO,PurchsedDate,SupplierID,[dbo].GetGRNCSRemainder(GRN.GRNNO)as remainder
                from GRN  where TransactionID = 2
                for json auto";
                excute_select_operation($sqlcommand);
            }
            function GetCreditSettlment($GRNNO){
                $sqlcommand = "select CSID,GRN.GRNNO,Payment,SupplierID 
                from GRNCreditSettlement inner join GRN 
                on GRN.GRNNO = GRNCreditSettlement.GRNNO 
                and GRN.TransactionID = 2
                WHERE GRN.GRNNO = ?
                order by GRN.GRNNO
                for json auto";
                $array = array($GRNNO);
                excute_prepared_statements($array,$sqlcommand);
            }
            function addCreditSettlemt(){
                $array = array(
                    "GRNNO"=>1,
                    "Payment"=>1
                );
                $sqlcommand = "EXEC	[dbo].[spAddGRNCS]
                @GRNNO = ?,
                @Payment = ?,
                @result = ?,
                @message = ?";
                excute_prodecure($array,$sqlcommand);
            }
            function deleteCreditSettlment(){
                $array = array(
                    "GRNNO"=>1,
                    "CSID"=>1
                );
                $sqlcommand = "EXEC	[dbo].[spDeleteGRNCS]
                @GRNNO = ?,
                @CSID = ?,
                @result = ?,
                @message = ?";
                excute_prodecure($array,$sqlcommand);
            }
            function updateCreditSettlment(){
                $array = array(
                    "GRNNO"=>1,
                    "Payment"=>1,
                    "CSID"=>1
                );
                $sqlcommand = "EXEC	[dbo].[spUpdateGRNCS]
                @GRNNO = ?,
                @Payment = ?,
                @CSID = ?,
                @result = ?,
                @message = ?";
                excute_prodecure($array,$sqlcommand);
            }
            
    }
    class REFCreditSettlemnt{
        function ListAllCreditSettlemts(){
            $sqlcommand = "select REFNO,Date,CutomerID,
            [dbo].[GetREFCSRemainder](REFNO) as Remainder,
            [dbo].[GetREFPaid](REFNO) as Paid,
            [dbo].[GetREFTotal](REFNO) as Total
            from Reference WHERE TransactionID =2
            for json auto";
            excute_select_operation($sqlcommand);
        }
        function GetCreditSettlment($REFNO){
            $sqlcommand = "select * FROM REFCreditSettlement inner join Reference
            on REFCreditSettlement.REFNO = Reference.REFNO
            and Reference.TransactionID = 2
            WHERE Reference.REFNO = ?
            ORDER BY Reference.REFNO
            for json auto";
            $array = array($REFNO);
            excute_prepared_statements($array,$sqlcommand);
        }
        function addCreditSettlemt(){
            $array = array(
                "REFNO"=>1,
                "Payment"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spAddREFCS]
            @REFNO = ?,
            @Payment = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function deleteCreditSettlment(){
            $array = array(
                "REFNO"=>1,
                "CSID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spDeleteREFCS]
            @REFNO = ?,
            @CSID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
        function updateCreditSettlment(){
            $array = array(
                "REFNO"=>1,
                "Payment"=>1,
                "CSID"=>1
            );
            $sqlcommand = "EXEC	[dbo].[spUpdateREFCS]
            @REFNO = ?,
            @Payment = ?,
            @CSID = ?,
            @result = ?,
            @message = ?";
            excute_prodecure($array,$sqlcommand);
        }
    }
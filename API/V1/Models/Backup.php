<?php
class Backup
{

    function getBackups()
    {
        $params = array(
            "PageNumber" => 1,
            "D1" => 0,
            "D2" => 0,
            "order" => 1,
            "RPP" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[spGetALLBackups]
		@PageNumber = ?,
		@D1 = ?,
		@D2 = ?,
		@order = ?,
		@RPP = ?";
        excute_status_code_procedure($params, $sqlcommand, true);
    }
    function BackupData()
    {
        $sqlcommand = "EXEC [dbo].[sp_NewBackup]";
        excute_prodecure($sqlcommand);
    }
    function BackupExit()
    {
        $sqlcommand = "EXEC [dbo].[sp_backUpOnExit]";
        excute_prodecure($sqlcommand);
    }
    function RestoreBackup()
    {
        $array = array(
            "ID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[sp_restoreBackup]
		@ID = ?";
        excute_status_code_procedure($array, $sqlcommand, true);
    }
    function DeleteBackup()
    {
        $params = array(
            "ID" => 1,
        );
        $sqlcommand = "EXEC	[dbo].[sp_DeleteBackup]
		@ID = ?";
        excute_status_code_procedure($params, $sqlcommand, true);
    }
}

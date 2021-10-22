declare @response table(success bit,[message] varchar(max),status_code int)


insert into @response(success,[message],status_code)
values(1,'Item Added Succedully',200)
select * from @response for json auto,without_array_wrapper


insert into @response(success,[message],status_code)
values(0,'BankAccount ID Doesn''t exist',404)
rollback transaction DeleteSupplierBankAccount
select * from @response for json auto,without_array_wrapper


insert into @response(success,[message],status_code)
values(0,ERROR_MESSAGE(),400)
rollback transaction DeleteSupplierBankAccount
select * from @response for json auto,without_array_wrapper

-E -S localhost -b ^
-Q "use master go"

""
"EXEC [dbo].[sp_restoreBackup] @ID = 4"
"EXEC [dbo].[sp_backUpOnExit]"

"RESTORE DATABASE [IMSQuasar] FROM  DISK = N'C:\Program Files\Microsoft SQL Server\MSSQL15.MSSQLSERVER\MSSQL\Backup\IMSQuasar2021-10-21 15-33-11.bak' WITH  FILE = 1,  NOUNLOAD,  STATS = 5"
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
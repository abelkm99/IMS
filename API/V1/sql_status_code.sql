declare @response table(success bit,[message] varchar(max),status_code int)

insert into @response(success,[message],status_code)
values(1,'Item Added Succedully',200)
select * from @response for json auto,without_array_wrapper
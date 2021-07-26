    suggestion
------------------
[] driver plate
[x] make sure not item duplication on one Purchase Table
    with the same GRNNO
[ ] make sure no item duplication during make sales

[] move to store ware house new unloading expence and loadin expence 
    

-------------------------
    select operations
-------------------------
[x] Employee
[x] CustomerBankAccount
[x] supplierBankAccount
[ ] get transactions type (credit or chash)
[x] get credit settlement information


-----------------------------
    insert Operation
-----------------------------
[x] insert Employee
[x] insert CustomerBankAccount
[x] inser SupplierBankAccount
[x] add credit settlement GRN
[x] add credit settlemetn ref
 
------------------------------
    update operations
------------------------------
[x] BankAccount
    [x] supplier
    [x] cusomter
[x] Supplier->information
[x] Customer->information
[x] Driver->information
[x] Employee
    [x] employee username password(ask privious username and password)

    [x] employee name,phonenumber,address
    [x] activate employee
    [x] deactivate employee
[x] item->information
    [x] update item price
    [x] update all item information
[x] item->Category
[] Order->date
[] admin->information (validate using old username and password)
[] GRN Table
    Rules
        [] can't update Delivered Date
        [] update Supplier ID *validation
        [] update Driver Id *validation
        [] update transaction type for GRN
            [] update information also on the credit settlment table
[] update Purchase
    [] PPP
    [] quantity
    [] total
    [] remainder and extra
        [] update directly on the warehouse table if it is not delivered passible
        [] check if already delivered check condition and add update
    
----------------------------
        queries
----------------------------
[ ]  
[ ]

------------------------------
    delete operation
------------------------------
[x] customer bankaccount
[x] supplier bankaccount
[] delete GRN
    [ ] if not delivered grn
    [ ] 

--------------------
    database design
--------------------
[] sales credit settlement
[] purchases credit settlement
[]  


RULES
----------
sales ppp < item ppp [] 


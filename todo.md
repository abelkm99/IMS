    suggestion
------------------
[x] driver plate
[x] make sure not item duplication on one Purchase Table
    with the same GRNNO
[x] make sure no item duplication during make sales
        |
        |__==> do it for order items table too

[x] use salesID and Purchase ID for tbales store-sales and purchase-warehouse

[] move to store ware house new unloading expence and loadin expence ask ebtisam
[] ask ebtisam about the order types
    

-------------------------
    select operations
-------------------------
[x] Employee
[x] CustomerBankAccount
[x] supplierBankAccount
[x] get transactions type (credit or chash)
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

[x] Order-> basic info
[x] order->list individual

[] admin->information(validate using old username and password)

[x] GRN Table
    Rules
        [x] can't update Delivered Date if it is not delivered
        [x] update Supplier ID *validation
        [x] update Driver Id *validation

[x] update Purchase
    [x] PPP
    [x] quantity and
    [x] remainder and extra
        [x] update directly on the Purchase table first if it is not delivered passible
        [x] check if already delivered check condition and add update
[x] Reference table
[x] sales table


----------------------------
        queries
----------------------------
[x] get all grns and there sub information
[x] get all reference and there references
[] get all orders and thre order lists

------------------------------
    delete operation
------------------------------
[x] customer bankaccount
[x] supplier bankaccount

[ ] delete GRN
    [ ] if not delivered grn
    [ ] if any condition mate
[ ] delet Reference

[x] delte Purchase

[x] delete individual from sales

[x] delete Order
[x] delete individual orderlist
--------------------
    database design
--------------------
[x] sales credit settlement
[x] purchases credit settlement

RULES
----------
sales ppp < item ppp [] 


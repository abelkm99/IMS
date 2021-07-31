    suggestion
------------------
[x] driver plate
[x] make sure not item duplication on one Purchase Table
    with the same GRNNO
[x] make sure no item duplication during make sales
        |
        |__==>[x] do it for order items table too
[x] add all the necessary constraints
[x] use salesID and Purchase ID for tbales store-sales and purchase-warehouse
[x] move to store ware house new unloading expence and loadin expence ask ebtisam
    [x] create Transfer-Expence table for
    [x] multiple item transfer check 
[x] ask ebtisam about the order types
    [x] make order for purchase and slaes
[x] add feature to ORDERS to GRN and REFERENCE

[x] add new column ordertype inside orders tabel
[x] delete also the infromation from the credit settlement

[] remove identity cache for grn
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
[x] get all orders and thre order lists

------------------------------
    delete operation
------------------------------
[x] customer bankaccount
[x] supplier bankaccount

[x] delete GRN
    [x] if not delivered grn
    [x] if any condition mate
[x] delete Reference

[x] delte Purchase

[x] delete individual from sales

[x] delete Order
[x] delete individual orderlist
--------------------
    database design
--------------------
[x] sales credit settlement
[x] purchases credit settlement

[x] do the autentication

RULES
----------
sales ppp < item ppp [] 


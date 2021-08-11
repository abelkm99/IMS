    suggestion
------------------
[ ] do all primary keys and constraints 
[ ] paginations
[   ] change loading expences and unloading expences togeather  for only one GRN
[x] redesign the DrawIO

[x] driver plate
[x] make sure not item duplication on one Purchase Table
    with the same GRNNO
[x] make sure no item duplication during make sales
        |
        |======>[x] do it for order items table too
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
[] update Date and cost fro transfer items

[] remove identity cache from the entire table
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

[] update individual transfer
[] update transferexpence

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

[x] delete PersonalBankAccount
    [x]check if the bankNumber have transaction
[x] delete BankTransaction

[x] delete Supplier BankAccount
[x] delete Supplier
    [x] no need to check just delete all the information

[x] Delete GRN
    [x] check if ALL GRN_Credit_Settlements
    [x] check if it is on creadited 
    [x] check if it is delivered
    [x] delete if it is possible to sub from every items 
    [x] check it is has UNLOAD Expence and make sure to delte the unloading Expence first
    [x] check if Purchase-wareHouse
    [x] delete all items that are added at from Purchase WareHouse

[x] Delete GRN_Credit_Settlements
[] ask assya for more information
    [x] Delete Loading Expence 
    [x] Delete Load/Unloading Expence
    

[] Delete Item
    [] check if it is on purchase tables
    [] check if it is on sales table
    [] check it it is on Ordered Items LIST just delete from (then delete from all)
    [] delete from Purchase-warehouse
    [] delete from warehouse
    [] delete from warehouse-store (on transfer should be deleted first)
    [] delete from store
    [] delete from store-sales
    
[x] Delte WareHouseTostore ( one item from the table)
    [x] check if there are enought items there at the store

[] Delete Transfer
    [] check if all the item Count are valid

[x] delete ItemCategory
    [x] delete if there is no item listed for the item category 

[x] update Category ID
    [x] update Item Category

[x] Delete DRIVER ID
    [x] check if is is on GRN
    [x] check if it is on Reference
[] can't delte or update from
    [] 
    [] warehouse -- it will be deleted when the item id deleted
    [] purchase-wareHouse -- deletes when deleted from purchase
    [] store -- it will be deleted when the item id deleted
    [] store-sales -- it will be deleted when deleted from sales 

[x] delete Employee
    [x] check if it not on Reference table
    [x] check it it is on SallaryExpence table
[x] delete Sallary_EXpence

[x] Delete Reference
    [x] delete from store-sales table
    [x] check is it has masatefiya
    [x] check if it is on loading-expence
    [x] check it it on REFCreditSettlment

[x]  Delete RefCreDITSettlment

[x] Delete Sales
    [x] check if is possible to delete from sales
[x] delete Masatefiya

[x] delte Order
    [x] just delte both order and OrderItems
[x] delete OrderItem
[x] delete CustomerBankAccount
[x] delete Customer
    [x] check if it has reference and order record
    [x] if not delete all bankaccounts of the customer
[x] delete Other Expence Type
    [x] check if contain a list
[x] delete Other Expence List
[x] delete PersonalExpence Type
    [x] check if it contain a list
[x] delete PersonalExpence List

[x] delete BillTypes
    [x] check if contains a list
[x] delete BillExpenceList
[x] delete PersonalBankAccount
    [x] check it contains a transaction
[x] delete BankTransaction

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
sales ppp < item ppp [x] -- they can add whatever they want to add 


IMS FINAL ANALYSIS
-----------------------
types of inventory--> So you know what type of inventory is where and can have full visibility over it
forecasting--> to predit how much stock is neede to satisfy demand over an upcoming time period
purchasinh--> So you know when and how to create purchase orders to re-order new stock
storage--> to know how many items are located on the location
analysis--> use metrices to make more informed decisions about your inventory as time goes on
Tracking--> So you have visibility on where exactly your inventory is as well as additions (purchases) and subtractions (sales), to give as close to a live stock figure as possible.
accounting-->So you can properly record your inventory on financial documents.

## importance of using IMS
---------------
CUSTOMER EXPERIANCE
IMPROVING CASH FLOW
AVOIDING SHRINKAGE

# KEY TERMS
Cost of goods sold (COGS). Direct costs of purchasing and/or producing any goods sold, including everything that went into it – materials, labor, tools used, etc. Does NOT include indirect costs – like distribution, advertising, sales force costs, etc.

Beginning Inventory (BI). The value of any unsold, on-hand inventory at the start of an accounting period.
Ending Inventory (EI). The value of any unsold, on-hand inventory at the end of an accounting period.
(Inventory valuation). The process of giving unsold inventory a monetary value in order to show as a company asset in financial records
(Average inventory cost). An inventory valuation method that bases its figure on the average cost of items throughout an accounting period.
(Average inventory). The average inventory on-hand over a given time period, calculated by adding Ending Inventory (EI) to Beginning Inventory (BI) and dividing by two.

(Dead stock). Inventory that remains unsold for a long enough period of time for it to be deemed outdated and virtually unsellable.
(alarming small number of inventory item).
(alarming small number items from warehouse).

# key inventory managment formulas

1 Inventory turnover
    * Inventory turnover measures the number of times a company has sold and replaced inventory over a given time period:
    
    * This gives an insight into the overall efficiency of a company and its inventory management processes. The higher the inventory turnover rate, the more efficient a business is at getting through its inventory.

    Inventory turnover  = cost of goods sold / average inventorys

2 sell through rate 
    * Sell through rate takes the amount of inventory a retailer receives, and compares it against what is actually sold over a given period. It’s usually expressed as a percentage

    * This helps analyze if your investment in a particular product is working out well. Low sell through rates indicate you either overbought or priced too high, while high sell through rates indicate you may have under bought or priced too low.

    sell through rate = (no of sales/stock on-hand) * 100
3 Days of inventory outstanding (DIO) 
    Days of inventory outstanding (DIO) measures the typical number of days it takes for inventory to turn into sales.
    Days of inventory outstanding (DIO) = (average inventory cost/cost of goods sold) X 365
4  Safety stock
     Safety stock = max daily sales volume - average saily sales volume

5  Reorder point
    The reorder point helps determine when to order new inventory. It is a specific point in time
    that acts as a trigger to re-order as soon as stock has diminished to that certain level.
    Reorder point = avarage daily sales volume + saftey stock
6

## inventory analysis
    [] average inventory
        formula beggining enventory + ending enventory /2 
        select * from GRN as g,Purchase as p where Delivered = 1 and p.ItemID = 11 and year(PurchsedDate)>= 1999
        select * item
        get all 
    [] inventory turnover = cost of goods sold/average inventory
    
# new todos
[x] description for payment
[] report
[] add the transaction on the stock as GROSS
[x] other incomes -> add it to the bank accounts 
[] export to excel from table vue js example(https://codepen.io/bellakm/pen/XWROMVq)
[] make all tables printable
[] loading and unloading expences are togeather

[] add both ethiopian date and gregorian at the top of dashboard

[] pop up all the responses

[] ship to store
    [] change ship to warehouse to ship to store
    [] rename ship warehouse compnent to ship to store
    [] make the constants fields at the top and the variabls at the bottom
    [] varify after items are transfered from ship warehouse
    [] ware the hack is moved items count and details about moved items
    [] you can't transfer empty items

[] sales
    [] sales history is not visible
    [] searching and filtering is not valid
    [] sort by date and the new one at the top
    [] suppliers options is not working
    [] show item code or type to make the list more clearer
    [] change items list to sales list 
    [] employee is not visible
    [] driver is not visible the problem update driver is because it is sending varchar instead of  int of driver_id()
    [] add total column at sales table
    [] change item Types to Item Lists
    [] arrange the add sales

[]  Orders
    [] add order
        [] arrange the formation
        [] make sure print is working
        [] order types
    [] orders
        [] view all ordered items on each order
        [] update orders
        [] filter mechanism
        [] return orders sorted by date in desc
        [] transfer orders from GRN TO Purchase and also to Sales

[] credit settlements
    [] if not items are listed from reference
        [] delete the hole reference
    [] purchase credits
        [] find a way  paid and date 
        [] update operation is not working for GRN CS
        []  
    [] sales credits
        [] same here update is also not working
    []
[] add desciption for my bank account transaction
[] make loading and unloading expence togeather
[] new table rent with types shop and warehouse
[] is masatefiya as gebi weys wechi new
[] other expence lists have to be togeather
[] inventory should give all necessary infromation on how much items are on warehouse and store
[] stock have to contain on the prices
[] admins should see all the purchase infromation

[] delete transfer expence
[] calculate net gain


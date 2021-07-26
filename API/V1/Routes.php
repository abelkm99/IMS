    <?php
    
    require "../vendor/autoload.php";
    require "Models/Supplier.php";
    require "Models/Customer.php";
    require "Models/Category.php";
    require "Models/DatabaseOperation.php";
    require "Models/utils.php";
    require "Models/Item.php";
    require "Models/Purchase.php";
    require "Models/Driver.php";
    require "Models/Order.php";
    require "Models/Expences.php";
    require "Models/Employee.php";
    require "Models/CreditSettlement.php";
    
    $dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

        $r->addGroup('/ims/api/v1',function (FastRoute\RouteCollector $r){
            $r->addGroup('/supplier', function (FastRoute\RouteCollector $r) {
                $r->get('/listSuppliers', 'Supplier/ListAllSuppliers');
                $r->get('/listSupplier/{Suppliername}','supplier/getSupplierInformation');
                $r->post('/addSupplier','supplier/addSupplier');
                $r->put('/updateSupplier','supplier/updateSupplier');
                $r->get('/list_supplier_bankaccount/{SupplierID:\d+}','supplier/getSupplierBankAccount');
                $r->post('/add_supplier_bankaccount','supplier/addSupplierBankAccount');
                $r->put('/update_supplier_bankaccount','supplier/updateSupplierBankAccount');
                $r->delete('/delete_supplier_bankaccount/{BankAcountId:\d+}','supplier/delteSupplierBankAccount');
            });

            $r->addGroup('/driver', function (FastRoute\RouteCollector $r) {
                $r->get('/list_drivers', 'Driver/ListAllDrivers');
                $r->get('/list_driver/{Drivername}','Driver/getDriverInformation');
                $r->post('/add_driver','Driver/addDriver');
                $r->put('/update_driver','Driver/updateDriver');
            });

            $r->addGroup('/employee', function (FastRoute\RouteCollector $r) {
                $r->get('/list_employees', 'Employee/ListAllEmployees');
                $r->get('/list_employee_info/{EmployeeId:\d+}','Employee/getEmployeeInfromation');
                $r->post('/add_employee','Employee/addEmployee');
                $r->put('/update_employee','Employee/updateEmployee');
                $r->put('/update_employee_auth','Employee/updateEmployeeAuthentication');
                $r->post('/activate_employee','Employee/activateEmployee');
                $r->post('/deactivate_employee','Employee/deactivateEmployee');
                $r->delete('/delete_employee/{EmployeeId:\d+}','Employee/deleteEmployee');
            });
            $r->addGroup('/customer', function (FastRoute\RouteCollector $r) {
                $r->get('/list_customers', 'Customer/ListAllCustomers');
                $r->get('/list_customer/{CustomerName}','Customer/getCustomerInformation');
                $r->post('/add_customer','Customer/addCustomer');
                $r->put('/update_customer','Customer/updateCustomer');
                $r->get('/list_customer_bankaccount/{CustomerId:\d+}','Customer/getCustomerBankAccount');
                $r->post('/add_customer_bankaccount','Customer/addCustomerBankAccount');
                $r->put('/update_customer_bankaccount','Customer/updateCustomerBankAccount');
                $r->delete('/delete_customer_bankaccount/{BankAcountId:\d+}','Customer/deleteCustomerBankAccount');

            });
            $r->addGroup('/category', function (FastRoute\RouteCollector $r) {
                $r->get('/getcategories', 'Category/getAllCategories');
                $r->post('/addcategory','Category/addCategory');
                $r->put('/update_category','Category/updateCategory');

            });
            $r->addGroup('/item', function (FastRoute\RouteCollector $r) {
                $r->get('/get_items', 'Item/getAllItems');
                $r->post('/add_new_item','Item/addNewItem');
                $r->put('/update_item','Item/updateItem');
                $r->put('/update_item_price','Item/updateItemPrice');
            });
            $r->addGroup('/purchase', function (FastRoute\RouteCollector $r) {
                $r->post('/make_purchase', 'Purchase/makePurchase');
                $r->get('/get_purchase_list','Purchase/GetAllPurchases');
                $r->get('/get_purchase/{id:\d+}','Purchase/GetAllPurchases'); // not done
                $r->delete('/delete_purchase','Purchase/deletePurchase'); //not done
                $r->post('/ship_purchase','Purchase/shipPurchase');
                $r->post('/move_to_store','Purchase/movetostore');
                $r->post('/make_sales','Purchase/makeSales');
            });
            $r->addGroup('/order', function (FastRoute\RouteCollector $r) {
                $r->get('/list_orders', 'Order/ListAllOrders');
                $r->get('/list_order/{orderId:\d+}','Order/getOrder');
                $r->post('/make_order','Order/makeNewOrder');
                $r->delete('/delete_order/{orderId:\d+}','Order/deleteOrder');
            });
            $r->addGroup('/expence',function(FastRoute\RouteCollector $r){
                $r->addGroup('/unloadingExpence',function(FastRoute\RouteCollector $r){
                    $r->get('/get_unloading_expence','LoadUnLoadExpences/getUnloadingExpences');
                    $r->post('/add_unloading_expence','LoadUnLoadExpences/addUnloadingExpence');
                    $r->delete('/delete_unloading_expence/{UnloadId:\d+}','LoadUnLoadExpences/deleteUnloadingExpence');
                    $r->put('/update_unloading_expence','LoadUnLoadExpences/updateUnloadingExpence');
                });
                $r->addGroup('/loadingExpence',function(FastRoute\RouteCollector $r){
                    $r->get('/get_loading_expence','LoadUnLoadExpences/getloadingExpences');
                    $r->post('/add_loading_expence','LoadUnLoadExpences/addloadingExpence');
                    $r->delete('/delete_loading_expence/{loadId:\d+}','LoadUnLoadExpences/deleteloadingExpence');
                    $r->put('/update_loading_expence','LoadUnLoadExpences/updateloadingExpence');
                });
                $r->addGroup('/masatefiya',function(FastRoute\RouteCollector $r){
                    $r->get('/get_masatefiya_expense','Masatefiya/getMasatefiyaExpence');
                    $r->post('/add_masatefiya_expence','Masatefiya/addMasatefiyaExpence');
                    $r->delete('/delete_masatefiya_expence/{MID:\d+}','Masatefiya/deleteMasatefiyaExpence');
                    $r->put('/update_masatefiya_expence','Masatefiya/updateMasatefiyaExpence');
                });
                $r->addGroup('/salary',function(FastRoute\RouteCollector $r){
                    $r->get('/get_salary_expense','Salary/getSalaryExpence');
                    $r->post('/add_salary_expence','Salary/addSalaryExpence');
                    $r->delete('/delete_salary_expence/{SalaryId:\d+}','Salary/deleteSalaryExpence');
                    $r->put('/update_salary_expence','Salary/updateSalaryExpence');
                });
                $r->addGroup('/OET',function(FastRoute\RouteCollector $r){
                    $r->get('/get_OET','OET/getOET');
                    $r->post('/add_OET','OET/addOET');
                    $r->delete('/delete_OET/{OEID:\d+}','OET/deleteOET');
                    $r->put('/update_OET','OET/updateOET');
                });
                $r->addGroup('/PET',function(FastRoute\RouteCollector $r){
                    $r->get('/get_PET','PET/getPET');
                    $r->post('/add_PET','PET/addPET');
                    $r->delete('/delete_PET/{PEID:\d+}','PET/deletePET');
                    $r->put('/update_PET','PET/updatePET');
                });
                $r->addGroup('/BT',function(FastRoute\RouteCollector $r){
                    $r->get('/get_BT','BT/getBT');
                    $r->post('/add_BT','BT/addBT');
                    $r->delete('/delete_BT/{BID:\d+}','BT/deleteBT');
                    $r->put('/update_BT','BT/updateBT');
                });
                $r->addGroup('/OEL',function(FastRoute\RouteCollector $r){
                    $r->get('/get_OEL','OEL/getOEL');
                    $r->post('/add_OEL','OEL/addOEL');
                    $r->delete('/delete_OEL/{OExpencesID:\d+}','OEL/deleteOEL');
                    $r->put('/update_OEL','OEL/updateOEL');
                });
                $r->addGroup('/PEL',function(FastRoute\RouteCollector $r){
                    $r->get('/get_PEL','PEL/getPEL');
                    $r->post('/add_PEL','PEL/addPEL');
                    $r->delete('/delete_PEL/{PExpencesID:\d+}','PEL/deletePEL');
                    $r->put('/update_PEL','PEL/updatePEL');
                });
                $r->addGroup('/BL',function(FastRoute\RouteCollector $r){
                    $r->get('/get_BL','BL/getBL');
                    $r->post('/add_BL','BL/addBL'); 
                    $r->delete('/delete_BL/{BILLEXPENCEID:\d+}','BL/deleteBL');
                    $r->put('/update_BL','BL/updateBL');
                });

            });

            $r->addGroup('/creaditSettlemnt', function (FastRoute\RouteCollector $r) {
                $r->addGroup('/GRN',function(FastRoute\RouteCollector $r){
                    $r->get('/list_all_credit_settlements', 'GRNCreditSettlemnt/ListAllCreditSettlemts');
                    $r->get('/list_credit_settlement/{CSID:\d+}','GRNCreditSettlemnt/GetCreditSettlment');
                    $r->post('/add_credit_settlemnts','GRNCreditSettlemnt/addCreditSettlemt');
                    $r->delete('/delete_credit_settlemnts','GRNCreditSettlemnt/deleteCreditSettlment');
                    $r->put('/update_credit_settlemt','GRNCreditSettlemnt/updateCreditSettlment');
                });
                $r->addGroup('/REF',function(FastRoute\RouteCollector $r){
                    $r->get('/list_all_credit_settlements', 'REFCreditSettlemnt/ListAllCreditSettlemts');
                    $r->get('/list_credit_settlement/{CSID:\d+}','REFCreditSettlemnt/GetCreditSettlment');
                    $r->post('/add_credit_settlemnts','REFCreditSettlemnt/addCreditSettlemt');
                    $r->delete('/delete_credit_settlemnts','REFCreditSettlemnt/deleteCreditSettlment');
                    $r->put('/update_credit_settlemt','REFCreditSettlemnt/updateCreditSettlment');
                });
            });
            
        });

    });

    // Fetch method and URI from somewhere
    $httpMethod = $_SERVER['REQUEST_METHOD'];
    $uri = $_SERVER['REQUEST_URI'];




    // Strip query string (?foo=bar) and decode URI
    if (false !== $pos = strpos($uri, '?')) {
        $uri = substr($uri, 0, $pos);
    }
    $uri = rawurldecode($uri);

    $routeInfo = $dispatcher->dispatch($httpMethod, $uri);
    switch ($routeInfo[0]) {
        case FastRoute\Dispatcher::NOT_FOUND:
            // ... 404 Not Found
            echo "<h1> 404 Invalid URL</h1>";
            break;
        case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
            $allowedMethods = $routeInfo[1];
            // ... 405 Method Not Allowed
            echo "<h1> 405 METHOD NOT ALLOWED</h1>";
            break;
        case FastRoute\Dispatcher::FOUND:
            $handler = $routeInfo[1];
            $vars    = $routeInfo[2];
            if (is_object($handler) || (is_string($handler) && strpos($handler, '/') === false)) {
                if (count($vars) > 0) {
                    call_user_func_array($handler, $vars);
                } else {
                    call_user_func_array($handler, array());
                }
            } else if (is_string($handler) && strpos($handler, '/') !== false) {
                list($class, $method) = explode('/', $handler, 2);
                if (class_exists($class) && method_exists($class, $method)) {
                    call_user_func_array(array(new $class(), $method), $vars);
                }
            }
            break;
    }
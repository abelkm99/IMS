<?php

header('Content-type: application/json');
class Section
{
    public const PROTECTED = array('Admin', 'Employee');
}



function cors()
{

    // Allow from any origin
    if (isset($_SERVER['HTTP_ORIGIN'])) {
        // Decide if the origin in $_SERVER['HTTP_ORIGIN'] is one
        // you want to allow, and if so:
        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
        header('Access-Control-Allow-Credentials: true');
        header('Access-Control-Max-Age: 86400');    // cache for 1 day
    }

    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            // may also be using PUT, PATCH, HEAD etc
            header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

        exit(0);
    }
}

cors();

require "packages.php";

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

    $r->addGroup('/quasar_api/api/v1', function (FastRoute\RouteCollector $r) {

        $r->post('/login', 'Auth/Login');

        $r->get('/get_transaction_type', ['BasicApi/getTransactionType', Section::PROTECTED]);
        $r->get('/get_item_stock/{ItemID:\d+}', ['BasicApi/getItemStock', Section::PROTECTED]);
        $r->get('/get_grn/{GRNNO:\d+}', ['BasicApi/getGRN', Section::PROTECTED]);
        $r->get('/get_ref/{REFNO:\d+}', ['BasicApi/getREF', Section::PROTECTED]);
        $r->get('/get_order/{OrderID:\d+}', ['BasicApi/getOrder,Section::PROTECTED']);
        $r->get('/get_grns', ['BasicApi/getALLGRN', Section::PROTECTED]);
        $r->get('/get_refs', ['BasicApi/getAllReferences', Section::PROTECTED]);
        $r->get('/get_purchase_orders', ['BasicApi/getAllPurchaseOrders', Section::PROTECTED]);
        $r->get('/get_sales_orders', ['BasicApi/getAllSalesOrders', Section::PROTECTED]);
        $r->get('/grn_not_delivered', ['BasicApi/getAllGRNSNOTDelivered', Section::PROTECTED]);
        $r->get('/transfered_Items_List', ['BasicApi/getAllTransferedInfo', Section::PROTECTED]);
        $r->get('/get_all_inventory', ['BasicApi/getAllItemInventory', Section::PROTECTED]);

        $r->addGroup('/report', function (FastRoute\RouteCollector $r) {
            $r->post('/get_all_report', ['Report/get_overal_report', Section::PROTECTED]);
            $r->post('/get_all_report_tiny', ['Report/get_overal_report_tiny', Section::PROTECTED]);
            $r->post('/get_report_interval', ['Report/get_report_interval', Section::PROTECTED]);
        });

        $r->addGroup('/supplier', function (FastRoute\RouteCollector $r) {
            $r->get('/listSuppliers', ['Supplier/ListAllSuppliers', Section::PROTECTED]);
            $r->get('/listSupplier/{Suppliername}', ['supplier/getSupplierInformation', Section::PROTECTED]);
            $r->post('/addSupplier', ['supplier/addSupplier', Section::PROTECTED]);
            $r->put('/updateSupplier', ['supplier/updateSupplier', Section::PROTECTED]);
            $r->get('/list_supplier_bankaccount/{SupplierID:\d+}', ['supplier/getSupplierBankAccount', Section::PROTECTED]);
            $r->post('/add_supplier_bankaccount', ['supplier/addSupplierBankAccount', Section::PROTECTED]);
            $r->put('/update_supplier_bankaccount', ['supplier/updateSupplierBankAccount', Section::PROTECTED]);
            $r->delete('/delete_supplier_bankaccount', ['supplier/delteSupplierBankAccount', Section::PROTECTED]);
            $r->delete('/deleteSupplier', ['supplier/deleteSupplier', Section::PROTECTED]);
        });

        $r->addGroup('/driver', function (FastRoute\RouteCollector $r) {
            $r->get('/list_drivers', ['Driver/ListAllDrivers', Section::PROTECTED]);
            $r->get('/list_driver/{Drivername}', ['Driver/getDriverInformation', Section::PROTECTED]);
            $r->post('/add_driver', ['Driver/addDriver', Section::PROTECTED]);
            $r->put('/update_driver', ['Driver/updateDriver', Section::PROTECTED]);
            $r->delete('/delete_driver', ['Driver/deleteDriver', Section::PROTECTED]);
        });

        $r->addGroup('/employee', function (FastRoute\RouteCollector $r) {
            $r->get('/list_employees', ['Employee/ListAllEmployees', Section::PROTECTED]);
            $r->get('/list_employee_info/{EmployeeId:\d+}', ['Employee/getEmployeeInfromation', Section::PROTECTED]);
            $r->post('/add_employee', ['Employee/addEmployee', Section::PROTECTED]);
            $r->put('/update_employee', ['Employee/updateEmployee', Section::PROTECTED]);
            $r->put('/update_employee_auth', ['Employee/updateEmployeeAuthentication', Section::PROTECTED]);
            $r->post('/activate_employee', ['Employee/activateEmployee', Section::PROTECTED]);
            $r->post('/deactivate_employee', ['Employee/deactivateEmployee', Section::PROTECTED]);
            $r->delete('/delete_employee', ['Employee/deleteEmployee', Section::PROTECTED]);
        });
        $r->addGroup('/customer', function (FastRoute\RouteCollector $r) {
            $r->get('/list_customers', ['Customer/ListAllCustomers', Section::PROTECTED]);
            $r->get('/list_customer/{CustomerName}', ['Customer/getCustomerInformation', Section::PROTECTED]);
            $r->post('/add_customer', ['Customer/addCustomer', Section::PROTECTED]);
            $r->put('/update_customer', ['Customer/updateCustomer', Section::PROTECTED]);
            $r->get('/list_customer_bankaccount/{CustomerId:\d+}', ['Customer/getCustomerBankAccount', Section::PROTECTED]);
            $r->post('/add_customer_bankaccount', ['Customer/addCustomerBankAccount', Section::PROTECTED]);
            $r->put('/update_customer_bankaccount', ['Customer/updateCustomerBankAccount', Section::PROTECTED]);
            $r->delete('/delete_customer_bankaccount', ['Customer/deleteCustomerBankAccount', Section::PROTECTED]);
            $r->delete('/delete_customer', ['Customer/deleteCustomer', Section::PROTECTED]);
        });
        $r->addGroup('/category', function (FastRoute\RouteCollector $r) {
            $r->get('/getcategories', ['Category/getAllCategories', Section::PROTECTED]);
            $r->post('/addcategory', ['Category/addCategory', Section::PROTECTED]);
            $r->put('/update_category', ['Category/updateCategory', Section::PROTECTED]);
            $r->delete('/delete_category', ['Category/deleteCategory', Section::PROTECTED]);
        });
        $r->addGroup('/item', function (FastRoute\RouteCollector $r) {
            $r->get('/get_items', ['Item/getAllItems', Section::PROTECTED]);
            $r->post('/add_new_item', ['Item/addNewItem', Section::PROTECTED]);
            $r->put('/update_item', ['Item/updateItem', Section::PROTECTED]);
            $r->put('/update_item_price', ['Item/updateItemPrice', Section::PROTECTED]);
            $r->get('/get_item_inventory/{ItemId:\d+}', ['Item/ItemInventory', Section::PROTECTED]);
            $r->delete('/delete_item', ['Item/deleteItem', Section::PROTECTED]);
        });
        $r->addGroup('/purchase', function (FastRoute\RouteCollector $r) {
            $r->post('/make_purchase', ['Purchase/makePurchase', Section::PROTECTED]);
            $r->get('/get_purchase_list', ['Purchase/GetAllPurchases', Section::PROTECTED]);
            $r->get('/get_purchase/{id:\d+}', ['Purchase/GetAllPurchases', Section::PROTECTED]); // not done
            $r->delete('/delete_purchase', ['Purchase/deletePurchase', Section::PROTECTED]); //not done
            $r->post('/ship_purchase', ['Purchase/shipPurchase', Section::PROTECTED]);
            $r->post('/move_to_store', ['Purchase/warehouseToStoreJson', Section::PROTECTED]);
            $r->post('/make_sales', ['Purchase/makeSales', Section::PROTECTED]);
            $r->put('/update_purchase', ['Purchase/updatePurchase', Section::PROTECTED]);
            $r->put('/update_grn', ['Purchase/updateGRN', Section::PROTECTED]);
            $r->put('/update_ref', ['Purchase/updateREF', Section::PROTECTED]);
            $r->put('/update_sales', ['Purchase/updateSales', Section::PROTECTED]);
            $r->delete('/delete_sales', ['Purchase/deleteSales', Section::PROTECTED]);
            $r->delete('/delte_grn', ['Purchase/deleteGRN', Section::PROTECTED]);
            $r->delete('/delte_ref', ['Purchase/deleteREF', Section::PROTECTED]);
            $r->post('/purchase_from_order', ['Purchase/PurchaseFromOrder', Section::PROTECTED]);
            $r->put('/update_transefred_item', ['Purchase/updateMovedData', Section::PROTECTED]);
            $r->delete('/delete_transfered_item', ['Purchase/deleteTransferedItem', Section::PROTECTED]);
            $r->delete('/delete_teid', ['Purchase/deleteTEID', Section::PROTECTED]);
            $r->put('/update_transferd_count', ['Purchase/updateTransferCount', Section::PROTECTED]);
            $r->put('/update_teid', ['Purchase/updateTEID', Section::PROTECTED]);
        });
        $r->addGroup('/order', function (FastRoute\RouteCollector $r) {
            $r->get('/list_orders', ['Order/ListAllOrders', Section::PROTECTED]);
            $r->get('/list_order/{orderId:\d+}', ['Order/getOrder', Section::PROTECTED]);
            $r->post('/make_order', ['Order/makeNewOrder', Section::PROTECTED]);
            $r->delete('/delete_order/{orderId:\d+}', ['Order/deleteOrder', Section::PROTECTED]);
            $r->put('/update_order', ['Order/updateOrder', Section::PROTECTED]);
            $r->put('/update_order_list', ['Order/updateOrderList', Section::PROTECTED]);
            $r->delete('/delete_order_list/{OrderdItemId:\d+}', ['Order/DelteOrderItem', Section::PROTECTED]);
        });
        $r->addGroup('/personalBankAccount', function (FastRoute\RouteCollector $r) {
            $r->get('/Accounts', ['Bank/getAllBanks', Section::PROTECTED]);
            $r->post('/add_bank_account', ['Bank/addNewAccount', Section::PROTECTED]);
            $r->put('/update_bank_account', ['Bank/updateBankAccount', Section::PROTECTED]);
            $r->delete('/delete_bank_account', ['Bank/deleteBankAccount', Section::PROTECTED]);
            $r->post('/add_transaction', ['Bank/addTransaction', Section::PROTECTED]);
            $r->delete('/delete_transaction', ['Bank/deleteTransaction', Section::PROTECTED]);
            $r->get('/getBankAccount_transactions/{PBID:\d+}', ['Bank/getTransaction', Section::PROTECTED]);
        });
        $r->addGroup('/income', function (FastRoute\RouteCollector $r) {
            $r->get('/get_incomes', ['Income/getAllIncomes', Section::PROTECTED]);
            $r->post('/add_new_income', ['Income/addNewIncome', Section::PROTECTED]);
            $r->put('/update_income', ['Income/updateIncome', Section::PROTECTED]);
            $r->delete('/delete_income', ['Income/deleteIncome', Section::PROTECTED]);
        });
        $r->addGroup('/expence', function (FastRoute\RouteCollector $r) {
            $r->addGroup('/rent', function (FastRoute\RouteCollector $r) {
                $r->get('/get_rents', ['Rent/getRent', Section::PROTECTED]);
                $r->post('/add_rent', ['Rent/addRent', Section::PROTECTED]);
                $r->delete('/delete_rent', ['Rent/deleteRent', Section::PROTECTED]);
                $r->put('/update_rent', ['Rent/updateRent', Section::PROTECTED]);
            });
            $r->addGroup('/unloadingExpence', function (FastRoute\RouteCollector $r) {
                $r->get('/get_unloading_expence', ['LoadUnLoadExpences/getUnloadingExpences', Section::PROTECTED]);
                $r->post('/add_unloading_expence', ['LoadUnLoadExpences/addUnloadingExpence', Section::PROTECTED]);
                $r->delete('/delete_unloading_expence/{UnloadId:\d+}', ['LoadUnLoadExpences/deleteUnloadingExpence', Section::PROTECTED]);
                $r->put('/update_unloading_expence', ['LoadUnLoadExpences/updateUnloadingExpence', Section::PROTECTED]);
            });
            $r->addGroup('/loadingExpence', function (FastRoute\RouteCollector $r) {
                $r->get('/get_loading_expence', ['LoadUnLoadExpences/getloadingExpences', Section::PROTECTED]);
                $r->post('/add_loading_expence', ['LoadUnLoadExpences/addloadingExpence', Section::PROTECTED]);
                $r->delete('/delete_loading_expence/{loadId:\d+}', ['LoadUnLoadExpences/deleteloadingExpence', Section::PROTECTED]);
                $r->put('/update_loading_expence', ['LoadUnLoadExpences/updateloadingExpence', Section::PROTECTED]);
            });
            $r->addGroup('/masatefiya', function (FastRoute\RouteCollector $r) {
                $r->get('/get_masatefiya_expense', ['Masatefiya/getMasatefiyaExpence', Section::PROTECTED]);
                $r->post('/add_masatefiya_expence', ['Masatefiya/addMasatefiyaExpence', Section::PROTECTED]);
                $r->delete('/delete_masatefiya_expence/{MID:\d+}', ['Masatefiya/deleteMasatefiyaExpence', Section::PROTECTED]);
                $r->put('/update_masatefiya_expence', ['Masatefiya/updateMasatefiyaExpence', Section::PROTECTED]);
            });
            $r->addGroup('/salary', function (FastRoute\RouteCollector $r) {
                $r->get('/get_salary_expense', ['Salary/getSalaryExpence', Section::PROTECTED]);
                $r->post('/add_salary_expence', ['Salary/addSalaryExpence', Section::PROTECTED]);
                $r->delete('/delete_salary_expence', ['Salary/deleteSalaryExpence', Section::PROTECTED]);
                $r->put('/update_salary_expence', ['Salary/updateSalaryExpence', Section::PROTECTED]);
            });
            $r->addGroup('/OET', function (FastRoute\RouteCollector $r) {
                $r->get('/get_OET', ['OET/getOET', Section::PROTECTED]);
                $r->post('/add_OET', ['OET/addOET', Section::PROTECTED]);
                $r->delete('/delete_OET', ['OET/deleteOET', Section::PROTECTED]);
                $r->put('/update_OET', ['OET/updateOET', Section::PROTECTED]);
            });
            $r->addGroup('/PET', function (FastRoute\RouteCollector $r) {
                $r->get('/get_PET', ['PET/getPET', Section::PROTECTED]);
                $r->post('/add_PET', ['PET/addPET', Section::PROTECTED]);
                $r->delete('/delete_PET/{PEID:\d+}', ['PET/deletePET', Section::PROTECTED]);
                $r->put('/update_PET', ['PET/updatePET', Section::PROTECTED]);
            });
            $r->addGroup('/BT', function (FastRoute\RouteCollector $r) {
                $r->get('/get_BT', ['BT/getBT', Section::PROTECTED]);
                $r->post('/add_BT', ['BT/addBT', Section::PROTECTED]);
                $r->delete('/delete_BT/{BID:\d+}', ['BT/deleteBT', Section::PROTECTED]);
                $r->put('/update_BT', ['BT/updateBT', Section::PROTECTED]);
            });
            $r->addGroup('/OEL', function (FastRoute\RouteCollector $r) {
                $r->get('/get_OEL', ['OEL/getOEL', Section::PROTECTED]);
                $r->post('/add_OEL', ['OEL/addOEL', Section::PROTECTED]);
                $r->delete('/delete_OEL', ['OEL/deleteOEL', Section::PROTECTED]);
                $r->put('/update_OEL', ['OEL/updateOEL', Section::PROTECTED]);
            });
            $r->addGroup('/PEL', function (FastRoute\RouteCollector $r) {
                $r->get('/get_PEL', ['PEL/getPEL', Section::PROTECTED]);
                $r->post('/add_PEL', ['PEL/addPEL', Section::PROTECTED]);
                $r->delete('/delete_PEL/{PExpencesID:\d+}', ['PEL/deletePEL', Section::PROTECTED]);
                $r->put('/update_PEL', ['PEL/updatePEL', Section::PROTECTED]);
            });
            $r->addGroup('/BL', function (FastRoute\RouteCollector $r) {
                $r->get('/get_BL', ['BL/getBL', Section::PROTECTED]);
                $r->post('/add_BL', ['BL/addBL', Section::PROTECTED]);
                $r->delete('/delete_BL/{BILLEXPENCEID:\d+}', ['BL/deleteBL', Section::PROTECTED]);
                $r->put('/update_BL', ['BL/updateBL', Section::PROTECTED]);
            });
        });

        $r->addGroup('/creaditSettlemnt', function (FastRoute\RouteCollector $r) {
            $r->addGroup('/GRN', function (FastRoute\RouteCollector $r) {
                $r->get('/list_all_credit_settlements', ['GRNCreditSettlemnt/ListAllCreditSettlemts', Section::PROTECTED]);
                $r->get('/list_credit_settlement/{CSID:\d+}', ['GRNCreditSettlemnt/GetCreditSettlment', Section::PROTECTED]);
                $r->post('/add_credit_settlemnts', ['GRNCreditSettlemnt/addCreditSettlemt', Section::PROTECTED]);
                $r->delete('/delete_credit_settlemnts', ['GRNCreditSettlemnt/deleteCreditSettlment', Section::PROTECTED]);
                $r->put('/update_credit_settlemt', ['GRNCreditSettlemnt/updateCreditSettlment', Section::PROTECTED]);
            });
            $r->addGroup('/REF', function (FastRoute\RouteCollector $r) {
                $r->get('/list_all_credit_settlements', ['REFCreditSettlemnt/ListAllCreditSettlemts', Section::PROTECTED]);
                $r->get('/list_credit_settlement/{CSID:\d+}', ['REFCreditSettlemnt/GetCreditSettlment', Section::PROTECTED]);
                $r->post('/add_credit_settlemnts', ['REFCreditSettlemnt/addCreditSettlemt', Section::PROTECTED]);
                $r->delete('/delete_credit_settlemnts', ['REFCreditSettlemnt/deleteCreditSettlment', Section::PROTECTED]);
                $r->put('/update_credit_settlemt', ['REFCreditSettlemnt/updateCreditSettlment', Section::PROTECTED]);
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
        http_response_code(404);
        $res = array('message'=>'404 Invalid URL');
        print_r(json_encode($res));
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        echo "<h1> 405 METHOD NOT ALLOWED</h1>";
        break;
    case FastRoute\Dispatcher::FOUND:
        if ($routeInfo[1][1] === Section::PROTECTED) {
            $allowed_roles = $routeInfo[1][1];

            //authenticate user 

            if (true){
            // if (validate_accesstoken($allowed_roles)){
                
                $handler = $routeInfo[1][0];
                $vars    = $routeInfo[2];

            }else{
                return;
            }


        } else {
            $handler = $routeInfo[1];
            $vars    = $routeInfo[2];
        }
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

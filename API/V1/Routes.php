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
    
    $dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

        $r->addGroup('/ims/api/v1',function (FastRoute\RouteCollector $r){
            $r->addGroup('/supplier', function (FastRoute\RouteCollector $r) {
                $r->get('/listSuppliers', 'Supplier/ListAllSuppliers');
                $r->get('/listSupplier/{Suppliername}','supplier/getSupplierInformation');
                $r->post('/addSupplier','supplier/addSupplier');
            });

            $r->addGroup('/driver', function (FastRoute\RouteCollector $r) {
                $r->get('/list_drivers', 'Driver/ListAllDrivers');
                $r->get('/list_driver/{Drivername}','Driver/getDriverInformation');
                $r->post('/add_driver','Driver/addDriver');
            });
            $r->addGroup('/customer', function (FastRoute\RouteCollector $r) {
                $r->get('/list_customers', 'Customer/ListAllCustomers');
                $r->get('/list_customer/{CustomerName}','Customer/getCustomerInformation');
                $r->post('/add_customer','Customer/addCustomer');
            });
            $r->addGroup('/category', function (FastRoute\RouteCollector $r) {
                $r->get('/getcategories', 'Category/getAllCategories');
                $r->post('/addcategory','Category/addCategory');
            });
            $r->addGroup('/item', function (FastRoute\RouteCollector $r) {
                $r->get('/get_items', 'Item/getAllItems');
                $r->post('/add_new_item','Item/addNewItem');
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

    function nameAndId($vars,$vars2){
        print_r($vars);
        print_r($vars2);
    }
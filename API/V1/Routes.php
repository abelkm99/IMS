    <?php
    
    require "../vendor/autoload.php";
    require "Models/Items.php";
    
    $dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {

        $r->addGroup('/ims/api/v1/supplier', function (FastRoute\RouteCollector $r) {
            $r->get('/listSuppliers', 'Supplier/ListAllSuppliers');
            $r->get('/listSupplier/{Suppliername}','supplier/getSupplierInformation');
            $r->post('/addSupplier','supplier/addSupplier');
        });

        
        // {id} must be a number (\d+)
        $r->addRoute('GET', '/ims/{id}/{name}','nameAndId');
        // The /{title} suffix is optional
        $r->addRoute('GET', '/ims/article/{id:\d+}[/{title}]', 'wahtaguan');
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
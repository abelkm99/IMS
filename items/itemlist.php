<?php
        header('Content-Type: application/json');
        require "../DB.php";
        $db = new dbOperation();
        $req =  json_decode(file_get_contents('php://input'), true);
        if($_SERVER['REQUEST_METHOD'] == "POST" || 1==1){
            $res = $db->listAllCategory();
            echo $res;
        }
?>

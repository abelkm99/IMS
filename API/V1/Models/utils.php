<?php

function key_value_Validator($array,$json){
    $check = true;
    foreach($array as $key => $value){
        if(array_key_exists($key,$json)){
            $data = $json->$key;
            if(1==$value && $data==null){
                $check = false;
                break;
            }
        }else{
            $check = false;
            break;
        }
    }
    return $check;
}
function concatranteJson($rows){
    
    $jsonString = "";
    
    foreach ($rows as $value) {
        foreach($value as $key=>$val){
            $jsonString= $jsonString . $val;
        }
    }
    return $jsonString;
}

function checkNull($value){
    return $value == null?null:$value;
}

?>
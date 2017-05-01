<?php
    function getNumber(){
        return rand(1,3);

    }

    function show($i , $value){
        echo "第".$i." ".$value;
    }
    function judge($first ,$second ,$third){
    $message = false;
    if ($first == $second && $second == $third)
        $message = true;
    return $message;
    }

?>
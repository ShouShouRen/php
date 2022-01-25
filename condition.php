<?php
    // 判斷式
    
    $x = 10;
    if($x > 0){
        echo "Success";
    }

    if($x > 0){
        echo "Success2";
    }else{
        echo "Error";
    }

    if($x > 0){
        echo "正整數";
    }elseif($x < 0){
        echo "負整數";
    }else{
        echo "Error";
    }

    switch($x){
        case 0:
            echo 0;
            break;
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        default:
            echo "error";
    }
?>
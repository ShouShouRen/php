<?php
    function test(){
        echo "TEST";
    }
    
    function calc($x){
        echo $x * 1.5;
    }
    // calc(12);

    function square($x,$y){
        echo $x * $y;
    }
    // square(10,20);

    function hello($name){
        return "hello".$name;
    }
    // echo hello("java");

    $b = calc(100);
    echo $b;
?>

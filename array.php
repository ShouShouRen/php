<?php
    $a = array();
    $a[0] = "a";
    $a[1] = "b";
    $a[2] = "c";
    // echo $a;
    // var_dump($a);

    $b = array("a","b","c");
    // var_dump($b);

    $c = ["a","b","c"];
    // var_dump($c);

    // echo $c[0];
    // echo $c[1];
    // echo $c[2];

    $neflix = ["紅色通緝令","他們用祭典與漫畫活絡地方","驚悚恐怖：活屍、怪物到處跑","人性刻畫：獲得啟發或療癒","別錯過喜愛的明星"];

    // for($i=0;$i<5;$i++){
    //     echo $neflix[$i];
    // }
    for($i=0;$i<count($neflix);$i++){
        echo $neflix[$i];
    }
?>
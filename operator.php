<?php
    // 算術運算子
    $x = 10 ;
    $y = 5 ;
    echo $x + $y ;
    echo "<br>";
    echo $x - $y ;
    echo "<br>";
    echo $x * $y ;
    echo "<br>";
    echo $x / $y ;
    echo "<br>";
    echo $x % $y ;
    echo "<br>";

    // 判斷
    var_dump($x > $y);
    echo "<br>";
    var_dump($x >= $y);
    echo "<br>";
    var_dump($x < $y);
    echo "<br>";
    var_dump($x <= $y);
    echo "<br>";
    var_dump($x == $y);//判斷值相等
    echo "<br>";
    var_dump($x === $y);//判斷值與型別相等
    echo "<br>";
    var_dump($x != $y);
    echo "<br>";

    // 指定
    echo $x = $y;//5
    echo "<br>";
    echo $x += $y;//$x = $x +$y; 10
    echo "<br>";
    echo $x -= $y;//5
    echo "<br>";
    echo $x *= $y;//25
    echo "<br>";
    echo $x /= $y;//5
    echo "<br>";
    echo $x %= $y;//0
    echo "<br>";

    // 邏輯and or not
    $a =100;
    $b =10;
    var_dump($x && $y);
    var_dump($x || $y);
    var_dump($x);

    // 0 null ""
?>
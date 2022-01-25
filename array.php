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

    // 陣列迭代

    // for($i=0;$i<5;$i++){
    //     echo $neflix[$i];
    // }

    // for($i=0;$i<count($neflix);$i++){
    //     echo $neflix[$i];
    // }

    // foreach($neflix as $n){
    //     echo $n;
    // }

    // 關聯陣列 健key => 值value
    $users = [
        "name" => "john",
        "mail" => "asdf@gmial.com",
        "phone" => "234556476"
    ];

    // echo $users["name"];
    // foreach($users as $key => $value){
    //     echo $key.":".$value;
    //     echo "<br>";
    // }

    // is_array()
    // var_dump(is_array($c));

    // in_array()
    // var_dump(in_array("c",$c));判斷是值否在陣列內

    // echo count($neflix);//計算有幾個值

    // compect()將變數解析成關聯陣列
    $books = "精通ＰＨＰ　ＭＹＳＱＬ";
    $cartoon = "天族屬車車";
    $test = compact("books","cartoon");
    // var_dump($test);

    // extract()將關聯陣列轉為變數
    // var_dump(extract($users));
    // echo $name;
    // echo $mail;
    // echo $phone;

    // $name = $users["name"];
    // $name = $users["mail"];
    // $name = $users["phone"];
    // echo $name;


    // implode()陣列轉字串
    $neflix_string = implode("___",$neflix);
    // echo $neflix_string;
    // explode()字串轉陣列
    $str = "hello world";
    $str_array = explode(" ",$str);
    var_dump($str_array);
?>
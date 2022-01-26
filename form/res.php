<?php
    // echo $_POST;
    // var_dump($_POST);
    // echo $_POST["user"];
    // echo "<br>";
    // echo $_POST["mail"];
    // echo "<br>";
    // echo $_POST["phone"];
    // extract($_POST);
    // echo $user;
    // echo $mail;
    // echo $phone;
    // extract($_POST);//一開始傳送為關聯陣列使用extract分為變數
    // echo $content;
    $user = $_POST["user"];
    $gender = $_POST["gender"];
    $edu = $_POST["edu"];
    $content = $_POST["content"];
    extract($_POST);
    echo $user;
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $edu;
    echo "<br>";
    echo $content;
    echo "<br>";
    echo implode(",",$insterest);//陣列轉字串
?>
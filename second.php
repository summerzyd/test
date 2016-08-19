<?php
    /**
     * Created by PhpStorm.
     * User: angela
     * Date: 2016/7/19
     * Time: 14:17
     */
    //第二章
//    date_default_timezone_set("Asia/ShangHai");
//    echo "当前时间：".date('Y 年 m 月 d 日 H 点 i 分 s 秒');echo "<br/>";
//    $time = time();
//    $time_r = strtotime("1 January 2017");
//    echo  "距离2017年元旦还有<b style='color:red;'>".ceil(($time_r-$time)/(3600*24))."</b>天<br/>";
//
//    $str = ["创", "天", "气", "可", "理","衣"];
//    $word = count($str);
//    $img = "";
//    $pic = "";
//    $bath = __FILE__;
//    for ($i = 0; $i<4; $i++) {
//        $num = rand(0, $word -1);
//        $img = $img."<img src='F:/xampp/htdocs/test/images/".$num.".jpg width='16'height='16'";
//    }
//
//    $pic = $pic.$str["$num"];
//    $conn = mysqli_connect("localhost","root","", "test");
//    if (mysqli_connect_errno()) {
//        echo  "连接失败";
//    } else {
//        echo  "连接成功";
//    }
//    $conn->query("SET NAMES utf8");
//    $sql = "select * from user";
//    $result = mysqli_query($conn, $sql);
//    $rows = [];
//    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
//        $rows[] = $row;
//    }
//    print_r($rows);
//    $num = intval(mt_rand(0,3));
//    for ($i = 0; $i<4; $i++) {
//        echo  "<img src = /test/images/".substr(strval($num), $i, 1).".jpg>";
//    }
    //九九乘法表
echo "<table>";
    for($i = 1; $i < 10; $i++) {
        echo "<tr>";
        for ($j =1 ;$j <= $i; $j++) {
            echo "<td> $i * $j =".$i*$j."</td>";
        }
        echo  "</tr>";
    }
echo "</table>";

<?php
    /**
     * Created by PhpStorm.
     * User: angela
     * Date: 2016/7/20
     * Time: 14:17
     */
//    $a = 'aaaa ';
//    // 字符串的长度
//    echo  strlen($a);
//    //去除字符串的首尾空格
//    trim($a);
$start_time = run_time();
?>
<form action="" method="post">
    <table>
        <tr><td>用户名</td><td><input type="text" name="username" size="20"></td></tr>
        <tr><td>密码</td><td><input type="password" name="pwd" size="20"></td></tr>
        <tr><td>邮箱</td><td><input type="text" name="email" size="20"></td></tr>
        <tr><td>电话</td><td><input type="text" name="phone" size="20"></td></tr>
        <tr>
            <td><input type="submit" name="sub"></td>
            <td><input type="reset" name="res"></td>
        </tr>
    </table>
</form>
<?php
    if (!empty($_POST['sub'])) {
        print_r($_POST['email']);
        if (preg_match("/(\d{3}-)(\d{8})$|(\d{4}-)(\d{7})$/", $_POST['phone'])){
            echo  "phone OK";
        } else {
            echo  "phone no";
        }
        if (preg_match("/\w+([-+.])*/", $_POST['email'])) {
            echo  "email OK";
        } else {
            echo  "email no";
        }

    }
    //截取乱码问题
    $rest = substr ("中国人", 1, -1);
    echo $rest;
    $str = '我abc是谁'; //utf-8编码的字符串
    echo mb_substr($str, 0, 2, 'utf-8'); //输出 我a
    //数组去重
    $a=['a','b','c','a'];
    print_r(array_unique($a));

    function run_time(){
        list($msec, $sec) = explode(" ", microtime());
        return ((float)$msec + (float)$sec);
    }

    $end_time = run_time();
print_r($start_time);echo "<br/>";print_r($end_time);




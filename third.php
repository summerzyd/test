<?php
/**
 * Created by PhpStorm.
 * User: angela
 * Date: 2016/7/19
 * Time: 16:50
 */
?>
<!--    <form>-->
<!--    <table>-->
<!--        <tr><td>用户名</td><td><input type="text" name="username" size="20"></td></tr>-->
<!--        <tr><td>密码</td><td><input type="password" name="pwd" size="20"></td></tr>-->
<!--        <tr>-->
<!--            <td><input type="submit" name="sub"></td>-->
<!--            <td><input type="reset" name="res"></td>-->
<!--        </tr>-->
<!--    </table>-->
<!--</form>-->
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="up_file" 20>
    <input type="submit" name="sub">

</form>
<?php
 if ($_POST['sub']) {
     if ($_FILES['up_file']['name'] =="") {
         echo "内容为空";
     } else {
        $info = $_FILES['up_file'];print_r($info);echo "<br/>";
         if ($info['size'] >0 && $info['size'] <1024*8000) {
             $dir = "upfiles/";
             $name = $info['name'];
             $rand = rand(0, 100000);
             $name = $rand.date("YmdHis").$name;
             $path = "upfiles/".$name;print_r($path);echo "<br/>";
             if (!is_dir($dir)){
                 mkdir($dir);
             }print_r($dir);echo "<br/>";
             $move = move_uploaded_file($info['tmp_name'], $path);
             if ($move == true) {
                 echo "OK";
             }
         } else {
             echo  "文件过大";
         }
     }

 }
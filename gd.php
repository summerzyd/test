<?php
    /**
     * Created by PhpStorm.
     * User: angela
     * Date: 2016/7/20
     * Time: 16:44
     */
    //example 1
//    header("Content-type:image/png");
//    $img = imagecreate(400,200);
//    $bg = imagecolorallocate($img, 0, 0, 255);
//    $white = imagecolorallocate($img, 255, 0, 255);
//    imagefilledellipse($img, 100, 100, 150, 150, $white);
//    imagefilledellipse($img, 200, 50, 300, 150, $white);
//    imagepng($img);
//    imagedestroy($img);

    //example 2
    header("Content-type:image/jpeg");
    $im = imagecreatefromjpeg("images/3.jpg");
//    $textcolor = imagecolorallocate($im, 25, 25, 136);
//    $font ="fonts/simhei.ttfss";
//    $to ="aa";
//    imagettftext($im, 80, 0, 200, 300, $textcolor, $font, $to);
//    $to ="cc";
//    imagettftext($im, 80, 0, 300, 400, $textcolor, $font, $to);
    imagejpeg($im);
    imagedestroy($im);

//header("Content-type: image/jpeg");
////创建并载入一幅图像
//$im = @imagecreatefromjpeg("images/1.jpg");
////错误处理
//if(!$im){
//    $im  = imagecreatetruecolor(150, 30);
//    $bg = imagecolorallocate($im, 255, 255, 255);
//    $text_color  = imagecolorallocate($im, 0, 0, 255);
//    //填充背景色
//    imagefilledrectangle($im, 0, 0, 150, 30, $bg);
//    //以图像方式输出错误信息
//    imagestring($im, 3, 5, 5, "Error loading image", $text_color);
//} else {
//    //输出该图像
//    imagejpeg($im);
//}
//$str="dd";
//$str2= "cc";
//// 通过图片生成一个对象$im
//$im = imagecreatefromjpeg("images/3.jpg");
////载入字体zt.ttf
//$font ="Font.mzd.ttf";;
////创建颜色，用于文字字体的白和阴影的黑
//$white=imagecolorallocate($im,222,229,207);
//$black=imagecolorallocate($im,50,50,50);
////创建关于相对图片位置的函数，方便调用
//$top=100;
//$left=60;
//$top2=170;
////在图片中添加文字，imagettftext (image,size,angle, x, y,color,fontfile,text)
//imagettftext($im,41, 0, $left+1, $top+1, $black, $fnt, $str);
//imagettftext($im,41, 0, $left, $top, $white, $fnt, $str);
//imagettftext($im,43, 0, $left+1,$top2+1 , $black, $fnt, $str2);
//imagettftext($im,43, 0, $left,$top2, $white, $fnt, $str2);
////将$im输出
//imagejpeg($im);
////销毁$im对象
//imagedestroy($im);

//
//$im = imagecreate(100,100);
//
//$string = 'Note that the first letter is a N';
//
//$bg = imagecolorallocate($im, 255, 255, 255);
//$black = imagecolorallocate($im, 0, 0, 0);
//
//// prints a black "Z" on a white background
//imagecharup($im, 3, 10, 10, $string, $black);

//header('Content-type: image/png');
//imagepng($im);

//header("content-type:image/jpeg");
//header("Content-type: image/jpeg");
////创建目标图像
//$dst_im = imagecreatetruecolor(300, 300);
////源图像
//$src_im = @imagecreatefromjpeg("images/1.jpg");
////拷贝源图像左上角起始 150px 150px
//imagecopy( $dst_im, $src_im, 0, 0, 0, 0, 300, 300 );
////输出拷贝后图像
//imagejpeg($dst_im);
//imagedestroy($dst_im);
//imagedestroy($src_im);


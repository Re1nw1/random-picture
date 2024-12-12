<?php
$img_array = glob("lh/*.{gif,jpg,png}",GLOB_BRACE); /* 此处xiaohuli更改为自己对应的图片文件夹*/
$img = array_rand($img_array);
$dz = $img_array[$img];
header("Location:".$dz);
?>

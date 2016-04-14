<?php

//header('Location:class0317.php');
//header('refresh:3;url="class0317.php"');

//echo "三秒後跳轉網頁";

//header('refresh:1');
$nowTime=new DateTime("now",new DateTimeZone('Asia/Taipei'));
echo $nowTime->format("Y年m月d日h點i分s秒");
echo "<br/>";



?>
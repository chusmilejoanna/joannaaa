<html>
<head>
<title>巧合數</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<form action="" method="POST">
請輸入數字範圍(起始):<input type="text" name="a" ><br/>
請輸入數字範圍(結束):<input type="text" name="b" ><br/>
<input type="submit" value="送出資料">
<input type="reset" value="清除資料">
</form>


<?php



if(isset($_POST["a"])){
	$a=$_POST["a"];
	$b=$_POST["b"];
	
}

echo b3($a,$b);

function b3($c,$d){
	for($i=1;$i>=$c;$i++){
		for($j=1;$j<=d;$j++){

             if($i*100+$j=($i+$j)*($i+$j)){
		   echo "$i和$j是巧合數";
		   echo "</br>";
	       }
		}
	}
			
}





?>
</html>
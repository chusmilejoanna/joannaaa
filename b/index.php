<html>
<head>
<title>算式</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
請輸入第一個數字:<input type="text" name="a" ><br/>
請輸入第二個數字:<input type="text" name="b" ><br/>

請選擇您要計算的方式:<br/>
加<input type="radio" name="c" value="c">
減<input type="radio" name="d" value="d">
乘<input type="radio" name="e" value="e">
除<input type="radio" name="f" value="f">
指數<input type="radio" name="g" value="g">

<br/>

<input type="submit" value="送出資料">
<input type="reset" value="清除資料">


<?php


function c($a,$b){
	$c=$a+$b;
	return $c;
}

function d($a,$b){
	$c=$a-$b;
	return $c;
}

function e($a,$b){
	$c=$a*$b;
	return $c;
}

function f($a,$b){
	$c=$a/$b;
	return $c;
}

function g($a,$b){
	
	return $c;
}


function b3(){
	for($a=1;$a>=1;$a++){
		for($b=1;$b>=1;$b++){
           if($a*100+$b=($a+$b)*($a+$b)){
		   echo "$a和$b是巧合數";
	       }
		}
	}
		
	
}
}

?>
</html>
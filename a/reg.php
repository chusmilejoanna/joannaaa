<html>
<head>
<title>註冊</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<form action="verify.php" method="post">
Please input your ID:<input type="text" name="uID" ><br/>
Please input your pwd:<input type="password" name="uPwd"><br/>
Please input your E-Mail:<input type="text" name="uMail"><br/>
Please input your tel:<input type="text" name="uTel"><br/>
<input type="submit" value="送出資料">
<input type="reset" value="清除資料">
</form>


<?php
if(@mysql_connect("localhost","root","joannachusmile")){
	echo "Connection Success";
}else{
	echo "Connection Failed";
}

if(isset($_SESSION["uID"])){
	$uID=$_SESSION["uID"];
	$uPwd=$_SESSION["uPwd"];
	$uMail=$_SESSION["uMail"];
	$uTel=$_SESSION["uTel"];
	

$link=mysqli_connect("localhost","root","joannachusmile","joanna");

$add="INSERT INTO midtern (ID,pwd,E-Mail,tel) VALUES('".$uID."','".$uPwd."','".$uMail."','".$uTel."')";
mysqli_query($link,$add);


}


?>
</html>
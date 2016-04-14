<?php
ob_start();
session_start();
include('include.php');
if(@mysql_connect("localhost","root","joannachusmile","joanna")){
	mysql_query("INSERT INTO midtern(ID,pwd) VALUES('root','123456')");
	echo "成功";
}else{
	echo "Connection Failed";
}

if(isset($_SESSION["uID"])){
	$uID=$_SESSION["uID"];
	$uPwd=$_SESSION["uPwd"];


$sql="SELECT * FROM midtern WHERE ID='$uID' AND pwd='$uPwd'";
$result=mysqli_query($link,$sql);

$rows=mysqli_num_rows($result);

if($rows){
	echo "登入成功";
	$_SESSION["check"]="yes";
	$_SESSION["uID"]=$uID;
	$_SESSION["uPwd"]=$uPwd;
	header('Location:index.php');
}else{
	echo "登入失敗";

	//header('refresh:3;url="reg.php"');
}
}


?>
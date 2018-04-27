<?php
	session_start();
if($_POST['code']==$_SESSION['code']){

    //链接数据库
	$link=mysqli_connect("localhost","root","root");
	//选择数据库
	mysqli_select_db($link,"mini");
	//设置字符集
	mysqli_set_charset($link,"utf8");
	//准备sql
	$phone=$_POST['phone'];
	$_SESSION['name']=$phone;
	$sql="insert into phone(phone) value('$phone')";
	echo "<br>";
	// echo $sql;
	//执行发送
	$a=mysqli_query($link,$sql);

    if($a){
    	echo 1;
    	header("location:../registerPassword.php");
    }


}



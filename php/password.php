<?php

    //链接数据库
	$link=mysqli_connect("localhost","root","root");
	//选择数据库
	mysqli_select_db($link,"mini");
	//设置字符集
	mysqli_set_charset($link,"utf8");
	//准备sql
	$password=$_POST['password'];
	$sql="insert into password(password) value('$password')";
	mysqli_query($link,$sql);

	$sql1="select * from password inner join phone on password.id=phone.id";
	echo "<br>";
	$a = mysqli_query($link,$sql1);

	while($result=mysqli_fetch_assoc($a)){
		$phone = $result['phone'];
		$password = $result['password'];
	}
	// echo "string";
	$sql2 = "insert into register(phone,password) values('$phone','$password')";
	//执行发送
	$b = mysqli_query($link,$sql2);
    if($b){
    	header("location:../login.html");
    }





<?php

     session_start();
	$login=$_POST['login'];

	if ($login == '登录') {
		 //链接数据库
		$link=mysqli_connect("localhost","root","root");
		//选择数据库
		mysqli_select_db($link,"mini");
		//设置字符集
		mysqli_set_charset($link,"utf8");
		//准备sql
		$phone=$_POST['phone'];
		$password=$_POST['password'];
		// echo "string";//
		$sql = "select *from register where phone='$phone'";
		// echo "<br>";
		// echo $sql;
		//执行发送
		$a=mysqli_query($link,$sql);
        $result=mysqli_fetch_assoc($a);
        var_dump($sql);
        	echo $password;
        	echo $result['password'];
        if($result){
        	if($password==$result['password']){
        	    header("location:../index.php");
        	    $_SESSION['name']=$phone;
        	}
        }

	}else{
		
		if($_POST['validateCode']==$_SESSION['code']){

			$link=mysqli_connect("localhost","root","");
			//选择数据库
			mysqli_select_db($link,"mini");
			//设置字符集
			mysqli_set_charset($link,"utf8");
			
			$phone2=$_POST['phone2'];
			$password2 = $_POST['validateCode'];

			$sql = "insert into register(phone,password) value('$phone2','$password2')";
			echo "$sql";
			$a=mysqli_query($link,$sql);

		    if($a){
		    	header("location:../index.php");
		    }
		}
	}
	





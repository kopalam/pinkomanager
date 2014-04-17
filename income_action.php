<?php

	session_start();
	include 'conn.php';

	if (!$_SESSION['user']) header('location:index.php');
	
		
	$project = $_POST['project'];
	$abs = $_POST['abs'];
	$money = $_POST['money'];
	$whether = $_POST['whether'];
	$user = $_SESSION['user'];
	$dates = $_POST['dates'];
	$user = $_POST['user'];
	$number = $_POST['number'];
	// 计算提成，使用合同金额乘以10%的提成
	$commi = $money * 0.1;


	//插入到income表中
	$sql = "INSERT INTO `income` (`id`,`project`,`abs`,`money`,`whether`,`num`,`commi`,`dates`,`user`)
						VALUES (null,'$project','$abs','$money','$whether','$number','$commi','$dates','$user')";
	$query = mysql_query($sql);

		if ($query) {
			# 如果执行成功，提示录入成功，并返回面板
			echo "录入成功，现在即将跳转";
			header('location:inlist.php');

		}else{
			echo "录入失败".mysql_error();
			// header('location:dashbord.php');
		}
		mysql_close();

?>
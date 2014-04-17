<?php
	session_start();
	include("conn.php");
	if(!$_SESSION['user']) header("index.php");

	// 使用$_POST[]获取表单
	$depart = $_POST['depart'];
	$reim = $_POST['reim'];
	$project = $_POST['project'];
	$money = $_POST['money'];
	$dates = $_POST['dates'];
	$sql = "INSERT INTO `reim`(`id`,`depart`,`reim`,`project`,`money`,`dates`) VALUES(null,'$depart','$reim','$project','$money','$dates') ";
	$query = mysql_query($sql);
	if ($query) {
		echo "报销表录入成功";
		header('refresh:3;url=reimlist.php');

	}else{
		echo "录入失败".mysql_error();
	}
?>
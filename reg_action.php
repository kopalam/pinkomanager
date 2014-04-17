<?php

session_start();
	include 'conn.php';
	include 'header.php';

	if(!$_SESSION['user']) header('location:index.php');
$user = $_POST['user'];
$passwd = md5($_POST['passwd']);
$sql = "INSERT INTO `user`(`id`,`user`,`passwd`,`dates` )
					VALUES(null,'$user','$passwd',now())";
$query = mysql_query($sql);
if ($query) {
	echo "录入成功";
	header('refresh:3;url=dashbord.php');
	}	else{
		echo "录入失败".mysql_error();
	}
	mysql_close();

?>
<?php

	//目的：使income表中的money相加，可否使用 for循环？
	
	// 选择数据库
	include 'conn.php';

	$sql = "SELECT * FROM `income` where sum(money)  ";
	$query = mysql_query($sql);
	echo $query;

?>
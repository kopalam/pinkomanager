<?php

	session_start();
	include("conn.php");
	if(!$_SESSION['user']) header("location:index.php");

	$project = $_POST['project'];
	$abs = $_POST['abs'];
	$money = $_POST['money'];
	$dates = $_POST['dates'];
	$user = $_POST['user'];

	// 使用循环把获取的多行表单内容以数组的形式录入payout表中
	
		for($i=0;$i<count($project);$i++)
		{
			 if (empty($project[$i])) ;
			 // 使用empty函数判断是否表格是否为空，如果为空，则不执行空表格
			 
			 else
			{
			$sql = "INSERT INTO `payout`(`id`,`project`,`abs`,`money`,`dates`,`user`) 
							VALUES(null,'$project[$i]','$abs[$i]','$money[$i]','$dates[$i]','$user[$i]') ";
			$query = mysql_query($sql);
			 }
			// $i++;	
	}


	if ($query) {
		// 如果执行成功，提示 录入成功
		echo "支出表录入成功!";
		header("location:payout.php");

	}else{
		echo "录入失败".mysql_error();
	}

?>
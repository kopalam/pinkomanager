<?php

	session_start();
	include 'conn.php';
	echo "<meta http-equiv='content-type' content='text/html' charset='utf-8'";


	function dashbord($sub)
	{
	  if (!empty($sub)) {
	  	
		$content = $_POST['content'];

		$user = $_SESSION['user'];
	   	
	   	$sql = "insert into `bbs`(`id`,`user`,`content`,`dates`)
						values(null,'$user','$content',now())";
		
		$query = mysql_query($sql);
	
		if ($query) {
		# 如果执行成功，告诉用户，留言成功。否则失败
	
		echo "留言成功!";
	
		header("location:dashbord.php");
	
		}else{
	
		echo "留言失败" or die('请联系管理员帮忙解决.');
	
		header("location:dashbord.php");
	}
	
	mysql_close();
	
	}
  }

 

  // 留言本的sub提交获取
  $dashbord = $_POST['sub'];
  dashbord($dashbord);
  
?>
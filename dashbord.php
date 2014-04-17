<?php

	session_start();
	include('conn.php');
	include('header.php');
	// 获取登陆用户名，然后发表留言后，把该登陆名录入到bbs表中的uesr中，自动记录id
	if (empty($_SESSION['user'])) {
		# 如果session中的用户名为空，则跳转到首页提示登陆
		header("location:login.php");
	}else
	{
		echo "<meta http-equiv='content-type' content='text/html' charset='utf-8'>";
		echo "<div align='center'>"."欢迎到留言本,".$_SESSION['user'].'</div>';
	}

?>
<html>
<head>
	<title>品高留言本</title>
</head>
<body>
	<h3 align="center">有话直说！从这里得到更真诚的交流</h3>
	<form action="dashbord_action.php" method="post">	
	<div align="center"><textarea name="content" rows="5" cols="60"></textarea></div>
	<p align="center"><input type="submit" name="sub" value="提交"> </p>
	</form>
</body>
</html>
<?php
 include 'list.php';
?>



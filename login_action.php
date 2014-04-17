<?php
	
	session_start();
	include("conn.php");
	echo '<meta equiv="content-type" cotent="text/html" charset="utf-8"';
	if (isset($_POST['sub'])) {
		# 判断提交过来的按钮sub是否存在
		$user = $_POST['user'];
		$passwd = md5($_POST['passwd']);

		// 选择user表进行比对，看是否存在此账号密码，如果存在，就跳转到面板dashbord，否则就提示错误并返回login页面
		$sql = "SELECT * FROM user where `user` = '{$user}' limit 1";
		$query = mysql_query($sql);
		$res = mysql_fetch_array($query);

		if (!$res['passwd'] == $passwd) {
			// 如果输入的密码与数据库中的密码不相同，则提示密码错误
			echo "密码错误，请重新输入";
			header("refresh:3;url=index.php");
			
			
		}else{
			echo "密码输入正确<br>";

			// 录入到session会话中
				$_SESSION['id'] = $res['id'];
				$_SESSION['user'] = $user;
				echo "<a href='dashbord.php'>现在为你跳转，如果浏览器没有反应请点此直奔</a>";
				header("refresh:3;url=dashbord.php");
		}
	}
?>
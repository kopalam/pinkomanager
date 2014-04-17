<?php

	session_start();
	session_unset();
	echo "你已经成功退出登陆";
	header("refresh:3;url=index.php");

?>
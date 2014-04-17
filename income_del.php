<?php 

	session_start();
	include 'conn.php';

	// 判断获取到的id是否存在
	
	if (!empty($_GET['id'])) {
		
		# 如果获取到的id不是为空，即存在
		$id = $_GET['id'];
		$sql = "DELETE FROM income WHERE `id` = '{$id}' ";
		$query = mysql_query($sql);

			if ($query) {
				# 如果执行删除命令成功
				 echo "删除成功";
				 header('location:inlist.php');
			}else
			{
				echo "删除失败，请联系kopa协助解决".mysql_error();
			}			
		}


?>
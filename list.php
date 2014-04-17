<?php
	

	error_reporting(0);
	if(empty($_SESSION['user'])) header('location:login.php');

	//分页逻辑

	$pagesize = 10;
	$pagenum = $_GET['page'] ? $_GET['page'] : 1 ;
	$offset = ($pagenum - 1) *$pagesize; 

	echo '<table width="50%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">';
	// 执行数据库语句，选择bbs表，id按排序
	$sql = "SELECT * FROM  bbs order by id asc limit {$offset},{$pagesize} "; 
	
	$query = mysql_query($sql); //执行sql语句
	// 进行数据表检索

	while ($res = mysql_fetch_array($query)) {
		# 在bbs表中循环检索
 ?>
<html>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
<head>
	<title></title>
</head>
<body>
	
		<tr>
			 <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><?php echo $res['user'] ?>说:</span></div></td>
			<td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><?php echo $res['content'] ?></span></div></td>
			<td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><?php echo $res['dates'] ?></span></div></td>
		</tr>

 <?php
}
	echo "</table>";
	$prevpage = $pagenum - 1;
	$nextpage = $pagenum + 1;

 ?>
<h3 align="center" ><a href="list.php?page=<?php echo $prevpage ?>">上一页</a>&nbsp;|&nbsp;<a href="list.php?page=<?php echo $nextpage ?>">下一页</a> </h3>
</body>
</html>

<?php
  mysql_close();
?>
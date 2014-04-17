<?php
    

 	//header.php 设置头部导航文件
 	$payout = '支出表填写';
 	$reim = '报销表填写';
 	$income = '收入表填写';
 	$paylist = '支出查询';
 	$reimlist = '报销表查询';	 
 	$inlist = '收入表查询';
 	$dashbord = '面板';
 	$logout = '退出登陆';

?>
<html>
 
 <meta http-equiv="content-type" content="text/html" charset="utf-8" />
 
 <head>
 
   <title>品高内部系统</title>
 
 </head>
 
 <body>

 <table width="720" align="center" >
 <h1 align="center">品高内部管理系统</h1>
 	<th><a href="payout.php" ><?php echo $payout; ?></a></th>
 	<th><a href="reim.php" ><?php echo $reim; ?></a></th>
 	<th><a href="income.php" ><?php echo $income; ?></a></th>
 	<th><a href="paylist.php" ><?php echo $paylist; ?></a></th>
 	<th><a href="reimlist.php" ><?php echo $reimlist; ?></a></th>
 	<th><a href="inlist.php" ><?php echo $inlist; ?></a></th>
 	 <th><a href="dashbord.php" ><?php echo $dashbord; ?></a></th>
 	<th><a href="logout.php" ><?php echo $logout; ?></a></th>
 </table>
 	<hr />
 </body>

 </html>
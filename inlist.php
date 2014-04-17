<?php

	 session_start();
   error_reporting(0);
	include 'conn.php';
	include 'header.php';
  include 'sum.php';
  include 'income_del.php';
	if(!$_SESSION['user']) header('location:index.php');

   //分页逻辑
       $length = 20;
        $pagenum=$_GET['page']?$_GET['page']:1;
        $offset = ($pagenum-1) * $length;
        $sql = "SELECT * FROM  income order by id asc limit {$offset},{$length}";
       $query = mysql_query($sql);

	//输出表格
	echo '<table width="70%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">项目</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">摘要</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">金额(元)</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">签订合同</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">提成</span></strong></div></td>
         <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">日期</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">负责人</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">操作</span></strong></div></td>
      </tr>';
		echo "<h3 align='center'>收入明细表</h3><br>";
	while($res = mysql_fetch_array($query))
	{

?>
<html>
<meta http-equiv='Content-Type' content='text/html' charset='UTF-8' >
<head>
	<title></title>
  <style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE3 {color: #707070; font-size: 13px; }
.STYLE5 {color: #707070; font-size: 14px; }
body {
  margin-top: 0px;
  margin-bottom: 0px;
}
.STYLE7 {font-size: 12}
-->
</style>
</head>
<body>
  <form action="income_action.php" method="post">
		
		<tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE5"><?php echo $res['project']; ?></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE5"><?php echo $res['abs']; ?></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE5"><?php echo $res['money']; ?></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE5"><?php echo $res['whether']; ?> </span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['commi']; ?></div></td>
      	<td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['dates']; ?></div></td>																		 

        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['user']; ?></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><a href="income_edit.php?id=<?php echo $res['id'];?>">编辑</a>
										  <a href="income_del.php?id=<?php echo $res['id'];?>">删除</a></div></td>
      </tr>

		
		

	

<?php
}
echo "</table>";
//获取上一页下一页
        $prevpage = $pagenum-1;
        $nextpage = $pagenum+1;
?>
<br>
  <h3 align="center" ><span class="STYLE5"><a href="inlist.php?page=<?php echo $prevpage ?>">上一页</a>&nbsp;|&nbsp;<a href="inlist.php?page=<?php echo $nextpage ?>">下一页</span></a> </h3>
</form>
    </body>
</html>
<?php
 
 // 计算总价
  echo '<br>';
  echo $table =sum('收入表明细','income','money');
  echo $commi_name = sum('提成总计','income','commi');
  echo '<div align="center"><span class="STYLE5"><font color="#FF0000">一张单提成为10%,未包括程序员的5%提成</font></span></div>';

?>





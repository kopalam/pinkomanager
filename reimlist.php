<?php 

	session_start();
  error_reporting(0);
	include('conn.php');
	include("header.php");
	if (!$_SESSION['user']) header("location:index.php");
  
  //分页逻辑
       $length = 5;
        $pagenum=$_GET['page']?$_GET['page']:1;
        $offset = ($pagenum-1) * $length;
        $sql = "SELECT * FROM  reim order by id asc limit {$offset},{$length}";
       $query = mysql_query($sql);

	echo '<table width="50%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">';
	echo '<tr>
        
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">编号</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">部门</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">报销人</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">报销是由</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">金额</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">日期</span></strong></div></td>
        
      </tr>';
      echo '<h3 align="center">品高内部系统-报销表单明细</h3><br>';
     

      while($res=mysql_fetch_array($query))
      {
?>
  <html>
 
 <meta http-equiv="content-type" content="text/html" charset="utf8" />
 
 <head>
 
   <title>品高内部系统</title>
 
 </head>
 
 <body>
 
   
    <form method="post" action="reim_action.php">

      
      <tr>
      
        <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $res['id']; ?></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $res['depart']; ?></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $res['reim']; ?></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $res['project']; ?></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $res['money']; ?></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><?php echo $res['dates']; ?></div></td>
      
      </tr>

       




<?php
}
echo "</table>";
//获取上一页下一页
        $prevpage = $pagenum-1;
        $nextpage = $pagenum+1;
?>

<br>
  <h3 align="center" ><a href="reimlist.php?page=<?php echo $prevpage ?>">上一页</a>&nbsp;|&nbsp;<a href="reimlist.php?page=<?php echo $nextpage ?>">下一页</a> </h3>
</form>
 </body>

</html>
<?php
 
 mysql_close();

?>

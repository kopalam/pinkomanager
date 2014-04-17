<?php
  //读取payout表中的内容，并以表格形式显示
  session_start();
   error_reporting(0);
  include("conn.php");
  include 'function.php';
  include 'sum.php';
  if(!$_SESSION['user']) header("location:index.php");
  include("header.php");
  echo '<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />';

  //分页逻辑
        $pagesize = 15;
        $pagenum = $_GET['page']?$_GET['page']:1;
        $offset = ($pagenum - 1) * $pagesize;
        $sql = "SELECT * FROM payout  order by id asc limit {$offset},{$pagesize} ";
        $query = mysql_query($sql);
        

  //表格开始
 
  echo '<table width="50%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">
        <tr>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">项目明细</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">摘要</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">金额</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">日期</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">经手人</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">操作</span></strong></div></td>

      </tr>';
     echo "<h3 align='center'>支出明细表</h3>";

  //循环读取数据开始
  while ( $res = mysql_fetch_array($query)) {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>支出表填写</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE3 {color: #707070; font-size: 12px; }
.STYLE5 {color: #707070; font-size: 14px; }
body {
	margin-top: 0px;
	margin-bottom: 0px;
}
.STYLE7 {font-size: 12}
-->
</style>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
</head>

<body>
<form action="payout_action.php" method="post" >

  <tr>
    <td>
      <tr>
        <td height="26" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['project']; ?> </div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['abs']; ?></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['money']; ?></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['dates']; ?></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center" class="STYLE5"> <?php echo $res['user']; ?></div></td>

        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><a href="pay_edit.php?id=<?php echo $res['id'];?>">编辑</a>
                      <a href="pay_del.php?id=<?php echo $res['id'];?>">删除</a></div></td>
      </tr>

<?php
}
 echo "</table>";

  //获取上一页下一页
        $prevpage = $pagenum-1;
    
        $nextpage = $pagenum+1;


?>
 <br>
  <h3 align="center" ><span class="STYLE5"><a href="paylist.php?page=<?php echo $prevpage ?>">上一页</a>&nbsp;|&nbsp;<a href="paylist.php?page=<?php echo $nextpage ?>">下一页</span></a> </h3>
</form>
</body>
</html>
<?php
 
 

 //开始计算
  echo "<br>";
  echo $sum = sum("已经支出金额","payout",'money');
 mysql_close();


?>

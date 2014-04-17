<?php
	
	session_start();
	if (!$_SESSION['user']) header('location:index.php');
	include 'conn.php';
	include 'header.php';

	// 思路：从获取到的id中，进行数据读取。编辑后使用 update进行修改
	if (!empty($_GET['id'])) {
		# 如果获取到的id不是为空
		$edit = $_GET['id'];
		$sql = "SELECT * FROM payout where id = '{$edit}' limit 1";
		$query = mysql_query($sql);
		$res = mysql_fetch_array($query);
	}
		if (isset($_POST['sub'])) {
		# 验证下面的表单提交
		$hid = $_POST['id'];
		$project = $_POST['project'];
		$abs = $_POST['abs'];
		$money = $_POST['money'];
		$dates = $_POST['dates'];
		$user = $_POST['user'];


		$sql = "UPDATE payout set `project`='$project',`abs`='$abs',`money`='$money',`dates`='$dates',`user`='$user' where id = '$hid' ";
		$query = mysql_query($sql);
		if ($query) {
			echo '修改成功。';
			header('location:paylist.php');
		}else{
		echo "编辑失败，请联系kopa处理一下吧".mysql_error();

		}
		mysql_close();
	}

		
?>
<html>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
<head>
	<title></title>
</head>
<body>
	<h3 align="center">支出表-<?php echo $res['project'] ?>&nbsp;&nbsp;修改</h3><br>
	<form action="pay_edit.php" method="post">
	
	<table width="50%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">
        <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">ID</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">项目明细</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">摘要</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">金额</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">日期</span></strong></div></td>
        <td height="26" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE2">经手人</span></strong></div></td>


      </tr>
      <tr>
      	<td height="22" bgcolor="#FFFFFF"><div align="center"><input type="hidden" name="id" value="<?php echo $res['id'] ; ?>"></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><input type="text" name="project" size="20" value="<?php echo $res['project']; ?>" > </div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text" name="abs"  value="<?php echo $res['abs']; ?>" /></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text" name="money" size="10" value="<?php echo $res['money']; ?>" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><input type="text" name="dates" size="20" value="<?php echo $res['dates']; ?>" ></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><input type="text" name="user" size="10" value="<?php echo $res['user']; ?>" ></div></td>
      </tr>
           
    
    </table>
<br>
			<p align="center"><input type="submit" value="提交" name="sub"> </p>
	</form>
		</body>
</html>


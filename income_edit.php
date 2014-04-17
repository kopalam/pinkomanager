<?php
	
	session_start();
	if (!$_SESSION['user']) header('location:index.php');
	include 'conn.php';
	include 'header.php';

	// 思路：从获取到的id中，进行数据读取。编辑后使用 update进行修改
	if (!empty($_GET['id'])) {
		# 如果获取到的id不是为空
		$edit = $_GET['id'];
		$sql = "SELECT * FROM income where id = '{$edit}' limit 1";
		$query = mysql_query($sql);
		$res = mysql_fetch_array($query);
	}
		if (isset($_POST['sub'])) {
		# 验证下面的表单提交
		$hid = $_POST['id'];
		$project = $_POST['project'];
		$abs = $_POST['abs'];
		$money = $_POST['money'];
		$whether = $_POST['whether'];
		$dates = $_POST['dates'];
		$user = $_POST['user'];
	// 计算提成，使用合同金额乘以5%的提成
		$commi = $money * 0.1;

		$sql = "UPDATE income set `project`='$project',`abs`='$abs',`money`='$money',`whether`='$whether',`user`='$user',`dates`='$dates',`commi`='$commi' where id = '$hid' ";
		$query = mysql_query($sql);
		if ($query) {
			echo '修改成功。';
			header('location:inlist.php');
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
	<form action="income_edit.php" method="post">
	
	<table width="80%" align="center" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9">
      <tr>
       	<td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">ID</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">项目</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">摘要</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">金额</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">签订合同</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">日期</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">提成</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">负责人</span></strong></div></td>
      </tr>
      <tr>
      	<td height="22" bgcolor="#FFFFFF"><div align="center"><input type="hidden" name="id" value="<?php echo $res['id'] ; ?>"></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><input type="text" name="project" size="20" value="<?php echo $res['project']; ?>" > </div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text" name="abs"  value="<?php echo $res['abs']; ?>" /></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text" name="money" size="10" value="<?php echo $res['money']; ?>" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text" name="whether" size="10" value="<?php echo $res['whether']; ?>" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><input type="text" name="dates" size="20" value="<?php echo $res['dates']; ?>" ></div></td>
      	<td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><?php echo $res['commi']; ?></div></td>																		   </td>

        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><input type="text" name="user" size="10" value="<?php echo $res['user']; ?>" ></div></td>
      </tr>
           
    
    </table>

			<p align="center"><input type="submit" value="提交" name="sub"> </p>
	</form>
		</body>
</html>


<?php

	// 主面板
	session_start();
	include("conn.php");
	include("header.php");
	if(!$_SESSION['user']) header("location:index.php");

?>
<html>
 
 <meta http-equiv="content-type" content="text/html" charset="utf-8" />
 
 <head>
 
   <title>品高内部系统</title>
 
 </head>
 
 <body>
 
   <h3 align="center">报销表填写</h1><br>
    <form method="post" action="reim_action.php">

<table width="80%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">部门</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">报销人</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">报销是由</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">金额</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">日期</span></strong></div></td>
      </tr>
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><input type="text"  name="depart" size="20" > </div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="reim" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3">↓下方填写</span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="money" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"> <input type="text"  name="dates" size="20" ></div></td>
      </tr>
      <tr>
         <td height="30" colspan="5" bgcolor="#FFFFFF"><div align="center" class="STYLE5"> <textarea cols="142" rows="12" name="project"></textarea></div></td> 
      </tr>
     </table>
     <br>
    <p align="center"><input type="submit" name="sub" value="提交" /><input type="reset" name="" value="重置" /></p>
   </form>
 </body>

</html>
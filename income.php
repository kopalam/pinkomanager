<?php

	session_start();
	include 'conn.php';
	include 'header.php';

?>
<html>
<meta http-equiv='content-type' content='text/html' charset='utf-8'>
<head>
	<title></title>
</head>
<body>
  <h3 align="center">收入表</h3>
  <br>
	<form action="income_action.php" method="post">
	<table width="60%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">项目</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">摘要</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">金额</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">签订合同</span></strong></div></td>
         <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">合同编码</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">日期</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">负责人</span></strong></div></td>
      </tr>
      <tr>
        <td height="24" bgcolor="#FFFFFF"><div align="center"><input type="text"  name="project" size="20" > </div></td>
        <td height="24" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="abs" size="20" ></span></div></td>
        <td height="24" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="money" size="20" ></span></div></td>
        <td height="24" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><select name="whether" >
        																			 <option value="是" selected="selected" >是</option>
   																				   	 <option value="否">否</option>
      																			   </select> 
      																			   </span>
      																			   </div>
      																			   </td>
        <td height="24" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="number" size="20" ></span></div></td>                                        
      	<td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><input type="text"  name="dates" size="20" ></div></td>				

        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"><input type="text"  name="user" size="20" ></div></td>
      </tr>
      
           
    
    </table>	

    <br>
		<p align="center"><input type="submit" value="提交" name="sub"> </p>
	</form>

		</body>
</html>

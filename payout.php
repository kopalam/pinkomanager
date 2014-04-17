<?php
  session_start();
  if(!$_SESSION['user']) header('location:index.php');
  include 'conn.php';
  include 'header.php';

  

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" charset="utf8" />
<title>支出表填写</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 12px}
.STYLE3 {color: #707070; font-size: 12px; }
.STYLE5 {color: #0a6e0c; font-size: 12px; }
body {
	margin-top: 0px;
	margin-bottom: 0px;
}
.STYLE7 {font-size: 12}
-->
</style>
</head>

<body>
<h3 align="center">支出表填写</h3><br>
<form action="pay_action.php" method="post" >
<table width="50%" border="0" cellpadding="0" cellspacing="1" bgcolor="#c9c9c9" align="center">
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">项目明细</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">摘要</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">金额</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">日期</span></strong></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><strong><span class="STYLE1">经手人</span></strong></div></td>
      </tr>
      <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><input type="text"  name="project[]" size="20" > </div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="abs[]" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="money[]" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="dates[]" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"> 
        	<select name="user[]">
         		<option value="林伟盛" selected="selected">林伟盛</option>
            	<option name="李仲琼">李仲琼</option>
        	</select>
        	</div>
         </td>
      </tr>
            <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><input type="text"  name="project[]" size="20" > </div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="abs[]" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="money[]" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="dates[]" size="20" ></span></div></td>
             <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"> 
        	<select name="user[]">
         		<option value="林伟盛" selected="selected">林伟盛</option>
            	<option name="李仲琼">李仲琼</option>
        	</select>
        	</div>
         </td>
      </tr>
           <tr>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><input type="text"  name="project[]" size="20" > </div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="abs[]" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="money[]" size="20" ></span></div></td>
        <td height="22" bgcolor="#FFFFFF"><div align="center"><span class="STYLE3"><input type="text"  name="dates[]" size="20" ></span></div></td>
              <td height="22" bgcolor="#FFFFFF"><div align="center" class="STYLE5"> 
        	<select name="user[]">
         		<option value="林伟盛" selected="selected">林伟盛</option>
            	<option name="李仲琼">李仲琼</option>
        	</select>
        	</div>
         </td>
      </tr>
    
    </table><br>
    <p align="center"><input  type="submit" name="sub" value="提交" />&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset"   /></p>
</form>
</body>
</html>

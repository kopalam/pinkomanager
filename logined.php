<?php

	session_start();
	include("header.php");

?>

<html>
 
 <meta http-equiv="content-type" content="text/html" charset="utf8" />
 
 <head>
 
   <title>品高内部系统</title>
 
 </head>
 
 <body>

 <form action="login_action.php" method="post">
 		<br />
 		<br />
		<div align="center">用户名:<input type="text" name="user"></div>
		<br>
		<div align="center">密&nbsp;&nbsp;&nbsp;&nbsp;码:<input type="password" name="passwd">
		
<p align="center"><input type="submit" name="sub" value="提交" />&nbsp; 
     
     <input type="reset" name="" value="重置" />
 </form>


 </body>

 </html>



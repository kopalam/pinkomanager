<?php 

	session_start();
	error_reporting(0);
	if($_SESSION['user']) header("location:dashbord.php");

 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>会员登陆界面</title>
<link href="images/login.css" rel="stylesheet" type="text/css" />
</head>
<body>
	<form action="login_action.php" method="post" >
 <div id="login">
	
	     <div id="top">
		      <div id="top_left"><img src="images/login_03.gif" /></div>
			  <div id="top_center"></div>
		 </div>
		 
		 <div id="center">
		      <div id="center_left"></div>
			  <div id="center_middle">
			       <div id="user">用户名:
			         <input type="text" name="user" />
			       </div>
				   <div id="password">密 &nbsp;&nbsp;&nbsp;码:
				     <input type="password" name="passwd" />
				   </div>
				   <div id="btn"><input type="submit" name="sub" value="提交">  </div>
			  
			  </div>
			  <div id="center_right"></div>		 
		 </div>
		 <div id="down">
		      <div id="down_left">
			      <div id="inf">
                       <span class="inf_text">品高 Pinko</span>
					   <span class="copyright">内部交流系统 Version v0.5</span>
			      </div>
			  </div>
			  <div id="down_center"></div>		 
		 </div>

	</div>
</body>
</html>

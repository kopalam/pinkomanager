<?php
    
	
 	//header.php 设置头部导航文件
 	$payout = '支出表填写';
 	$reim = '报销表填写';
 	$income = '收入表填写';
 	$paylist = '支出查询';
 	$reimlist = '报销表查询';	 
 	$inlist = '收入表查询';
 	$dashbord = '面板';
 	$logout = '退出';

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>品高内部系统</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="text/javascript" src="jquery-1.3.2.js"></script>
<style>
div,h1,h2,h3,h4,p,form,label,input,textarea,img,span{margin:0;padding:0;}ul,li{list-style:none;padding:0;margin:0;}img{border:none;}
.csc_top{background:url(./images/shopping_tab.jpg) 0 0 no-repeat;width:958px;height:45px;margin:0 auto;position:relative;z-index:101;}
.slideMenu{height:38px;}
li.current a{color:#00b5f7;cursor:pointer;}
li.current a:hover{color:#00b5f7;cursor:pointer;}
.lavaLampWithImage3 li a:hover,.lavaLampWithImage3 li a:active{border:none;color:#00B5F7;text-decoration:none;}
.lavaLampWithImage3 .sep{padding-top:13px;font-size:10px;color:#aeadad;float:left;height:20px;border-top:none;}
.lavaLampWithImage3{
	position:relative;
	height:30px;
	float:left;
}
.lavaLampWithImage3 .current{color:#008ace;}
.lavaLampWithImage3 .current a{color:#008ace;}
.lavaLampWithImage3 li{float:left;list-style:none;padding-bottom:10px;}
.lavaLampWithImage3 li.back{background:url(b_slider.gif) center bottom no-repeat;width:120px;height:28px;z-index:8;position:absolute;}
.lavaLampWithImage3 li a{font:bold 14px arial;text-decoration:none;color:#303030;outline:none;text-align:center;top:6px;letter-spacing:0;z-index:10;display:block;float:left;height:28px;position:relative;overflow:hidden;padding:5px 20px 0 17px;font-family:"Microsoft Yahei",Arial,Helvetica,sans-serif,"微软雅黑";font-weight:normal;font-size:13px;}
</style>
</head>

<body>
<br />
<div class="csc_top">
	<div class="shead_left">
	  <ul  id="1" class="lavaLampWithImage3">	  	
		
	  			<li class="current">
             	   <a href="payout.php" style="padding: 5px 30px 0;" ><?php echo $payout; ?></a>
				</li>
				<span class="sep">|</span>
	  			<li class="current">
					 <a href="reim.php" style="padding: 5px 30px 0;" ><?php echo $reim; ?></a>
				</li>
				<span class="sep">|</span>
	  			<li class="current">
					 <a href="income.php" style="padding: 5px 30px 0;" ><?php echo $income; ?></a>
				</li>
				<span class="sep">|</span>
	  			<li class="current">
					 <a href="paylist.php" style="padding: 5px 30px 0;" ><?php echo $paylist; ?></a>
				</li>
				<span class="sep">|</span>
                <li class="current">
					 <a href="reimlist.php" style="padding: 5px 30px 0;" ><?php echo $reimlist; ?></a>
				</li>
				<span class="sep">|</span>
               <li class="current">
					 <a href="inlist.php" style="padding: 5px 30px 0;" ><?php echo $inlist; ?></a>
				</li>
				<span class="sep">|</span>
                <li class="current">
					 <a href="dashbord.php" style="padding: 5px 30px 0;" ><?php echo $dashbord; ?></a>
				</li>
				<!-- <span class="sep">|</span> -->
				<li class="current">
					 <a href="logout.php" style="padding: 5px 30px 0;" ><?php echo $logout; ?></a>
				</li>
				
	 </ul>
	</div>
	
	
</div>



</div>


<script type="text/javascript" src="MZPub-CSC-0121.js"></script>
<br />
<hr />
</body>
</html>
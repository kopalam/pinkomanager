<?php

//sum的function是用来记录支出/收入的金额总数。
// 现在遇到的问题是，如何将计算 收入表-支出表的差。
 include 'conn.php';
// function函数包括 中文提示name，表名 table_name,所需要查询的字段$what
 function sum($name,$table_name,$what){

 	// 进行数据筛选
 	$sql = "SELECT * FROM {$table_name} ";
 	$query = mysql_query($sql);
 	$list = array();
 	$sum1 = 0;

 	while($res = mysql_fetch_array($query))
 	{
 		$list[]=$res;
 		$sum1 += $res[$what];
 	}
 	//检测录入的表名，如果是payout，显示负数
	if($table_name == 'payout'){
	echo  '<h3 align = "center" >'.$name.":"."&nbsp;- ".$sum1.'元'."</h3>";
	}
	elseif($table_name == 'income'){
		echo  '<h3 align = "center" >'.$name.":".$sum1.'元'."</h3><br>";
	}else{
		echo '<h3 align = "center" >'.$name.":".$sum1.'元'."</h3>";

	}

}


 // $sum2 = $sum('收入表:','income');
 // $sum1 = $sum('收入表:','payout');






?>
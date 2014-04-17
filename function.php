<?php

	include 'conn.php';
	error_reporting(0);
	// 函数: 长度 $pagesize = 5,调取的库 $sql = '';

	function fenye($table_name){
		$pagesize=5;
		$pagenum = $_GET['page'] ? $_GET['page'] : 1;
		$offset = ($pagenum - 1) * $pagesize;
		$sql = "SELECT * FROM {$table_name} order by id asc limit {$pagenum},{$pagesize} ";
		$query = mysql_query($sql);
		

		// $list = array();
		// while($res = mysql_fetch_array($res))
		// {
		// 	array_push($list, $res);
		// }

		 // $prevpage = $pagenum-1;
		
   //      $nextpage = $pagenum+1;


	}
	

	

?>
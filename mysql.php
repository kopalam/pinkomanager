<?php

	include 'conn.php';

	$sql = "SELECT * from income";
	$result = mysql_query($sql);
	$sum = 0; //总价
	$list = array();

	while ($row = mysql_fetch_assoc($result)) {
		$list[]=$row;
		$sum += $row['money'];
	}
	echo $sum;

?>


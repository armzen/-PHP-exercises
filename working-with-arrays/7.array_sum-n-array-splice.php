<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3> Գտնել միջին ջերմաստիճանը:</h3>
<h3> Գտնել ցածրագույն 7 արժեքները ջերմ-ի:</h3>
<h3> Գտնել բարձրագույն 7 արժեքները ջերմ-ի:</h3>
<?php

	$arr = array(78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73 );
	
	$sum = array_sum($arr);
	$length = count($arr);
	
	$middle_temperature = $sum/$length;
	echo $middle_temperature . '<br><br>';
	
	/* 7 lowest values */
	$sorted = sort($arr);
	print_r($arr); echo '<br><br>';
	$lowest = array_splice($arr,0,7);
	print_r($lowest); echo '<br><br>';
	
	/* 7 highest values */
	$highest = array_splice($arr, count($arr)-7, 7);
	print_r($highest);
	
	
 
?>
</body>
</html>


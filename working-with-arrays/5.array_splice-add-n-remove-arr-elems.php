<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3> Նոր էլեմ ավելացում և պակասեցում, զանգ-ի ցանկացած մասում:</h3>
<h4> array_splice($arr, $start_point, $quantity, $add_element).</h4>
<?php
	$arr1 = array( 1, 2, 3, 4, 5);
	for($i = 0; $i < count($arr1);$i++ ) {
		echo $arr1[$i] . ' ';
	}
	echo '<br>';
	$arr2 = array_splice($arr1, 2, 0, 8 );
	print_r($arr2); echo '<br>';
	var_dump($arr1);echo '<br>';
	
	echo '<br>';
	$arr1;
	$arr3 = array_splice($arr1, 4,1);
	print_r($arr1);echo '<br>';
	print_r($arr3);
	
?>
</body>
</html>

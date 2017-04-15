<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title>Sorting Arrays</title>
	<style>
		h4{
			margin-bottom: 0;
		}
	</style>
</head>
<body>
<?php

	$arr = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");
	
	/* a) ascending order sort by value */
	echo '<h4> Sorting-up by value. </h4>';
	asort($arr);
	print_r($arr);
	//Array ( [Sophia] => 31 [William] => 39 [Ramesh] => 40 [Jacob] => 41 ) 
	
	/* b) ascending order sort by Key */
	echo '<h4> Sorting-down by key. </h4>';
	ksort($arr);
	print_r($arr); 
	/*keys are (string) */
	// Array ( [Jacob] => 41 [Ramesh] => 40 [Sophia] => 31 [William] => 39 )
	
	/* c) descending order sorting by Value */
	echo '<h4> Sorting-down by value. </h4>';
	arsort($arr);
	print_r($arr); 
	// Array ( [Jacob] => 41 [Ramesh] => 40 [William] => 39 [Sophia] => 31 )
	
	/* d) descending order sorting by Key */
	echo '<h4> Sorting-down by key. </h4>';
	krsort($arr);
	print_r($arr);
	


?>
</body>
</html>

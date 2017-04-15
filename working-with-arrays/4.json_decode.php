<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<title></title>
</head>
<body>
<h3> JSON -object-ի ապակոդավերում php-ասսոց զանգվածի:</h3>
	<?php
		
		$json = '
		{
			"Title": "HTML5, The missing manual",
			"Author":"Mattew MacDonald",
			"Detail":
			{
				"Publisher": "O\'Reily"
			}		
		}'
		;
		
		$json_de = json_decode($json, TRUE);
		echo '<pre>';
		print_r( $json_de);
		echo '</pre>';
		
		function json_viewer( $value, $key) {
			
			echo "$key : $value <br>";
		}
		
		array_walk_recursive($json_de, 'json_viewer');

		
	?>
</body>
</html>

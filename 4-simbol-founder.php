<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        h1{ font-weight: 300;}
        input[name="pattern"]{ width: 239px;margin-bottom: 6px;}
    </style>
</head>
<body>
   
    <h1>Ցանկացած սիմվոլի որոնման ալգորիթմ:</h1>
    
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">      
        <input type="text" name="pattern" placeholder="pattern">
        <input type="submit" value="submit" id="sbb"><br>
        <textarea name="subject" cols="40" rows="5"></textarea>
    </form>
    
    
    <?php
    if(isset($_POST["pattern"]) && isset($_POST['subject'])){
        
        $a = $_POST["pattern"];
        $str = $_POST['subject'];    
        $count = 0;    
    
        for( $i = 0; $i < mb_strlen($str); $i++){
            if( $a === $str[$i])
                $count++;
                $count;
                //echo $str[$i] . '<br>';
        }
    echo $count;
        echo '<br>';
    }
          
          
        $search  = array('A', 'B', 'C', 'D', 'E');
        $replace = array('B', 'C', 'D', 'E', 'F');
        $subject = 'B, C, D';
        echo str_replace($search, $replace, $subject);
    
    ?>
	
	<script>
		sbb.onclick = function (){
			sbb.style.background = 'crimson';
		}
	
	</script>
	
</body>
</html>
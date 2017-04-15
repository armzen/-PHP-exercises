<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
   <h2> Գրել php script, որ կգտնի ամենակարճ ու ամ-երկար տողերի երկար-ները:</h2>
    <ul>
        <li>քայլ մեկ, արժեքների երկարությունները վերցնել.$x = mb_strlen()</li>
        <li>քայլ երկու, լցնել զանգ-ի մեջ, թվային զանգ ստանալ.$x[$i]</li>
        <li>քայլ երեք, սորթավորել ըստ աճման( ու արդեն կարող ենք վերցնել մեր ուզածը)</li>
        <li>քայլ չորս,լրացուցիչ անցկացնել max() և min() ֆունկց-երով.</li>
        <li>քայլ հինգ, տպել մաքս մին արժեքները.</li>
    </ul>
</body>
</html>
<?php

$arr = array("abcd","abc","de","hjjj","g","wer");

for($i = 0; $i < count($arr); $i++) {
    
    // important ! $v_len must be array
    $v_len[$i] = mb_strlen($arr[$i]);
    //echo $v_len[$i] . ' ';
   
   
}
sort($v_len);
print_r($v_len); echo '<br>';
$max_len = max($v_len);
$min_len = min($v_len);
echo "<p> Max length ov all vallues is: $max_len </p>";
echo "<p> Min length ov all vallues is: $min_len </p>";

?>
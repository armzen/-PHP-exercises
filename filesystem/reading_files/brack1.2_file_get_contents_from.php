<?php

/* FILE_USE_INCLUDE_PATH - սա հեչ էլ պարտադիր չէ: */

$include_path = "../../folder/oop1.php";
$get_cont = file_get_contents("../../folder/oop1.php", FILE_USE_INCLUDE_PATH);

$get_cont_arr = explode("<br>", $get_cont);

echo '<pre>';
print_r($get_cont_arr);
echo '</pre>';

?>
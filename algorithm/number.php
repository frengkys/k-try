<?php

$input= 1345679;
$length= strlen($input);
$arr = str_split($input);

foreach($arr as $obj){
    echo '<br />';
    $pow = $length--;
    echo $obj * pow(10, $pow-1);
}
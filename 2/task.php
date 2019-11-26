<?php 
$n = (int)$_REQUEST['n'];
$k = (int)$_REQUEST['k'];
$count = 1;
$ms[0]="0";
while ($count != $n + 1) {
    $ms[$count] = (string)$count . "_";
    $count++;
}
sort($ms);
// var_dump($ms);
echo (array_search($k."_", $ms));
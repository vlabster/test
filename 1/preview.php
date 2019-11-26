<?php
$articleName = $_REQUEST["articleName"];
$articleText = $_REQUEST["articleText"];
$articleLink = __DIR__ . "\acticle.php?articleName=$articleName";
if (strlen($articleText) > 199) {
    $article200Len = substr($articleText, 0, 199)."...";
    $count = 0;
    $ind = strlen($article200Len);
    while ($count != 3) {
        if ($article200Len{$ind} == ' ') {
            $count++;
        }
        $ind--;
    }
    $article200Len = substr($article200Len, 0, $ind)."<a href='$articleLink'>".substr($article200Len, $ind, 203)."</a>";
}
var_dump($articleLink);
var_dump($article200Len);
?>
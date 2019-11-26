<!DOCTYPE html>
<html lang="xyz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$articleName = $_REQUEST["articleName"];
$articleText = $_REQUEST["articleText"];
$articleLink = "article.php?articleName=$articleName&articleText=$articleText";
if (strlen($articleText) > 199) {
    $article200Len = substr($articleText, 0, 199)."...";
    $count = 0;
    $ind = strlen($article200Len);
    while ($count != 4) {
        if ($article200Len{$ind} == ' ') {
            $count++;
        }
        $ind--;
    }
    $article200Len = substr($article200Len, 0, $ind)."<a href='$articleLink'>".substr($article200Len, $ind, 203)."</a>";
}
// var_dump($articleLink);
// var_dump($article200Len);
echo("<p>$article200Len</p>");
?>
</body>
</html>

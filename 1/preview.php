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
    $articlePreview = substr($articleText, 0, 199)."...";
    $count = 0;
    $ind = strlen($articlePreview);
    while ($count != 4) {
        if ($articlePreview{$ind} == ' ') {
            $count++;
        }
        $ind--;
    }
    $articlePreview = substr($articlePreview, 0, $ind)."<a href='$articleLink'>".substr($articlePreview, $ind, 203)."</a>";
}
// var_dump($articleLink);
// var_dump($articlePreview);
echo("<p>$articlePreview</p>");
?>
</body>
</html>

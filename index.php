<?php
$string = 'bonjour';
$int = 10;
$float = 5.2;
$vrai = true;
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p><?=$string?></p>
    <p><?=$int?></p>
    <p><?=($float)?></p>
    <p><?=$vrai?></p>
    <p><?=gettype($vrai)?></p>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$intRandom = rand(0, 30); // random_int pour crypter

for($int = 1; $int<100; $int++)
{
    
    if($int != $intRandom)
    {
        echo "Random : ".$intRandom." ".$int." ";
    }
    else
    {
        break;
    }
}
?>
</body>
</html>
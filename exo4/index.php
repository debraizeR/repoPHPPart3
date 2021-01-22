<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$int = 1;

while($int < 10)
{
    echo $int."\n"; 
    $int = $int + ($int/2); //$int += $int/2;
}

?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
for($int=0;$int<100;$int++)
{
    if(fmod($int, 3) != 0)
    {
        echo $int." ";
    }
}
?>
</body>
</html>
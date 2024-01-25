<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yes</title>
</head>
<body>
<?php
$num = 1;
$yes = 1;
$n = 10;
for($i = 1; $i <= $n; $i++){
    $yes++;
    for($k = 1; $k < $yes; $k++){
        echo $num. "\n";
        $num++;
    }
    echo "<br>";
}
?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Min</title>
</head>
<body>
    <?php
    $arr = [32,43,12,14,5,5];
    print_r($arr);
    echo "<br>";
    $v = 43;
    $index = null;
    for ($i=0;$i<count($arr);$i++) {
        if ($v === $arr[$i]) {
            $index =$i;
            unset($arr[$i]);
        }
    }
    print_r($arr);
    echo "<br>";
    echo 'Giá trị index bị xóa: ' . $index;


?>
</body>
</html>
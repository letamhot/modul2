<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Min_array</title>
</head>
<body>
<?php 
    $arr = [5, 1 , 2, 3];
    $min = $arr[0];
    $vt = 0;
    for($i = 0; $i< count($arr); $i++) {
        if($min > $arr[$i]){
            $min = $arr[$i];
            $vt = $i;
        }
    }
    echo 'Số nhỏ nhất là: ' . $min;
    echo '<br>';
    echo 'Giá trị index: '. $vt;
   
    
?>
</body>
</html>
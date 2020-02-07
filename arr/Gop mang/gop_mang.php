<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gộp Mảng</title>
</head>
<body>
    <?php 
        $arr1 = [5,44,51,56,12];
        $arr2 = [22,24,51,12,2];
        $arr3 = array_merge($arr1,$arr2);
        echo "<pre>";
        print_r($arr3);
        echo "</pre>";
    ?>
    
</body>
</html>
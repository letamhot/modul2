<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Max_array</title>
</head>
<body>
    <?php
$arr1 = [
    [4, 5, 2, 4, 51, 55, 41],
    [52, 5, 41, 4, 51, 4, 2],
    [2, 5, 3, 4, 7, 41, 22],
];
$max = $arr1[0][0];
$a = 0;
$b = 0;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 7; $j++) {
        if ($arr1[$i][$j] > $max) {
            $max = $arr1[$i][$j];
            $a = $i;
            $b = $j;
        }
    }
} 
echo 'Giá trị lớn nhất là: ' . $max;
echo '<br>';
echo 'Vị trí: ' . $a . ',' . $b;


?>
</body>
</html>
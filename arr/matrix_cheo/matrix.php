<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Matrix_cheo</title>
</head>

<body>
    <form action="matrix.php" class="content" method="POST">
        <input type="number" name="x" value="0">
        <input type="number" name="y" value="0">
        <input type="submit" name="create" value="Go">
    </form>
    <?php
// function checkdive($a, $b){
//
//     return $a / $b;
// }
if (isset($_POST['create'])) {
    $x = $_POST['x'];
    $y = $_POST['y'];
    if ($x <= 0 && $y <= 0) {
        echo 'error';
    }elseif ($x != $y) {
        echo "Không phải ma trận vuông";
    } else {
        $a = GenerateMatrix($x, $y);
        $b = ShowMatrix($x, $y, $a);
        $c = SumMatrix($x, $y, $a);
        print_r($b);
        print_r('Tổng đường chéo chính là: ' . $c);
    }
}
function GenerateMatrix($row, $col)
{
    $matrix = array($row);
    for ($i = 0; $i < $row; $i++) {
        $arr = array($col);
        for ($j = 0; $j < $col; $j++) {
            $arr[$j] = rand(0, 10);
        }
        $matrix[$i] = $arr;
    }
    return $matrix;
}
function ShowMatrix($row, $col, $matrix)
{
    $str = "<table>";

    for ($i = 0; $i < $row; $i++) {
        $str = $str . "<tr>";
        for ($j = 0; $j < $col; $j++) {
            $str = $str . "<td>" . $matrix[$i][$j] . "</td>" . "&nbsp;";

        }

        $str = $str . "</tr>" . "<br>" . "</table>";
    }
    return $str;
}
function SumMatrix($row, $col, $matrix)
{
    $row = $col;
    $sum = 0;
    for ($i = 0; $i < $row; $i++) {
        $sum += $matrix[$i][$i];
    }
    return $sum;
}

?>
</body>
</html>
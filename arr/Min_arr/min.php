<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Min</title>
</head>
<body>
    <form class="content" method="POST">
        <input type="number" name="row" value="0">
        <input type="number" name="col" value="0">
        <input type="submit" name="create" value="Go">
    </form>
    <?php 
    if (isset($_POST['create'])) {
        $row = $_POST['row'];
        $col = $_POST['col'];
    }
    function GenerateMatrix($row, $col){
        $matrix = array($row);
        for($i=0; $i< $row; $i++){
            $arr = array($col);
            for($j = 0; $j< $col; $j++){
                $arr[$j] = rand(0,10);
            }
            $matrix[$i] = $arr;
        }
        return $matrix;
    }
    function ShowMatrix($row, $col, $matrix){
        $str = "<table>";
    
        for ($i=0; $i < $row; $i++){
            $str = $str . "<tr>";
            for($j = 0; $j< $col; $j++){
                $str = $str . "<td>" . $matrix[$i][$j] . "</td>" . "&nbsp;";
                
            }
 
            $str = $str . "</tr>"."<br>"."</table>";
        }
        return $str;
    }
    $a = GenerateMatrix($row, $col);
    $b = ShowMatrix($row, $col, $a);
    print_r($b);
    echo "<br>";
    echo 'Giá trị min là: ';
    minValue($row, $col, $a);
     function minValue($row, $col, $matrix){
         $min = $matrix[0][0];
         for($i =0;$i < $row; $i++){
             for($j=0;$j <$col; $j++){
                 if($min > $matrix[$i][$j]){
                     $min = $matrix[$i][$j]; 
                 }
             }
         }echo $min;
     }
?>
</body>
</html>
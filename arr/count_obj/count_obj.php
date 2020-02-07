<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Count</title>
</head>
<body>
<!-- <form action="count_obj.php" method="post">
<input type="text" class="text" value="Nhập">
<input type="submit" class="sub" value="Tổng">
</form> -->
    <?php 
        $obj= "Hello World";
        print_r($obj);
        echo '<br>';
        $count = null;
        $count1 = null;
        $count2 = null;
        $count3 = null;
        $count4 = null;
        $count5 = null;
        $position = null;
        $position1 = null;
        $position2 = null;
        $position3 = null;
        $position4 = null;
        $position5 = null;

        echo 'Tổng số kí tự: ' . strlen($obj) . '<br>';
        for($i = 0; $i < strlen($obj); $i++){
            if($obj[$i] == strtoupper('h') || $obj[$i] == strtolower('H')){
                $position .= $i . '<br>';
                $count++;
            }
            if($obj[$i] == strtoupper('e') || $obj[$i] == strtolower('E')){
                $position1 .= $i . '<br>';
                $count1++;
            }
            if($obj[$i] == strtoupper('l') || $obj[$i] == strtolower('L')){
                $position2 .= $i . '<br>';
                $count2++;
            }
            if($obj[$i] == strtoupper('o') || $obj[$i] == strtolower('O')){
                $position3 .= $i . '<br>';
                $count3++;
            }
            if($obj[$i] == strtoupper('d') || $obj[$i] == strtolower('D')){
                $position4 .= $i . '<br>';
                $count4++;
            }
            if($obj[$i] == strtoupper('w') || $obj[$i] == strtolower('W')){
                $position5 .= $i . '<br>';
                $count5++;
            }
        }
        echo '<br>';
        echo 'Số ký tự h: ' . $count;
        echo '<br>';
        echo 'Số ký tự e: ' . $count1;
        echo '<br>';
        echo 'Số ký tự l: ' . $count2;
        echo '<br>';
        echo 'Số ký tự o: ' . $count3;
        echo '<br>';
        echo 'Số ký tự d: ' . $count4;
        echo '<br>';
        echo 'Số ký tự w: ' . $count5;
    ?>
</body>
</html>

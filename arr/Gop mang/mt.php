<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Máy tính</title>
</head>
<body>

   <form action="" method="post">
   Nhập x:
   <input type="number" name="x" value="0"/>
   Phép tính:
   <select name="ch">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/</option>
    </select>
   Nhập y:
   <input type="number" name="y" value="0"/>
   <br>
    <input type="submit" name="save" value="Tính">
   </form>
   <?php
   function checkdive($a, $b){
       if($a == 0 && $b == 0 || $b == 0){
           throw new Exception('error');
       }
       return $a / $b;
   }
extract($_POST);

if (isset($_POST['save'])) {
    $x = $_POST['x'];
    $ch = $_POST['ch'];
    $y = $_POST['y'];
    $res = null;
    //if (isset($save)) {
        switch ($ch) {
            case '+':
                $res = $x + $y;
                break;
            case '-':
                $res = $x - $y;
                break;
    
            case '*':
                $res = $x * $y;
                break;
            case '/':
                try{
                    $res = checkdive($x, $y);
                    // $res = $x / $y;
                   }
                   catch(Exception $e)
                   {
                       echo $e->getMessage();
                   // echo "<p>Lỗi hiện tại: " . $e->getMessage() . "</p>";
                   }
                break;
            default:
                return 'Wrong';
    
        }
    
    //}
    echo $res;
}
?>
</body>
</html>
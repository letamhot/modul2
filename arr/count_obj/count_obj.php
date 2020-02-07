<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Count</title>
</head>
<body>

<form action="count.php" method="post">
    <input type="text" name="str" value="<?= $str??null ?>">
    <input type="text" name="char" value="<?= $char??null ?>">
    <input type="submit" name="sub" value="Tổng">
</form>
<?php
if (isset($_POST['sub'])) {
    $str = $_POST['str'];
    echo 'Chuổi ký tự: ' .$str . '<br>';
    $char = $_POST['char'];
    echo 'Ký tự: ' . $char . '<br>';
    $count = 0;
    $possion = null;
    for ($i = 0; $i < strlen($str); $i++) {
        if ($char === $str[$i]) {
            $possion = $i;
            $count++;
            echo 'Vị trí xuất hiện: ' . $possion . '<br>';
        }
    }
    echo 'Số lần xuất hiện của ký tự: ' . $count;
}
?>
</body>
</html>

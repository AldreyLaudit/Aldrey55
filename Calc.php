<?php
if(isset($_GET['operation'])){
$x = $_GET['num1'];
$y = $_GET['num2'];
$op = $_GET['operation'];

switch($op){
        case 'add' : $result = $x + $y;
    break;
        case 'sub' : $result = $x - $y;
    break;
        case 'multi' : $result = $x * $y;
    break;
        case 'div' : $result = $x / $y;
    break;
    }
}
?>
<!doctype html>
<html lang="en">
<head>
<title>Calculator</title>
</head>
<body>
    <form action="<?= $_SERVER['PHP_SELF']?>"method="get">

    <div>
    <label for="num1">Input the first number:</label>
    <input type="number" name="num1" id="num1">
    </div>

    <div>
    <label for="num2">Input the second number:</label>
    <input type="number" name="num2" id="num2">
    </div>

    <div>
    <label for="result">Result</label> 
    <input type="number" id="result" value="<?= $result?>" disabled>
    </div>

    <div>
    <input type="submit" value="add" name="operation">
    <input type="submit" value="sub" name="operation">
    <input type="submit" value="multi" name="operation">
    <input type="submit" value="div" name="operation">
    </div>

</body>
</html>
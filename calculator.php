<?php

function getResult()
{

    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $mathSymbol = $_POST['math_symbol'];

    if (is_numeric($number1) && is_numeric($number2)) {

        switch ($mathSymbol) {
            case "+":
                echo $number1 + $number2;
                break;
            case "-":
                echo $number1 - $number2;
                break;
            case "*":
                echo $number1 * $number2;
                break;
            case "/":
                echo $number1 / $number2;
                break;
        }

    } else {

        echo "<span style='color: red;'>Not Correct Numbers</span>";

    }

}

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Calculator</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>

<body>
<form action="" method="post">
    <input type="text" name="number1" placeholder="Number">
    <select name="math_symbol">
        <option>+</option>
        <option>-</option>
        <option>/</option>
        <option>*</option>
    </select>
    <input type="text" name="number2" placeholder="Number">
    <button name="send">Calc</button>

    <?php

    if (!empty($_POST['number1']) && !empty($_POST['number2'])) {

        echo "<br><b>Result:</b> ";
        getResult();

    } else {

        echo "<span style='color: red;'>Empty Fields</span>";

    }

    ?>

</form>
</body>
</html>

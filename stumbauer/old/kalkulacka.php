<?php
    function secti($a, $b) {
        return $a + $b;
    }

    function odecti($a, $b) {
        return $a - $b;
    }

    function nasob($a, $b) {
        return $a * $b;
    }

    function vydel($a, $b) {
        if ($b == 0) {
            return "Nelze dělit nulou";
        } else {
            return $a / $b;
        }
    }
    
    $vysledek = 0;
    $a = 0;
    $b = 0;

    if (isset($_POST["result"])) {
        switch($_POST["operator"]) {
            case "+": $vysledek = secti($_POST["a"], $_POST["b"]);
                break;
            case "-": $vysledek = odecti($_POST["a"], $_POST["b"]);
                break;
            case "*": $vysledek = nasob($_POST["a"], $_POST["b"]);
                break;
            case "/": $vysledek = vydel($_POST["a"], $_POST["b"]);
                break;
            default;
                break;
        }
        $a = $_POST["a"];
        $b = $_POST["b"];
    }
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="kalkulacka.php" method="post">
        <input type="number" name="a" value="<?php echo $a ?>">
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="b" value="<?php echo $b ?>">
        <input type="submit" name="result" value="=">
        <input type="text" value="<?php echo $vysledek ?>" readonly>
</body>
</html>
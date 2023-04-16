<?php
    function secti($a, $b) {
        return $a + $b;
    }

    function odecti($a, $b) {
        return $a - $b;
    }

    function nasobeni($a, $b){
        return $a * $b;
    }

    function deleni($a, $b){
        if($b==0){
            return "nelze dělit nulou";
        }else{
            return $a / $b;
        }
    }

    $vysledek = 0;
    $a = $b = 0;

    if(isset($_POST['result'])) {
        switch($_POST['operace']) {
            case "+": $vysledek = secti($_POST['a'], $_POST['b']);
                break;
            case "-": $vysledek = odecti($_POST['a'], $_POST['b']);
                break;
            case "*": $vysledek = nasobeni($_POST['a'], $_POST['b']);
                break;
            case "/": $vysledek = deleni($_POST['a'], $_POST['b']);
                break;
            default:
                break;
        }
        $a = $_POST['a'];
        $b = $_POST['b'];
    }

?><!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index2.php" method="post">
        <input type="text" name="a" value="<?php echo $a; ?>">
        <select name="operace" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="b" value="<?php echo $b; ?>">
        <input type="submit" name="result" value="=">
        <input type="text" name="vysledek" value="<?php echo $vysledek; ?>">
    </form>    
</body>
</html>
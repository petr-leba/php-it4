<?php
function secti($a, $b) {
    return $a + $b;
}

function odecti($a, $b) {
    return $a - $b;
}

function vynasob($a, $b) {
    return $a * $b;
}

function vydel($a, $b) {
    return $a / $b;
}

$vysledek = 0;
$a = $b = 0;
if(isset($_POST['result'])) {
    switch($_POST['operace']) {
        case "+"; $vysledek = secti($_POST['a'], $_POST['b']);
            break;
        case "-"; $vysledek = odecti($_POST['a'], $_POST['b']);
            break;
        case "*"; $vysledek = vynasob($_POST['a'], $_POST['b']);
            break;
        case "/"; $vysledek = vydel($_POST['a'], $_POST['b']);
            break;
        default:
            break;
    }
    $a = $_POST['a'];
    $b = $_POST['b'];
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulačka</title>
</head>
<body>
    <form action="index1.php" method="post">
        <input type="text" name="a" value="<?php echo $a ?>" required autofocus>
        <select name="operace" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="b" value="<?php echo $b ?>" required>
        <input type="submit" name="result" value="=">
        <input type="text" name="vysledek" value="<?php echo $vysledek ?>" disabled>
    </form>
</body>
</html>
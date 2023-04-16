<?php
function secist($a, $b) {
    return $a + $b;
}

function odecist($a, $b) {
    return $a - $b;
}

function nasobit($a, $b) {
    return $a * $b;
}

function delit($a, $b) {
    return $a / $b;
}

$vysledek = 0;
$a = $b = 0;
if(isset($_POST['result'])) {
    switch($_POST['operace']) {
        case "+"; $vysledek = secist($_POST['a'], $_POST['b']);
            break;
        case "-"; $vysledek = odecist($_POST['a'], $_POST['b']);
            break;
        case "*"; $vysledek = nasobit($_POST['a'], $_POST['b']);
            break;
        case "/"; $vysledek = delit($_POST['a'], $_POST['b']);
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
    <title>calc</title>
</head>
<body>
    <form action="indexos.php" method="post">
        <input type="text" name="a" value="<?php echo $a ?>">
        <select name="operace" id="">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="b" value="<?php echo $b ?>">
        <input type="submit" name="result" value="=">
        <input type="text" name="vysledek" value="<?php echo $vysledek ?>" disabled>
    </form>
</body>
</html>
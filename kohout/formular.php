<?php
print_r($_GET);
$cm = 0;
$stopy = 0;
if(isset($_GET["cm"])) {
    $cm = $_GET["cm"];
    $stopy = $_GET["cm"] * 0.0328;
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>
    <form action="formular.php" method="get">
        <label for="id_cm">cm: <input type="text" name="cm" id="id_cm"></label>
        <br>
        <label for="id_stop">stopy: <input type="text" name="id_stop" value="<?php
        echo $stopy;?>"></label>
        <br>
        <input type="submit" name="Odeslat" value="Převeď">
    </form>
</body>
</html>

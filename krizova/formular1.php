<?php
    print_r($_GET);
    $foot = 0;
    $cm = 0;
    if(isset($_GET['cm'])) {
        $cm = $_GET['cm'];
        $foot = $_GET['cm'] / 30.48;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
    <form action="" method="get">
        <label for="id_cm">Cm: <input id="cm" type="text" name="cm" value="<?php echo $cm; ?>"></label>
        <label for="foot">Foot: <input id="foot "type="text" name="foot" value="<?php echo $foot; ?>"></label>
        <input type="submit" name="Odeslat" value="Převeď">
    </form>
</body>
</html>
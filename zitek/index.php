<?php
    $ft = 0;
    $cm = 0;
    if(isset($_GET['cm'])) {
        $cm = $_GET['cm'];
        $ft = $_GET['cm'] / 30.48; 
}
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formular</title>
</head>
<body>
    <form action="" method="get">
        <label for="id_cm">cm: <input id="id_cm" type="text" name="cm" value="<?php
            echo $cm;
        ?>"></label>
        <br>
        <label for="id_ft">stopy: <input id="id_ft" type="text" name="ft" value="<?php
            echo $ft;
        ?>"></label>
        <br>
        <input type="submit" name="Odeslat" value="Převeď">

    </form>
</body>
</html>
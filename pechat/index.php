<?php
    print_r($_GET);
    $inch = 0;
    $cm = 0;
    $feat = 0;
    if(isset($_GET['cm'])) {
        $cm = $_GET['cm'];
        $inch = $_GET['cm'] / 2.54;
        $feat = $_GET['cm'] / 30.48;
    }
     
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Formular</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="id_cm">cm: <input id="id_cm" type="text" name="cm" value="<?php
            echo $cm;
        ?>"></label>        
        <br>
        <label for="id_inch">palce: <input id="id_inch" type="text" name="inch" value="<?php
            echo $inch;
        ?>"></label>
        <br>
        <label for="id_feat">stop: <input id="id_feat" type="text" name="feat" value="<?php
            echo $feat;
        ?>"></label>
        <br>
        <input type="submit" name="Odeslat" value="Převeď">
    </form>
</body>
</html>
<?php
    print_r($_GET);
    $feet = 0;
    $cm = 0;
    if(isset($_GET['cm'])) {
        $cm = $_GET['cm'];
        $feet = $cm / 2.54 / 12;   
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
        <label for="id_feet">feet: <input id="id_feet" type="text" name="feet" value="<?php
            echo $feet;
        ?>"></label>
        <br>
        <input type="submit" name="Odeslat" value="Pøeveï">
    </form>
</body>
</html>

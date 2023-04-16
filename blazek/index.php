<?php
    print_r($_GET);
    $feet = 0;
    $cm = 0;
    if(isset($_GET['cm'])) {
        $cm = $_GET['cm'];
        $feet = $_GET['cm'] /30.48;   
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
        <label for="id_nohy">stopy: <input id="id_nohy" type="text" name="nohy" value="<?php
            echo $feet;
        ?>"></label>
        <br>
        <input type="submit" name="Odeslat" value="Převeď">
    </form>
</body>
</html>
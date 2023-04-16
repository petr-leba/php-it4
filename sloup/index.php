<?php
    print_r($_GET);
    $inch = 0;
    $cm = 0;
    if(isset($_GET['cm'])) {
        $cm = $_GET['cm'];
        $inch = $_GET['cm'] / 30.48;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="get">
        <label for="">cm: <input id="id_cm" type="text" name="cm" value="">
        <?php
            echo $cm
        ?>
        </label>
        <br>
        <label for="">stopy: <input id="id_feet" type="text" name="feet" value="<?php
            echo $inch
        ?>">
        </label>
        <br>
        <input type="submit" name="odeslat" value="Převeď">
    </form>
</body>
</html>
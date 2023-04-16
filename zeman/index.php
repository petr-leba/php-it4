<?php
    print_r($_GET);
    $inch = 0;
    $cm = 0;
    $stopa = 0;
    if(isset($_GET['cm'])) {
        $cm = $_GET['cm'];
        $inch = $_GET['cm'] / 2.54;
        $stopa = $_GET['cm'] / 30.48;   
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        <label for="id_cm">cm:<input id="id_cm" type="text" name="cm" value="
        <?php
            echo $cm;
        ?>"></label>
        <br>
        <label for="id_inch">palce:<input id="id_inch" type="text" name="inch" value="
        <?php
            echo $inch;
        ?>"></label>
        <br>
        <label for="id_stopa">stopy:<input id="id_stopa" type="text" name="stopa" value="
        <?php
            echo $stopa;
        ?>"></label>

        <input type="submit" name="odeslat" value="Převeď">
    
</body>
</html>
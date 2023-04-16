<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/X-icon" href="obrazky/logo02.png">
    <link rel="stylesheet" href="styly/nevim.css">
    <title>Odjedete po čtyřech</title>
</head>
<body>
    <div class="all">
        <div class="header">
            <div class="logo"><a href="index.html"><img src="obrazky/logo04.png" alt="Logo" width="250px"></a></div>
            <div class="nadpis"><h1>Odjedete po čtyřech</h1></div>
            <div class="zakladni_informace">
                <h2>Roman Opatrný</h2>
                <p>465 138 302</p>
                <p>roman.opatrny@seznam.cz</p>
            </div>
        </div>
        <div class="nav">
            <ul>
                <a href="index.html"><li>Menu</li></a>
                <a href="cenik.html"><li>Ceník</li></a>
                <a href="reference.html"><li>Reference</li></a>
                <a href="kontakt.html"><li>Kontakt</li></a>
                <a href="nabidka.php"><li>Nabídka Půjčovny</li></a>
                <a href="sluzby.php"><li>Naše Služby</li></a>
                <a href="proc_nas.html"><li>Proč nás</li></a>
            </ul>
        </div>
        <div class="sluzby">
            <h2 id="nadpis2">Naše Služby</h2>
            <p>Vyberte si z uvedených služeb a do vzkazu vložte podrobnosti.</p>
            <p>Pokud potřebujete nějakou jinou službu zavolejte nebo napište na e-mail. Ozveme se Vám.</p>
            <br>
            <p>Vyplňte formulář s žádostí o naše služby a my se vám ozveme</p>
            <form action="" method="post">
                <br><br>
                <label for="jmeno">Jméno: </label>
                <input type="text" name="jmeno">
                <label for="email">E-mail: </label>
                <input type="email" name="email">
                <label for="telefon">Telefon: </label>
                <input type="text" name="telefon">
                <br><br><br>
                <label for="sluzba">Druh služby: </label>
                <select name="sluzba">
                    <option value="stk">STK</option>
                    <option value="pneumatiky">Pneumatiky</option>
                    <option value="geometrie">Geometrie</option>
                </select>
                <br><br><br>
                <label for="zprava">Vzkaz: </label>
                <br><br>
                <textarea name="zprava" id="" cols="90" rows="8"></textarea>
                <br><br>
                <input type="submit" name="odeslat" value="Odeslat">
            </form>
        </div>
        <div class="footer">
            <a href="mailto:sloupja@gmail.com"><p>© Jan Sloup 2023</p></a>
        </div>
    </div>
    <?php
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "sloup");
        if(isset($_POST['odeslat'])){
        $jmeno = $_POST['jmeno'];
        $email = $_POST['email'];
        $telefon = $_POST['telefon'];
        $sluzba = $_POST['sluzba'];
        $zprava = $_POST['zprava'];
                
        $sql = "INSERT INTO poptavky 
        (jmeno, email, telefon, sluzba, zprava) 
        VALUES ('$jmeno', '$email', '$telefon', '$sluzba', '$zprava')";

        $mysqli->query($sql);
        }
    ?>
</body>
</html>

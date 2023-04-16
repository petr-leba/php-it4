<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "havel");
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nase-sluzby/styles.css">
    <title>Odjedete po čtyřech</title>
    <link rel="shortcut icon" href="obrazky\logo01.png" type="image/x-icon">
</head>
<body>
    <header>
        <a href="index.html"><img id="header_logo" src="obrazky\logo01.png" alt="firemní_logo"></a>
        <p id="nazev_web_stranky">ODJEDETE PO ČTYŘECH</p>
        <ul id="zakladni_informace_z_kontaktu">
            <li>Strmá 418 Jablonné nad Orlicí</li>
            <li>Telefon: 465 138 302</li>
            <li>Email: roman.opatrny@seznam.cz</li>
        </ul>
    </header>
    <nav>
        <ul id="navigace">
            <li><a href="index.html">Domů</a></li>
            <li><a href="proc-nas.html">Proč nás</a></li>
            <li id="active"><a href="nase-sluzby.php">Naše služby</a></li>
            <li><a href="cenik.html">Ceník</a></li>
            <li><a href="reference.html">Reference</a></li>
            <li><a href="nabidka-pujcovny.php">Nabídka půjčovny</a></li>
            <li><a href="kontakt.html">Kontaktuje nás</a></li>
            <li><a href="uzitecne-odkazy.html">Užitečné odkazy</a></li>
        </ul>
    </nav>
    <main>
        <h1>NAŠE SLUŽBY</h1>
        <p id="main_text">
            Vyberte si z uvedených služeb a do vzkazu vložte podrobnosti.<br>
            Pokud potřebujete nějakou jinou službu zavolejte nebo napište na e-mail. Ozveme se Vám.<br><br>
            Vyplňte formulář s žádostí o naše služby a my se vám ozveme.
        </p>
        <form method="post">
            <label for="jmeno">Jméno: </label>
            <input type="text" name="jmeno" id="form-jmeno" required>
            <label for="email">E-mail: </label>
            <input type="text" name="email" id="form-email" required>
            <label for="telefon">Telefon: </label>
            <input type="text" name="telefon" id="form-telefon" required><br>
            <label for="druh-sluzby">Druh služby: </label>
            <select name="druh-sluzby" id="form-druh-sluzby">
                <option value="geometrie vozu">geometrie vozu</option>
                <option value="priprava a projiti STK">příprava a projití STK</option>
                <option value="analyza pocitace auta">analýza počítače auta</option>
                <option value="mereni emisi">měření emisí</option>
                <option value="vymena skel">výměna skel</option>
                <option value="udrzba pred zimou">údržba před zimou</option>
                <option value="vymena pneumatik">výměna pneumatik</option>
            </select><br>
            <p id="form-vzkaz-text">Vzkaz: </p>
            <textarea name="vzkaz" id="form-vzkaz" cols="75" rows="5"></textarea><br>
            <input type="submit" name="odeslat" value="Odeslat" id="form-odeslat" onclick="alert('Žádost byla úspěšně odeslána. V nejbližší době se Vám ozveme.')">
        </form>

        <?php
        
        if (isset($_POST["odeslat"])) {
            $jmeno = $_POST["jmeno"];
            $email = $_POST["email"];
            $telefon = $_POST["telefon"];
            $sluzba = $_POST["druh-sluzby"];
            $zprava = $_POST["vzkaz"];

            $result = $mysqli->query("INSERT INTO poptavky (jmeno, email, telefon, sluzba, zprava)
            VALUES ('$jmeno', '$email', '$telefon', '$sluzba', '$zprava')");

        }

        ?>
    </main>
    <footer>
        <a href="mailto:vasikhavlik@seznam.cz">© Václav Havel 2023</a>
    </footer>
</body>
</html>

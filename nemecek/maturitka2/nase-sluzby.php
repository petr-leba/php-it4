<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, "maturita");

if (isset($_POST["odeslat"])) {
    $dotaz = "INSERT INTO poptavky(jmeno, prijmeni, telefon, email, sluzba, zprava)
              VALUES('{$_POST["jmeno"]}', '{$_POST["prijmeni"]}', '{$_POST["telefon"]}', '{$_POST["email"]}', '{$_POST["sluzba"]}', '{$_POST["zprava"]}');";
    $vlozeno_radku = mysqli_query($conn, $dotaz);
}
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo01.png">
    <meta name="description" content="Autoservis s kompletními službami.">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/subpages.css">
    <title>Naše služby</title>
</head>
<body>
    <div class="container">

        <header>
            <div id="logo"><a href="index.html" id="home"></a></div>
            <strong>Odjedete&nbsp;po&nbsp;čtyřech</strong>
            <p id="kontakt"><strong>Roman Opatrný</strong><br>465 138 302<br>roman.opatrny@seznam.cz</p>
            <div class="newline"></div>
        </header>

        <nav>
            <ul>
                <li><a href="proc-nas.html">Proč&nbsp;nás</a></li>
                <li><a id="selected" href="nase-sluzby.php">Naše&nbsp;služby</a></li>
                <li><a href="cenik.html">Ceník</a></li>
                <li><a href="reference.html">Reference</a></li>
                <li><a href="nabidka-pujcovny.php">Nabídka&nbsp;půjčovny</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                <li><a href="uzitecne-odkazy.html">Užitečné&nbsp;odkazy</a></li>
            </ul>
        </nav>

        <main>
            <h1>Naše služby</h1>
            <p>
                Vyberte si z uvedených služeb a do vzkazu vložte podrobnosti.<br>
                Pokud potřebujete nějakou jinou službu zavolejte nebo napište na e-mail. Ozveme se Vám.
            </p>
            <br>
            <form action="nase-sluzby.php" method="POST">

                <table id="formular">
                    <tr>
                        <td><label for="jmeno">Jméno: </label></td>
                        <td><input type="text" id="jmeno" placeholder="Zadejte křestní jméno" name="jmeno" required></td>
                    </tr>

                    <tr>
                        <td><label for="prijmeni">Příjmení: </label></td>
                        <td><input type="text" id="prijmeni" placeholder="Zadejte příjmení" name="prijmeni" required></td>
                    </tr>

                    <tr>
                        <td><label for="email">E-mail: </label></td>
                        <td><input type="email" name="email" placeholder="novak.jan@seznam.cz" id="email" required></td>
                    </tr>

                    <tr>
                        <td><label for="telefon">Telefon: </label></td>
                        <td><input type="tel" name="telefon" pattern="[0-9]{3} [0-9]{3} [0-9]{3}" id="telefon" required placeholder="123 456 789"></td>
                    </tr>

                    <tr>
                        <td><label for="sluzba">Druh služby: </label></td>
                        <td>
                            <select name="sluzba" id="sluzba">
                                <option value="geometrie">Geometrie</option>
                                <option value="stk">Příprava a projistí STK</option>
                                <option value="prohlidka">Servisní prohlídka</option>
                                <option value="sklo">Výměna čelního skla</option>
                                <option value="udrzba">Udržba před zimou</option>
                                <option value="pneumatiky">Výmena pneumatik</option>
                                <option value="klimatizace">Výměna a kontrola klimatizace</option>
                                <option value="dekarbonizace">Dekarbonizace motoru</option>
                                <option value="olej">Výměna oleje</option>
                                <option value="mechanicka-prace">Mechanická práce</option>
                            </select>
                        </td>
                    </tr>
                    
                    <tr>
                        <td colspan="2"><label for="zprava">Vzkaz:</label></td>
                    </tr>
                </table>
                <textarea name="zprava" id="zprava" rows="5"></textarea>
                <input type="submit" name="odeslat" id="odeslat" value="Odeslat">

                <?php
                    if (isset($_POST["odeslat"])){
                        echo "<br><strong id='oznameni'>Formulář byl odeslán</strong>";
                    }
                ?>
            </form>
        </main>

        <footer>
            © Dominik Němeček 2023
        </footer>
    
    </div>
</body>
</html>
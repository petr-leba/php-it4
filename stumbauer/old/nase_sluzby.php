<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo01.png">
    <meta name="description" content="Autoservis s kompletními službami.">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/other.css">
    <title>Naše služby</title>
    <link href="./images/favicon.ico" rel="icon" type="image/x-icon" />
</head>
<body>
    <div class="container">

        <header>
            <div id="logo"><a href="index.php" id="home"></a></div>
            <strong>Odjedete&nbsp;po&nbsp;čtyřech</strong>
            <p id="kontakt"><strong>Roman Opatrný</strong><br>465 138 302<br>roman.opatrny@seznam.cz</p>
            <div class="newline"></div>
        </header>
        <?php require("nav.php") ?>
        <main>
            <h1>Naše služby</h1>
            <p>
                Vyberte si z uvedených služeb a do vzkazu vložte podrobnosti.<br>
                Pokud potřebujete nějakou jinou službu zavolejte nebo napište na e-mail. Ozveme se Vám.
            </p>
            <br>
            <form action="nase_sluzby.php" method="POST">
            <?php
                if (isset($_POST["odeslat"])) {
                $mysqli = new mysqli("localhost", "root", "", "seznam_aut");

                // Escape values using prepared statements
                $stmt = $mysqli->prepare("INSERT INTO poptavky (jmeno, email, telefon, sluzba, zprava) VALUES (?, ?, ?, ?, ?)");
                $stmt->bind_param("sssss", $_POST['jmeno'], $_POST['email'], $_POST['telefon'], $_POST['sluzba'], $_POST['zprava']);
                $stmt->execute();

                if ($stmt->affected_rows > 0) {
                    echo "Odeslání proběhlo úspěšně";
                } else {
                    echo "Chyba při odesílání";
                }

                // Close connection
                $mysqli->close();
                }
            ?>
                <table id="formular">
                    <tr>
                        <td><label for="jmeno">Jméno: </label></td>
                        <td><input type="text" id="jmeno" placeholder="Zadejte křestní jméno a příjmení" name="jmeno" required></td>
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
                                <option selected></option>
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

        </form>
        </main>

        <footer>
            © Štumbauer Matěj
        </footer>
    
    </div>
</body>
</html>
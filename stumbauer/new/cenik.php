<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/other.css">
    <title>Ceník</title>
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
            <h1>Ceník</h1>
            <table id="cenik">
                <tr>
                    <th>Druh práce</th>
                    <th>Cena</th>
                </tr>
                <tr>
                    <td>Geometrie</td>
                    <td>790 Kč</td>
                </tr>
                <tr>
                    <td>Příprava a projistí STK</td>
                    <td>2500 Kč</td>
                </tr>
                <tr>
                    <td>Servisní prohlídka</td>
                    <td>620 Kč</td>
                </tr>
                <tr>
                    <td>Výměna čelního skla</td>
                    <td>1200 Kč</td>
                </tr>
                <tr>
                    <td>Údržba před zimou</td>
                    <td>700 Kč</td>
                </tr>
                <tr>
                    <td>Výměna pneumatik</td>
                    <td>400 Kč</td>
                </tr>
                <tr>
                    <td>Doplnění a kontrola klimatizace</td>
                    <td>1200 Kč</td>
                </tr>
                <tr>
                    <td>Dekarbonizace motoru</td>
                    <td>3000 Kč</td>
                </tr>
                <tr>
                    <td>Výměna oleje</td>
                    <td>200 Kč</td>
                </tr>
                <tr>
                    <td>Mechanická práce</td>
                    <td>500 Kč / h</td>
                </tr>
            </table>
        </main>

        <footer>
            © Štumbauer Matěj
        </footer>
    
    </div>
</body>
</html>
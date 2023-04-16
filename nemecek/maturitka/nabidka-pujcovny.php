<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, "maturita");

if (isset($_GET["order-by-id"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY ID_auta";
} else if (isset($_GET["order-by-znacka"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY znacka";
} else if (isset($_GET["order-by-model"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY model";
} else if (isset($_GET["order-by-rok"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY rok";
} else if (isset($_GET["order-by-palivo"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY palivo";
} else if (isset($_GET["order-by-objem"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY objem";
} else if (isset($_GET["order-by-zaloha"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY zaloha";
} else if (isset($_GET["order-by-pujcovne"])) {
    $dotaz = "SELECT * FROM seznam_aut ORDER BY pujcovne";
} else {
    $dotaz = "SELECT * FROM seznam_aut";
}

$data_tabulky = mysqli_query($conn, $dotaz);
?>

<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/subpages.css">
    <title>Nabídka půjčovny</title>
</head>
<body>
    <div class="container">

        <header>
            <div id="logo"><a href="index.html" id="home"></a></div>
            <strong>Odejdete&nbsppo&nbspčtyřech</strong>
            <p id="kontakt"><strong>Roman Opatrný</strong><br>465 138 302<br>roman.opatrny@seznam.cz</p>
            <div class="newline"></div>
        </header>

        <nav>
            <ul>
                <li><a href="proc-nas.html">Proč&nbspnás</a></li>
                <li><a href="nase-sluzby.php">Naše&nbspslužby</a></li>
                <li><a href="cenik.html">Ceník</a></li>
                <li><a href="reference.html">Reference</a></li>
                <li><a href="nabidka-pujcovny.php">Nabídka&nbsppůjčovny</a></li>
                <li><a href="kontakt.html">Kontakt</a></li>
                <li><a href="uzitecne-odkazy.html">Užitečné&nbspodkazy</a></li>
            </ul>
        </nav>

        <main>
            <h1>Nabídka půjčovny</h1>
            <p>
                Vyberte si z naší nabídky aut. Zavolejte, jestli je vámi vybraný vůz volný a můžeme se domluvit. <br>
                Ještě dnes můžete odjet tam kam potřebujete. Těšíme se, že se domluvíme.
            </p>

            <form action="", method="get">
                <table id="nabidka">
                    <tr>
                        <th>ID Auta&nbsp<input type="submit" name="order-by-id" value="↑↓"></th>
                        <th>Značka&nbsp<input type="submit" name="order-by-znacka" value="↑↓"></th>
                        <th>Model&nbsp<input type="submit" name="order-by-model" value="↑↓"></th>
                        <th>Rok&nbsp<input type="submit" name="order-by-rok" value="↑↓"></th>
                        <th>Palivo&nbsp<input type="submit" name="order-by-palivo" value="↑↓"></th>
                        <th>Objem&nbsp<input type="submit" name="order-by-objem" value="↑↓"></th>
                        <th>Záloha&nbsp<input type="submit" name="order-by-zaloha" value="↑↓"></th>
                        <th>Půjcovné&nbsp<input type="submit" name="order-by-pujcovne" value="↑↓"></th>
                    </tr>
                <?php
                while($zaznam = mysqli_fetch_assoc($data_tabulky)) {
                    // print_r($zaznam);
                    echo "
                        <tr>
                            <td>{$zaznam['ID_auta']}</td>
                            <td>{$zaznam['znacka']}</td>
                            <td>{$zaznam['model']}</td>
                            <td>{$zaznam['rok']}</td>
                            <td>{$zaznam['palivo']}</td>
                            <td>{$zaznam['objem']}</td>
                            <td>{$zaznam['zaloha']} Kč</td>
                            <td>{$zaznam['pujcovne']} Kč</td>
                        </tr>";
                }
                ?>
                </table>
            </form>
        </main>

        <footer>
            © Dominik Němeček 2023
        </footer>
    
    </div>
</body>
</html>
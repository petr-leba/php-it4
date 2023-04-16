<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="img/logo01.png">
    <meta name="description" content="Autoservis s kompletními službami.">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/other.css">
    <title>Nabídka půjčovny</title>
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
            <h1>Nabídka půjčovny</h1>
            <p>
                Vyberte si z naší nabídky aut. Zavolejte, jestli je vámi vybraný vůz volný a můžeme se domluvit. <br>
                Ještě dnes můžete odjet tam kam potřebujete. Těšíme se, že se domluvíme.
            </p>
            
            <form action="nabidka_pujcovny.php" method="POST">
                <?php if(!isset($_POST["desc"])) { ?> <input type="hidden" name="desc" value=""> <?php } ?>
                <table id="nabidka">
                    <tr>
                        <th>ID Auta&nbsp;<input type="submit" name="order_by_id" value="↑↓"></th>
                        <th>Značka&nbsp;<input type="submit" name="order_by_znacka" value="↑↓"></th>
                        <th>Model&nbsp;<input type="submit" name="order_by_model" value="↑↓"></th>
                        <th>Rok&nbsp;<input type="submit" name="order_by_rok" value="↑↓"></th>
                        <th>Palivo&nbsp;<input type="submit" name="order_by_palivo" value="↑↓"></th>
                        <th>Objem&nbsp;<input type="submit" name="order_by_objem" value="↑↓"></th>
                        <th>Záloha&nbsp;<input type="submit" name="order_by_zaloha" value="↑↓"></th>
                        <th>Půjcovné&nbsp;<input type="submit" name="order_by_pujcovne" value="↑↓"></th>
                    </tr>
                    <?php
                        switch(true) {
                            case isset($_POST["order_by_id"]): $sortcolumn =  "id" ; break;
                            case isset($_POST["order_by_znacka"]): $sortcolumn =  "znacka" ; break;
                            case isset($_POST["order_by_model"]): $sortcolumn =  "model" ; break;
                            case isset($_POST["order_by_rok"]): $sortcolumn =  "rok" ; break;
                            case isset($_POST["order_by_palivo"]): $sortcolumn =  "palivo" ; break;
                            case isset($_POST["order_by_objem"]): $sortcolumn =  "objem" ; break;
                            case isset($_POST["order_by_zaloha"]): $sortcolumn =  "zaloha" ; break;
                            case isset($_POST["order_by_pujcovne"]): $sortcolumn =  "pujcovne" ; break; 
                        default:$sortcolumn = "id"; break;
                        }
                        $mysqli = new mysqli("localhost","root","","seznam_aut");
                        $result = $mysqli->query("SELECT * FROM seznam_aut ORDER BY $sortcolumn" . (isset($_POST["desc"]) ? " DESC" : ""));

                        while ($row = $result->fetch_assoc()) {?>
                            <tr>
                                <td><?=$row["id"]?></td>
                                <td><?=$row["znacka"]?></td>
                                <td><?=$row["model"]?></td>
                                <td><?=$row["rok"]?></td>
                                <td><?=$row["palivo"]?></td>
                                <td><?=$row["objem"]?></td>
                                <td><?=$row["zaloha"]?></td>
                                <td><?=$row["pujcovne"]?></td>
                            </tr>
                    <?php } ?>
                </table>
            </form>
        </main>

        <footer>
            © Štumbauer Matěj
        </footer>
    </div>
</body>
</html>
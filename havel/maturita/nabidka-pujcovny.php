<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="nabidka-pujcovny/styles.css">
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
            <li><a href="nase-sluzby.php">Naše služby</a></li>
            <li><a href="cenik.html">Ceník</a></li>
            <li><a href="reference.html">Reference</a></li>
            <li id="active"><a href="nabidka-pujcovny.php">Nabídka půjčovny</a></li>
            <li><a href="kontakt.html">Kontaktuje nás</a></li>
            <li><a href="uzitecne-odkazy.html">Užitečné odkazy</a></li>
        </ul>
    </nav>
    <main>
        <h1>NABÍDKA PŮJČOVNY</h1>
        <p id="main_text">
        Vyberte si z naší nabídky aut. Zavolejte, jestli je vámi vybraný vůz volný a můžeme se domluvit.<br>
        Ještě dnes můžete odjet tam kam potřebujete. Těšíme se, že se domluvíme.
        </p>
        <table id="table_auta" cellspacing = 0>
            <tr>
                <th>značka</th>
                <th>model</th>
                <th>rok</th>
                <th>palivo</th>
                <th>objem motoru</th>
                <th>záloha</th>
                <th>půjčovné/den</th>
            </tr>
        <?php
    
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $mysqli = new mysqli("localhost", "root", "", "havel");

        $result = $mysqli->query("SELECT znacka, model, rok, palivo, objem, zaloha, pujcovne FROM seznam_aut");

        while ($row = $result->fetch_assoc()) {
            printf("<tr><td>{$row["znacka"]}</td>"
                    . "<td>{$row["model"]}</td>"
                    . "<td>{$row["rok"]}</td>"
                    . "<td>{$row["palivo"]}</td>"
                    . "<td>{$row["objem"]}</td>"
                    . "<td>{$row["zaloha"]}</td>"
                    . "<td>{$row["pujcovne"]}</td></tr>");
        }

        ?>
        </table>
    </main>
    <footer>
        <a href="mailto:vasikhavlik@seznam.cz">© Václav Havel 2023</a>
    </footer>
</body>
</html>

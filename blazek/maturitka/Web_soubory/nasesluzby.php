<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="obrazky/logo01.png" rel='shortcut icon' type='image/png'>
    <link rel="stylesheet" href="styl.css">
    <title>Naše služby</title>
</head>

<body>
    <header class="header-index">
        <a href="index.php"> <div class="header-img" style="background-image:url(obrazky/banner04.jpg);"></div></a>
        <div class="header-text"><h1>Odjedete po čtyřech</h1></div>
    </header>

    <nav>
        <ul>
          <li><a href="index.php">Proč nás?</a></li>
          <li><a href="nasesluzby.php">Naše služby</a></li>
          <li><a href="cenik.php">Ceník</a></li>
          <li><a href="reference.php">Reference</a></li>
          <li><a href="nabidkapujcovny.php">Nabídka půjčovny</a></li>
          <li><a href="kontakt.php">Kontaktujte nás</a></li>
          <li><a href="odkazy.php">Užitečné odkazy</a></li>
        </ul>
    </nav>

    <main class="sluzby">
        <h2>Naše služby</h2>
        <p>Vyberte si z uvedených služeb a do zpravau vložte podrobnosti. <br>
            Pokud potřebujete nějakou jinou službu zavolejte nebo napište na e-mail. Ozveme se Vám.
        </p>

        <div class="form-container">
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          Jméno: <input type="text" name="jmeno"><br>
          Příjmení: <input type="text" name="prijmeni"><br>
          Telefon: <input type="tel" name="telefon"><br>
          Email: <input type="email" name="email"><br>
          Druh služby:
          <select name="sluzba">
            <option value="">--Vyberte službu--</option>
            <option value="Geometrie vozu">Geometrie vozu</option>
            <option value="Příprava STK">Příprava STK</option>
            <option value="Analýzy počítače auta">Analýzy počítače auta</option>
            <option value="Měření emisí">Měření emisí</option>
            <option value="Výměna skel">Výměna skel</option>
            <option value="Údržba před zimou">Údržba před zimou</option>
            <option value="Výměna pneumatik">Výměna pneumatik</option>
          </select><br>
          Zpráva: <textarea name="zprava"></textarea><br>
          <input type="submit" name="submit" value="Odeslat">
        </form>
        </div>

        <?php
$conn = mysqli_connect("localhost", "root", "", "maturita");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $jmeno = $_POST["jmeno"];
  $prijmeni = $_POST["prijmeni"];
  $telefon = $_POST["telefon"];
  $email = $_POST["email"];
  $sluzba = $_POST["sluzba"];
  $zprava = $_POST["zprava"];

  if (!empty($sluzba)) {
    $sql = "INSERT INTO poptavky (jmeno, prijmeni, telefon, email, sluzba, zprava) VALUES ('$jmeno', '$prijmeni', '$telefon', '$email', '$sluzba', '$zprava')";
    mysqli_query($conn, $sql);
    echo "Data byla úspěšně odeslána.";
  } else {
    echo "Prosím, vyberte druh služby.";
  }
}

mysqli_close($conn);
?>


    </main>
    <footer>
      <p> <a href="mailto:blazekjindra@seznam.cz">©Jindřich Blažek 2023</a></p>
    </footer>
</body>

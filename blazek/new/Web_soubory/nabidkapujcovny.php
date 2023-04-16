<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="obrazky/logo01.png" rel='shortcut icon' type='image/png'>
    <link rel="stylesheet" href="styl.css">
    <title>Nabídka půjčovny</title>
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
    <div class="form-container">
  <form method='POST' action=''>
    <label>Značka:</label>
    <input type='text' name='znacka'>
    <input type='submit' name='submit' value='Hledat'>
  </form>

  <form method='POST' action=''>
    <label>Model:</label>
    <input type='text' name='model'>
    <input type='submit' name='submit_model' value='Hledat'>
  </form>

  <form method='POST' action=''>
    <label>Objem motoru:</label>
    <input type='text' name='objem'>
    <input type='submit' name='submit_objem' value='Hledat'>
  </form>
</div>
    <?php
    $conn = mysqli_connect("localhost", "root", "", "maturita");

if(isset($_POST['submit'])) {

  $znacka = mysqli_real_escape_string($conn, $_POST['znacka']);

  $sql = "SELECT * FROM seznam_aut WHERE znacka LIKE '%$znacka%' ORDER BY znacka, model, objem";
} elseif(isset($_POST['submit_model'])) {

  $model = mysqli_real_escape_string($conn, $_POST['model']);

  $sql = "SELECT * FROM seznam_aut WHERE model LIKE '%$model%' ORDER BY znacka, model, objem";
} elseif(isset($_POST['submit_objem'])) {

  $objem = mysqli_real_escape_string($conn, $_POST['objem']);

  $sql = "SELECT * FROM seznam_aut WHERE objem = '$objem' ORDER BY znacka, model, objem";
} else {

  $sql = "SELECT * FROM seznam_aut ORDER BY znacka, model, objem";
}

$result = mysqli_query($conn, $sql);

    echo "<table>";
    echo "<tr><th>Značka</th><th>Model</th><th>Rok v.</th><th>Palivo</th><th>Objem m.</th><th>Záloha</th><th>Půjčovné/den</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
      echo "<tr>";
      echo "<td>" . $row["znacka"] . "</td>";
      echo "<td>" . $row['model'] . "</td>";
      echo "<td>" . $row['rok'] . "</td>";
      echo "<td>" . $row['palivo'] . "</td>";
      echo "<td>" . $row['objem'] . "</td>";
      echo "<td>" . $row['zaloha'] . "</td>";
      echo "<td>" . $row['pujcovne'] . "</td>";
      echo "</tr>";
    }

    echo "</table>";

    mysqli_close($conn);
    ?>
    <footer>
      <p> <a href="mailto:blazekjindra@seznam.cz">©Jindřich Blažek 2023</a></p>
    </footer>
</body>

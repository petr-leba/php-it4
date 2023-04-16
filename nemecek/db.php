<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <title>Výpis databáze</title>
    <style>
        * {
            margin: 0; padding: 0; box-sizing: border-box;
        }
        body{
            margin: 5px;
        }
        td, th{
            border: 1px solid black;
        }
        th>input{
            width: 100%;
        }
    </style>
</head>
<body>
    <h1>Výpis z databáze</h1>
    <br>

    <form action="" method="POST">
        <input type="submit" name="pridej" value="Přidej">
        <input type="submit" name="updatuj" value="Updatuj">
        <input type="submit" name="smaz" value="Smaž">
        <table>
            <tr>
                <th colspan="2">ID</th>
                <th>Jméno</th>
                <th>Kontaktní jméno</th>
                <th>Adresa</th>
                <th>Město</th>
                <th>PSČ</th>
                <th>Stát</th>
            </tr>
            <tr>
                <th colspan="3"><input type="text" name="CustomerName"></th>                
                <th><input type="text" name="ContactName"></th>
                <th><input type="text" name="Address"></th>
                <th><input type="text" name="City"></th>
                <th><input type="text" name="PostalCode"></th>
                <th><input type="text" name="Country"></th>
            </tr>
<?php
// vypíše errory na stránce
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// připojení k databázi
$mysqli = new mysqli("localhost", "root", "", "leba");

// přidání záznamu
if (isset($_POST["pridej"])){
    $sql = "INSERT INTO customers(CustomerName, ContactName, Address, City, PostalCode, Country)
            VALUES ('{$_POST['CustomerName']}', '{$_POST['ContactName']}', '{$_POST['Address']}', '{$_POST['City']}', '{$_POST['PostalCode']}', '{$_POST['Country']}')";
    $mysqli->query($sql);
    header("db.php");
}

// updatování záznamu
if (isset($_POST["updatuj"])){
    $CustomerID = trim($_POST["CustomerID"]);
    $CustomerName = trim($_POST["CustomerName"]);
    $ContactName = trim($_POST["ContactName"]);
    $Address = trim($_POST["Address"]);
    $City = trim($_POST["City"]);
    $PostalCode = trim($_POST["PostalCode"]);
    $Country = trim($_POST["Country"]);

    $sqlStart = "UPDATE customers SET ";
    $sqlMiddle = "";
    $sqlEnd = " WHERE CustomerID = {$CustomerID};";

    if (!empty($CustomerName)){
        $sqlMiddle .= "CustomerName = '{$CustomerName}', ";
    }

    if (!empty($ContactName)){
        $sqlMiddle .= "ContactName = '{$ContactName}', ";
    }

    if (!empty($Address)){
        $sqlMiddle .= "Address = '{$Address}', ";
    }

    if (!empty($City)){
        $sqlMiddle .= "City = '{$City}', ";
    }

    if (!empty($PostalCode)){
        $sqlMiddle .= "PostalCode = '{$PostalCode}', ";
    }

    if (!empty($Country)){
        $sqlMiddle .= "Country = '{$Country}', ";
    }

    $sqlMiddle = substr($sqlMiddle, 0, -2);

    $sql = $sqlStart . $sqlMiddle . $sqlEnd;
    $mysqli->query($sql);

}

// smazání záznamu
if (isset($_POST["smaz"])){
    $mysqli->query("DELETE FROM customers WHERE CustomerID = {$_POST["CustomerID"]}");
}

// výpis tabulky
$result = $mysqli->query("SELECT * FROM customers ORDER BY CustomerName");
while ($row = $result->fetch_assoc()) {
    printf("<tr>
                <td><input type='radio', name='CustomerID', value='{$row["CustomerID"]}'></td>
                <td>{$row["CustomerID"]}</td>
                <td>{$row["CustomerName"]}</td>
                <td>{$row["ContactName"]}</td>
                <td>{$row["Address"]}</td>
                <td>{$row["City"]}</td>
                <td>{$row["PostalCode"]}</td>
                <td>{$row["Country"]}</td>
            </tr>");
}
?>
        </table>
    </form>
</body>
</html>

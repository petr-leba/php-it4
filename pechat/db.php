<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="submit" name="pridej" value="Přidej">
        <input type="submit" name="updatuj" value="Updatuj">
        <input type="submit" name="smaz" value="Smaž" max="1">
        <table border="1">
        <tr>
            <th></th>
            <th>CustomerID</th>
            <th>CustomerName</th>
            <th>ContactName</th>
            <th>Address</th>
            <th>City</th>
            <th>PostalCode</th>
            <th>Country</th>
        </tr>
        <tr>
            <td colspan="2"></td>
            <td><input type="text" name="CustomerName"></td>
            <td><input type="text" name="ContactName"></td>
            <td><input type="text" name="Address"></td>
            <td><input type="text" name="City"></td>
            <td><input type="text" name="PostalCode"></td>
            <td><input type="text" name="Country"></td>
        </tr>    
    <?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli("localhost", "root", "", "leba");

if(isset($_POST['pridej'])){
    $CustomerName = $_POST['CustomerName'];
    $ContactName = $_POST['ContactName'];
    $Address = $_POST['Address'];
    $City = $_POST['City'];
    $PostalCode = $_POST['PostalCode'];
    $Country = $_POST['Country'];
    
    $sql = "INSERT INTO customers 
    (CustomerName, ContactName, Address, City, PostalCode, Country) 
    VALUES ('$CustomerName', '$ContactName', '$Address', '$City', '$PostalCode', '$Country')";

    $mysqli->query($sql);
}

if(isset($_POST['updatuj'])){
    $CustomerID = $_POST['id'];
    
    $CustomerName = trim($_POST['CustomerName']);
    $ContactName = trim($_POST['ContactName']);
    $Address = trim($_POST['Address']);
    $City = trim($_POST['City']);
    $PostalCode = trim($_POST['PostalCode']);
    $Country = trim($_POST['Country']);

    $sqlStart = "UPDATE customers SET ";
    $sqlEnd = " WHERE CustomerID={$CustomerID};";
    $sqlMiddle = "";

    if (!empty($CustomerName)) {
        $sqlMiddle .= "CustomerName = '{$CustomerName}', ";
    }
    if (!empty($ContactName)) {
        $sqlMiddle .= "ContactName = '{$ContactName}', ";
    }
    if (!empty($Address)) {
        $sqlMiddle .= "Address = '{$Address}', ";
    }
    if (!empty($City)) {
        $sqlMiddle .= "City = '{$City}', ";
    }
    if (!empty($PostalCode)) {
        $sqlMiddle .= "PostalCode = '{$PostalCode}', ";
    }
    if (!empty($Country)) {
        $sqlMiddle .= "Country = '{$Country}', ";
    }
    $sqlMiddle = substr($sqlMiddle, 0, -2);

    $sql = $sqlStart . $sqlMiddle . $sqlEnd;
    $mysqli->query($sql);
}



/* Select queries return a resultset */
$result = $mysqli->query("SELECT * FROM customers ORDER BY CustomerName ASC;");
/*
$result = $mysqli->query("SELECT CustomerName, ContactName, Address, City, PostalCode, Country 
FROM customers 
WHERE Country='France' and City='Paris';");
*/
printf("Select returned %d rows.\n", $result->num_rows);

while ($row = $result->fetch_assoc()) {
    printf("<tr><td><input type='radio' name='id' value='{$row["CustomerID"]}'></td>"
             . "<td>{$row["CustomerID"]}</td>"
             . "<td>{$row["CustomerName"]}</td>"
             . "<td>{$row["ContactName"]}</td>"
             . "<td>{$row["Address"]}</td>" 
             . "<td>{$row["City"]}</td>"  
             . "<td>{$row["PostalCode"]}</td>"  
             . "<td>{$row["Country"]}</td></tr>");
}
    ?> 
        </table> 
    </form>  
</body>
</html>

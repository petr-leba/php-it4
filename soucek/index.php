<!DOCTYPE html>
<html>
<head>
  <title>Length Converter</title>
</head>
<body>
  <h1>Length Converter</h1>
  <form action="index.php" method="post">
    <input type="text" name="value" placeholder="Enter value">
    <select name="unit">
      <option value="cm">Centimeters</option>
      <option value="ft">Feet</option>
    </select>
    <input type="submit" value="Convert">
  </form>
  <br>
  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $value = $_POST["value"];
      $unit = $_POST["unit"];

      function cm_to_ft($cm) {
        return $cm / 30.48;
      }

      function ft_to_cm($ft){
        return $ft * 30.48;
        }
        if ($unit == "cm") {
            $result = cm_to_ft($value);
            echo "$value centimeters = $result feet<br>";
          } else if ($unit == "ft") {
            $result = ft_to_cm($value);
            echo "$value feet = $result centimeters<br>";
          } else {
            echo "Invalid unit<br>";
          }
        }
        ?>
        
        </body>
        </html>
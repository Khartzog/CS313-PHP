<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
<div class="jumbotron">
    <h1>Thank You For Your Purchase</h1>      
  </div>
  <?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
      $Firstname = test_input($_POST["firstname"]);
      $Lastname = test_input($_POST["lastname"]);
      $Address = test_input($_POST["Address"]);

      echo "Name: " . $Firstname . " " . $Lastname . "<br>";
      echo "Address: " . $Address . "<br>";

      foreach ($_SESSION['cart'] as $value){
        if ($_SESSION["$value"] == true){
          echo "<h4>$value</h4><br>";
          echo "<img src='$value.jpg' class='img-rounded' width='150' height='240'><br>";
          echo "</div>";
        }
      }

      ?>
</div>
</body>
</html>
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
<?php
print_r($_SESSION);
  foreach($_SESSION['cart'] as $value){
    if (isset($_GET["$value"])){
      $_SESSION["$value"] = false;
    }
  }
?>
<div class="container">
  <div class="jumbotron">
    <h1>View Cart</h1>      
    <a href="browseItems.php" class="btn btn-info" role="button">Continue Shopping</a>
    <br>
    <br>
    <a href="checkOut.php" class="btn btn-info" role="button">Check Out</a>
  </div>
  <?php
  foreach($_SESSION['cart'] as $value){
    if ($_SESSION["$value"] == true){
      echo "<a href='viewCart.php?$value=false'>";
    }
  }
  ?>
    
</body>
</html>
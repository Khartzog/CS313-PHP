<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   
</head>
<body>
<?php
    echo date("Y-m-d") . "<br>";

?>

<form name="form" action="confirmEntry.php" method="get">
<textarea name='content' id='content' rows="30" cols="100"></textarea><br>
<h4>Which journal will you add this entry to?</h4><br>
<input type='text' name='journal' id='journal'><br>
<input type="submit">
</form>
    
</body>
</html>

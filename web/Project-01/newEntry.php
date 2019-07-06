<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class='textArea'>
<?php
session_start();
    echo date("Y-m-d") . "<br><br>";
?>

<form name="form" action="confirmEntry.php" method="get">
<textarea name='content' id='content' rows="30" cols="100"></textarea><br>
<h4>Which journal will you add this entry to?</h4>
<input type='text' name='journal' id='journal'><br>
<input type="submit">
</form>
</div>
    
</body>
</html>
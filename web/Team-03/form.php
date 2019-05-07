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
<div class="container">
<form method="get">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Major:
<input type="radio" name="major" value="ComputerScience">Computer Science<br>
<input type="radio" name="major" value="WebDesign&Development">Web Design and Development<br>
<input type="radio" name="major" value="ComputerInformationTechnology">Computer Information Technology<br>
<input type="radio" name="major" value="ComputerEngineering">Computer Engineering<br>
<br>
Comment: <textarea name="comment" rows="5" cols="40"></textarea><br>
<input type="submit">
</form>
</div>
</body>
</html>
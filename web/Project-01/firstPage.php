<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
   <style>
       body {
           background-image: url("journal.jpg");
           background-blend-mode: lighten;
       }

       .block {
        display: block;
        width: 50%;
        border: none;
        font-size: 12px;
        cursor: pointer;
        text-align: center;
        }
   </style>
</head>
<body>
<div>
    <br><br><br><br><br>
    <center><form action="signIn.php">
    <button type="submit" class="block">Sign In</button>
    <button type="submit" formaction="signUp.php" class="block">Sign Up</button>
    </form></center>
    </div>
</body>
</html>
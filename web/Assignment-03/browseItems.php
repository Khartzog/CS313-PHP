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
<div class="container">
  <div class="jumbotron">
    <h1>Barnes and Mobile</h1>      
    <p>Ready to do something fun this Summer? Its time to get a book</p>
    <a href="viewCart.php" class="btn btn-info" role="button">Cart</a>
  </div>
  <div class="d-flex align-items-stretch bg-light" style="height:250px">
    <div><img src="harry-potter.jpg" class="img-rounded" alt="Harry Potter" width="150" height="240"></div>
    <div class="align-self-center"><b><pre>  Price: $20.99   </pre></b></div>
    <div class="align-self-center"><button type="button" class="btn btn-success" id="B1" name="Harry Poter" value="20.99" onclick="addCart1()">Add To Cart</button></div>
    <div class="align-self-center"><p id="text1"></p></div>
  </div>
  <div class="d-flex align-items-stretch bg-light" style="height:250px">
    <div><img src="Hunger-Games.jpg" class="img-rounded" alt="Hunger Games" width="150" height="240"></div>
    <div class="align-self-center"><b><pre>  Price: $21.99   </pre></b></div>
    <div class="align-self-center"><button type="button" class="btn btn-success" id="B2" name="Hunger Games" value="21.99" onclick="addCart2()">Add To Cart</button></div>
    <div class="align-self-center"><p id="text2"></p></div>
  </div>
  <div class="d-flex align-items-stretch bg-light" style="height:250px">
    <div><img src="Fault-in-our-Stars.jpg" class="img-rounded" alt="The Fault in our Stars" width="150" height="240"></div>
    <div class="align-self-center"><b><pre>  Price: $22.99   </pre></b></div>
    <div class="align-self-center"><button type="button" class="btn btn-success" id="B3" name="The Fault in our Stars" value="22.99" onclick="addCart3()">Add To Cart</button></div>
    <div class="align-self-center"><p id="text3"></p></div>
  </div>
  <div class="d-flex align-items-stretch bg-light" style="height:250px">
    <div><img src="Lord-of-the-Rings.jpg" class="img-rounded" alt="Lord of the Rings" width="150" height="240"></div>
    <div class="align-self-center"><b><pre>  Price: $19.99   </pre></b></div>
    <div class="align-self-center"><button type="button" class="btn btn-success" id="B4" name="Lord of the Rings" value="19.99" onclick="addCart4()">Add To Cart</button></div>
    <div class="align-self-center"><p id="text4"></p></div>
  </div>
  <div class="d-flex align-items-stretch bg-light" style="height:250px">
    <div><img src="City-Of-Bones.jpg" class="img-rounded" alt="City of Bones" width="150" height="240"></div>
    <div class="align-self-center"><b><pre>  Price: $20.99   </pre></b></div>
    <div class="align-self-center"><button type="button" class="btn btn-success" id="B5" name="City of Bones" value="20.99" onclick="addCart5()">Add To Cart</button></div>
    <div class="align-self-center"><p id="text5"></p></div>
  </div>
  <div class="d-flex align-items-stretch bg-light" style="height:250px">
    <div><img src="Percy-Jackson.jpg" class="img-rounded" alt="Percy Jackson" width="150" height="240"></div>
    <div class="align-self-center"><b><pre>  Price: $18.99   </pre></b></div>
    <div class="align-self-center"><button type="button" class="btn btn-success" id="B6" name="Percy Jackson" value="18.99" onclick="addCart6()">Add To Cart</button></div>
    <div class="align-self-center"><p id="text6"></p></div>
  </div>
</div>    

<script>
    function addCart1() {
        var input = document.getElementById("demo").value;

        document.getElementById("text1").innerHTML = "Item Added to Cart";
    }
    function addCart2() {

        document.getElementById("text2").innerHTML = "Item Added to Cart";
    }
    function addCart3() {

        document.getElementById("text3").innerHTML = "Item Added to Cart";
    }
    function addCart4() {

        document.getElementById("text4").innerHTML = "Item Added to Cart";
    }
    function addCart5() {

        document.getElementById("text5").innerHTML = "Item Added to Cart";
    }
    function addCart6() {

        document.getElementById("text6").innerHTML = "Item Added to Cart";
    }
</script>
</body>
</html>
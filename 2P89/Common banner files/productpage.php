#!/usr/bin/php-cgi
<?php
session_start();
?>
<?php

if(isset($_SESSION["sname"]))
{
echo "Logged in as = " . $_SESSION["sname"];
}
else
{
echo "Logged out !!";
}


?>



<html>
<html>



<head>
<link rel="stylesheet" href="styles.css">


<br>

<body>
<?php
include 'header.html';
?>
</body>



<a href="products.html?id=w1"/>
    <img src="https://staticimg.titan.co.in/Titan/Catalog/1584SL03_1.jpg" alt="lo l" width="120" height="120"></a><br/>

<button class="btn-enabled" id="addWish" onclick="addItem('Analog')">
        Add
    </button>

    <button class="btn-disabled" id="removeWish" onclick="removeItem('Analog')">
        Remove
    </button>

<br>

<a href="products.html?id=w2"/>
    <img src="https://i.ebayimg.com/images/g/XccAAOSwgV1eJzYA/s-l1600.jpg" alt="lo l" width="120" height="120"></a><br/>

<button class="btn-enabled" id="addWish" onclick="addItem('Digital')">
        Add
    </button>

    <button class="btn-disabled" id="removeWish" onclick="removeItem('Digital')">
        Remove
    </button>

<br>

<a href="products.html?id=w3"/>
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQ4A2zMSqWP_-H6BeIz9ORnNpv-oT4hAi8Tg&usqp=CAU" alt="lo l" width="120" height="120"></a><br/>
   
<button class="btn-enabled" id="addWish" onclick="addItem('Smartwatch')">
        Add
    </button>

    <button class="btn-disabled" id="removeWish" onclick="removeItem('Smartwatch')">
        Remove
    </button>

<br>
    <a href="products.html?id=w4"/>
    <img src="https://m.media-amazon.com/images/I/51N0Y6osPIL._AC_SS350_.jpg" alt="lo l" width="120" height="120"></a><br/>

<button class="btn-enabled" id="addWish" onclick="addItem('Fitbit')">
        Add
    </button>

    <button class="btn-disabled" id="removeWish" onclick="removeItem('Fitbit')">
        Remove
    </button>

<br>

<footer>
<?php

include 'footer.html';

?>

</footer>

















</head>





</html>

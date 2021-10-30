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
<body>

<?php
include 'header.html';
include 'pr1.html';
?>
   
</body>
</html>



<script src="main.js"></script>


</body>

<footer>
<?php

include 'footer.html';

?>

</footer>


</html>

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
include 'pr2.html';
?>

</body>
</html>



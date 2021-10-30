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



<br>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<head>
		<h5>OWNER-Anwar hashmi ID 6584957 ah18ai</h5>
		
		<title>MYSTORE </title>

		<link rel="stylesheet" href="styles.css">
    </head>

<body>


<?php

include 'header.html';
include 'contactus.html';

?>

</body>

<footer>
<?php

include 'footer.html';

?>

</footer>


</html>

#!/usr/bin/php-cgi
<?php
session_start();

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
<head>
<title>Login page</title>

<link rel="stylesheet" href="styles.css">
</head>
<body>

<FORM method="POST">

Enter Name : <input type="text" name="name"> <br/> 
<br/>
<input type="submit" name="Submit1" value="Login">

<input type="submit" name="Submit3" value="Logout">
</FORM>

<?php
//include 'header.html';
//include 'footer.html';
?>



<?php
if(isset($_POST['Submit1'])) {

$_SESSION["sname"]=$_POST["name"];
echo "Your logged in : = " . $_SESSION["sname"];
}
?>

    <script type="text/javascript">
    window.isLoggedIn ='<?php echo $_SESSION["sname"];?>';
console.log(window.isLoggedIn);
    </script>
  
  <script type="text/javascript" src="main.js"></script>
   
    <body>

    </body>
   
<?php
if(isset($_POST['Submit3']))
{ 
session_destroy();
echo "Logged out!";
}
?>


<br>

<?php
include 'header.html';
//include 'footer.html';
?>






<?php
//include 'header.html';
include 'footer.html';
?>



</body>
</html>

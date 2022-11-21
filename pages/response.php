<html>
<body>
Hello  <?php echo $_POST["username"]; ?><br>

<?php

$dbhandle = mysqli_connect('localhost', 'root', '', 'davidmenaged');
$username = ($_POST["username"]);
$password = ($_POST["password"]);
$query=mysqli_query($dbhandle,"select * from `AuthorizedUsers` where username='$username' && password='$password'");
$row = mysqli_num_rows($query);

if ( $row < 1)
{
session_start();
$_SESSION['LoggedIn'] = false;
}
else{
session_start();
$_SESSION['LoggedIn'] = true;
$cookie_name = "user";
setcookie($cookie_name, $_POST["username"], time() + (86400 * 30), "/");
}
?>
<a href="content.php">Check login status</a>
</body>
</html>

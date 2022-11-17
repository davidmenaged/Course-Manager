<html>
<body>
Hello  <?php echo $_POST["username"]; ?><br>

<?php
$logins = array(
    'username1' => 'password1',
    'username2' => 'password2',
    'username3' => 'password3',
);

$user = isset($_POST['username']) ? strtolower($_POST['username']) : '';
$pass = isset($_POST['password']) ? strtolower($_POST['password']) : '';

if ( ! isset($logins[$user]) or $logins[$user] != $pass)
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

<html>
<body>
<?php
session_start(); 
$signedIn = $_SESSION['LoggedIn'];

if($signedIn){
echo "Hello " . $_COOKIE['user'];
}

else{
echo "<a href='login.php'>Back to login</a>";
}
?>

</body>
</html>

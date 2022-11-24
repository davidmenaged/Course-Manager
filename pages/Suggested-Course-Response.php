<html>
<body>
 <?php include "../templates/Header.php"; ?>
<?php
 

    $dbhandle = mysqli_connect('localhost', 'root', '', 'davidmenaged');  

    if(isset($_POST['submit']))
    {
        $courses = mysqli_real_escape_string($dbhandle,$_POST['Course_name']);
        $degrees = mysqli_real_escape_string($dbhandle,$_POST['Degree']);
	$professor = mysqli_real_escape_string($dbhandle,$_POST['Professor']);
        
        $sql_insert =
        "INSERT INTO `coursessuggestedbystudent`(`coursename`, `professorname`, `degreename`)
            VALUES ('$courses','$professor','$degrees')";
if(mysqli_query($dbhandle,$sql_insert))
        {
           
        }
    }
?>
You have suggested  <?php echo $_POST["Course_name"]; ?> to be given by Professor <?php echo $_POST["Professor"]; ?> as part of the <?php echo $_POST["Degree"]; ?> major. <br>
Thank you for your feedback.

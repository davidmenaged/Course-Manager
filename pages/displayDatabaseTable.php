<html>
<body>
 <?php include "../templates/Header.php"; ?>
<?php
$dbhandle = mysqli_connect('localhost', 'root', '', 'davidmenaged');

$result = mysqli_query($dbhandle,"SELECT * FROM coursessuggestedbystudent");

echo "<table border='1'>
<tr>
<th>Course Name</th>
<th>Professor Name</th>
<th>Degree Name</th>
</tr>";

while($row = mysqli_fetch_array($result))
{
echo "<tr>";
echo "<td>" . $row['CourseName'] . "</td>";
echo "<td>" . $row['ProfessorName'] . "</td>";
echo "<td>" . $row['DegreeName'] . "</td>";
echo "</tr>";
}
echo "</table>";

mysqli_close($dbhandle);
?>
</body>
</html>

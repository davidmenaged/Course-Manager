<!DOCTYPE html>
<html>
<head>
 <?php include "../templates/Header.php"; ?>
    <meta charset="UTF-8">
    <title>College Recommendations</title></head>

<body>
<section>
<?php
$dbhandle = mysqli_connect('localhost', 'root', '', 'davidmenaged');
$deg_query=mysqli_query($dbhandle,"select * from `degrees`");
$prof_query=mysqli_query($dbhandle,"select * from `professors`");

?>
    <h1>Suggest a Course</h1>
    <p>We cannot promise that a suggested course will be offered.</p>
    <fieldset id="custInfo">

 <form action="suggestedcourseresponse.php" method="POST">
        <label>Select a Degree</label>
        <select name="Degree">
            <?php
                while ($category = mysqli_fetch_array(
                        $deg_query,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["DegreeTitle"];
                ?>">
                    <?php echo $category["DegreeTitle"];
                    ?>
                </option>
            <?php
                endwhile;
            ?>
        </select>
        <br>
        <label>Select a Professor</label>
        <select name="Professor">
            <?php
                while ($category = mysqli_fetch_array(
                        $prof_query,MYSQLI_ASSOC)):;
            ?>
                <option value="<?php echo $category["ProfessorName"];
                ?>">
                    <?php echo $category["ProfessorName"];
                    ?>
                </option>
            <?php
                endwhile;
            ?>
        </select>
<br>
<label>Name of Course:</label>
        <input type="text" name="Course_name" required>
<br>

        <input type="submit" value="submit" name="submit">
    </form>
</section>
<footer>
    <!--stuff-->
</footer>
</body>
</html>

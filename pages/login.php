<html>
<body>

 <?php include "../templates/Header.php"; ?>
    <div class = "container-fluid px-4" id="containerLogin">
        <div class= "" id="centralize">
            <form action="response.php" method="post">
            <div class="form-floating mb-3" id = "formShadow">
                <input type="text" class="form-control" id="floatingInput" name="username" placeholder="Username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating" id = "formShadow">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>">
                <label for="floatingPassword">Password</label>
            </div>
                <div class="mt-3 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id= "formShadow">
                    <label class="form-check-label" for="exampleCheck1">&nbsp&nbsp<b>Remember me!</b></label>
                </div>
                <div class = "row row-cols-sm-2 g-2">
                <button type="submit" class="btn btn-outline-dark btn-lg">Submit</button>
                </div>
                </form>
        </div>
    </div>
<?php include "../templates/Footer.php"; ?>


</body>
</html>

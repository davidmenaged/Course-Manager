<?php include "../templates/Header.php"; ?>
    <div class = "container-fluid px-4" id="containerLogin">
        <div class= "" id="centralize">
            <form>
            <div class="form-floating mb-3" id = "formShadow">
                <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating" id = "formShadow">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                <label for="floatingPassword">Password</label>
            </div>
                <div class="mt-3 mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id= "formShadow">
                    <label class="form-check-label" for="exampleCheck1">&nbsp&nbsp<b>Don't forget me.</b></label>
                </div>
                <div class = "row row-cols-sm-2 g-2">
                <button type="submit" class="btn btn-outline-dark btn-lg">Submit</button>
                    <button type="submit" class="btn btn-outline-dark btn-lg">Submit</button>
                </div>
                </form>
        </div>
    </div>
<?php include "../templates/Footer.php"; ?>
<?php
// $_SERVER
// $_GET
// $_POST

$_POST["userNameorEmail"] = "";
$_POST["password"] = "123";

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    echo $_POST["userNameorEmail"];
} else {
    echo "Not a post request";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../styles/login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>

    <form method="post">

        <div class="wrapper">
            <span class="bg-animate"></span>
            <div class="form-box login">
                <h2 class="animation">Login ^_~</h2>

                <div class="input-box ">
                    <input type="text" name="userNameorEmail" value="<?php echo $_POST["userNameorEmail"] ?>">
                    <label>userNameorEmail</label>
                    <i class='bx bxs-user'></i>

                </div>
                <div class="input-box ">
                    <input type="password" name="password" value="<?php echo $_POST["password"] ?>">
                    <label>password</label>
                    <i class='bx bxs-lock-alt'></i>

                </div>


                <button type="submit" class="btn" style="color: aliceblue; text-decoration:none ;">
                    Login
                </button>
                <div class="logreg-link">
                    <p>Don't have an account? <a href="signup.html" class="register-link">Sign Up</a></p>
                </div>
    </form>
    </div>
    <div class="info-text login">
        <h2>Welcome Back!!!<br>😉😉😉😉 </h2>
        <p>pls login and 4 top best experience, sit back n chill, stress no more</p>
    </div>

    <!-- <script src="login.js"></script> -->

</body>

</html>
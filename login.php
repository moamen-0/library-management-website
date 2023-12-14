<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/login_style.css">
    <title>Login</title>
</head>
<body>

    <div class="box">
        <div class="container">
            <div class="top-header">
                <a href="join.php"><span>Have an account?</span></a>
                <header>Login</header>
            </div>

            <form action="login_post.php" method="post">
            <div class="input-field">
                <input type="text" class="input" name="email" placeholder="Email" required>
                <i class="bx bx-user"></i>
            </div>
            <div class="input-field">
            <?php

            if(isset($password_error)){
              echo $password_error;
                }


                ?>
                <input type="password" class="input" name="password"placeholder="Password" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">
                <input type="submit" class="submit" name="submit" id="submit" value="Login">
            </div>
            <div class="bottom">
                <div class="left">
                    <input type="checkbox"  id="check">
                    <label for="check"> Remember Me</label>
                </div>
                <div class="right">
                    <label><a href="#">Forgot password?</a></label>
                </div>
            </div>
        </div>
    </div>

    </form>



    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
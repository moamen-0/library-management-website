<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <link rel="icon" href="">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/join_style.css">
    <title>Join Us</title>
</head>
<body>
    
    <div class="box">
        <div class="container">
            <div class="top-header">
                <span>Creat a new account</span>
                <header>Join us</header>
            </div>

           <form action="join_post.php" method="post">
           



            <div class="input-field">
                <?php

                if(isset($f_name_error)){
                    echo $f_name_error;
                }
                
                
                ?>
    
                <input type="text" name="f_name" class="input" placeholder="First Name" required>
                <i class="bx bx-user"></i>
            </div>

            <div class="input-field">


                <input type="text" name="last_name" class="input" placeholder="last Name" required>
                <i class="bx bx-user"></i>
            </div>

            <div class="input-field">


                <input type="email"  name="E_mail" class="input" placeholder="Enter the Email" required>
                <i class="bx bx-lock-alt"></i>
            </div>
            <div class="input-field">

                <?php

            if(isset($password_error)){
                echo $password_error;
            }
            
            
            ?>
                <input type="password" name="password" class="input" placeholder="Password" >
                <i class="bx bx-lock-alt"></i>
            </div>

            <div class="input-field">
                  <a href="login.php"> <input type="submit" class="submit" id="submit" name="submit" value="Join us"></a>
            </div>
       
       
       
        </form>

            <div class="bottom">
               
                <div class="left">
                    <label><a href="login.php">Login</a></label>
                </div>
            </div>
        </div>
    </div>

   


    <script src="js/bootstrap.bundle.min.js"></script>
</body>
</html>
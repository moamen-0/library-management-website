<?php
session_start(); 
include('inc/connection.php');
if(isset($_POST['submit'])){
    function validate($data){

        $data = trim($data);
 
        $data = stripslashes($data);
 
        $data = htmlspecialchars($data);
 
        return $data;
 
     }
    $E_mail=stripcslashes(strtolower($_POST['email']));
    $password=stripcslashes(strtolower($_POST['password']));
    $E_mail=htmlentities(mysqli_real_escape_string($conn,$_POST['email']));
    $password=htmlentities(mysqli_real_escape_string($conn,$_POST['password']));

    $E_mail=validate($_POST['email']);
    $password=validate($_POST['password']);
    // $check_user="select * from `users` WERE f_name='$f_name'";
    // $check_result=mysqli_query($conn,$check_user);
    // $num_rows=mysqli_num_rows($check_result);
    // if($num_rows !=0){
    //     $user_error="<p>sorry username alredy exist</p> <br>";
    //     $err_s=1;

    // }






    if (empty($E_mail)) {

        header("Location: index.php?error=email error");

        exit();

    }else if(empty($password)){

        header("Location: index.php?error=Password error");

        exit();

    }else{

        $sql = "SELECT * FROM users WHERE email='$E_mail' AND password='$password'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {

            $row = mysqli_fetch_assoc($result);

            if ($row['email'] === $E_mail && $row['password'] === $password) {

                echo "Logged in!";

                $_SESSION['email'] = $row['email'];

                $_SESSION['firstname'] = $row['firstname'];
                header("Location: afterlogin.php?login succesfully");

                exit();

            }else{

                header("Location: index.php?error=Incorect email or password");

                exit();

            }

        }else{

            header("Location: index.php?error=Incorect email or password");

            exit();

        }

    }

}else{

    header("Location: index.php");

    exit();

}







?>
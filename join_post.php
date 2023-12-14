<?php

include('inc/connection.php');
if(isset($_POST['submit'])){
    $f_name=stripcslashes(strtolower( $_POST['f_name']));
    $last_name=stripcslashes(strtolower($_POST['last_name']));
    $E_mail=stripcslashes(strtolower($_POST['E_mail']));
    $password=stripcslashes(strtolower($_POST['password']));
    $f_name=htmlentities(mysqli_real_escape_string($conn,$_POST['f_name']));
    $last_name=htmlentities(mysqli_real_escape_string($conn,$_POST['last_name']));
    $E_mail=htmlentities(mysqli_real_escape_string($conn,$_POST['E_mail']));
    $password=htmlentities(mysqli_real_escape_string($conn,$_POST['password']));


    // $check_user="select * from `users` WERE f_name='$f_name'";
    // $check_result=mysqli_query($conn,$check_user);
    // $num_rows=mysqli_num_rows($check_result);
    // if($num_rows !=0){
    //     $user_error="<p>sorry username alredy exist</p> <br>";
    //     $err_s=1;

    // }






    if(empty($f_name)){
        $f_name_error='pleas enter first name <br>';
        $err_s=1;
    }
    elseif(filter_var($f_name,FILTER_VALIDATE_INT)){
        $f_name_error='pleas enter a valid first name not a number';
        $err_s=1;

    }
    elseif(empty($last_name)){
        $last_name_error='pleas enter last name <br>';
        $err_s=1;
    }
    elseif(filter_var($last_name,FILTER_VALIDATE_INT)){
        $last_name_error='pleas enter a valid first name not a number';
        $err_s=1;

    }
    elseif(empty($password)){
        $password_error='pleas enter password <br>';
        $err_s=1;
        include('join.html');
    }
    elseif(strlen($password)<6){
        $password_error='your password is minimum of 6 letter <br>';
        $err_s=1;
        include('join.html');
    }
    else{
        if($err_s==0){
            $sql="INSERT INTO users(firstname,lastname,email,password)
             VALUES('$f_name','$last_name','$E_mail','$password')";
             mysqli_query($conn,$sql);
             header('location:index.php');
        }
        else{
            include('join.php');
        }


    }







}


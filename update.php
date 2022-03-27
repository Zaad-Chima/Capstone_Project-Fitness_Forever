<?php
    $con = mysqli_connect('localhost','root','','capstone_project_database');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check = mysqli_query($con,"UPDATE user_details SET password = '$password' WHERE email = '$email'");

    if($check > 0){
        echo "Password successfully changed.";
    }
    else{
        echo "Error.";
    }
?>
<?php
    $con = mysqli_connect('localhost','root','','capstone_project_database');
    
    $email = $_POST['email'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM user_details WHERE email = '$email' and password = '$password'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        echo "Sign in successful.";
    }
    else{
        echo "Sign in failed.";
    }
?>
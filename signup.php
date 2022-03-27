<?php
    $con = mysqli_connect('localhost','root','','capstone_project_database');
    
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $check_data = mysqli_query($con,"SELECT * FROM user_details WHERE email = 
    '$email'");
    $check = mysqli_num_rows($check_data);

    if($check > 0){
        echo "Email already exists.";
    }
    else{
        $input = mysqli_query($con,"INSERT INTO user_details (email,username,password) VALUES ('$email','$username','$password')");
        if($input){
            echo "Sign up successful.";
        }
    }
?>
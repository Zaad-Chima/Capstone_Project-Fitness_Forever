<?php
    $con = mysqli_connect('localhost','root','','capstone_project_database');

    $email = $_POST['email'];
    $password = $_POST['password'];
​
    $check = mysqli_query($con,"DELETE FROM user_details WHERE email = '$email' and password = '$password'");
    
    if($check > 0){
        echo "Account Deleted.";
    }else{
        echo "Error.";
    }
​
?>
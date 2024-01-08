<?php
    include 'config.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile_number = $_POST['mobile_number'];
    $password = $_POST['password'];
    

    $sql = "INSERT INTO users (name, email, mobile_number, password) VALUES ('$name','$email','$mobile_number','$password')";

    if ($arr->query($sql) === TRUE) {
        header("Location: index.php");
        exit;
    } else {
        echo "Error: " . $sql . "<br>" . $arr->error;
    }

    $arr->close();

    
?>
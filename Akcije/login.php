<?php
    require 'connection.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";

    $query = mysqli_query($db,$sql);

    $answer = mysqli_fetch_assoc($query);

    if($answer){
        session_start();
        $_SESSION['id'] = $answer['id'];
        $_SESSION['name'] = $answer['name'];
        $_SESSION['role'] = $answer['role'];
        $_SESSION['email'] = $answer['email'];
        $_SESSION['image'] = $answer['image'];

        header("Location: ../index.php");
    }else{
        session_start();
        $_SESSION['login_error'] = 'Pogresno ste unijeli email ili password!';
        header("Location: ../login.view.php");
    }




?>
<?php
    require 'connection.php';
    session_start();
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $user_id = $_SESSION['id'];

    $date = date('y-m-d');
    $title = $_POST['title'];
    $description = $_POST['description'];
    $text = $_POST['text'];


    $sql = "INSERT INTO news VALUES (NULL,'$name','$email','$date','$title','$description','$text','$user_id')";
    $query = mysqli_query($db,$sql);
    
           header("Location: ../news.view.php"); 

    // if(isset($query)){
    //     header("Location: ../news.view.php"); 
    // }
           
    

    // echo '<pre>';
    //     var_dump($sql);
    // echo '</pre>';
?>
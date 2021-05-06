<?php
    require 'connection.php';

    // $email = $_POST['email'];
    // $check_email = "SELECT * FROM subscribers WHERE email='$email'";
    // $check_result = mysqli_query($db,$check_email);
    // if(mysqli_num_rows($check_email)==0){
    //     session_start();

    //     $_SESSION['subscribe'] = 'Uspješno ste se pretplatili na naš kanal. Mejlovima ćemo Vas obavještavati o svim događajima.';
    
    //     $email = $_POST['email'];
    
    //     $date = date('y-m-d');
    //     echo $date;
    //     $sql = "INSERT INTO subscribers VALUES (null,'$email','$date')";
    //     $result = mysqli_query($db,$sql);
    
    //     header("Location: ../index.php");
    // }else{
    //     echo 'error';
    // }


    $email = $_POST['email'];
    $check_email = "SELECT * FROM subscribers WHERE mail='$email'";
    $check_query = mysqli_query($db,$check_email);
    $check_result = mysqli_fetch_assoc($check_query);
    $num_rows = mysqli_num_rows($check_query);

    // echo '<pre>';
    //     // var_dump($num_rows);
    //     echo $num_rows;
    // echo '</pre>';
    if($num_rows==0){
        session_start();
        $date = date('y-m-d');
        $sql = "INSERT INTO subscribers VALUES (NULL,'$email','$date')";
        $query = mysqli_query($db,$sql);

        $_SESSION['subscribe'] = 'Uspješno ste se pretplatili na naš kanal. Mejlovima ćemo Vas obavještavati o svim događajima.';
        header("Location: ../index.php");
    }else{
        session_start();
        $_SESSION['subscribe_exists'] = 'Korisnik sa upisanim mejlom je već pretplaćen.';
        header("Location: ../index.php");
    }



?>
<?php
    require 'connection.php';

    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $date = date('y-m-d');

    $exist_sql = "SELECT * FROM users WHERE email='$email'";
    $exist_query = mysqli_query($db,$exist_sql);
    $result = mysqli_fetch_assoc($exist_query);

    // echo '<pre>';
    // var_dump($result['name']);
    // echo '</pre>';

    if(!$result){
        $sql = "INSERT INTO users VALUES (NULL,'$name','$email','$password','$date',0,'default.jpg')";
        $query = mysqli_query($db,$sql);
        var_dump($query);

        if($query){
            header("Location: ../login.view.php");
        }else {
            echo "error";
            echo $name;
        }
    }else{
        echo '<div class="jumbotron bg-grey">
                <h1>Korisnik sa unijetim mejlom već postoji! </h1>
            </div>';
    }


?>
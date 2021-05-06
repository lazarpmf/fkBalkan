<?php 
    require 'connection.php';
    require '../partials/header.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $question = $_POST['question'];
        $date = date('y-m-d');

        $sql = "INSERT INTO questions VALUES (NULL,'$name','$email','$question','$date')";
        $query = mysqli_query($db,$sql);

        if(!$query){
            echo 'error';
        }else{
            session_start();
            $_SESSION['message'] = 'Poruka poslata.';
             header('Location: ../index.php');
        }
    }else{
        header('Location: ../index.php');       // redirects if someone tries to access sendquestion.php 
                                                // without submiting
    }



    //require '../partials/footer.php';
?>
<?php 
    require '../partials/header.php';
    require 'connection.php';

    echo '<br>';
    echo '<br>';

    $new_name = $_POST['name'];
    $new_email = $_POST['email'];
    $id = $_SESSION['id'];
    // check if file is uploaded
    echo $_FILES['image']['name'];
    echo '<br>';
    // $new_image = $_POST['image'];
    echo $new_email;
    echo '<br>';
    echo $new_name;
    echo '<br>';
    echo $_SESSION['id'];
    echo '<br>';
    $old_image = $_SESSION['image'];
    echo $old_image;
    echo '<br>';

    $dir_name = '../Slike/';
    $image_name = $_SESSION['id']."_".$_FILES['image']['name'];     // Zbog cuvanja memorije, bolja je ideja
                                                                    // da se cuva kao "id_imeKorisnika_formatSlike"
    $image_path = $dir_name.$image_name;
    echo $image_path;
    if(move_uploaded_file($_FILES['image']['tmp_name'],$image_path)){
        $sql = "UPDATE users SET name='$new_name', email='$new_email', image='$image_name' WHERE id='$id'";
        mysqli_query($db,$sql);
        $_SESSION['name'] = $new_name;
        $_SESSION['email'] = $new_email;
        $_SESSION['image'] = $image_name;
        header("Location: ../profile.view.php");
    }else{
        $sql = "UPDATE users SET name='$new_name', email='$new_email', image='$old_image' WHERE id='$id'";
        mysqli_query($db,$sql);
        $_SESSION['name'] = $new_name;
        $_SESSION['email'] = $new_email;
        $_SESSION['image'] = $old_image;
       header("Location: ../profile.view.php");
    }
?>

<?php
    require 'partials/header.php';      //session started
    require 'Akcije/connection.php';


    $id = $_GET['id'];
    $sql = "SELECT * FROM news WHERE id=$id";
    $query = mysqli_query($db,$sql);
    $result = mysqli_fetch_assoc($query);

    if(!$result){
        header("Location: index.php");
    }

?>

<br>
<div class="container mt-5">
    <div class="row">
        <div class="col-md-3"><?php echo $result['date']; ?> <div>autor: <?php echo $result['name'] ?></div></div>
        <div class="col-md-6 text-center"><h1> <?php echo $result['title']; ?></h1></div>
        <div class="col-md-3 text-center"><a href="news.view.php" class="btn btn-success">Nazad</a></div>
    </div>
    <hr>
    <h3><?php echo $result['description']; ?></h3>
    <hr>
    <p><?php echo $result['text'] ?></p>

</div>

<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FK Balkan</title>
    <!-- Bootstrap links -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous" defer></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous" defer></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous" defer></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Custom styles -->
    <link rel="stylesheet" href="Stil/index.css">
    <!-- Sweet alert -->
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="20">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top mb-5">
  <a class="navbar-brand" href="index.php">FK BALKAN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php#about">O nama <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php#results">Rezultati</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.view.php" tabindex="-1">Najnovije vijesti</a>
      </li>
    </ul>
    <!-- login or logged -->
    <?php
        if(isset($_SESSION['id']) && isset($_SESSION['role']) && $_SESSION['role']==1){
          echo '<a class="nav-link text-light" href="contact.view.php">Admin Panel</a>
          <a class="nav-link text-light" href="profile.view.php">'.$_SESSION['name'].'</a>
          <a class="nav-link text-light" href="Akcije/logout.php">Logout</a>';
        }elseif(isset($_SESSION['id']) && $_SESSION['role']!==1){
          echo '<a class="nav-link text-light" href="profile.view.php">'.$_SESSION['name'].'</a>
          <a class="nav-link text-light" href="Akcije/logout.php">Logout</a>';
        }else{
          echo '<a class="nav-link text-light" href="login.view.php">Logovanje</a>
          <a class="nav-link text-light" href="register.view.php">Registracija</a>';
        }
    ?>

    <!-- <a class="nav-link text-light" href="login.view.php">Logovanje</a>
    <a class="nav-link text-light" href="register.view.php">Registracija</a> -->
  </div>
</nav>
<br>
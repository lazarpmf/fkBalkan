<?php
    require 'partials/header.php';
?>

    <br>
    <h1 class="text-center mt-5">Ulogujte se!</h1>
    <img class="img-fluid img-thumbnail mx-auto d-block" src="Slike/europe.jpg" width="200px">

    

<div class="container mt-5 mb-5">
<!-- Login error message -->
<?php
        if(isset($_SESSION['login_error'])){
            echo '<div class="alert alert-danger alert-dismissible mt-5 fade show text-center">
            <p>Mejl ili lozinka netačni. Pokušajte ponovo.</p>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>';
        }
        unset($_SESSION['login_error']);
    ?>

    <form class="form-group" action="Akcije/login.php" method="post">
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>
        <label for="password">Lozinka:</label>
        <input type="password" name="password" class="form-control" required>
        <button type="submit" class="btn btn-info btn-block mt-3">Potvrdi</button>
    </form>
</div>

<?php
    require 'partials/footer.php';
?>
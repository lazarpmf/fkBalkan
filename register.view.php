<?php
    require 'partials/header.php';
?>

    <br>
    <h1 class="text-center mt-5">Ulogujte se!</h1>
    <img class="img-fluid img-thumbnail mx-auto d-block" src="Slike/europe.jpg" width="200px">

<div class="container mt-5 mb-5">
    <form class="form-group" action="Akcije/register.php" method="post">
        <label for="name">Ime:</label>
        <input type="text" name="name" class="form-control" required>
        <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" required>
        <label for="password">Lozinka:</label>
        <input type="password" name="password" class="form-control" required>
        <button type="submit" class="btn btn-primary btn-block mt-3">Potvrdi</button>
    </form>
</div>

<?php
    require 'partials/footer.php';
?>
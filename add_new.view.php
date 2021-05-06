<?php
    require 'partials/header.php';
    if(!isset($_SESSION['id'])){
        header("Location: index.php");
    }
?>
<br>
<br>

<div class="container">
<h1>Dodati novu vijest:</h1>
<small>Neki simboli, poput ' nisu dozvoljeni. Da biste ih dodali, ukucajte \' .</small>
<small>https://stackoverflow.com/questions/39747895/phpmysql-cannot-insert-text-contains-apostrophe</small>
<form method="post" action="Akcije/add_new.php" class="form-group">
    <label for="title">Naslov vijesti:</label>
    <input class="form-control" type="text" name="title" required>
    <label for="description">Opis vijesti:</label>
    <input class="form-control" type="text" name="description" required>
    <label for="text">Tekst vijesti</label>
    <textarea class="form-control" type="text" name="text" required></textarea>
    <button class="btn btn-info btn-block mt-3" name="submit" type="submit">Postavi vijest</button>
</form>
</div>

<?php
    require 'partials/footer.php';

?>
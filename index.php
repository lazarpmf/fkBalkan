<?php
require 'partials/header.php';


?>
    <!-- Jumbotron -->
    <div class="jumbotron jumbotron-fluid text-center bg-info">
    <?php 
        if(isset($_SESSION['message'])){
            $message = $_SESSION['message'];
            echo '<div class="alert alert-success alert-dismissible mt-5 fade show">
            <p>Uspješno ste se poslali poruku. Uskoro ćete dobiti mejl sa odgovorom.</p>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>';
            unset($_SESSION['message']);
        }
    ?>
    <h1>FK Balkan</h1> 
    <p>Pretplati se i budi uvijek u toku!</p> 
    <form class="form-group" method="post" action="Akcije/subscribe.php" >
        <div class="input-group">
        <input type="email" class="form-control" name="email" size="50" placeholder="Email" required>
        <div class="input-group-btn">
            <button type="submit" name="submit" class="btn btn-danger">Potvrdi</button>
        </div>
        </div>
    </form>
    <?php
        //session_start();
        if(isset($_SESSION['subscribe'])){
            echo '<div class="alert alert-success alert-dismissible mt-5 fade show">
            <p>Uspješno ste se pretplatili na naš kanal. Mejlovima ćemo Vas obavještavati o svim događajima.</p>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>';
        unset($_SESSION['subscribe']);
        }elseif(isset($_SESSION['subscribe_exists'])){
            echo '<div class="alert alert-danger alert-dismissible mt-5 fade show">
            <p>Korisnik sa upisanim mejlom je već pretplaćen.</p>
            <button class="close" data-dismiss="alert">&times;</button>
        </div>';
        unset($_SESSION['subscribe_exists']);
        }else{

        }
    ?>
    </div>

<!-- About company -->
    <div class="container-fluid" id="about">
        <div class="row">
            <div class="col-sm-8">
                <h2>O nama:</h2>
                <p>FK Balkan je osnovan 2021. godine u Beranama. Klub vode bivši igrači iz grada na Limu i cilj je da se napravi stabilan prvoligaški klub u narednih 7 godina. Klub će imati sve kategorije od petlića do prvog tima, a takmičenje u ligama će početi 2022. godine.</p>
                <p>Ozbiljan rad i pristup na svakom treningu je garantovan. Igrači imaju neophodne uslove u sklopu SC "Berane", sa kojima imamo odličnu saradnju.</p>
            </div>
            <div class="col-sm-4 mt-4">
                <img src="Slike/stadion.png" alt="Stadion" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container-fluid bg-grey" id="results">
        <div class="row">
            <div class="col-sm-8">
                <h2>Dosadašnji uspjeh:</h2>
                <p>Da smo na dobrom putu, govore naši dosadašnji nastupi na turnirima. </p>
                <ul class="list-group mb-2">
                    <li class="list-group-item">Šampioni države 2021. <i id="goldmedals" class="fas fa-medal"></i></li>
                    <li class="list-group-item">Vicešampioni Kupa 2021. <i id="silvermedals" class="fas fa-medal"></i></li>
                </ul>
            </div>
            <div class="col-sm-4">
                <i id="signal" class="fas fa-signal"></i>
            </div>
        </div>
    </div>
</body>

<!-- Contact -->
<!-- Ideja je da ADMIN moze da vidi sve poruke na jednoj stranici i da moze da odgovori putem mejla -->

<div class="container mt-2">
    <h1>Kontaktirajte nas!</h1>
    <form class="form" action="Akcije/sendquestion.php" method="post">
        <div class="row">
            <div class="col"><label for="name">Vaše ime:</label><input type="text" name="name" class="form-control" required></div>
            <div class="col"><label for="email">Vaša mejl adresa:</label><input class="form-control" type="email" name="email" required></div>
        </div>
        <div class="form-group"><label for="question">Vaše pitanje:</label><textarea name="question" class="form-control" required></textarea></div>
        <button type="submit" name="submit" class="btn btn-primary btn-block mb-3">Poslati</button>
    </form>
</div>

<!-- Mapa -->


<div class="container">
<hr>
<h1>Naše kancelarije:</h1>
<div class="mapouter">
    <div class="gmap_canvas">
        <iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=Niksicka%2048,%20Podgorica&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a>
        <br>
            <style>.mapouter{position:relative;text-align:right;height:100%;width:100%;}</style>
            <a href="https://www.embedgooglemap.net">how to add a map to wordpress</a>
            <style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style>
        </div>
    </div>
</div>

<!-- footer -->

<?php 
    require 'partials/footer.php';
?>
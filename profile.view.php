<?php
    require 'partials/header.php';
?>
<script defer>
    $('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
<br>
<br>
<div class="container mt-5">
<div class="row">
<div class="col-md-6">
    <h1 class="mb-3">Moj profil</h1>
    <hr>
    <img class="img-fluid w-25 img-thumbnail" src="<?php echo 'Slike/'.$_SESSION['image']; ?>" alt="profile_picture">
    <h4>Ime: <span><?php echo $_SESSION['name']; ?></span></h4>
    <h4>Email: <span><?php echo $_SESSION['email']; ?></span></h4>
    <hr>
    </div>
<div class="col-md-6">

<!-- modal -->
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary mt-2" data-toggle="modal" data-target="#exampleModal">
  Izmijeni profil
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Izmjene profila</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="Akcije/edit.profile.php" method="post" enctype="multipart/form-data">
                <label for="name">Ime: </label>
                <input type="text" name="name" class="form-control" value="<?php echo $_SESSION['name']; ?>" required>
                <label for="email">Email: </label>
                <input type="email" name="email" class="form-control" value="<?php echo $_SESSION['email']; ?>" required>
                <label for="image">Profilna slika: </label>
                <input type="file" name="image" class="form-control" value="<?php echo $_SESSION['image']; ?>">
                <button type="submit" class="btn btn-success btn-block mt-2">Potvrdi</button>
            </form>
      </div>
    </div>
  </div>
</div>

</div>
    </div>
</div>


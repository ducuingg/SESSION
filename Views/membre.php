<div class="container col-5 mt-5 border border-primary  rounded p-3 shadow">
<form action="" method="POST">
<div class="mb-3 row">
    <label for="username" class="col-sm-2 col-form-label">Identifiant</label>
    <div class="col-sm-10">
      <input type="text" readonly class="form-control-plaintext" id="username" value="<?php echo $co->username; ?>">
    </div>
  </div>
  <div class="mb-3">
  <label for="email" readonly class="form-control-plaintext">Email</label>
  <input type="text" class="form-control" id="email" >
</div>
<div class="mb-3">
  <label for="nom" class="form-label">Nom</label>
  <input type="text" class="form-control" id="formGroupExampleInput">
</div>
<div class="mb-3">
  <label for="prenom" class="form-label">Prénom</label>
  <input type="text" class="form-control" id="prenom" >
</div>
<div class="mb-3">
  <label for="adresse" class="form-label">Adresse</label>
  <input type="text" class="form-control" id="prenom" >
</div>
<div class="mb-3">
<button type="submit" class="btn btn-primary">Enregistrer</button>
</div>
</form>
</div>
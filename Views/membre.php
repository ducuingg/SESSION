<h5 class="btn btn-info mt-3">Espace Membre</h5>
<div class="container col-5 mt-5 border border-info  rounded p-3 shadow">
<form action="#" method="POST">
<div class="mb-3">
  <label for="username"class="form-label">Identifiant</label>
  <input type="text" class="form-control" id="username" name="username" readonly value="<?php echo $_SESSION['username']; ?>" >
</div>
  <div class="mb-3">
  <label for="email" class="form-label">Email</label>
  <input type="email" class="form-control" id="email" name="email" value="<?php echo $update->email; ?>" >
</div>
<div class="mb-3">
  <label for="nom" class="form-label">Nom</label>
  <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $update->nom; ?>">
</div>
<div class="mb-3">
  <label for="prenom" class="form-label">Prénom</label>
  <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $update->prenom; ?>" >
</div>
<div class="mb-3">
  <label for="adresse" class="form-label">Adresse</label>
  <input type="text" class="form-control" id="adresse" name="adresse" value="<?php echo $update->adresse; ?>" >
</div>
<div class="mb-3">
<button type="submit" name="action" id="action"class="btn btn-info">Enregistrer</button>
<button name="delete" id="delete"class="btn btn-danger">
  <?php echo "<a href='index.php?controller=membre&action=delete&id=".$_SESSION['id']."'</a>";?>
    Supprimer mon compte</button>

</div>
</form>
</div>
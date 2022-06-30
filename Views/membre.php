<h5><center>Espace Membre</center></h5>
<div class="container col-5 mt-5 border border-primary  rounded p-3 shadow">
<form action="index.php?controller=membre&action=update" method="POST">
<div class="mb-3">
  <label for="username"class="form-control-plaintext">Identifiant</label>
  <input type="text" class="form-control" id="username" name="username" readonly value="<?php echo $_SESSION['username']; ?>" >
</div>
  <div class="mb-3">
  <label for="email" readonly class="form-control-plaintext">Email</label>
  <input type="text" class="form-control" id="email" name="email" value="<?php echo $update->email; ?>" >
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
  <label for="mdp"class="form-control-plaintext">Mot de passe</label>
  <input type="text" class="form-control" id="mdp" name="mdp" readonly value="<?php echo $_SESSION['mdp']; ?>" >
</div>
<div class="mb-3">
<button type="submit" name="action" id="action"class="btn btn-primary">Enregistrer</button>
</div>
</form>
</div>
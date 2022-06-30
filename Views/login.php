<form action="index.php?controller=membre&action=connexion" method="POST">
  <div class="container mt-5 col-3 border border-primary  rounded p-3 shadow">
  <div class="mt-3 m-auto">
    <label for="exampleInputEmail1" class="form-label">Identifiant</label>
    <input type="text" class="form-control" name="username" id="username" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Ne partagez jamais vos identifiants.</div>
  </div>
  <div class="mt-3 m-auto">
    <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" name="mdp" id="mdp">
  </div>
  <div class="mt-3 m-auto form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Rester connecté</label>
  </div>
  <div class="mt-3 m-auto">
  <button type="submit" name="connexion" id="connexion" class="btn btn-primary">Me connecter</button>
</form>
<p class="mt-3"> Pas encore de compte ?<a href="index.php?controller=inscription&action=creation"> Je crée mon compte</a>
</div>
</div>
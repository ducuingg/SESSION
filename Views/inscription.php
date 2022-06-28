<div class= 'container mt-5'>
    <form class='col-3 m-auto bg-warning rounded p-3 shadow' action='' method='POST'>
        <legend> Formulaire d'inscription</legend>
            <div class='form-group'>
                    <input type='hidden' class='form-control' name='id' id='id'  readonly>
                        </div>
            <div class='form-group'>
                <label for='nom'>Nom</label>
                    <input type='text' class='form-control' name='nom' id='nom'  required>
                        </div>
            <div class='form-group'>
                <label for='prenom'>Prénom</label>
                    <input type='text' class='form-control' name='prenom' id='prenom' required>
                        </div>
            <div class='form-group'>
                <label for='adresse'>Adresse</label>
                    <input type='text' class='form-control' name='adresse' id='adresse'  required>
                        </div>
            <div class='form-group'>
                <label for='codepostal'>Code postal</label>
                    <input type='text' class='form-control' name='codepostal' id='codepostal'required>
                        </div>
            <div class='form-group'>
                <label for='ville'>Ville</label>
                    <input type='text' class='form-control' name='ville' id='ville' required>
                        </div>
                        <div class='form-group'>
                <label for='telephone'>Téléphone</label>
                    <input type='text' class='form-control' name='telephone' id='telephone' required>
                        </div>
                        <div class='form-group'>
                <label for='email'>Email</label>
                    <input type='text' class='form-control' name='email' id='email' required>
                        </div>
  
            <div class='form-group pt-3'>
                <button type='submit' class='btn btn-light text-dark' name='action' id='action' >Inscription</button>
                        </div>
    </form>
</div>
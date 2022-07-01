<?php

namespace App\Controllers;

use App\Controllers\Controller as Cont;
use App\Entities\InscriptionEntities;
use App\Models\InscriptionModel;

ini_set('display_errors', 1);
error_reporting(E_ALL);

class InscriptionController extends Cont
{
    public function creation()
    {
        $this->render('inscription');
    }

    public function inscription(){
        $inscription = new InscriptionModel();
        $inscript = new InscriptionEntities();
        if(isset($_POST['action'])){
        $inscript->setUsername($_POST['username']);
        $inscript->setEmail($_POST['email']);
        $inscript->setMdp(password_hash($_POST['mdp'],PASSWORD_DEFAULT));
        $inscription->inscription($inscript);
        header('location:index.php');
        }
    }
}